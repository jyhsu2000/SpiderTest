@extends('app')

@section('title', $step . '::Maze')

@section('content')
    Step {{ $step }} - JavaScript redirects<br/>
    script import and function call
@endsection

@section('js')
    {{ Html::script(asset('js/redirect/maze/9.js')) }}
    <script>
        jsRedirectTo("{{ $redirectPath }}");
    </script>
@endsection
