@extends('layouts.forum')

@section('content')
    <div class="container mt-5">
        <div class="mt-5">
            <div class="row mt-5">
                <!-- Contoh Card 1 -->
                <div class="col-md-6 my-5">
                    <div class="card mt-5 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Judul Diskusi 1</h5>
                            <p class="card-text">Isi diskusi atau pertanyaan ditampilkan di sini. Lebih banyak teks dapat
                                ditambahkan sesuai kebutuhan.</p>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="" class="btn btn-primary">
                                        <i class="fa fa-thumbs-up"></i>
                                        Like
                                    </a>
                                </div>
                                <div class="col-md-6 text-right">
                                    <button type="button" class="btn btn-success comment-btn" data-toggle="collapse"
                                        data-target="#commentForm1"><i class="fas fa-comment"></i> Comment</button>
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
                                    <button type="submit" class="btn btn-primary">Kirim</button>
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
            </div>
        </div>
    </div>
@endsection
