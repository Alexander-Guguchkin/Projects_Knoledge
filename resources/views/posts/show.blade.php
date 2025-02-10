@extends('layouts.app')
@section('content')
    <div class="header_post">
        <h1>{{ $post->name }}</h1>
        <div class="buttons">
            <a href="{{ route('posts.edit', $post) }}" class="btn">Редактировать</a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn">Удалить</button>
            </form>
            <a href="{{ route('posts.index') }}" class="btn">Назад</a>
        </div>
    </div>

    <div id="viewer"></div>

    <script>
        const editor = new toastui.Editor({
            el: document.querySelector('#viewer'),
            initialEditType: 'markdown',
            previewStyle: 'vertical',
            height: '300px',
            initialValue: `{{ $post->text_content }}`
        });
    </script>
@endsection
