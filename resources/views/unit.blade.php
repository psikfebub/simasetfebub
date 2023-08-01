@extends('layouts.app')

@section('content')
<div class="container">
  <a href="/unit/add" class="btn btn-primary float-left"><i class="fas fa-plus"></i>Tambah Data</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Kode Unit</th>
        <th scope="col">Nama</th>
        <th scope="col">Lantai</th>
        <th scope="col">Gedung</th>
        <th scope="col">Tombol</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($units as $record)
        <td>{{ $record->id }}</td>
        <td>{{ $record->nama }}</td>
        <td>{{ $record->lantai }}</td>
        <td>{{ $record->gedung }}</td>
        <td>
          <a class="btn btn-primary" href="/unit/edit/{{$record->id}}">Edit</a>
          <br>
          <a href="/unit/delete/{{$record->id}}" class="hapus-data-link btn btn-danger">Hapus Data</a>
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