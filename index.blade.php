@extends('template.hometmp')
@section('konten')  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">  
<div class="row">
  @foreach ($data as $item)
  <div class="col-sm-6">
      <div class="card shadow-lg p-3 mb-5 bg-body rounded border-dark mb-3">
        <div class="card-body text-center">
          <h3 class="card-title">{{ $item->nama }}</h3>
          <p class="card-text"> {{ $item->type }} | {{ $item->harga }}</p>
          <h5 class="card-text text-succes"> {{ $item->status }}</h5>
        </div>
      </div>
    </div>
    <style>
      .card {
          margin-bottom:30px;
      }
  </style>
  @endforeach
@endsection