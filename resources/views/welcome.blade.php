
<!DOCTYPE html>
<html>
    <head>
        <title>Trebool</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
    <h1>Treni in partenza</h1>
<ul>
@foreach ($treni as $treno)
    <li>{{ $treno->partenza }} - {{ $treno->destinazione }}</li>
@endforeach
</ul>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
