@extends('master')

@section('content')
<div class="container mt-5">
    <a class="btn btn-primary" href="{{ route('myApp')}}" role="button">Voltar</a>
    <h3>Cadastrar Colaboradores</h3>

    @if (session()->has('success'))
    <p class="alert alert-success"> {{ session()->get('success') }}</p>
    @elseif(session()->has('error'))
    <p class="alert alert-danger"> {{ session()->get('error') }}</p>
    @endif

    <form action="{{ route('createColab.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
            @error('nome')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
            @error('cpf')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <select class="form-select" id="unidades" name="unidade_id">
                <option value="" selected disabled>Selecione a unidade</option>
                @foreach ($units as $unit)
                <option value="{{ $unit->id}}">{{ $unit->nome_fantasia}}</option>
                @endforeach
            </select>
            @error('unidade_id')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <select class="form-select" id="cargos" name="cargo_id">
                <option value="" selected disabled>Selecione um Cargo</option>
                @foreach ($cargos as $cargo)
                <option value="{{ $cargo->id}}">{{ $cargo->cargo }}</option>
                @endforeach
            </select>
            @error('cargo_id')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
</div>
@endsection
