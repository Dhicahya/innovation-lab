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
        return view('pages.admin.comment.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.comment.create');
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
        Comment::create($request->all());
        return response()->redirectTo('pages.admin.comment.index');    
    }

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
        return view('pages.admin.comment.update', compact('comment'));
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

        $comment->update($request->all());
        return redirect()->route('pages.admin.comment.index');    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('pages.admin.index');
    }
}
