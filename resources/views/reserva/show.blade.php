@extends('layouts.app')

@section('template_title')
    {{ $reserva->name ?? 'Show Reserva' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Reserva</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('reservas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $reserva->Nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $reserva->Apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $reserva->Dni }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $reserva->Correo }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $reserva->Celular }}
                        </div>
                        <div class="form-group">
                            <strong>Evento Id:</strong>
                            {{ $reserva->Evento_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
