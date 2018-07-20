@extends('layouts.app')

@section('content')
<div class="container">
    <div class="App">
        <br><br>
    <div class="App-header">
        <img src="static/sentry-glyph-black.png" alt="logo" class="App-logo">
        <h1>Sentry.io -  Sample Error Page</h1>
    </div>
    <br>

    {{--<div class="center form-group">--}}
        {{--<form action="/" method="get" class="form-group">--}}
            {{--<!--{% csrf_token %}-->--}}
            {{--<input id="email" type="email" name="email" class="form-control" placeholder="Enter email">--}}
            {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
        {{--</form>--}}
    {{--</div>--}}

    <h2>Hi, {{Auth::user()->email}}.</h2>

    <ul class="center list-group">
        <li class="list-group-item list-group-item-danger">
                <h3>PHP/Laravel Errors</h3>
        </li>

        <li class="list-group-item">
                <h3><a href="/undefined_variable">Undefined Variable</a></h3>
        </li>

        <li class="list-group-item">
                <h3><a href="/divbyzero">Division by 0</a></h3>
        </li>

        <li class="list-group-item">
                <h3><a href="/invalidfile">Include invalid file</a></h3>
        </li>
        <li class="list-group-item">
                <h3><a href="/outofrange">Out of Range Error</a></h3>
        </li>

        <li class="list-group-item">
                <h3><a href="/invalidfunction">Invalid function error</a></h3>
        </li>
    </ul>


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                {{ Auth::user()->email }}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
