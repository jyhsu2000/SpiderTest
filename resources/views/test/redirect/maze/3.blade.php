@extends('app')

@section('title', $step . '::Maze')

@section('content')
    Step {{ $step }} - JavaScript redirects<br/>
    window.location
@endsection

@section('js')
    <script>
        window.location = "{{ $redirectPath }}";
    </script>
@endsection
