<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;


class AuthorController extends Controller
{
    public function posts()
    {
        $articles = Article::paginate(6);
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

        // Check if image file  upload
        //jareb daba
        // f file storage kaytuploda b hashname kaytgenera mais f database katstocki original filename
        // jareb zid chi article daba
        // ah wa5a
        // oui dir login ghir mn database attend nchof dek no image

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
    public function search(Request $request)
    {
        $query = $request->input('query');

        $articles = Article::where('titre', 'like', '%' . $query . '%')
            ->orWhere('contenu', 'like', '%' . $query . '%')
            ->paginate(6);

        return view('dashboard', compact('articles'));
    }



    // manage articles

    public function manageposts()
    {
        $articles = Article::paginate(6);
        return view('author.managearticles', ['articles' => $articles]);

        // return view('author.managearticles');
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

    // DELETE AN ARTICLE
    // public function deleteArticle($id)
    // {
    //     $article = Article::find($id);

    //     if (!$article) {
    //         return response()->json(['error' => 'Article not found'], 404);
    //     }

    //     $article->delete();

    //     return redirect()->route('mangeAryicles')->with('success', 'Article deleted successfully');
    // }

    // public function deleteArticle(article $article)
    // {
    //     $article->delete();
    //     return redirect('author.managearticles')->with('message', "article deleted sucusfully");
    // }




    public function deleteArticle(Request $request)
    {
        $articleId = $request->input('article_id');
        $article = Article::find($articleId);

        if ($article) {
            $article->delete();
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => 'Article not found'], 404);
        }
    }

    public function indexB()
    {
        return view('dashboard');
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