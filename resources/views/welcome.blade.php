@extends('layouts.app')

@section('title', 'Laravel od podstaw - Strefa kursów')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Laravel od podstaw</h1>
            </div>
        </div>
    </div>
    <a href="{{ route('index') }}">
        Strona główna
    </a><br><br>
    <a href="{{ route('index.other') }}">
        Strona inna
    </a>
    <p>
        <a href="">
            {{ url()->current() }}
        </a>
    </p>
    <p>
        <a href="url()->full()">
            {{ url()->full() }}
        </a>
    </p>
</div>
@endsection

