@extends('layouts.app')
@section('content')
    

<form class="container" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Judul</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Judul Postingan" name="judul">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Isi</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Isi Postingan" name="isi"></textarea>
    </div>
    <div class="input-group">
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="gambar">
        <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
      </div>
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit" id="inputGroupFileAddon04">Submit</button>
      </div>
    </div>

  </form>

@endsection
