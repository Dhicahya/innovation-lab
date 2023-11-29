<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Comment::all();
        return view('comment.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'thread_id' => 'required|numeric',
            'content' => 'required|string',
            'status' => 'required|in:1,0'
        ]);

        $comment = new Comment();
        $comment->thread_id = $request->thread_id;
        $comment->content = $request->content;
        $comment->status = $request->status;
        $comment->save();

        return response()->redirectTo('/comment');    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        return view('comment.update', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'thread_id' => 'required|numeric',
            'content' => 'required|string',
            'status' => 'required|in:1,0'
        ]);

        $comment->thread_id = $request->thread_id;
        $comment->content = $request->content;
        $comment->status = $request->status;
        $comment->save();

        return response()->redirectTo('/comme');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return response()->redirectTo('/comment');
    }
}
