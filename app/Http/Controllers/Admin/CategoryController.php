<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.list', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_uz' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
        ]);

        $data = $request->only(['title_uz', 'title_en', 'title_ru','icon']);
        


        Category::create($data);

        return redirect()->route('categories.index')->with('success', 'Kategoriya muvaffaqiyatli qo‘shildi!');
    }


    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'title_uz' => 'required|string|max:255',
            'title_en' => 'nullable|string|max:255',
            'title_ru' => 'nullable|string|max:255',
            'icon' => 'required|string|max:255',
        ]);

        $data = $request->only(['title_uz', 'title_en', 'title_ru','icon']);

       
   
        $category->update($data);

        return redirect()->route('categories.index')->with('success', 'Kategoriya muvaffaqiyatli yangilandi!');
    }


    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
