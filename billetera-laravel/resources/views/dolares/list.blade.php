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
        </tr>
        @endforeach

</table>