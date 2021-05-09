@extends('layouts.app')

@section('title')
{{$article->title}}
@endsection


@section('content')
<div class="card p-3 mb-3">
    <div class="card-title">
        <h3>{{$article->title}}</h3>
    </div>
    <img class="card-img-top" src="/images/{{$article->thumbnail}}" alt="Card image cap">
    <div class="card-body">
        <p>{{$article->subject}}</p>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col">
                <a href="/article/{{$article->id}}/edit" class="btn btn-primary">Edit</a>
            </div>
            <div class="col">
                <form action="/article/{{$article->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Hapus</button>

                </form>
            </div>
            <div class="col">
                <a href="{{'/article'}}" class="btn btn-primary btn-sm">Back</a></div>

        </div>
    </div>

</div>



@endsection