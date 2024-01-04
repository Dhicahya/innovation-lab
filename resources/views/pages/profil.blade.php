@extends('layouts.profil')

@section('content')
    <div class="container mt-5">
        <div class="mt5">
            <div class="row justify-content-center mt-5">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="col-md-6 my-5">
                    <div class="card">
                        <div class="card-header text-white" style="background-image: radial-gradient(circle at 50% -20.71%, #2affff 0, #46adf9 50%, #2e4d6e 100%)">
                            <h5 class="mb-0">Profil</h5>
                        </div>
                        <div class="card-body text-center">
                            @if ($user->image_path)
                            <img src="/storage/{{$user->image_path}}" alt="Profile Picture" class="rounded-circle mb-3"
                            style="width: 150px; height: 150px;">  
                            @else
                            <img src="/img/undraw_profile.svg" alt="Profile Picture" class="rounded-circle mb-3"
                                style="width: 150px; height: 150px;">
                                
                            @endif
                            
                            <h4 class="mb-2">{{ $user->nama }}</h4>
                            <p class="text-muted mb-2">{{ $user->username }}</p>
                            <p class="text-muted mb-3">{{ $user->email }}</p>
                            <button type="button" class="btn btn-primary rounded-pill" data-toggle="modal" data-target="#editProfileModal">
                                <i class="fas fa-user-edit"></i>
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
                    <h5 class="modal-title" id="editProfileModalLabel"><i class="fas fa-user-edit"></i> Edit Profil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('profilStore')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="inputName">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{$user->nama}}" required>
                        </div>
                        <div class="form-group">
                            <label for="inputUsername">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="{{$user->username}}" required>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="inputConfirmPassword">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="password-confirm" name="password_confirmation"
                                placeholder="Konfirmasi Password">
                        </div>
                        <div class="form-group">
                            <label for="inputProfilePicture">Foto Profil</label>
                            <input type="file" name="image_path">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
