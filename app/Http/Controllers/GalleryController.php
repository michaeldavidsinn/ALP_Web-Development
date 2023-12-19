<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {

        $gallery = Gallery::all();

        return view('view_gallery', [
            "gallery" => $gallery,
        ]);
    }

    public function show(Gallery $gallery)
    {

        return view('showgallery', [
            'gallery' => $gallery
        ]);
    }

    public function create(){

        $gallery = Gallery::all();
        return view('create_gallery', compact('gallery'));
    }

    public function store(Request $request){


        $validatedData = $request->validate([
            'gallery_url' => 'required'
        ]);

        Gallery::create([

            'gallery_url' => $validatedData[ 'gallery_url']
        ]);

        return redirect()->route('adminview_gallery');
    }


   public function destroy(Gallery $gallery){

    $gallery->delete();

    return redirect()->route('adminview_gallery');
   }
}
