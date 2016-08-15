@extends('app')

@section('title', $step . '::Maze')

@section('content')
    Step {{ $step }} - JavaScript redirects<br/>
    window.location.assign()
@endsection

@section('js')
    <script>
        window.location.assign("{{ $redirectPath }}");
    </script>
@endsection
