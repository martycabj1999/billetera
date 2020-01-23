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
        </tr>
        @endforeach

</table>