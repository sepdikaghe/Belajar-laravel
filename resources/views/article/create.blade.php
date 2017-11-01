@extends ('layouts.master')

@section('title')
    Belajar Laravel
@endsection

@section('content')
    <h1>Halaman Create </h1>
{{--  
    @if(count($errors) > 0)
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>    
        @endforeach
    </ul>
    @endif  --}}
    <form action="/article" method="post">
        <input type="text" name="title" value="{{ old('title') }}">
        <br>
        @if($errors->has('title'))
            <p>{{ $errors->first('title') }}</p>
        @endif
        <br>
        <textarea name="description" cols="40" rows="8">{{ old('description') }}</textarea>
        @if($errors->has('description'))
            <p>{{ $errors->first('description') }}</p>
        @endif        
        <br>
        <input type="submit" name="submit" value="create">
        {{ csrf_field() }}
    </form>
@endsection
