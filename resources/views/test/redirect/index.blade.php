@extends('app')

@section('title', 'Redirect')

@section('content')
    Redirect
    <table class="ui table">
        <thead>
        <tr>
            <th>Redirect with / Target page</th>
            @foreach([200,403,404,500] as $code)
                <th> {{ $code }}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach($redirectCodes as $redirectCode)
            <tr>
                <td>{{ $redirectCode }}</td>
                @foreach([200,403,404,500] as $targetCode)
                    <td>
                        <a href="{{ route('test.redirect', [$redirectCode, 5, $targetCode]) }}">
                            {{ $redirectCode }}*5=>{{ $targetCode }}
                        </a>
                    </td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="ui segment">
        <h1 class="ui header">Dangerous</h1>
        <ul>
            <li>{{ link_to_route('test.redirect.keep','Keep Redirect') }}</li>
            <li>{{ link_to_route('test.redirect.loop','Redirect Loop') }}</li>
        </ul>
    </div>
@endsection
