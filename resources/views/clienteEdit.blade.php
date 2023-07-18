@extends('nav')

@section('conteudo')

    <p>{{$cliente->id}}</p>
    <H1>Editar</H1>
    <form action="{{route('cadastro.update')}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" value={{$cliente->cpf}} placeholder="Digite o CPF..." required>
        </div>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value={{$cliente->nome}} placeholder="Digite o nome completo" required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" value={{$cliente->telefone}} placeholder="(xx) xxxxx-xxxx" required>
        </div>
        
        <input type="text" name="id" value="{{$cliente->id}}" hidden>

        <div class="form-group">
            <input type="submit" value="Cadastrar">
        </div>

        <input value="{{$cliente->id}}" hidden>
    </form>

@endsection