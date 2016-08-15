@extends('app')

@section('title', 'SimpleLink')

@section('content')
    SimpleLink
    <ul>
        @foreach($httpStatusCodes as $code => $message)
            <li>
                <a href="{{ route('test.simpleLink',$code) }}">
                    {{ $code }} - {{ $message }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
