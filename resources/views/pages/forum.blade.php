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
                                    <span class="username">{{ $item->user->nama }}</span>
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
                                        <button type="button" class="btn btn-success comment-btn" data-toggle="collapse"
                                            data-target="#commentForm1"><i class="fas fa-comment"></i></button>
                                    </div>
                                </div>
                            </div>

                            <!-- Form komentar yang awalnya tersembunyi -->
                            <div class="collapse mt-3" id="commentForm1">
                                <div class="card card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="comment1">Tambahkan Komentar:</label>
                                            <textarea class="form-control" id="comment1" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary"><i
                                                class="fas fa-paper-plane"></i></button>
                                    </form>
                                </div>
                            </div>

                            <!-- Daftar komentar -->
                            <div class="card card-body mt-3 comment-list" style="display: none;">
                                <h6 class="card-subtitle mb-2 text-muted">Komentar</h6>
                                <ul class="list-group">
                                    <!-- Komentar akan ditambahkan secara dinamis melalui JavaScript -->
                                </ul>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
