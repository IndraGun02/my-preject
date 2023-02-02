<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Article;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {

        $data = Division::all();
        $articles =Article::all();

        // dd($articles);

        return view('index', compact('data', 'articles'));
    }

}
