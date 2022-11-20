<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Data Mahasiswa</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">Praktikum Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('add-blog-post-form')}}" aria-current="page" href="#">Tugas Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('input-mahasiswa')}}">Input Data Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{url('show-data-mahasiswa')}}">Daftar Data Mahasiswa</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
    </div>
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
                Daftar Data Mahasiswa
            </div>
            <div class="card-body">
                <table  class="table table-primary table-striped">
                    <tr class="table-primary">
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Kota</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th colspan=2>Action</th>
                    </tr>
                    @foreach($data as $isi)
                    <tr class="table-dark" style="width: 10%">
                        <td class="table-info">
                            {{ $isi -> nim }}
                        </td>
                        <td class="table-info" style="width: 20%">
                            {{ $isi -> nama }}
                        </td>
                        <td class="table-info" style="width: 5%">
                            {{ $isi -> umur }}
                        </td>
                        <td class="table-info" style="width: 25%">
                            {{ $isi -> alamat }}
                        </td>
                        <td class="table-info" style="width: 10%">
                            {{ $isi -> kota }}
                        </td>
                        <td class="table-info" style="width: 10%">
                            {{ $isi -> kelas }}
                        </td>
                        <td class="table-info" style="width: 10%">
                            {{ $isi -> jurusan }}
                        </td>
                        <td class="table-info" style="width: 5%">
                            <a href="{{ url('delete-mahasiswa')}}/{{ $isi->nim }}">
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </a>
                        </td>
                        <td class="table-info" style="width: 5%">
                            <a href="{{url('edit-mahasiswa')}}/{{$isi->nim}}">
                                <button type="submit" class="btn btn-warning">Edit</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </table>
            </div>
        </div>
        </div>
</body>
</html>
{{-- Mahardika Surya Kusuma G.231.21.0141 --}}
