@extends('app')

@section('title', $step . '::Maze')

@section('content')
    Step {{ $step }} - JavaScript redirects<br/>
    window.location in $(function () {}
@endsection

@section('js')
    <script>
        $(function () {
            window.location = "{{ $redirectPath }}";
        });
    </script>
@endsection
