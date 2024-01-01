@extends('layouts.profil')

@section('content')
    <div class="container mt-5">
        <div class="mt5">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 my-5">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Profil Pengguna</h5>
                        </div>
                        <div class="card-body text-center">
                            <img src="path/to/profile-picture.jpg" alt="Profile Picture" class="rounded-circle mb-3"
                                style="width: 150px; height: 150px;">
                            <h4 class="mb-2">{{ auth()->user()->nama}}</h4>
                            <p class="text-muted mb-2">{{ auth()->user()->username }}</p>
                            <p class="text-muted mb-3">{{ auth()->user()->email }}</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editProfileModal">
                                Edit Profil
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Profile Modal -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">Edit Profil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="inputName">Nama</label>
                            <input type="text" class="form-control" id="inputName" value="John Doe" required>
                        </div>
                        <div class="form-group">
                            <label for="inputUsername">Username</label>
                            <input type="text" class="form-control" id="inputUsername" value="johndoe" required>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" value="john.doe@example.com"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="inputConfirmPassword">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="inputConfirmPassword"
                                placeholder="Konfirmasi Password">
                        </div>
                        <div class="form-group">
                            <label for="inputProfilePicture">Foto Profil</label>
                            <input type="file" class="form-control-file" id="inputProfilePicture">
                        </div>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
