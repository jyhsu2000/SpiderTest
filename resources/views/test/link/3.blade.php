@extends('app')

@section('title', $step . '::Link')

@section('content')
    Step {{ $step }} - RaNdOm CaSe<br/>
    <A hReF="{{ $redirectPath }}" href=" ">


        Link
    </a>
@endsection
