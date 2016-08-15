@extends('app')

@section('title', $step . '::Link')

@section('content')
    Step {{ $step }} - iframe(Outside)<br/>
    <iframe src="{{ $redirectPath }}" frameborder="1px" width="50%"></iframe>
@endsection
