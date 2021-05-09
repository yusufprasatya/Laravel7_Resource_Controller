@extends('layouts.app')



@section('content')

<div class="card p-3 mb-3">
    <h1>Tambah Article</h1>
    <form action="/article" method="POST" enctype="multipart/form-data">
        @csrf
        <x-input field="title" label="Judul Artikel" type="type" />
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Masukan Deskripsi</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="subject"
                rows="3">{{old('subject')}}</textarea>
            @error('subject')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="thumbnail">Upload Gambar</label>
            <input type="file" class="form-control" id="thumbnail" name="thumbnail" value="{{old('thumbnail')}}">
            @error('thumbnail')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>



@endsection