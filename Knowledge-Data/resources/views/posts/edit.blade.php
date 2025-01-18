@extends('layouts.app')
@section('content')
    <div class="header_post">
        <h1>Редактировать запись</h1>
        <div class="buttons">
            <a href="{{ route('posts.index') }}" class="btn">Назад</a>
        </div>
    </div>
    <form method="POST" action="{{ route('posts.update', $post) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="name" class="label">Загаловок</label>
            <input type="text" name="name" id="name" value="{{ old('name', $post->name) }}" class="input">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="text_content" class="label">Контент</label>
            <textarea name="text_content" id="text_content">{{ old('text_content', $post->text_content) }}</textarea>
            @error('text_content')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" id="save_button" class="btn">Редактировать запись</button>
        <div class="editor" id="editor"></div>
    </form>
    <script>
        const editor = new toastui.Editor({
            el: document.querySelector('#editor'),
            initialEditType: 'markdown',
            previewStyle: 'vertical',
            height: '300px',
            initialValue: `{{ $post->text_content }}`
        });
    </script>
@endsection
