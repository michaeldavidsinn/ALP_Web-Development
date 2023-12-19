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
            'page_name' => 'required',
            'main_image' => 'required',
            'content' => 'required'
        ]);

        Page::create([

            'page_name' => $validatedData['page_name'],
            'main_image' => $validatedData['main_image'],
            'content' => $validatedData['content']
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
            'page_name' => $request->page_name,
            'main_image' => $request->main_image,
            'content' => $request->content
        ]);

        return redirect()->route('view_page');
    }

    public function destroy(Page $page)
    {

        $page->delete();

        return redirect()->route('view_page');
    }
}
