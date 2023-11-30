@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Category</h1>
        <a href="/category/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Create Category</a>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->name}}</td>
                        <td>
                            <a class="btn btn-secondary" href="{{route('category.status', $item)}}">
                            {{$item->status ?
                            "Aktif":"Tidak Aktif"}}</a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="/category/{{$item->id}}/edit">
                                Edit
                            </a>
                            <a class="btn btn-danger" onclick="deleteData('/category/{{$item->id}}/delete')"> Hapus
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
<script>
    function deleteData(url) {
        if (confirm("Yakin?")) {
            window.location.href = url;
        }
    }
</script>
<!-- /.container-fluid -->
@endsection