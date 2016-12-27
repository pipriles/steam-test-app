@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <h5> {{ $username }} </h5>
                    <p> {{ $avatar }} </p>
                    <p> {{ $steamid }} </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
