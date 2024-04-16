<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;

class geustpgController extends Controller
{

    // Fetch data from database
    public function index()
    {
        $articles = Article::paginate(6);
        return view('guestarticles', ['articles' => $articles]);
    }
    // Home button
    public function home()
    {
        return view('welcome');
    }

    // Search input
    public function search(Request $request)
    {
        $query = $request->input('query');

        $articles = Article::where('titre', 'like', '%' . $query . '%')
            ->orWhere('contenu', 'like', '%' . $query . '%')
            ->paginate(6);
            
        return view('guestarticles', compact('articles'));
    }
}
