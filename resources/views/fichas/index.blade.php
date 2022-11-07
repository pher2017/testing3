@extends('fichas.layout')

@section('content')
    <p></p>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left my-3 mb-5">
                <h2>Fichas </h2>
            </div>
          @if ( $errors->any() )
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <div class="col-lg-12 mb-4">

                    <form action="{{route('fichas.index')}}" method="GET" class="form-inline">
                        <div class="row mb-2">
                            <div class="col-6">
                                <input type="text" class="form-control" name="search" placeholder="Buscar por Apellido"
                                    value="{{ request()->get('search') }}">
                            </div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-primary">Buscar</button>
                            </div>
                            <div class="col-4">
                                <div class="d-flex flex-row-reverse">
                                    <div class="">
                                        <a class="btn btn-success" href="{{ route('fichas.create') }}"> Crear
                                            Ficha</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

            </div>
        </div>
    </div>


    <div class="table-responsive">
        <table class="table table-striped mt-2">
            <tr style="text-align: center">
                <th>No</th>
                <th>Rut</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Direccion</th>
                <th>Ciudad</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Fecha Nacimiento</th>
                <th>Estado Civil</th>
                <th>Comentarios</th>
                <th width="200px">Action</th>
            </tr>
            @foreach ($fichas as $ficha)
                <tr class="text-nowrap">
                    <td>{{ $ficha->id }}</td>
                    <td>{{ $ficha->rut }}</td>
                    <td>{{ $ficha->nombres }}</td>
                    <td>{{ $ficha->apellidos }}</td>
                    <td>{{ $ficha->direccion }}</td>
                    <td>{{ $ficha->ciudad }}</td>
                    <td>{{ $ficha->telefono }}</td>
                    <td>{{ $ficha->email }}</td>
                    <td>{{ $ficha->fecha_nacimiento }}</td>
                    <td>{{ $ficha->estado_civil }}</td>
                    <td>{{ $ficha->comentarios }}</td>
                    <td style="text-align:center">
                        <form action="{{ route('fichas.destroy', $ficha->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('fichas.show', $ficha->id) }}"><i
                                    class="fa-sharp fa-solid fa-eye"></i></a>

                            <a class="btn btn-primary" href="{{ route('fichas.edit', $ficha->id) }}"><i
                                    class="fa-solid fa-pen-to-square"></i></a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
