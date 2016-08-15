@extends('app')

@section('title', $step . '::Link')

@section('content')
    Step {{ $step }} - a.onClink<br/>
    Hint: fake link in href<br/>
    <a href="{{ route('test.simpleLink', 404) }}" onclick="location.href='{{ $redirectPath }}';return false">Link</a>
@endsection
