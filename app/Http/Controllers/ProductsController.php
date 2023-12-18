<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){

            $products = Products::where('name' , 'LIKE', '%'.$request->search.'%')->paginate(5)->withQueryString();
        } else {
            $products = Products::paginate(2);
        }


        return view('view_products', [

            "productss" => $products,
        ]);
    }

    public function show(Products $products)
{
    return view('showproducts', [
        'productsss' => $products
    ]);
}

    public function create(){

        $categories = Category::all();
        $brands = Brand::all();
        $products = Products::all();
        return view('create_products', compact('products', 'categories', 'brands'));
    }

    public function store(Request $request){


        $validatedData = $request->validate([
            'name' => 'required',
            'descriptions' => 'required',
            'photo' => 'required',
            'brand_id' => 'required', // Add this line to validate brand_id
            'category_id' => 'required' // Add this line to validate category_id
        ]);

        Products::create([
            'name' => $validatedData['name'],
            'descriptions' => $validatedData['descriptions'],
            'photo' => $validatedData['photo'],
            'brand_id' => $validatedData['brand_id'],
            'category_id' => $validatedData['category_id']// Include brand_id in the creation process
        ]);

        return redirect()->route('view_products');
    }

    public function edit(Products $products)
{
    $productsEdit = Products::where('id', $products->id)->first();
    $categories = Category::all();
    $brands = Brand::all();

    return view('edit_products', compact('productsEdit', 'categories', 'brands'));
}

   public function update(Request $request, Products $products)
   {

    $products->update([

        'name' => $request->name,
        'descriptions' => $request->descriptions,
        'photo' => $request->photo,
        'brand_id' => $request->brand_id,
        'category_id' => $request->category_id
    ]);

    return redirect()->route('view_products');
   }

   public function destroy(Products $products){

    $products->delete();

    return redirect()->route('view_products');
   }
}
