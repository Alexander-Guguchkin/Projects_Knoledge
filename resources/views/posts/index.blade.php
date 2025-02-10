@extends('layouts.app')
@section('content')
    <div class="header_post">
        <h1 class="title">Записи</h1>
        <div class="buttons">
            <a href="{{ route('posts.create') }}" class="btn">Создать запись</a>
        </div>
    </div>

    <ul class="posts">
        @foreach ($posts as $post)
            <a class="post__link" href="{{ route('posts.show', $post) }} ">
                <li class="post">
                    <div class="post__title">{{ $post->name }}</div>
                </li>
            </a>
        @endforeach
    </ul>
@endsection
