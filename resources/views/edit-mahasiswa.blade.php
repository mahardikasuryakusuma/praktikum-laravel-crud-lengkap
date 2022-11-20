<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Halaman Edit Data Mahasiswa</title >
</head>
<body>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Perbarui Data Mahasiswa
            </div>
            <div class="card-body">
                <form name="update-data-mahasiswa" id="update-data-mahasiswa" method="post" action="{{url('update-mahasiswa')}}/{{ $post->nim }}">
                @csrf
                    <div class="form-group">
                        <label for="nim">Nim</label>
                        <input type="text" id="nim" name="nim" class="form-control @error('nim') is-invalid @enderror""  value="{{ $post->nim }}">
                        @error('nim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror""  value="{{ $post->nama }}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="number" id="umur" name="umur" class="form-control @error('umur') is-invalid @enderror""  value="{{ $post->umur }}">
                        @error('umur')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror"" >{{ $post->alamat }}</textarea>
                        @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kota">Kota</label>
                        <input type="text" id="kota" name="kota" class="form-control @error('kota') is-invalid @enderror"" " value="{{ $post->kota }}">
                        @error('kota')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" id="kelas" name="kelas" class="form-control @error('kelas') is-invalid @enderror"" value="{{ $post->kelas }}">
                        @error('kelas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" id="jurusan" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror""  value="{{ $post->jurusan }}">
                        @error('jurusan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    <a class="btn btn-danger mt-2" href="{{ url('show-data-mahasiswa') }}">Batal</a>
                </form>
            </div>
        </div>
        </div>
</body>
</html>
{{-- Mahardika Surya Kusuma G.231.21.0141 --}}
