@extends ('layouts.master')

@section('title')
    Belajar Laravel
@endsection

@section('content')
    <h1>Article</h1>
    <h2>{{ $article->title }}</h2>
    <hr>
    <p>
        {{ $article->description}}
    </p>
    <input type="button" value="edit" onclick="window.location.href='/article/{{$article->id}}/edit'">
@endsection
