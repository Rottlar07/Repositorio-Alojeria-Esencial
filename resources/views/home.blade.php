@extends('layouts.app')

@section('content')

    <!-- Titulo -->
    <div class="container-fluid title" style="background: rgb(1,33,51); background: linear-gradient(90deg, rgba(1,33,51,1) 0%, rgba(0,128,128,1) 10%, rgba(0,180,162,1) 20%, rgba(0,153,150,1) 38%, rgba(1,33,51,1) 100%); height: 260px; padding-top: 70px; padding-left: 70px; font-size: 73px; color: #fff; margin-bottom: 30px;">
      <div class="row">
        <div class="col-10 text-center">
          <p><b>{{ __('¡ Bienvenido ') }} {{ Auth::user()->name }} {{ __('!') }}</b></p>
        </div>
      </div>
    </div>
<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡ Bienvenido ') }} {{ Auth::user()->name }} {{ __('!') }}
                </div>
            </div>
        </div>
    </div>
</div>
-->
@endsection
