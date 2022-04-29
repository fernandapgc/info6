@extends('layouts.master')

@section('content')
@include('fragments.validation-errors')
@include('fragments.sesion')
<hi>Categoria</hi>
<form method="categoria" action="{{route("categoria.store")}}" >
    @csrf
    @include('dashboard.categoria._forms')
</form>

@endsection