@extends('layout.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h1>Nuevo Departamento</h1>
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
    {!!Form::open(array('url'=>'administrador/departamento','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
    {{Form::token()}}
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" required id="" value="{{old('Nombre')}}" class="form-control" placeholder="Nombre ...">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <select name="iddepartamento" id="" class="form-control">
                    @foreach($departamento as $cat)
                        <option value="{{$dep->iddepartamento}}">{{$dep->Nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar </button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
        </div>
    </div>
    {!!Form::close()!!}

@endsection
