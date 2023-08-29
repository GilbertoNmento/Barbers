<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabela Barbeiros</title>
    

  </head>
<body>

  @include('nav2')


      <h1 style="margin: 20px" >Tabela de Barbeiros</h1>


      <button class="cadastrar"><a href="{{ route('form.cadastrobarbeiro') }}">Cadastrar Barbeiros</a></button>
<div class="container">
<table class="table table-striped">
    <thead>
      <tr>
       
        <th scope="col">CPF</th>
        <th scope="col">Nome</th>
        <th scope="col">Data</th>
        <th scope="col">Editar</th>
        <th scope="col">Deletar</th>

      </tr>
    </thead>
    <tbody>
      
        @foreach ($cadastros as $cadastro)

        <tr>
        
            <td>{{$cadastro->cpf}}</td>
            <td>{{$cadastro->Nome}}</td>
            <td>{{$cadastro->data}}</td> 
            <td>
              {{-- <a href="{{route('barbeiroEdit.form', $cadastro->id)}}">Edit</a> --}}

              <button type="button"><a href="{{route('barbeiroEdit.form', $cadastro->id)}}">Editar</a></button>
            </td>
           
           
            <td>
              <form action="{{route('cadastroBarbeiro.delete', ['id'=>$cadastro->id])}}" method="post">
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