<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function show(Request $request)
    {
        $thread = Thread::orderByDesc('id')->get();
        return view('pages.forum', compact('thread'));
    }

    public function thread(Request $request)
    {
        
        return view('pages.thread-create');
    }

    public function store(Request $request)
    {
       $data = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        $data['user_id'] = auth()->user()->id;
        

        Thread::create($data);
        return redirect()->route('forum');
    }

    public function showThreadDetail(Request $request, $threadId)
    {
        $thread = Thread::findOrFail($threadId);
        $thread->load('comments');

        return view('pages.detail', compact('thread'));
    }

    
}
