<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">Praktikum Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex" id="navbarCollapse">
                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('add-blog-post-form')}}">Tugas Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('input-mahasiswa')}}">Input Data Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('show-data-mahasiswa')}}">Daftar Data Mahasiswa</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
    @if(session('status'))
        <div class="alert alert-success mt-5">
            {{ session('status') }}
        </div>
    @endif
    @if(session('status-deleted'))
        <div class="alert alert-warning mt-5">
            {{ session('status-deleted') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            Tugas Mahasiswa
        </div>
        <div class="card-body">
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
            @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Judul Tugas</label>
                    <input type="text" id="title" name="title" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Deskirpsi Tugas</label>
                    <textarea name="description" class="form-control" required=""></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </div>
    </div>
<div class="container mt-4">
    <table  class="table table-primary table-striped">
    <tr class="table-primary">
        <th>No</th>
        <th>Judul Tugas</th>
        <th colspan="3">Deskripsi Tugas</th>
    </tr>
    @php
        $i = 1;
    @endphp
    @foreach($data as $isi)
        <tr class="table-dark" style="width: 10%">
        <td class="table-info">
            {{ $i++ }}
        </td>
        <td class="table-info" style="width: 30%">
            {{ $isi -> title }}
        </td>
        <td class="table-info" style="width: 50%">
            {{ $isi -> description }}
        </td>
        <td class="table-info" style="width: 5%">
            <a href="/delete/{{$isi->id}}">
                <button type="submit" class="btn btn-danger">Hapus</button>
            </a>
        </td>
        <td class="table-info" style="width: 5%">
            <a href="{{url('post/edit')}}/{{$isi->id}}">
                <button type="submit" class="btn btn-warning">Edit</button>
            </a>
        </td>
    </tr>
    @endforeach
    </table>
</div>
</body>
</html>
{{-- Mahardika Surya Kusuma G.231.21.0141 --}}
