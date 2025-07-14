<?php



namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; // <-- BU QATORNI QO‘SHISH SHART!
use App\Models\Category;
use App\Models\CategoryType;
use Illuminate\Http\Request;

class CategoryTypeController extends Controller
{

    public function index()
    {
        $types = CategoryType::with('category')->get(); // 'category' — belongsTo orqali
        return view('admin.category_types.list', compact('types'));
    }

    public function create() {
        $categories = Category::all();
        return view('admin.category_types.create', compact('categories'));
    }

    public function store(Request $request) {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title_uz' => 'required|string|max:255',
            'title_en' => 'nullable|string|max:255',
            'title_ru' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $data = $request->only(['category_id', 'title_uz', 'title_en', 'title_ru']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('category_types', 'public');
        }

        CategoryType::create($data);

        return redirect()->route('category_types.index')->with('success', 'Kategoriya turi muvaffaqiyatli qo‘shildi!');
    }


     public function edit($id)
    {
        $categorytype = CategoryType::findOrFail($id);
        $categories = Category::all(); // kerak bo‘lgan barcha categorylar
        return view('admin.category_types.edit', compact('categorytype', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $categorytype = CategoryType::findOrFail($id);

        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title_uz' => 'required|string|max:255',
            'title_en' => 'nullable|string|max:255',
            'title_ru' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $data = $request->only(['category_id', 'title_uz', 'title_en', 'title_ru']);

        // Yangi rasm yuklangan bo‘lsa
        if ($request->hasFile('image')) {
            // Eski rasmni o‘chir
            if ($categorytype->image && \Storage::disk('public')->exists($categorytype->image)) {
                \Storage::disk('public')->delete($categorytype->image);
            }

            // Yangi rasmni saqla
            $data['image'] = $request->file('image')->store('category_types', 'public');
        }

        $categorytype->update($data);

        return redirect()->route('category_types.index')->with('success', 'Kategoriya type muvaffaqiyatli yangilandi!');
    }



    public function destroy($id)
    {
        $categorytype = CategoryType::findOrFail($id);
        $categorytype->delete();
        return redirect()->route('category_types.index')->with('success', 'Category deleted successfully.');
    }
}
