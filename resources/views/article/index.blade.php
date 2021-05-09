@extends('layouts.app')

@section('title')
halaman utama blog
@endsection

@section('content')
<h1>Halaman Artikel</h1>
@foreach ($articles->chunk(3) as $articleChunk)
<div class="row">
    @foreach ($articleChunk as $article)
    <div class="col-4">
        <div class="card p-3 mb-3">
            <img class="card-img-top img-thumbnail" src="images/{{$article->thumbnail}}" alt="Card image cap">
            <div class="card-title">
                <h3>Judul : {{$article->title}}</h3>
            </div>
            <div class="card-body">
                <p>Deskripsi : {{$article->subject}}</p>
            </div>
            <a href="/article/{{$article->slug}}"
                class="btn btn-light rounded-pill font-weight-bold ml-2 stretched-link">Baca >></a>
        </div>
    </div>
    @endforeach

</div>
@endforeach


<div>
    {{ $articles->links() }}
</div>

@include('layouts.footer')
@endsection