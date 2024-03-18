@extends('master')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="text-center">
        <div class="container">
            <h1>Voch Tech APP</h1>
        </div>

        <div class="container">
            @include('partials.header')
        </div>

        <br>

        <div class="container text-center">
            <h3>Cadastrar</h3>
            <a class="btn btn-outline-success" href="{{ route('createUnits')}}" role="button">Unidades</a>
            <a class="btn btn-outline-success" href="{{ route('createColab')}}" role="button">Colaboradores</a>
        </div>

        <br>

        <div class="container text-center">
            <h3>Notas Colab</h3>
            <a class="btn btn-outline-dark" href="{{ route('notesColab')}}" role="button">Notas</a>
        </div>

        <br>

        <div class="container text-center">
            <h3>Relatórios</h3>
            <a class="btn btn-outline-primary" href="{{ route('colabList')}}" role="button" style="margin-bottom: 1%">Todos Colaboradores</a>
            <a class="btn btn-outline-primary" href="{{ route('colabUnitList')}}" role="button" style="margin-bottom: 1%">Colaboradores por Unidades</a>
            <a class="btn btn-outline-primary" href="{{ route('rankingList')}}" role="button" style="margin-bottom: 1%">Top Ranking</a>
        </div>
    </div>
</div>
@endsection