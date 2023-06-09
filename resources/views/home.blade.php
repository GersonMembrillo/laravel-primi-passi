<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <h1>{{ $page_title }}</h1>
    <p>{{ $description }}</p>
    {{--  <a href="/contacts">Vai ai contatti</a> --}}
    {{-- <a href="{{ route('Contatti') }}">Vai ai contatti</a> --}}
    {{-- riga 37 ->name('Contatti') ⬆ --}}
    @if (count($members) > 0)
        <h4>Crew</h4>
        <ul>
            @foreach ($members as $member)
                <li><a href="/{{ $member }}">{{ $member }}</a></li>
            @endforeach
        </ul>
    @endif
    @if (count($teachers) > 0)
        <h4>Professori</h4>
        <ul>
            @foreach ($teachers as $teacher)
                <li>{{ $teacher }}</li>
            @endforeach
        </ul>
    @endif
</body>

</html>
