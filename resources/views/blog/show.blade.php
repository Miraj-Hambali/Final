@extends('layouts.app')
@section('content')
    <div class="container">
   
                    <div class="card" style="width: 40rem;">
                    <div class="row no-gutters">
                      <div class="col">
                        <div class="card-body">
                         
                          <h5 class="card-title">{{$blog->judul}}</h5>
                       
                          <p class="card-text">{{$blog->isi}}</p>
                          <img src="/gambar/{{$blog->image}}" class="img-thumbnail" >
                          <p class="card-text"><small class="text-muted">{{$blog->created_at}}</small></p>
                          <button type="button" class="btn btn-primary btn-sm">Like</button>
                          <button type="button" class="btn btn-primary btn-sm">Dislike</button>
                          <button type="button" class="btn btn-primary btn-sm"><a href="/blog/{{$blog->id}}/edit" style="text-decoration:none" class="text-light"> Edit </a></button>

                          <div class="img-push mt-2">
                            <input type="text" class="form-control form-control-sm" placeholder="Press enter to post comment">
                          </div>

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
                </div>
@endsection

