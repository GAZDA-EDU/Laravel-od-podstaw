@extends('layouts.app')

@section('title', 'Laravel od podstaw - Strefa kursów')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <form method="POST" action="{{ route('index.store') }}">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    @error('email')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @error('password')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                @csrf
            </form>
        </div>
    </div>
</div>
@endsection
