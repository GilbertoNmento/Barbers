
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabela horarios</title>
    <style>
      th{
        

      }
    </style>

  </head>
<body>

  @include('nav2')


      <h1 style="margin: 20px" >Tabela de Horarios</h1>


      <button class="cadastrar"><a href="{{route('agendamento.cadastrar')}}">Agendar horário</a></button>
<div class="container">
<table class="table table-striped">
    <thead>
      <tr>
       
        <th scope="col">Cliente</th>
        <th scope="col">Horário</th>
        <th scope="col">Barbeiro</th>
        
                

      </tr>
    </thead>
   
    <tbody>
      
    @foreach ($cadastros as $cadastro)

        <tr>
            <td>{{$cadastro->nome}}</td>
            <td>{{$cadastro->horario}}</td>
            <td>{{$cadastro->barbeiro}}</td>


        </tr>

        
    @endforeach
        
      
    </tbody>
  </table>

</div>
    
</body>
</html>