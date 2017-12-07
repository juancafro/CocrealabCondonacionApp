@extends('layouts.app')


@section('content')
<div class="panel-body">
    <div><h4>revisar una solicitud</h4>
        <hr>
    </div>
    <div class="container">
        <p><strong>solicitud: </strong>{{$application->id}}<p>
        <p><strong>creada por:</strong> {{$application->user->name}}</p>
        <p><strong>tipo de solicitud:</strong> {{$application->type->name}}</p>
        <p><strong>Creado :</strong> {{$application->created_at->diffForHumans()}}</p>
        <p><strong>Documentos para revisar :</strong></p>
        <hr>
        <div class="form-group">
            @foreach($documents as $document)
            <a href="{{ route('download_file',['document'=>$document]) }}">{{$document->name}}</a>
            @endforeach
        </div>
        <hr>
    </div>
    <form action="{{route('update_application_path',['application' => $application->id])}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="container">
        <div class="form-group">
            <label for="status">Resultado de la revision</label><br>
            @if(Auth::user()->role_id == 2)
                <label><input id="status_id" name="status_id" type="radio" value=2>Aprobado</label><br>
            @else
                <label><input id="status_id" name="status_id" type="radio" value=3>Aprobado</label>
            @endif
                <label><input id="status_id" name="status_id" type="radio" value=4>Rechazado<br></label>

            <div class="form-group">
                <label for="observations">Observaciones de la revision</label><br>
                @if(Auth::user()->role_id == 2)
                <textarea id="observations" name="observations" class="form-control" rows="5">Observaciones de cocrealab({{Auth::user()->name}}) : ninguna observacion registrada</textarea>
                @else
                <textarea id="observations" name="observations" class="form-control" rows="5">{{old}}Observaciones de MinTic({{Auth::user()->name}}) : ninguna observacion registrada</textarea>
                @endif
            </div>


        <div>
              <button type="submit" class="btn btn-primary">Enviar Resultado</button>
        </div>
        </div>
    </form>
</div>
@endsection