<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Storage;


class ProductsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {

            $products = Products::where('name', 'LIKE', '%' . $request->search . '%')->paginate(5)->withQueryString();
        } else {
            $products = Products::paginate(24);
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

    public function create()
    {

        $categories = Category::all();
        $brands = Brand::all();
        $products = Products::all();
        return view('create_products', compact('products', 'categories', 'brands'));
    }

    public function store(Request $request)
    {


        $validatedData = $request->validate([
            'name' => 'required',
            'descriptions' => 'required',
            // 'photo' => 'image required|mimes:png,jpg,jpeg|max:2048',
            'photo' => 'image',
            'brand_id' => 'required',
            'category_id' => 'required'
        ]);

        if ($request->file('photo')) {
            $validatedData['photo'] = $request->file('photo')->store('image', ['disk' => 'public']);

            Products::create([
                'name' => $validatedData['name'],
                'descriptions' => $validatedData['descriptions'],
                'photo' => $validatedData['photo'],
                'brand_id' => $validatedData['brand_id'],
                'category_id' => $validatedData['category_id']
            ]);
        }

        // $photo = $request->file('photo');
        // $filename = date('Y-m-d').$photo->getClientOriginalName();
        // $path       ='image/'.$filename;

        // Storage::disk('public')->put($path,file_get_contents($photo));

        // Products::create([
        //     'name' => $validatedData['name'],
        //     'descriptions' => $validatedData['descriptions'],
        //     'photo' => $validatedData['photo'],
        //     'brand_id' => $validatedData['brand_id'],
        //     'category_id' => $validatedData['category_id']
        // ]);

        return redirect()->route('adminview_products');
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
        $validatedData = $request->validate([
            'name' => 'required',
            'descriptions' => 'required',
            'photo' => 'image',
            'brand_id' => 'required',
            'category_id' => 'required'
        ]);
        if ($request->file('photo')) {
            if ($products->photo) {
                Storage::disk('public')->delete($products->photo);
            }
            $validatedData['photo'] = $request->file('photo')->store('image', ['disk' => 'public']);
            $products->update([
                'name' => $validatedData['name'],
                'descriptions' => $validatedData['descriptions'],
                'photo' => $validatedData['photo'],
                'brand_id' => $validatedData['brand_id'],
                'category_id' => $validatedData['category_id']
            ]);
        }
        return redirect()->route('adminview_products');
    }
    public function destroy(Products $products)
    {
        if ($products->photo) {
            if (Storage::disk('public')->exists($products->photo)) {
                Storage::disk('public')->delete($products->photo);
            }
        }
        $products->delete();

        return redirect()->route('adminview_products');
    }
}
