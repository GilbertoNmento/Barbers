<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabela clientes</title>
    
<style>
  

</style>
    
</head>
<body>
  @include('nav2')

  @section('conteudo')

  <h1 style="margin: 20px" >Tabela de clientes</h1>


   <button class="cadastrar"><a href="{{ route('cadastrar.cliente.view') }}">Cadastrar Cliente</a></button>

   <div class="container">
      <table class="table table-striped">
    <thead>
      <tr>
       
        <th scope="col">CPF</th>
        <th scope="col">Nome</th>
        <th scope="col">Telefone</th>
        <th scope="col">Editar</th>
        <th scope="col">Deletar</th>
      </tr>
    </thead>
    <tbody>
      
        @foreach ($cadastros as $cadastro)

        <tr>
        
            <td>{{$cadastro->cpf}}</td>
            <td>{{$cadastro->nome}}</td>
            <td>{{$cadastro->telefone}}</td> 
            <td>
              {{-- <a href="{{route('edit.form', $cadastro->id)}}"> Edit</a> --}}
            <button type="button"><a href="{{route('edit.form', $cadastro->id)}} hidden">Editar</a></button>
            </td>
          
            <td>
              <form action="{{route('cadastro.cliente.delete', $cadastro->id)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="del">Deletar</button>
              </form>
            </td>
        </tr>
            
        @endforeach
        
      
    </tbody>
  </table>

</div>
  
    
</body>
</html>