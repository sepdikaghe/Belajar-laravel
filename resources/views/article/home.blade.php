@extends ('layouts.master')

@section('title')
    Belajar Laravel
@endsection

@section('content')
    <h1>Article Pages</h1>
    <input type="button" value="Buat Artikel" onclick="window.location.href='/article/create'">
    @foreach($articles as $article)
        <li>
            <a href = "\article\{{ $article->id }}">{{ $article->title }}</a>
            <form action="/article/{{$article->id}}" method="post">
                <input type="submit" name="submit" value="delete">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="delete">
            </form>
        </li>
    @endforeach
    {{ $articles->links() }}
@endsection
