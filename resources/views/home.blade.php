@extends('layouts.app') @section('content')
<div class="App">
    <br>
    <br>
    <div class="App-header">
        <img src="img/sentry-glyph-black.png" alt="logo" class="App-logo">
        <h1>Sentry.io - Sample Error Page</h1>
    </div>
    <br> {{--

    <div class="center form-group">--}} {{--
        <form action="/" method="get" class="form-group">--}} {{--
            <!--{% csrf_token %}-->--}} {{--
            <input id="email" type="email" name="email" class="form-control" placeholder="Enter email">--}} {{--
            <button type="submit" class="btn btn-primary">Submit</button>--}} {{--
        </form>--}} {{--
    </div>--}}

    @if (Auth::check())
        <h2>Hi, {{Auth::user()->email}}.</h2>
    @else
        <h2>Hi, guest.</h2>
    @endif

    <ul class="center list-group">
        <li class="list-group-item list-group-item-danger">
            <h3>PHP/Laravel Errors</h3>
        </li>

        <li class="list-group-item">
            <h3>
                <a href="/undefined_variable">Undefined Variable</a>
            </h3>
        </li>

        <li class="list-group-item">
            <h3>
                <a href="/divbyzero">Division by 0</a>
            </h3>
        </li>

        <li class="list-group-item">
            <h3>
                <a href="/invalidfile">Include invalid file</a>
            </h3>
        </li>
        <li class="list-group-item">
            <h3>
                <a href="/outofrange">Out of Range Error</a>
            </h3>
        </li>

        <li class="list-group-item">
            <h3>
                <a href="/invalidfunction">Invalid function error</a>
            </h3>
        </li>
    </ul>

    <ul class="center list-group">
        <li class="list-group-item list-group-item-danger">
                <h3>JavaScript Errors</h3>
        </li>

        <li class="list-group-item">
                <h3><a href="" onclick="(function() { var x = {}; x.something(); })()">Uncaught TypeError</a></h3>
        </li>

    </ul>
</div>
@endsection
