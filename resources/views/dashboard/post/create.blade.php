@extends('layouts.master')

@section('content')
@include('fragments.validation-errors')
@include('fragments.sesion')
<hi>Post</hi>
<form method="post" action="{{route("post.store")}}" >
    @csrf
    @include('dashboard.post._form')
</form>

@endsection