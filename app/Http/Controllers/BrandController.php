<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BrandController extends Controller
{

    public function index(Request $request)
    {
        if ($request->has('search')) {

            $brand = Brand::where('brand_name', 'LIKE', '%' . $request->search . '%')->paginate(5)->withQueryString();
        } else {
            $brand = Brand::paginate(3);
        }


        return view('view_brand', [

            "brand" => $brand,
        ]);
    }

    public function show(Brand $brand)
    {
        $brand->load('products');

        return view('showbrand', [
            'brand' => $brand
        ]);
    }

    public function create()
    {

        $brand = Brand::all();
        return view('create_brand', compact('brand'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'brand_name' => 'required',
            'logo' => 'image'
        ]);

        if ($request->file('logo')) {
            $validatedData['logo'] = $request->file('logo')->store('image', ['disk' => 'public']);

            Brand::create([

                'brand_name' => $validatedData['brand_name'],
                'logo' => $validatedData['logo']
            ]);
        }

        return redirect()->route('adminview_brand');
    }

    public function edit(Brand $brand)
    {
        $brandEdit = Brand::where('id', $brand->id)->first();

        return view('edit_brand', compact('brandEdit'));
    }


    public function update(Request $request, Brand $brand)
    {
        $validatedData = $request->validate([
            'brand_name' => 'required',
            'logo' => 'image'
        ]);
        if ($request->file('logo')) {
            if($brand->logo){
                Storage::disk('public')->delete($brand->logo);
            }
            $validatedData['logo'] = $request->file('logo')->store('image', ['disk' => 'public']);

            $brand->update([
                'brand_name' => $validatedData['brand_name'],
                'logo' => $validatedData['logo']
            ]);
        }
        return redirect()->route('adminview_brand');
    }

    public function destroy(Brand $brand)
    {
        if($brand->logo){
            if( Storage::disk('public')->exists($brand->logo)){
                Storage::disk('public')->delete($brand->logo);
            }

        }
        $brand->delete();

        return redirect()->route('adminview_brand');
    }
}
