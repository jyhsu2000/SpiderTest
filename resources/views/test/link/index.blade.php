@extends('app')

@section('title', 'Link')

@section('content')
    Link
    <div class="ui segment">
        <ul>
            <li>{{ link_to_route('test.link','Link',1) }}</li>
        </ul>
    </div>
@endsection
