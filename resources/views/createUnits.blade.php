@extends('master')

@section('content')
<div class="container mt-5">
    <a class="btn btn-primary" href="{{ route('myApp')}}" role="button">Voltar</a>
    <h3>Cadastrar Unidades</h3>

    @if (session()->has('success'))
    <p class="alert alert-success"> {{ session()->get('success') }}</p>
    @elseif(session()->has('error'))
    <p class="alert alert-danger"> {{ session()->get('error') }}</p>
    @endif

    <form action="{{ route('createUnits.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia" placeholder="Nome Fantasia">
            @error('nome_fantasia')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" id="razao_social" name="razao_social" placeholder="Razão Social">
            @error('razao_social')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ">
            @error('cnpj')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
</div>
@endsection
