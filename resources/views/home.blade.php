@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="jumbotron">
            <div class="container">
                <h1>Welcome!</h1>
                <p><strong>Go To Tasks To Manage Your Tasks</strong></p>
                <p><a class="btn btn-primary btn-lg" href="{{ url('tasks') }}" role="button">Tasks »</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
