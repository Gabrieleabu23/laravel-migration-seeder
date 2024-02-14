@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<ul>

    @foreach ($trains as $train)
        <li>
            {{'Ordine treno: '.$train ['id']}}
            {{ $train['azienda']}}
            {{'codice treno: '.$train['codice_treno']}}
            {{'   Stazione Partenza: '.$train['stazione_partenza']}}
            {{'   Stazione Arrivo: '.$train['stazione_arrivo']}}
            {{ 'data partenza: '. $train['ora_partenza']}}
            {{ 'data arrivo: '. $train['ora_arrivo']}}
        </li>
    @endforeach
</ul>
@endsection
