@extends('layout.admin2')
@section('contenido')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h1>Editar Empresa: {{$empresa->nombre}}</h1>
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    {!!Form::model($empresa,['method'=>'PATCH','route'=>['principal.empresas.update', $empresa->idempresa],'files'=>'true'])!!}
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
                        <label for="Sucursal">Sucursal</label>
                        <input type="text" name="Sucursal" required id="" value="{{old('Sucursal')}}" class="form-control" placeholder="Sucursal ...">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="Direccion">Direccion</label>
                        <input type="text" name="Direccion" required id="" value="{{old('Direccion')}}" class="form-control" placeholder="Direccion ...">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="Numero">Numero</label>
                        <input type="number" name="Numero" required id="" value="{{old('Numero')}}" class="form-control" placeholder="Numero ...">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="Municipio">Municipio</label>
                        <input type="text" name="Municipio" required id="" value="{{old('Municipio')}}" class="form-control" placeholder="Municipio ...">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="C_P">Codigo Postal</label>
                        <input type="number" name="C_P" required id="" value="{{old('C_P')}}" class="form-control" placeholder="Codigo Postal ...">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="Telefono">Telefono</label>
                        <input type="tel" name="Telefono" required id="" value="{{old('Telefono')}}" class="form-control" placeholder="Telefono ...">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="Telefono2">Telefono 2</label>
                        <input type="tel" name="Telefono2" required id="" value="{{old('Telefono2')}}" class="form-control" placeholder="Telefono 2 ...">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="Correo">Correo</label>
                        <input type="email" name="Correo" required id="" value="{{old('Correo')}}" class="form-control" placeholder="Correo...">
                    </div>
                </div><div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="Pagina_web">Pagina Web</label>
                        <input type="url" name="Pagina_web" required id="" value="{{old('Pagina_web')}}" class="form-control" placeholder="Pagina web ...">
                    </div>
                </div><div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="Identificacion">Identificacion</label>
                        <input type="text" name="Identificacion" required id="" value="{{old('Identificacion')}}" class="form-control" placeholder="Identificacion...">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="Imagen">Imagen</label>
                        <input type="text" name="Imagen" required id="" value="{{old('Imagen')}}" class="form-control" placeholder="Imagen ...">
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
