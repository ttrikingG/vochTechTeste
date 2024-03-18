@extends('master')

@section('content')
<div class="container mt-5">
    <a class="btn btn-primary" href="{{ route('myApp')}}" role="button">Voltar</a>
    <h3>Tabela de Colaboradores</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">E-mail</th>
                <th scope="col">Unidade</th>
                <th scope="col">Cargo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user) 
                <tr>
                    <td>{{ $user->nome }}</td>
                    <td>{{ $user->cpf }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->unidade->nome_fantasia }}</td>
                    <td>
                        @foreach($user->cargoColaborador as $cargoColab)
                            {{ $loop->first ? '' : ', ' }}{{ $cargoColab->cargo->cargo }}
                        @endforeach
                    </td>
                </tr>
            @endforeach 
        </tbody>
    </table>
    
</div>

{{ $users->links() }}
@endsection