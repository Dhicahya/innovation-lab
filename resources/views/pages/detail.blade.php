@extends('layouts.forum')

@section('content')
<div class="container mt-5">
    <div class="mt-5">
        <div class="row justify-content-center">
            <div class="col">
                    <div class="card mt-5 shadow">
                        <div class="card-body">
                            <div class="user-info mb-3">
                                <span class="username">{{ '@'.(@$item->user->nama ?? 'Pengguna') }}</span>
                            </div>
                            <h5 class="card-title"><strong>{{ $thread->title }}</strong></h5>
                            <p class="card-text">{{ $thread->category->name }}</p>
                            <p class="card-text text-justify">{{ $thread->content }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{ route('thread.like', $thread) }}" class="btn btn-primary">
                                        <i class="far fa-thumbs-up"></i>
                                    </a>
                                    {{-- @if ()
                                    <a href="{{ route('thread.like', $thread) }}" class="btn btn-primary">
                                        <i class="far fa-thumbs-up"></i>
                                    </a>    
                                    @else
                                    <a href="{{ route('thread.like', $thread) }}" class="btn btn-primary">
                                        <i class="fas fa-thumbs-up"></i>
                                    </a> 
                                    @endif --}}
                                </div>
                                <div class="col-md-6 text-right">
                                    <button type="button" class="btn btn-success comment-btn" data-toggle="collapse"
                                        data-target="#commentForm1"><i class="fas fa-comment"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Form komentar yang awalnya tersembunyi -->
                        <div class="collapse mt-3" id="commentForm1">
                            <div class="card card-body">
                                <form method="POST" action="{{ route('comment.store') }}">
                                    @csrf
                                    <input type="hidden" name="thread_id" value="{{ $thread->id }}">
                                    <div class="form-group">
                                        <label for="content">Tambahkan Komentar:</label>
                                        <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-paper-plane"></i>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <!-- Daftar komentar -->
                        <div class="card">
                            <div class="card-body ">
                            <h4 class="card-title mb-2">Komentar</h4>
                            <ul class="list-group">
                                <!-- Komentar akan ditambahkan secara dinamis melalui JavaScript -->
                                @foreach ($thread->comments as $item)
                                <div class="card my-1 p-2">
                                    <span class="card-title">{{ '@'.(@$item->user->nama ?? 'Pengguna') }}</span>
                                    <p class="card-text"> {{ $item->content }}</p> 
                                </div>
                                @endforeach
                            </ul>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
