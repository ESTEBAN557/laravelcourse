@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', 'Success')
@section('content')
<div class="alert alert-success" role="alert">
  {{ $viewData["message"] }}
</div>
@endsection
