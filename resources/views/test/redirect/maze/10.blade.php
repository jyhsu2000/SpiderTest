@extends('app')

@section('title', $step . '::Maze')

@section('content')
    Step {{ $step }} - JavaScript redirects<br/>
    confused script and function call
@endsection

@section('js')
    <script>
        eval(function (p, a, c, k, e, d) {
            e = function (c) {
                return (c < a ? "" : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36))
            };
            if (!''.replace(/^/, String)) {
                while (c--)d[e(c)] = k[c] || e(c);
                k = [function (e) {
                    return d[e]
                }];
                e = function () {
                    return '\\w+'
                };
                c = 1;
            }
            while (c--)if (k[c])p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
            return p;
        }('2 1=3(0){5.4=0};', 6, 6, 'url|jsRedirectTo|var|function|href|location'.split('|'), 0, {}));
        jsRedirectTo("{{ $redirectPath }}");
    </script>
@endsection
