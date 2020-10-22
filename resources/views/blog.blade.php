@extends('layouts.master')
@section('navbar')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Profil<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href={{Route('blog.create')}}>Create</a>
        </li>
    </div>
  </nav>

@endsection

@section('content')
@foreach ($postingan as $item)

<div class="card mt-5 mb-3" style="max-width: 1080px;">
    <div class="row no-gutters">
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$item->judul}}</h5>
          <p class="card-text">{{$item->isi}}</p>
          <img src="/gambar/{{$item->image}}">
          <p class="card-text"><small class="text-muted">{{$item->created_at}}</small></p>
          <button type="button" class="btn btn-primary btn-sm">Like</button>
          <button type="button" class="btn btn-primary btn-sm">Dislike</button>
          <button type="button" class="btn btn-primary btn-sm">Komentar</button>
        </div>
      </div>
    </div>
  </div>

@endforeach

@endsection



