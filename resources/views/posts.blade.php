@extends('layouts.main')

@section('container')
<div class="container mt-4" >
    <h1 class="mb-5">
        Halaman Post
    </h1>
    @foreach ($posts as $post)
    <article class="mb-5">
        <h2>
          <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>  
        </h2>
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>
    @endforeach
</div>
@endsection
    
