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
        </tr>
        @endforeach

</table>