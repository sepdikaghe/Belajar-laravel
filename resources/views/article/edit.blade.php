@extends ('layouts.master')

@section('title')
    Belajar Laravel
@endsection

@section('content')
    <h1>Editing Page</h1>
    <form action="/article/{{$article->id}}" method="post">
        <input type="text" name="title" value="{{ $article->title }}">
        <br>
        <textarea name="description" cols="40" rows="8">{{ $article->description }}</textarea>
        <br>
        <input type="submit" name="submit" value="edit">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
    </form>
@endsection
