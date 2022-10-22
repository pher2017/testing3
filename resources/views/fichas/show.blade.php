@extends('fichas.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ver Ficha</h2>
            </div>
            <div class="d-flex flex-row-reverse">
                <a class="btn btn-primary" href="{{ route('fichas.index') }}"> Volver</a>
            </div>
        </div>
    </div>
    <div class="card-body">
         <form action="{{ route('fichas.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rut:</strong>
                        {{$ficha->rut}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombres:</strong>
                    {{$ficha->nombres}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Apellidos:</strong>
                    {{$ficha->apellidos}}
                </div>
            </div>
            <div class="col-xs-12 col-md-12">
                <div class="form-group">
                    <strong>Direccion:</strong>
                    {{$ficha->direccion}}
                </div>
            </div>
            <div class="col-xs-12 col-md-12">
                <div class="form-group">
                    <strong>Ciudad:</strong>
                    {{$ficha->ciudad}}
                </div>
            </div>
            <div class="col-xs-12 col-md-12">
                <div class="form-group">
                    <strong>Telefono:</strong>
                    {{$ficha->telefono}}
                </div>
            </div>
            <div class="col-xs-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    {{$ficha->email}}
                </div>
            </div>
            <div class="col-xs-12 col-md-12">
                <div class="form-group">
                    <strong>Fecha de Nacimiento:</strong>
                    {{$ficha->fecha_nacimiento}}
                </div>
            </div>
            <div class="col-xs-12 col-md-12">
                <div class="form-group">
                    <strong>Estado Civil</strong>
                    {{$ficha->estado_civil}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Comentarios:</strong>
                    {{$ficha->comentarios}}
                </div>
            </div>

    </form>
    </div>

@endsection
