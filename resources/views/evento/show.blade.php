@extends('layouts.app')

@section('template_title')
    {{ $evento->name ?? 'Show Evento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles de Evento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('eventos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $evento->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $evento->Categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Restriccion:</strong>
                            {{ $evento->Restriccion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $evento->Fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $evento->Hora }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $evento->Monto }}
                        </div>
                        <div class="form-group">
                            <strong>Aforo:</strong>
                            {{ $evento->Aforo }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            <img src="{{ asset('storage').'/'.$evento->Foto }}" width="200px" alt="image">.
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
