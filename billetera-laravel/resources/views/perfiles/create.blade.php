<div class="row justify-content-center">
    <div class="card" style="width: 40rem;">

        <div class="card-header" align="center">
            <h2>Alta Perfil</h2>
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
            <form method="POST" action="{{ url('perfiles') }}">
                {!! csrf_field() !!}

                <div class="form-row">
                    <div class="form-group col">
                        <label for="nombre">Nombre</label>
                        <input class="form-control" type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" placeholder="Nombre" />
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col">
                        <label for="descripcion">Descripcion</label>
                        <input class="form-control" type="text" style="width:608px; height:100px;" id="descripcion" value="{{ old('descripcion') }}" name="descripcion" placeholder="Descripcion" />
                    </div>
                </div>

                <br>

                <div class="form-row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary btn-block">Crear</button>
                    </div>
                    <div class="col">
                        <a href="{{ url('perfiles') }}" class="btn btn-warning btn-block">Volver</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
</div>