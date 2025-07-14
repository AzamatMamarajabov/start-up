<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\CategoryType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
        public function index()
        {
            $products = Product::with('categoryType')->latest()->paginate(10); // 10 ta per page
            return view('admin.products.list', compact('products'));
        }


    public function create()
    {
        $categoryTypes = CategoryType::all();
        return view('admin.products.create', compact('categoryTypes'));
    }

   public function store(Request $request)
    {
        $request->validate([
            'category_type_id' => 'required|exists:category_types,id',
            'title_uz' => 'required|string|max:255',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'file' => 'nullable|file|max:10240',
        ]);

        $data = $request->only([
            'category_type_id', 'title_uz', 'title_en', 'title_ru',
            'text_uz', 'text_en', 'text_ru', 'product_type', 'type'
        ]);

        // Fayl
        if ($request->hasFile('file')) {
            $data['file'] = $request->file('file')->store('products/files', 'public');
        }

        // Rasmlar
        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePaths[] = $image->store('products/images', 'public');
            }
        }
        $data['images'] = json_encode($imagePaths); // Must be cast as array in model

        Product::create($data);
        return redirect()->route('products.create')->with('success', 'Mahsulot muvaffaqiyatli qo‘shildi');
    }

    public function edit($id)
{
    $product = Product::findOrFail($id);
    $categoryTypes = CategoryType::all();

    return view('admin.products.edit', compact('product', 'categoryTypes'));
}

public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $request->validate([
        'category_type_id' => 'required|exists:category_types,id',
        'title_uz' => 'required|string|max:255',
        'images.*' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        'file' => 'nullable|file|max:10240',
    ]);

    $data = $request->only([
        'category_type_id', 'title_uz', 'title_en', 'title_ru',
        'text_uz', 'text_en', 'text_ru', 'product_type', 'type'
    ]);

    // Rasmlar
    if ($request->hasFile('images')) {
        // Eski rasmlarni o'chirish
        $images = is_string($product->images) ? json_decode($product->images, true) : ($product->images ?? []);
        foreach ($images as $img) {
            Storage::disk('public')->delete($img);
        }

        // Yangi rasmlarni yuklash
        $imagePaths = [];
        foreach ($request->file('images') as $image) {
            $imagePaths[] = $image->store('products/images', 'public');
        }
        $data['images'] = $imagePaths;
    }

    // Fayl
    if ($request->hasFile('file')) {
        if ($product->file) {
            Storage::disk('public')->delete($product->file);
        }
        $data['file'] = $request->file('file')->store('products/files', 'public');
    }

    $product->update($data);

    return redirect()->route('products.index')->with('success', 'Mahsulot yangilandi');
}



    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        foreach ($product->images ?? [] as $img) {
            Storage::disk('public')->delete($img);
        }
        if ($product->file) {
            Storage::disk('public')->delete($product->file);
        }
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Mahsulot o‘chirildi');
    }
}
