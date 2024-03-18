@extends('master')

@section('content')
<div class="container mt-5">
    <a class="btn btn-primary" href="{{ route('notesColab')}}" role="button">Voltar</a>
    <h3>Atualizar Notas</h3>

    @if (session()->has('success'))
    <p class="alert alert-success"> {{ session()->get('success') }}</p>
    @elseif(session()->has('error'))
    <p class="alert alert-danger"> {{ session()->get('error') }}</p>
    @endif

    <b><p>{{ $user->nome}} | Unidade = {{  $user->unidade['nome_fantasia']}}</p></b>

    <form action="{{ route('notesColab.update', $user->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <input type="text" class="form-control" id="nota" name="nota_desempenho" placeholder="{{ implode(', ', $user->cargoColaborador->pluck('nota_desempenho')->toArray()) }}">
            @error('nota_desempenho')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Atualizar</button>
    </form>
</div>
@endsection
