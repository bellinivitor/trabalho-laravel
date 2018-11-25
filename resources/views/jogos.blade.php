@extends('layouts/default')

@section('conteudo')

    <h1>Jogos</h1>
    <form method="post" action="/jogos/adiciona">
        @csrf
        <label>Cadastrar novo jogo</label>
        <div class="row">
            <div class="col-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Nome</span>
                    </div>
                    <input type="text" class="form-control" name="nome">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-11">
                <select name="desenvolvedora_id" class="custom-select">
                    <option selected>Selecione a distribuidora</option>
                    @foreach ($desenvolvedoras as $desenvolvedora)
                        <option value="{{$desenvolvedora->id}}">{{$desenvolvedora->nome}}</option>
                    @endforeach

                </select>
            </div>
            <div class="col-1">
                <input type="submit" value="Cadastrar" class="btn btn-primary">
            </div>
        </div>
    </form>
    <br/>
    <h3>Jogos cadastradas</h3>
    <table class="table-striped table">
        <thead>
        <tr>
            <th class="col-5">Nome</th>
            <th class="col-5">Desenvolvedora</th>
            <th class="col-1"></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($jogos as $jogo)
            <tr>
                <td>
                    {{$jogo->nome}}
                </td>
                <td>
                    {{$jogo->desenvolvedora_id}}
                </td>
                <td>
                    <form method="post" action="/jogos/remove/{{$jogo->id}}">
                        <input type="submit" value="Excluir" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop

