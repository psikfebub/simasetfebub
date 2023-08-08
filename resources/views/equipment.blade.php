@extends('layouts.app')

@section('content')
<div class="container">
  @if (Auth::user()->hasRole('admin'))
  <a href="/equipment/add" class="btn btn-primary float-left"><i class="fas fa-plus"></i>Tambah Data</a>
  @else
  <span>Data Aset</span>
  @endif
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
          <a class="btn btn-primary" href="/equipment/edit/{{$record->id}}">Edit</a>
          <br>
          <a href="/equipment/delete/{{$record->id}}" class="hapus-data-link btn btn-danger">Hapus Data</a>
          @else
          <a class="btn btn-primary" href="/equipment/edit/{{$record->id}}">Edit</a>
          @endif
        </td>
      </tr>
      @endforeach
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          // Cari tautan untuk menghapus data
          var hapusDataLinks = document.querySelectorAll('.hapus-data-link');

          // Tambahkan event listener untuk setiap tautan
          hapusDataLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
              event.preventDefault(); // Mencegah tindakan bawaan dari tautan

              // Tampilkan dialog konfirmasi
              if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                // Jika pengguna mengonfirmasi, arahkan tautan ke URL yang diberikan pada atribut "href"
                window.location.href = link.getAttribute('href');
              }
            });
          });
        });
      </script>
    </tbody>
  </table>
</div>
@endsection