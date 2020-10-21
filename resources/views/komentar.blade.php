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

@section('kolom')
@section('content')
<div class="card mt-5 mb-3" style="max-width: 1080px;">
        <div class="card-body">
            <p class="card-text d-flex flex-row-reverse"><small class="text-muted">Last updated 3 mins ago</small></p>
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <button type="button" class="btn btn-primary btn-sm">Like</button>
            <button type="button" class="btn btn-primary btn-sm">Dislike</button>
            {{-- komentar --}}
            <div class="media text-muted pt-3">
                <p class="media-body pb-3 mb-0 small lh-125 border-top border-gray">
              <strong class="d-block text-gray-dark pt-2">@username</strong>
              Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection