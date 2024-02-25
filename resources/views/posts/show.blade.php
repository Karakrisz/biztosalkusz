@extends('layouts.app')

@section('content')
<div class="custom-content">
    <h1>{{ $post->title }}</h1>
    <img src="{{ Voyager::image($post->image) }}" alt="{{ $post->title }}">
    <p>{!! $post->body !!}</p>
</div>
@endsection