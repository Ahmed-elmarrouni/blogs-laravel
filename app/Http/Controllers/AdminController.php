<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view("admin.admindashboard");
    }



    // Shpw Users 
    public function usersadmin()
    {
        $users = User::paginate(6);
        return view('admin.usersadmin', ['users' => $users]);
    }
    // Delete users
    public function deleteUsers(Request $request, User $user)
    {
        $user->delete();
        return redirect()->route('usersadmin');
    }



    public function newarticles()
    {
        return view('admin.newarticles');
    }

    // Show Articles
    public function articlesadmin()
    {
        $articles = Article::paginate(6);
        return view('admin.articlesadmin', ['articles' => $articles]);
    }

    // DELETE AN ARTICLE
    public function deleteArticle(Request $request, Article $article)
    {
        $article->delete();
        return redirect()->route('articlesadmin');
    }
}
