@extends('layouts.forum')

@section('content')
    <div class="container mt-5">
        <div class="mt-5">
            <div class="row">
                @foreach ($thread as $item)
                <div class="col-md-6">
                        <div class="card mt-5 shadow">
                            <div class="card-body">
                                <div class="user-info mb-3">
                                    <span class="username">{{ '@'. (@$item->user->nama ?? 'Pengguna') }}</span>
                                </div>
                                <h5 class="card-title"><strong>{{ $item->title }}</strong></h5>
                                <p class="card-text">{{ $item->category->name }}</p>
                                <p class="card-text">{{ $item->content }}</p>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="btn btn-primary">
                                            <i class="fa fa-thumbs-up"></i>
                                        </a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="{{ route('thread.detail', $item) }}" type="button" class="btn btn-success comment-btn" >
                                            <i class="fas fa-comment"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
