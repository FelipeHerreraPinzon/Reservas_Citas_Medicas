@extends('layouts.panel')

@section('content')
<div class="row">
        <div class="col-md-12 mb-4">
            <div class="card">
                <div class="card-header">{{ __('Salud Masin') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenid@') }}
                </div>
            </div>
        </div>

          
    <center>
    <img src="{{ asset('img/brand/logo_sm.jpeg') }}" alt="" width="80%">
    </center>
     
@endsection
