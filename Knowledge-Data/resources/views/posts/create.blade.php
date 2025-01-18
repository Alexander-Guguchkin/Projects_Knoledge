@extends('layouts.app')
@section('content')
    <div class="header_post">
        <h1>Создать запись</h1>
        <div class="buttons">
            <a href="{{ route('posts.index') }}" class="btn">Назад</a>
        </div>
    </div>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <div>
            <label for="name" class="label">Заголовок</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" class="input">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="text_content" class="label">Контент</label>
            <textarea name="text_content" id="text_content"></textarea>
            @error('text_content')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div id="editor" class="editor"></div>
        <button id="save_button" class="btn">Создать Запись</button>
    </form>
@endsection
