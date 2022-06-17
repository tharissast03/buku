

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Perpustakaan</title>
  </head>

  <body>
    

@extends('layouts.main')
@section("container")


  @if($message = Session::get('success'));
  <div class="alert alert-secondary" role="alert">
        {{$message}}
</div>
@endif

  <center>  <h1 class="text-center mb-4">Daftar Buku</h1></center>

  <div class="container">
       <a href="/tambah" type="button" class="btn btn-outline-primary">Tambah Data + </a>
    <div class="row">


    <table class="table table-hover">

  <thead>

    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col">Penulis</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Taun Terbit</th>
      <th scope="col">Detail</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  @php
  $no = 1;
  @endphp
   @foreach ($data as $daftar)
  <tbody>
    <tr>
      <th scope="row"> {{$no++}}</th>
      <td> {{$daftar->JudulBuku}}</td>
      <td> {{$daftar->Penulis}}</td>
      <td> {{$daftar->penerbit}}</td>
      <td>{{$daftar->TaunTerbit}}</td>
      <td> <a href="/detail/{{ $daftar->id}}" class="btn btn-outline-warning">Detail</a> </button>
      <td>
      <a href="/delete/{{ $daftar->id}}" class="btn btn-outline-danger">Hapus</button>
      <a href="/tampilkanData/{{ $daftar->id}}" class="btn  btn-outline-success">Edit</a>
      </td>
      
    </tr>
     @endforeach
  </tbody>
</table>
        </div> 
  
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
  </body>
</html>
  @endsection