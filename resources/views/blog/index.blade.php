<!-- resources/views/blog/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Blog</h1>
        <ul>
            @foreach ($posts as $post)
                <li><a href="{{ route('blog.show', ['id' => $post['id']]) }}">{{ $post['title'] }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection

