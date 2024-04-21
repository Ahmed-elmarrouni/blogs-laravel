<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{

    // POST COMMENTS
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'article_id' => 'required|exists:articles,id',
            'user_id' => 'required|exists:users,id',
            'contenu' => 'required|string',
        ]);

        $comment = new Comment();
        $comment->article_id = $validatedData['article_id'];
        $comment->user_id = $validatedData['user_id'];
        $comment->contenu = $validatedData['contenu'];
        $comment->approved = false;
        $comment->save();

        return redirect()->back()->with('success', 'Your comment has been submitted and is awaiting approval.');
    }



    // SHOW Alll comments
    public function showComments()
    {
        $comments = Comment::paginate(6);
        return view('comments.index', compact('comments'));
    }
}
