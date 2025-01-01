@extends('adminlte::page')

@section('content')
    <h1>Articles</h1>
    <a href="{{ route('articles.create') }}" class="btn btn-primary">Create Article</a>
    <ul>
        @foreach($articles as $article)
            <li>{{ $article->title }} - {{ $article->category->name }}</li>
        @endforeach
    </ul>
@endsection
