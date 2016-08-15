@extends('app')

@section('title', $step . '::Link')

@section('content')
    Step {{ $step }} - javascript<br/>
    <div id="linkBox"></div>
@endsection

@section('js')
    <script>
        var createLink = function (url) {
            $('#linkBox').html('<a href="' + url + '">Link</a>');
        };
        $(function () {
            createLink('{{ $redirectPath }}');
        });
    </script>
@endsection
