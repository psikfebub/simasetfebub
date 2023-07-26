@extends('layouts.app')

@section('content')
<div class="conytainer">
    <button type="button" class="btn btn-primary">Add Aset</button>
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
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
</div>
@endsection