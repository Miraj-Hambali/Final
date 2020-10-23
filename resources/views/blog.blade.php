@extends('layouts.app')
@section('content')
@foreach ($postingan as $item)

<div class="container">
<div class="card mt-1 mb-3" style="width: 40rem;">
    <div class="row">
      <div class="col-md-8">
        <div class="card-body">

          <a href="blog/{{$item->id}}" style="text-decoration:none" class="text-dark">
         
            <h5 class="card-title">{{$item->judul}}</h5>
          
          </a>

        
          <p class="card-text">{{$item->isi}}</p>
          <img src="/gambar/{{$item->image}}" class="img-thumbnail" style="max-width: 600px">
          <p class="card-text"><small class="text-muted">{{$item->created_at}}</small></p>
          <button type="button" class="btn btn-primary btn-sm">Like</button>
          <button type="button" class="btn btn-primary btn-sm">Dislike</button>
          <button type="button" class="btn btn-primary btn-sm"><a href="/blog/{{$item->id}}" style="text-decoration:none" class="text-light"> Komentar </a> </button>
        </div>
      </div>
    </div>
  </div>
</div>

@endforeach

@endsection




