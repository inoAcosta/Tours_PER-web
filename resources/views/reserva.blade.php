@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('RESERVA') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('reserva') }}">

                        <div class="row mb-3">
                            <label for="dni" class="col-md-4 col-form-label text-md-end">{{ __('DNI') }}</label>

                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="apellido" class="col-md-4 col-form-label text-md-end">{{ __('Apellidos') }}</label>

                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="direccion" class="col-md-4 col-form-label text-md-end">{{ __('Dirreccion') }}</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="telefono" class="col-md-4 col-form-label text-md-end">{{ __('Telefono') }}</label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="reserva" class="col-md-4 col-form-label text-md-end">{{ __('Lugar_reservar') }}</label>

                            <div class="col-md-6">
                                <input id="reserva" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pago" class="col-md-4 col-form-label text-md-end">{{ __('Pagos') }}</label>

                            <div class="col-md-6">
                                <input id="pago" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

