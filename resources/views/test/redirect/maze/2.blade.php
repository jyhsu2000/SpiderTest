@extends('app')

@section('title', $step . '::Maze')

@section('content')
    Step {{ $step }} - meta refresh with 3 seconds delay
    <meta http-equiv="refresh" content="3;url={{ $redirectPath }}">
@endsection
