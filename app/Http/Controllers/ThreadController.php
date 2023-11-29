<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Thread::all();
        return view('thread.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('thread.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'title' => 'required|string',
            'content' => 'required|string',
            'status' => 'required|in:1,0'
        ]);

        $thread = new Thread();
        $thread->user_id = $request->user_id;
        $thread->category_id = $request->category_id;
        $thread->title = $request->title;
        $thread->content = $request->content;
        $thread->status = $request->status;
        $thread->save();

        return response()->redirectTo('/thread');
    }

    /**
     * Display the specified resource.
     */
    public function show(Thread $thread)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Thread $thread)
    {
        return view('thread.update', compact('thread'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Thread $thread)
    {
        $request->validate([
            'user_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'title' => 'required|string',
            'content' => 'required|string',
            'status' => 'required|in:1,0'
        ]);

        $thread->user_id = $request->user_id;
        $thread->category_id = $request->category_id;
        $thread->title = $request->title;
        $thread->content = $request->content;
        $thread->status = $request->status;
        $thread->save();

        return response()->redirectTo('/thread');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Thread $thread)
    {
        $thread->delete();
        return response()->redirectTo('/thread');
    }
}
