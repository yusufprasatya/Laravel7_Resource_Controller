@extends('layouts.app')

@section('title')
{{$article->title}}
@endsection


@section('content')
<div class="row">
    <div class="col-4">
        <a href="/article/{{$article->id}}/edit" class="btn btn-light rounded-pill font-weight-bold ml-2">Edit</a>
        <form action="/article/{{$article->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-light rounded-pill font-weight-bold ml-2">Hapus</button>
        </form>
        <a href="{{'/article'}}" class="btn btn-light rounded-pill font-weight-bold ml-2">Back</a>
    </div>
</div>
<div class="card p-3 mb-3">
    <div class="card-title">
        <h3>{{$article->title}}</h3>
    </div>
    <img class="card-img-top" src="/images/{{$article->thumbnail}}" alt="Card image cap">
    <div class="card-body">
        <p>{{$article->subject}}</p>
    </div>
    <div class="card-footer">

    </div>

</div>



@endsection