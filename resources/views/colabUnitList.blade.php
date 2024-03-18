@extends('master')

@section('content')
<div class="container mt-5">
    <a class="btn btn-primary" href="{{ route('myApp')}}" role="button">Voltar</a>
    <h3>Total de Colaboradores por Unidade</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome Fantasia</th>
                <th scope="col"> Razão Social</th>
                <th scope="col">CNPJ</th>
                <th scope="col">Total de Colaboradores</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($units as $unit) 
            <tr>
                <td>{{ $unit->nome_fantasia }}</td>
                <td>{{ $unit->razao_social }}</td>
                <td>{{ $unit->cnpj }}</td>
                <td style="text-align: center">{{$unit->colaboradores_count }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{ $units->links() }}
@endsection