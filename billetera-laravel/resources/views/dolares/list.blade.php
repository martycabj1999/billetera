<h2 align="center">Panel de Administracion - Dolar</h2>
<br>
<div align="center"><a href="{{ url('dolares/alta') }}" class="btn btn-success " role="button">Crear Dolar</a>
</div>
<br>
<br>
<table class="table table-hover">

    <theader>

        <tr>
            <th>Precio</th>
            <th>Fecha</th>
        </tr>

        @foreach($dolares as $dolar)
        <tr data-id="{{$dolar->id}}">
            <td>{{$dolar->precio}}</td>
            <td>{{$dolar->fecha}}</td>
            <td>
                <a href='{{ url("dolar") }}/editar/{{$dolar->id}}' title="Editar"><i class="fa fa-edit"></i></a>
                <a href='#' title="Eliminar" class="btn-delete"><i class="fa fa-times"></i></a>
            </td>

        </tr>
        @endforeach

</table>