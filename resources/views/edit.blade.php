<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Halaman Edit
            </div>
            <div class="card-body">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('update')}}/{{$post->id}}">
                @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" value="{{ $post->title }}" id="title" name="title" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea name="description" class="form-control" required="">{{ $post->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    <a  class="btn btn-danger mt-2" href="{{ url('add-blog-post-form') }}">Batal</a>
                </form>
            </div>
        </div>
        </div>
</body>
</html>
{{-- Mahardika Surya Kusuma G.231.21.0141 --}}
