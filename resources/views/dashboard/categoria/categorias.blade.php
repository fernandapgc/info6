@extends('layouts.master')

@section('content')
<h1>Categoria</h1>

<a href="{{ route('categoria.createC') }}" class="btn btn-success">Create</a>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Url</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($categorias as $categoria)
      <tr>
      <th scope="row">{{ $categoria ->id }}</th>
        <td>{{ $categoria->title }}</td>
        <td>{{ $categoria->url_clean }}</td>
        
    @endforeach

  </tbody>
</table>

<div class="mt-3">{{ $categorias->links() }}</div>

@endsection