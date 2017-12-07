@extends('layouts.app')
@section('content')
<div class="panel-body">
    <div class="container">
        <p><strong>solicitud: </strong>{{$application->id}}<p>
        <p><strong>creada por:</strong> {{$application->user->name}}</p>
        <p><strong>tipo de solicitud:</strong> {{$application->type->name}}</p>
        <p><strong>Creado :</strong> {{$application->created_at->diffForHumans()}}</p>
        <p><strong>status: </strong>{{$application->status->name}}</p>
        <p><strong>observaciones: </strong>{{$application->observations}}</p>
    </div>
</div>
@endsection