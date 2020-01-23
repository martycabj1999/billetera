<h2 align="center">Panel de Administracion - Perfiles</h2>
<br>
<div align="center"><a href="{{ url('perfiles/alta') }}" class="btn btn-success " role="button">Crear Perfil</a>
</div>
<br>
<br>
<table class="table table-hover">

    <theader>

        <tr>
            <th>ID </th>
            <th>Nombre</th>
            <th>Descripcion</th>
        </tr>

        @foreach($perfiles as $perfil)
        <tr data-id="{{$perfil->id}}">
            <td>{{$perfil->id}}</td>
            <td>{{$perfil->nombre}}</td>
            <td>{{$perfil->descripcion}}</td>
            <td>
                <a href='{{ url("perfil") }}/editar/{{$perfil->id}}' title="Editar"><i class="fa fa-edit"></i></a>
                <a href='#' title="Eliminar" class="btn-delete"><i class="fa fa-times"></i></a>
            </td>

        </tr>
        @endforeach

</table>