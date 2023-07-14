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

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('Dashboard.home')}}">Home</a>
        <a class="nav-link active" href="{{route('tabelaCliente.home')}}">Clientes</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Barbeiros</a>
          {{-- <a class="nav-link" href="{{route('Dashboard.home')}}">home</a>
          <a class="nav-link" href="#">Pricing</a>
          <a class="nav-link" href="{{route('tabelaCliente.home')}}">Clientes</a> --}}
        </div>
      </div>
    </div>
  </nav>


      <h1 style="margin: 20px" >Tabela de clientes</h1>


      <button><a href="{{ route('cadastrar.cliente.view') }}">Cadastrar cliente</a></button>
<div class="container">
<table class="table table-striped">
    <thead>
      <tr>
       
        <th scope="col">CPF</th>
        <th scope="col">Nome</th>
        <th scope="col">Telefone</th>
      </tr>
    </thead>
    <tbody>
      
        @foreach ($cadastros as $cadastro)

        <tr>
        
            <td>{{$cadastro->cpf}}</td>
            <td>{{$cadastro->nome}}</td>
            <td>{{$cadastro->telefone}}</td> 
        
        
        
        </tr>
            
        @endforeach
        
      
    </tbody>
  </table>

</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
</body>
</html>