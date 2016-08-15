@extends('app')

@section('title', $step . '::Maze')

@section('content')
    Step {{ $step }} - JavaScript redirects<br/>
    window.location.href
@endsection

@section('js')
    <script>
        window.location.href = "{{ $redirectPath }}";
    </script>
@endsection
