<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabela clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  @include('nav')

      <h1 style="margin: 20px" >Tabela de clientes</h1>


      <button><a href="{{ route('cadastrar.cliente.view') }}">Cadastrar cliente</a></button>
<div class="container">
<table class="table table-striped">
    <thead>
      <tr>
       
        <th scope="col">CPF</th>
        <th scope="col">Nome</th>
        <th scope="col">Telefone</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      
        @foreach ($cadastros as $cadastro)

        <tr>
        
            <td>{{$cadastro->cpf}}</td>
            <td>{{$cadastro->nome}}</td>
            <td>{{$cadastro->telefone}}</td> 
            <td>
              <a href="{{route('edit.form', $cadastro->id)}}"> Edit</a>
            </td>
          
            <td>
              <form action="{{route('cadastro.cliente.delete', $cadastro->id)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit">Deletar</button>
              </form>
            </td>
        </tr>
            
        @endforeach
        
      
    </tbody>
  </table>

</div>
  
    
</body>
</html>