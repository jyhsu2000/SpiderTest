@extends('app')

@section('title', $step . '::Link')

@section('content')
    Step {{ $step }} - a<br/>
    <a href="{{ $redirectPath }}">Link</a>
@endsection
