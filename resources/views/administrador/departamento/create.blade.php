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
    {!!Form::open(array('url'=>'administrador/departamento/'.$empresa->idempresa.'','method'=>'POST','autocomplete'=>'off'))!!}
    {{Form::token()}}
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="Nombre">Nombre</label>
                <input type="text" name="Nombre" required id="" value="{{old('Nombre')}}" class="form-control" placeholder="Nombre ...">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="Descripcion">Descripcion</label>
                <input type="text" name="Descripcion" required id="" value="{{old('Descripcion')}}" class="form-control" placeholder="Descripcion ...">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="Identificacion">Identificacion</label>
                <input type="text" name="Identificacion" required id="" value="{{old('Identificacion')}}" class="form-control" placeholder="Identificacion ...">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="Empresa">Empresa</label>
                <p> {{$empresa->Nombre}} {{$empresa->Sucursal}}</p>
                <input type="hidden" name="idempresa" required id="" value="{{$empresa->idempresa}}" class="form-control" placeholder="Identificacion ...">
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
        </div>
    </div>
    {!!Form::close()!!}

@endsection

