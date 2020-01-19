<h2 align="center">Panel de Administracion - Ingresos</h2>
<br>
<div align="center"><a href="{{ url('ingresos/alta') }}" class="btn btn-success " role="button">Crear Ingreso</a>
</div>
<br>
<br>
<table class="table table-hover">

    <theader>

        <tr>
            <th>ID </th>
            <th>Monto</th>
            <th>Descripcion</th>
        </tr>

        @foreach($ingresos as $ingreso)
        <tr data-id="{{$ingreso->id}}">
            <td>{{$ingreso->id}}</td>
            <td>{{$ingreso->monto}}</td>
            <td>{{$ingreso->descripcion}}</td>
            <td>
                <a href='{{ url('ingreso') }}/editar/{{$ingreso->id}}' title="Editar"><i class="fa fa-edit"></i></a>
                <a href='#' title="Eliminar" class="btn-delete"><i class="fa fa-times"></i></a>
            </td>

        </tr>
        @endforeach

</table>