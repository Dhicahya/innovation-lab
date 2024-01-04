<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function show(Request $request)
    {
        $thread = Thread::all();
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
}
