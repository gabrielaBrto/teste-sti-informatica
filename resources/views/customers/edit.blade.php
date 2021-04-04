@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card shadow">
        <div class="card-header">Editar de cliente</div>
        <div class="card-body">
            <form method="POST" action="{{ url('customers/'.$data['customer']->id) }}">
                @method('PUT')
                @csrf
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="name">Nome</label>
                        <input id="name" type="text" value="{{ $data['customer']->name }}" class="form-control @error('name') is-invalid @enderror" name="name" >
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="city_id">Cidade</label>
                        <select class="form-control @error('city_id') is-invalid @enderror" id="city_id" name="city_id">
                            <option selected value="">Selecione</option>
                            @foreach($data['cities'] as $city)
                                <option {{ isset($data['customer']) && $data['customer']->city_id == $city->id ? 'selected' : '' }} value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                        @error('city_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group mb-0 mt-4">
                    <button type="submit" class="btn btn-success float-right">
                    Enviar   
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
