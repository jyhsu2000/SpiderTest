@extends('app')

@section('title', $step . '::Maze')

@section('content')
    Step {{ $step }} - meta refresh
    <meta http-equiv="refresh" content="0;url={{ $redirectPath }}">
@endsection
