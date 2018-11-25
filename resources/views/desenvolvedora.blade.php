@extends('layouts/default')

@section('conteudo')

    <h1>Desenvolvedoras</h1>
    <form method="post" action="/desenvolvedoras/adiciona">
        @csrf
        <label>Cadastrar nova desenvolvedora</label>
        <div class="row">
            <div class="col-11">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Nome</span>
                    </div>
                    <input type="text" class="form-control" name="nome">
                </div>
            </div>
            <div class="col-1">
                <input type="submit" value="Cadastrar" class="btn btn-primary">
            </div>
        </div>
    </form>
    <br/>
    <h3>Desenvolvedoras cadastradas</h3>
    <table class="table-striped table">
        <thead>
            <tr>
                <th class="col-10">Nome</th>
                <th class="col-1"></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($desenvolvedoras as $desenvolvedora)
            <tr>
                <td>
                    {{$desenvolvedora->nome}}
                </td>
                <td>
                    <form method="post" action="/desenvolvedoras/remove/{{$desenvolvedora->id}}">
                        <input type="submit" value="Excluir" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop

