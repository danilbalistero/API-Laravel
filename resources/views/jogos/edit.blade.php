@extends('layout.app')

@section('title','Edição')

@section('content')
    <div class="container mt-5">
      <h1>Editar Jogo</h1>
      <hr>
      <form action="{{ route('jogos-update', ['id'=>$jogos->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group">
              <label for="nome">Nome:</label>
              <input type="text" class="form-control" name="nome" value="{{ $jogos->nome }}" placeholder="Digite um Nome...">
            </div>
            <br>
            <div class="form-group">
              <label for="categoria">Categoria:</label>
              <input type="text" class="form-control" name="categoria" value="{{ $jogos->categoria }}" placeholder="Digite uma Categoria para o Jogo...">
            </div>
            <br>
            <div class="form-group">
              <label for="ano_criacao">Ano de Criação:</label>
              <input type="number" class="form-control" name="ano_criacao" value="{{ $jogos->ano_criacao }}" placeholder="Digite o ano de criação do Jogo...">
            </div>
            <br>
            <div class="form-group">
              <label for="valor">Valor:</label>
              <input type="number" class="form-control" name="valor" value="{{ $jogos->valor }}" placeholder="Digite o Valor do Jogo...">
            </div>
            <br>
            <div class="form-group">
              <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
            </div>
        </div>
      </form>
    </div>
    
@endsection