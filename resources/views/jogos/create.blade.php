@extends('layout.app')

@section('title','Novo Jogo')

@section('content')
    <div class="container mt-5">
      <h1>Crie um Novo Jogo</h1>
      <hr>
      <form action="{{ route('jogos-store') }}" method="POST">
        @csrf
        <div class="form-group">
            <div class="form-group">
              <label for="nome">Nome:</label>
              <input type="text" class="form-control" name="nome" placeholder="Digite um Nome...">
            </div>
            <br>
            <div class="form-group">
              <label for="categoria">Categoria:</label>
              <input type="text" class="form-control" name="categoria" placeholder="Digite uma Categoria para o Jogo...">
            </div>
            <br>
            <div class="form-group">
              <label for="ano_criacao">Ano de Criação:</label>
              <input type="number" class="form-control" name="ano_criacao" placeholder="Digite o ano de criação do Jogo...">
            </div>
            <br>
            <div class="form-group">
              <label for="valor">Valor:</label>
              <input type="number" class="form-control" name="valor" placeholder="Digite o Valor do Jogo...">
            </div>
            <br>
            <div class="form-group">
              <input type="submit" name="submit" class="btn btn-primary">
            </div>
        </div>
      </form>
    </div>
    
@endsection