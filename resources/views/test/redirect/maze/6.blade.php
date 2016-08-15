@extends('app')

@section('title', $step . '::Maze')

@section('content')
    Step {{ $step }} - JavaScript redirects<br/>
    window.location.replace
@endsection

@section('js')
    <script>
        window.location.replace("{{ $redirectPath }}");
    </script>
@endsection
