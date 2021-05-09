@extends('layouts.app')

@section('title')
{{$article->title}}
@endsection

@section('content')

<div class="card p-3 mb-3">
    <h1>Edit Artikel</h1>
    <form action="/article/{{$article->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Judul Artikel</label>
            <input type="text" class="form-control" id="exampleInputtext1" name="title"
                value="{{old('title') ? old('title') : $article->title}}" placeholder="Masukan Judul">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Masukan Deskripsi</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="subject"
                rows="6">{{old('title') ? old('title') : $article->subject}}</textarea>
            @error('subject')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            @if ($article->thumbnail)
            <img class="img-thumbnail" width="100px" src="/images/{{$article->thumbnail}}" alt="Card image cap"><br>
            @else
            <p>kamu belum punya thumbnail</p>
            @endif

            <label for="thumbnail">Upload Gambar</label>
            <input type="file" class="form-control" id="thumbnail" name="thumbnail" value="{{old('thumbnail')}}">
            @error('thumbnail')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>



@endsection