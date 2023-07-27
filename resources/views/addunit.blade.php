@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
            <p class="h1 text-center"> Form Tambah Unit atau Departemen </p>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/unit/create" method="post" enctype="multipart/form-data">
            @csrf 
  <div class="form-group">
    <label for="name">Nama Unit</label>
    <input type="text" class="form-control" required="required" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="locations">Lokasi Unit</label>
    <input type="text" class="form-control" required="required" id="locations" name="locations">
  </div>  
  <button type="submit" class="btn btn-primary">Tambah Data</button>
</form>
    </div>
</div>
@endsection