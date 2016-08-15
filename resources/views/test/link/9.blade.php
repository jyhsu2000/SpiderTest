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
    Step {{ $step }} - jQuery event<br/>
    <div id="linkBox">Link</div>
@endsection

@section('js')
    <script>
        $(function () {
            $('#linkBox').click(function () {
                location.href = '{{ $redirectPath }}';
            });
        });
    </script>
@endsection
