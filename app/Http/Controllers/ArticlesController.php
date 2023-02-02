<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $article = Article::all();
        
        return view('article.index', ['article' => $article]);
    }

    public function create()
    {
        return view('article.add');
    }

    public function store(Request $request)
    {
        $data = [
            "title" => $request->title,
            "excerpt" => $request->excerpt,
            "body" => $request->body,
            "image_url" => $request->image,
        ];

        Article::create($data);

        return to_route('article');
    }

    public function edit($id)
    {
        $article = Article::find($id);

        return view('article.edit', ['article' => $article]);
    }

    public function update(Request $request)
    {
        $article = Article::find($request->id);

        $data = [
            "title" => $request->title,
            "excerpt" => $request->excerpt,
            "body" => $request->body,
            "image_url" => $request->image,
        ];

        $article->update($data);


        return to_route('article');
    }

    public function destroy($id)
    {
        Article::destroy($id);
        return to_route('article');
    }
}
