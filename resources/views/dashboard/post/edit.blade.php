@extends('layouts.master')

@section('content')
@include('fragments.validation-errors')
@include('fragments.sesion')
<hi>Post</hi>
<form method="POST" action="{{route("post.update", $post->id )}}" >
    @csrf
    @method("PUT")
    @include('dashboard.post._form')
</form>

@endsection