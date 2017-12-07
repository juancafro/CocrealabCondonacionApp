@extends('layouts.app')
@section('content')
<div class="panel-body">
    <h3>Crear una nueva solicitud</h3>
    <form name='CreateForm' method="post" enctype="multipart/form-data" action="{{route('store_application_path')}}">
        {{csrf_field()}}
        <div class="container">
                <div class="form-group">
                    <label for="type_id" class="col-md-4 control-label">Tipo de solicitud</label>
                        <select id="type_id" name="type_id" class="form-control">
                            @foreach($types as $type)
                            <option value="{{$type->id}}" >{{$type->description}}</option>
                            @endforeach
                        </select>
                    <hr>
                </div>
                <div class="form-group">
                    <h4>Anexos del procesos</h4>
                    <hr>
                    <p>
                        Adjunta los anexos para su revision, si nesecitas mas informacion de los requisitos de cada proceso has click  <a href="">aquí</a>
                    </p>
                    <hr>
                </div>
                <div class="form-group">
                    <label for="files">Archivos de proceso(se pueden insertar multiples archivos a la vez)<br></label>
                    <input type="file" id="file[]" name="file[]" class="form-control" multiple required="true">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary col-md-4" type="submit">Crear Solicitud</button>
                </div>
        </div>

    </form>
</div>


@endsection