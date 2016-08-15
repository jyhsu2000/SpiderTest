@extends('app')

@section('title', $step . '::Link')

@section('css')
    <style>
        #linkBox {
            color: #4183C4;
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    Step {{ $step }} - jQuery simulation<br/>
    <div id="linkBox">Link</div>
@endsection

@section('js')
    <script>
        $(function () {
            var $linkBox = $("#linkBox");
            $linkBox.on("custom", function (event, url) {
                location.href = url;
            });
            $linkBox.click(function () {
                $("#linkBox").trigger("custom", "{{ $redirectPath }}");
            });
        });
    </script>
@endsection
