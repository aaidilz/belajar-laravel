@extends('layouts.main')

@section('content')

<article class="mb-5">
    <h2>{{ $post["title"] }}</h2>
    <p>By: {{ $post["author"] }}</p>
    <p>{{ $post["body"] }}</p> 
  </article>

<a href="/posts">Back to Post</a>
@endsection
