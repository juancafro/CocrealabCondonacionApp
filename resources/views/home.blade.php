@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Bienvenido {{$user->name}}</strong><br>
                    <small>{{$user->email}}</small><br>
                    <small>{{$user->role->description}}</small>
                </div>
                <div class="panel-body">
                    @if($user->role->id == 1)
                       @include('applications._memberpanel')
                    @else
                       @include('applications._administratorpanel')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
