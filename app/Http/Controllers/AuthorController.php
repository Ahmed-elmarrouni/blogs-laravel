<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthorController extends Controller
{
    public function posts()
    {
        $articles = Article::with("Like")->paginate(6);
        return view('dashboard', ['articles' => $articles]);
    }

    // Add new
    public function index()
    {
        return view('author.addPost');
    }

    // ADD NEW ARTICLES
    public function addNewArticle(Request $request)
    {
        $data = $request->validate([
            'titre' => 'required',
            'url_image' => 'required',
            'contenu' => 'required',
        ]);


        if ($request->hasFile('url_image')) {
            $imagePath = $request->file('url_image');
            $request->url_image->store('url_images', 'public');
            $data['url_image'] = $imagePath->hashname();
        }

        $user_id = auth()->id();

        $data['user_id'] = $user_id;

        $newArticle = Article::create($data);

        return redirect(route('dashboard'))->with('success', 'New article added successfully');
    }

    // SEARCH 
    public function searchindashboard(Request $request)
    {
        $query = $request->input('query');

        $articles = Article::where('titre', 'like', '%' . $query . '%')
            ->orWhere('contenu', 'like', '%' . $query . '%')
            ->paginate(6);

        return view('/dashboard', compact('articles'));
    }



    // Return to managearticles view just my articles
    public function manageposts()
    {
        $user_id = auth()->id();
        $articles = Article::where('user_id', $user_id)->paginate(6);
        return view('author.managearticles', ['articles' => $articles]);
    }




    // search in manage article page 
    public function searchMngarticle(Request $request)
    {
        $query = $request->input('query');

        $articles = Article::where('titre', 'like', '%' . $query . '%')
            ->orWhere('contenu', 'like', '%' . $query . '%')
            ->paginate(1);

        return view('author.managearticles', compact('articles'));
    }



    // DELETE AN ARICLE
    public function deleteArticle(Request $request, Article $article)
    {
        $article->delete();
        return to_route('mangeArticles');
    }

    public function indexB()
    {
        return view('dashboard');
    }


    // Articles detailes
    public function authorticledetails($id)
    {
        $article = Article::find($id);
        $Isliked = Like::where("user_id", auth()->user()->id)->where("article_id", $id)->exists();

        return view('author.detailspg', compact('article', 'Isliked'));
    }

    // Likes function
    public function likes(Request $request)
    {
        $likearticle =   auth()->user()->id;
        $postid = $request->input("post_id");

        $like = new Like();
        $like->article_id = $postid;
        $like->user_id = $likearticle;
        $like->save();
        return redirect()->back();
    }
}















///

// public function create(Request $request)
//     {
//         // recieving the inputs and set up the validation rules
//         $validated = $request->validate([
//             'firstname' => ['required', 'max:50', 'min:2'],
//             'lastname' => ['required', 'max:50', 'min:2'],
//             'email' => ['required', 'unique:users', 'email', 'max:255', 'min:5'],
//             'password' => ['required', 'max:255', 'min:8']
//         ]);

//         // combining the name into full Name
//         $fullName = $validated['firstname'] . ' ' . $validated['lastname'];

//         // Hash password
//         $validated['password'] = Hash::make($validated['password']);

//         $userData = ['name' => $fullName, 'email' => $validated['email'], 'password' => $validated['password']];

//         // creating a new user record
//         $user = User::create($userData);

//         // login 
//         auth()->login($user);

//         // redirect the user with success message
//         return redirect()->route('home')->with('success', 'Hello Mr/Ms ' . $fullName);

//     }