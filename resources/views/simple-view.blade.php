@extends('layouts.app')

@section('title', 'Laravel od podstaw - Strefa kursów')

@section('content')
    <h1>
        Laravel od podstaw
    </h1>
    <p>
        Hello {{ $name }}
    </p>

    @if ($number > 5)
        <p>Szczęście Ci sprzyja {{ $number }}</p>
    @else
        <p>Ale pech {{ $number}} </p>
    @endif

    @for($i = 0; $i < 50; $i++)
        <p>{{ $i }}</p>
    @endfor
@endsection
