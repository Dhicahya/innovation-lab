@extends('layouts.forum')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="mt-5">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card mt-5 shadow">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="user-info mb-3">
                                    <span class="username">{{ '@' . (@$thread->user->nama ?? 'Pengguna') }}</span>
                                </div>
                                <div class="dropdown no-arrow">
                                    <a class="btn btn-white dropdown-toggle" href="#" role="button" id="dropdownDetail"
                                        data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownDetail">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Hapus</a>
                                    </div>
                                </div>
                                
                            </div>
                            <h5 class="card-title"><strong>{{ $thread->title }}</strong></h5>
                            <p class="card-text">{{ $thread->category->name }}</p>
                            <p class="card-text">{!! nl2br($thread->content) !!}</p>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6">
                                    @if ($thread->hasLike)
                                        <a href="{{ route('thread.like', $thread) }}" class="btn btn-outline-primary">
                                            <i class="far fa-thumbs-up"></i>
                                            ({{ $thread->totalLike() }})
                                        </a>
                                    @else
                                        <a href="{{ route('thread.like', $thread) }}" class="btn btn-primary">
                                            <i class="fas fa-thumbs-up"></i>
                                            ({{ $thread->totalLike() }})
                                        </a>
                                    @endif
                                </div>
                                <div class="col-md-6 text-right">
                                    <button type="button" class="btn btn-success comment-btn" data-toggle="collapse"
                                        data-target="#commentForm1"><i class="fas fa-comment"></i>
                                        ({{ $thread->totalComment() }})

                                    </button>
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
                            <div class="card-body">
                                <h4 class="card-title mb-2">Komentar</h4>
                                <div class="list-group">
                                    <!-- Komentar akan ditambahkan secara dinamis melalui JavaScript -->
                                    @foreach ($thread->comments as $item)
                                        <div class="card my-1 p-2">
                                            <span class="card-title">{{ '@' . (@$item->user->nama ?? 'Pengguna') }}</span>
                                            <p class="card-text"> {{ $item->content }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
