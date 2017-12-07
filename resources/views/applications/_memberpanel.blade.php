
            <h4>Solicitudes enviadas
            <small class="pull-right"><a href="{{route('create_application_path')}}" class="btn btn-primary">crear nueva solicitud</a></small>
            </h4>
<hr>
<div class="panel-body">
    @foreach($applications as $application)
    <div class="row">
        <p><strong><a href="{{route('application_path',['application' => $application->id])}}">Solicitud #{{$application->id}}</a></strong></p>
        <p>{{$application->type->name}}</p>
        <p>Estado de la solicitud : <strong>{{$application->status->name}}</strong></p>
    </div>
    @endforeach
</div>