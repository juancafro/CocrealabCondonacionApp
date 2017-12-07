

    <h4>Solicitudes por revisar</h4>
    <hr>
    <div class="panel-body">
        @foreach($applications as $application)
          <div class="row">
               <p><strong>Solicitud {{$application->id}}</strong></p>
               <p>{{$application->type->name}}</p>
               <small class="pull-right"><a href="{{ route('review_application_path',['application' => $application->id])}}" class="btn btn-primary">Revisar</a></small>
               <p>Realizada por {{$application->user->name}}</p>
           </div>
        <hr>
        @endforeach
    </div>
