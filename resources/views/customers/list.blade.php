@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card shadow">
        <div class="card-header">Clientes</div>
        <div class="card-body">
            <div class="mb-3">
                <a href="{{ url('customers/create') }}" class="btn btn-info btn-sm text-white">Novo Cliente</a>
            </div>
            <div class="table-responsive">
            <table id="customer-table" class="table table-sttriped" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Cidade</th>
                        <th>Editar</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->city->name }}</td>
                        <td><a href="{{ url('/customers/'.$customer->id.'/edit') }}"  class='btn btn-warning btn-sm text-white'><span style='font-size:18px' class='material-icons'>edit</span></a></td>
                        <td>
                            <form action='{{url("customers/$customer->id")}}' class="input-group" method="POST">
                                {{method_field('DELETE')}}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm"><span style='font-size:18px' class='material-icons'>delete_outline</span></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Cidade</th>
                        <th>Editar</th>
                        <th>Deletar</th>
                    </tr>
                </tfoot>
            </table>
            </div>
        </div>
    </div>
</div>
@endsection

