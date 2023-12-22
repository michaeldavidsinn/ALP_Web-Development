<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){

            $category = Category::where('categories_name' , 'LIKE', '%'.$request->search.'%')->paginate(5)->withQueryString();
        } else {
            $category = Category::paginate(3);
        }


        return view('view_category', [

            "category" => $category,
        ]);
    }

    public function show(Category $category)
    {
        $category->load('products');

        return view('showcategory', [
            'category' => $category
        ]);
    }

    public function create(){

        $category = Category::all();
        return view('create_category', compact('category'));
    }

    public function store(Request $request){


        $validatedData = $request->validate([
            'categories_name' => 'required'
        ]);

        Category::create([

            'categories_name' => $validatedData['categories_name']
        ]);

        return redirect()->route('adminview_category');
    }

    public function edit(Category $category)
{
    $categoryEdit = Category::where('id', $category->id)->first();

    return view('edit_category', compact('categoryEdit'));
}

   public function update(Request $request, Category $category)
   {

    $category->update([
        'categories_name' => $request->categories_name
    ]);

    return redirect()->route('adminview_category');
   }

   public function destroy(Category $category){

    $category->delete();

    return redirect()->route('adminview_category');
   }
}
