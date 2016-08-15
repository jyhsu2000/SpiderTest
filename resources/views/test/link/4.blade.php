@extends('app')

@section('title', $step . '::Link')

@section('content')
    Step {{ $step }} - Nested<br/>
    <a href="{{ route('test.simpleLink', 404) }}">
        <a href="{{ $redirectPath }}">
            Link
        </a>
    </a>
@endsection
