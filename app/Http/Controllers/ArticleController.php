<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $article = Article::where('title', 'LIKE', '%' . $request->search . '%')
                ->paginate(5)
                ->withQueryString();
        } else {
            $article = Article::paginate(3);
        }

        return view('view_article', [
            "article" => $article,
        ]);
    }

    public function show(Article $article)
    {

        return view('showarticle', [
            'article' => $article,
        ]);
    }

    public function create()
    {
        $article = Article::all();
        return view('create_article', compact('article'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
        ]);

        Article::create([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'image' => $validatedData['image'],
        ]);

        return redirect()->route('adminview_article');
    }

    public function edit(Article $article)
    {
        $articleEdit = Article::where('id', $article->id)->first();

        return view('edit_article', compact('articleEdit'));
    }

    public function update(Request $request, Article $article)
    {
        $article->update([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->image,
        ]);

        return redirect()->route('adminview_article');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('adminview_article');
    }
}
