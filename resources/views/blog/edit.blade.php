@extends('layouts.master')
@section('content')
     <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tambah Pertanyaan</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="/blog/{{$blog->id}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                              <label for="exampleInputEmail1">Judul Pertanyaan</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="judul" value="{{$blog->judul}}">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Isi</label>
                              <textarea class="form-control" id="exampleInputPassword1" name="isi">{{$blog->isi}} </textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Edit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection