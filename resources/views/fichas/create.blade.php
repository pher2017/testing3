@extends('fichas.layout')

@section('content')
    <p></p>
    <div class="card">
        <div class="card-header">
                <h2>Nueva Ficha</h2>
            <div class="d-flex flex-row-reverse">
                <a class="btn btn-primary" href="{{ route('fichas.index') }}"> Cerrar</a>
            </div>
        </div>


        <div class="card-body">
            <form action="{{ route('fichas.store') }}" method="POST">
                @csrf
                <div class="input-group mb-3    ">
                    <span class="input-group-text">Rut:</span>
                    <input type="text" name="rut" class="form-control" placeholder="Rut">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Nombres:</span>
                    <input type="text" name="nombres" class="form-control" placeholder="Nombres">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Apellidos:</span>
                    <input type="text" name="apellidos" class="form-control" placeholder="Apellidos">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Direccion:</span>
                    <input type="text" name="direccion" class="form-control" placeholder="Direccion">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Ciudad:</span>
                    <input type="text" name="ciudad" class="form-control" placeholder="Ciudad">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Telefono:</span>
                    <input type="number" name="telefono" class="form-control" placeholder="Telefono">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Email:</span>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Fecha de Nacimiento:</span>
                    <input type="date" name="fecha_nacimiento" class="form-control" placeholder="Fecha de Nacimiento">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Estado Civil:</span>
                    <input type="text" name="estado_civil" class="form-control" placeholder="Estado Civil">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Comentarios:</span>
                    <textarea class="form-control" style="height:150px" name="comentarios" placeholder="Comentarios"></textarea>
                </div>
                <div class="card-body">
                    <div class="col-xs-12 col-sm-12 col-md-12 d-flex flex-row-reverse">
                        <div class=col-2>
                            <button type="submit" class="btn btn-primary">Guardar</button>

                        </div>
                        &nbsp&nbsp
                        <div class="col-2">
                          <button type="reset"  class="form-control btn-danger" >Limpiar</button>
                        </div>

                    </div>

                </div>


            </form>
        </div>



    </div>
@endsection
