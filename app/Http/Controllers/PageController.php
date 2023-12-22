<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $pages = Page::all();

        return view('view_page', [
            "pages" => $pages,
        ]);
    }

    public function show(Page $page)
    {

        return view('showpage', [
            'pagess' => $page
        ]);
    }

    public function create()
    {

        $page = Page::all();
        return view('create_page', compact('page'));
    }

    public function store(Request $request)
    {


        $validatedData = $request->validate([
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required',
            'jam_operasional' => 'required'
        ]);

        Page::create([

            'alamat' => $validatedData['alamat'],
            'nomor_telepon' => $validatedData['nomor_telepon'],
            'email' => $validatedData['email'],
            'jam_operasional' => $validatedData['jam_operasional']
        ]);

        return redirect()->route('view_page');
    }

    public function edit(Page $page)
    {
        $pageEdit = Page::where('id', $page->id)->first();

        return view('edit_page', compact('pageEdit'));
    }

    public function update(Request $request, Page $page)
    {

        $page->update([
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon,
            'email' => $request->email,
            'jam_operasional' => $request->jam_operasional
        ]);

        return redirect()->route('view_page');
    }

    public function destroy(Page $page)
    {

        $page->delete();

        return redirect()->route('view_page');
    }
}
