@extends('layouts/default')

@section('conteudo')
<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Bem Vindo {{ Auth::user()->name }}!</h1>
            <p class="lead">Aproveite para fuçar em seu trabalho de laravel.</p>
        </div>
    </div>
</div>
@stop