@extends('app')

@section('title', $code . '::' . $message . '::SimpleLink')

@section('css')
    <style>
        .jumbotron {
            text-align: center;
            background: rgba(100, 100, 100, .6);
            margin-top: 20vh;
            padding-top: 40px;
            border-radius: 20px;
        }
        .ui.sub.header {
            text-transform: none;
        }
    </style>
@endsection
@section('content')
    <div class="jumbotron">
        <div class="ui translucent vertical center aligned segment">
            <h1 class="ui inverted center aligned icon header">
                <i class="circular inverted red massive marker icon"></i>
                {{ $code }}
                <p class="ui sub header">
                    {{ $message }}
                </p>
            </h1>
        </div>
    </div>
@endsection
