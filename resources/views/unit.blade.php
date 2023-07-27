@extends('layouts.app')

@section('content')
<div class="container">
<a href="/unit/add"  class="btn btn-primary float-left" ><i class="fas fa-plus"></i>Tambah Data</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Kode Unit</th>
      <th scope="col">Nama Unit</th>
      <th scope="col">Lokasi</th>
      <th scope="col">Tombol</th>
    </tr>
  </thead>
  <tbody>
  <tr>
  @foreach ($units as $record)
      <td>{{ $record->id }}</td>
      <td>{{ $record->name }}</td>
      <td>{{ $record->locations }}</td>
      <td>
           <a class="btn btn-primary" href="#">Edit</a>
           <br>
          <a class="btn btn-danger" href="#">Delete</a> 
      </td>
  </tr>
  @endforeach  
  </tbody>
</table>
</div>
@endsection