@extends ('layout.admin')
@section( ('contenido'))

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Listado de Departamentos <a href="{{$id}}/create"><button class="btn btn-success">Nuevo</button></a></h3>

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
                    <th>Identificacion</th>
                    <th>Opciones</th>
                    </thead>
                    @foreach($departamentos as $dep)
                        <tr>
                            <td>{{$dep->Nombre}}</td>
                            <td>{{$dep->Descripcion}}</td>
                            <td>{{$dep->Identificacion}}</td>

                            <td>
                                <a href=""><i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                               <!-- <a href="" data-target="#modal-delete-{{$dep->iddepartamento}}" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true" style="color:red"></i></a>
                           --> </td>
                        </tr>
                      <!--  -->
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
