<?php

// namespace App\Http\Controllers;

// use App\Models\Article;
// use Illuminate\Http\Request;

// class ArticleController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         //
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(string $id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(string $id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, string $id)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(string $id)
//     {
//         //
//     }

//     // Search  
//     public function search(Request $request)
//     {
//         $query = $request->input('query');

//         $articles = Article::where('titre', 'like', '%' . $query . '%')
//             ->orWhere('contenu', 'like', '%' . $query . '%')
//             ->get();

//         return view('search-results', compact('guestarticles'));
//     }
// }
