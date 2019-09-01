@extends ('layout.admin')
@section( ('contenido'))

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Listado de Usuarios <a href=""><button class="btn btn-success">Nuevo</button></a></h3>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Opciones</th>
                    </thead>
                        <tr>
                            <td></td>
                            <td></td>

                            <td>
                                <a href=""><i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href=""><i class="fa fa-trash" aria-hidden="true" style="color:red"></i></a>
                            </td>
                        </tr>
                        @include('administrador.usuarios.modal')
                </table>
            </div>
        </div>
    </div>
@endsection
