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
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('add-blog-post-form')}}" aria-current="page" href="#">Tugas Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{url('input-mahasiswa')}}">Input Data Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('show-data-mahasiswa')}}">Daftar Data Mahasiswa</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            Input Data Mahasiswa
        </div>
        <div class="card-body">
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('kirim-mahasiswa')}}">
            @csrf
                <div class="form-group">
                    <label for="nim">Nim</label>
                    <input type="text" id="nim" name="nim" class="form-control @error('nim') is-invalid @enderror"  value="{{ old('nim') }}">
                    @error('nim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror"  value="{{ old('nama') }}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="number" id="umur" name="umur" class="form-control @error('umur') is-invalid @enderror"  min="1" max="120" value="{{ old('umur') }}">
                    @error('umur')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" >{{ old('alamat') }}</textarea>
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kota">Kota</label>
                    <input type="text" id="kota" name="kota" class="form-control @error('kota') is-invalid @enderror"  value="{{ old('kota') }}">
                    @error('kota')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" id="kelas" name="kelas" class="form-control @error('kelas') is-invalid @enderror"  value="{{ old('kelas') }}">
                    @error('kelas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" id="jurusan" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror"  value="{{ old('jurusan') }}">
                    @error('jurusan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </div>
    </div>
</body>
</html>
{{-- Mahardika Surya Kusuma G.231.21.0141 --}}
