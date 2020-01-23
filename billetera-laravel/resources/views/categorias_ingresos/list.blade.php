<h2 align="center">Panel de Administracion - Categorias Ingresos</h2>
<br>
<div align="center"><a href="{{ url('categorias_ingresos/alta') }}" class="btn btn-success " role="button">Crear Categoria Ingreso</a>
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

        @foreach($categorias_ingresos as $categoria)
        <tr data-id="{{$categoria->id}}">
            <td>{{$categoria->id}}</td>
            <td>{{$categoria->nombre}}</td>
            <td>{{$categoria->descripcion}}</td>
        </tr>
        @endforeach

</table>