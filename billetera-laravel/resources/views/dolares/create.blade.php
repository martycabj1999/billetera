<div class="row justify-content-center">
    <div class="card" style="width: 40rem;">

        <div class="card-header" align="center">
            <h2>Alta Dolar</h2>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error) 
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="POST" action="{{ url('dolares') }}">
                {!! csrf_field() !!}

                <div class="form-row">
                    <div class="form-group col">
                        <label for="precio">Precio</label>
                        <input class="form-control" type="number" min="0" step="0.01" name="precio" id="precio" value="{{ old('precio') }}" placeholder="Precio" />
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col">
                        <label for="fecha">Fecha</label>
                        <input class="form-control" type="date" id="fecha" value="{{ old('fecha') }}" name="fecha" placeholder="Fecha" />
                    </div>
                </div>

                <br>

                <div class="form-row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary btn-block">Crear</button>
                    </div>
                    <div class="col">
                        <a href="{{ url('dolares') }}" class="btn btn-warning btn-block">Volver</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
</div>