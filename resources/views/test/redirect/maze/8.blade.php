@extends('app')

@section('title', $step . '::Maze')

@section('content')
    Step {{ $step }} - JavaScript redirects<br/>
    location.href with 3 seconds delay
@endsection

@section('js')
    <script>
        setTimeout(function () {
            location.href = "{{ $redirectPath }}";
        }, 3000);
    </script>
@endsection
