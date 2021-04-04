@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title"><span class="material-icons">group_add</span></h5>
                                    <p class="text-right">Gerenciamento de clientes</p>
                                    <div class="text-right">
                                        <a href="{{ url('/customers') }}" class="btn btn-light">Acessar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">                            
                            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title"><span class="material-icons">people_alt</span></h5>
                                    <h4 class="card-title text-right">{{ $data['customers'] }}</h4>
                                    <p class="text-right">Clientes atuais</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-dark bg-warning mb-3" style="max-width: 18rem;">
                                 <div class="card-body">
                                    <h5 class="card-title"><span class="material-icons">location_on</span></h5>
                                    <h4 class="card-title text-right">{{ $data['cities'] }}</h4>
                                    <p class="text-right">Cidades atuais</p>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
