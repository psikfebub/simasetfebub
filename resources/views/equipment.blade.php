@extends('layouts.app')

@section('content')
<div class="container">
<a href="#"  class="btn btn-primary float-left" ><i class="fas fa-plus"></i>Tambah Data</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Kode Aset</th>
      <th scope="col">Nama Aset</th>
      <th scope="col">Spesifikasi</th>
      <th scope="col">Merek</th>
      <th scope="col">Tahun Pengadaan</th>
      <th scope="col">Lokasi</th>
      <th scope="col">Unit</th>
      <th scope="col">PIC</th>
      <th scope="col">Tombol</th>
    </tr>
  </thead>
  <tbody>
  <tr>
  @foreach ($equipments as $record)
      <td>{{ $record->id }}</td>
      <td>{{ $record->name }}</td>
      <td>{{ $record->specifications }}</td>
      <td>{{ $record->merek }}</td>
      <td>{{ $record->year }}</td>
      <td>{{ $record->locations }}</td>
      <td>{{ $record->unit_id }}</td>
      <td>{{ $record->pic }}</td>
      <td>
      @if (Auth::user()->hasRole('admin'))
           <a class="btn btn-primary" href="#">Edit</a>
           <br>
          <a class="btn btn-danger" href="#">Delete</a> 
      @else 
      <a class="btn btn-primary" href="#">Edit</a>
      @endif
      </td>
  </tr>
  @endforeach  
  </tbody>
</table>
</div>
@endsection