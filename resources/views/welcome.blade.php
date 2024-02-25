@extends('layouts.app')

@section('content')
<div class="custom-content">
    <h1>Üdvözöllek a weboldalon!</h1>
    <p>Ez itt a főoldal tartalma.</p>

    <div class="custom-content">
        <h1>Bejegyzések</h1>

        <ul>
            @foreach($posts as $post)

            <h2>{{ $post->title }}</h2>
            <img src="{{ Voyager::image($post->image) }}" alt="{{ $post->title }}">
            <p>{{ \Illuminate\Support\Str::limit($post->body, 100) }}</p>
            <a href="{{ route('post.show', ['post' => $post]) }}">Tovább</a>
            <p>Kategória: {{ $post->category->name }}</p>

            @endforeach

        </ul>
    </div>
</div>
@endsection