@extends('layouts.admin')

@section('title', 'Page Comment')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Comment</h1>
        <a href="/comment/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Create Comment</a>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Thread</th>
                        <th scope="col">Content</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->name}}</td>
                        <td>
                            <a class="btn btn-secondary" href="{{route('comment.status', $item)}}">
                            {{$item->status ?
                            "Aktif":"Tidak Aktif"}}</a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="/{{route('comment.edit', $item)}}">
                                Edit
                            </a>
                            <a class="btn btn-danger" onclick="deleteData('{{route('comment.delete', $item)}}')"> Hapus
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