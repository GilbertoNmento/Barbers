<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabela Barbeiros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

  @include('nav')


      <h1 style="margin: 20px" >Tabela de Barbeiros</h1>


      <button><a href="{{ route('form.cadastrobarbeiro') }}">Cadastrar Barbeiros</a></button>
<div class="container">
<table class="table table-striped">
    <thead>
      <tr>
       
        <th scope="col">CPF</th>
        <th scope="col">Nome</th>
        <th scope="col">Data</th>
        <th scope="col">Ações</th>

      </tr>
    </thead>
    <tbody>
      
        @foreach ($cadastros as $cadastro)

        <tr>
        
            <td>{{$cadastro->cpf}}</td>
            <td>{{$cadastro->Nome}}</td>
            <td>{{$cadastro->data}}</td> 
            <td>
              <a href="{{route('barbeiroEdit.form', $cadastro->id)}}">Edit</a>
            </td>
           
           
            <td>
              <form action="{{route('cadastroBarbeiro.delete', ['id'=>$cadastro->id])}}" method="post">
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
</body>
</html>