@extends('master')

@section('content')
<div class="container mt-5">
    <a class="btn btn-primary" href="{{ route('myApp')}}" role="button">Voltar</a>
    <h3>Edição de Notas</h3>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Unidade</th>
                <th scope="col">Nota</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user) 
            <tr>
                <td>{{ $user->nome }}</td>
                <td>{{ $user->unidade->nome_fantasia }}</td>
                <td style="text-align: justify; color: red;">{{ implode(', ', $user->cargoColaborador->pluck('nota_desempenho')->toArray()) }}</td>
                <th><a class="btn btn-success" href="{{ route('notesColab.edit', $user->id)}}" role="button">Edit</a></th>
            </tr>
            @endforeach 
        </tbody>
    </table>
</div>
        
{{ $users->links() }}    
@endsection
