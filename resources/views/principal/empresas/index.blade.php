@extends ('layout.admin')
@section( ('contenido'))
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Listado de Empresas <a href="empresas/create"><button class="btn btn-success">Nuevo</button></a></h3>
            @include('principal.empresas.search')
        </div>
    </div>

    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                    <th>Nombre</th>
                    <th>Sucursal</th>
                    <th>Imagen</th>
                    <th>Opciones</th>
                    </thead>
                    @foreach($empresas as $emp)
                        <tr>
                            <td>{{$emp->Nombre}}</td>
                            <td>{{$emp->Sucursal}}</td>
                            <td>{{$emp->Imagen}}</td>
                            <td>
                                <a href=""><i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="" data-target="#modal-delete-{{$emp->idempresa}}" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true" style="color:red"></i></a>
                            </td>
                        </tr>
                    @include('principal.empresas.modal')
                        @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
