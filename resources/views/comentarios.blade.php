@extends('layouts/default')

@section('conteudo')

    <h1>Comentários</h1>
    <form method="post" action="/comentarios/adiciona">
        @csrf
        <label>Comentários novo comentário</label>
        <div class="row">
            <div class="col-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Comentário</span>
                    </div>
                   <textarea class="form-control" name="comentario"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-11">
                <select name="jogo_id" class="custom-select">
                    <option selected>Selecione a distribuidora</option>
                    @foreach ($jogos as $jogo)
                        <option value="{{$jogo->id}}">{{$jogo->nome}}</option>
                    @endforeach

                </select>
            </div>
            <div class="col-1">
                <input type="submit" value="Cadastrar" class="btn btn-primary">
            </div>
        </div>
    </form>
    <br/>
    <h3>Comentários cadastradas</h3>
    <table class="table-striped table">
        <thead>
        <tr>
            <th class="col-5">Nome</th>
            <th class="col-5">Desenvolvedora</th>
            <th class="col-1"></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($comentarios as $comentario)
            <tr>
                <td>
                    {{$comentario->comentario}}
                </td>
                <td>
                    {{$comentario->jogo_id}}
                </td>
                <td>
                    <form method="post" action="/comentarios/remove/{{$comentario->id}}">
                        <input type="submit" value="Excluir" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop

