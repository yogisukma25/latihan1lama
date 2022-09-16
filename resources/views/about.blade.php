@extends('layouts.main')

@section('container')
<div class="container mt-4" >
    <h1>
        Halaman about
    </h1>
    <h3>{{ $nama; }}</h3>
    <p>{{ $email; }}</p>
    <img src="{{ $image; }}" alt="yogi" width="200" class="img-thumbnail rounded-circle">
</div>
@endsection
    
   
