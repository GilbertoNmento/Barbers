<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    

    <style>
        nav{
           
            background-color: rgb(0, 0, 0);
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
            box-shadow: 5px 5px 5px 5px;
            margin-left: 0px;
            margin-right: 10px;
        }
        
        a.nav1{
            text-decoration: none;
            color: rgb(255, 255, 255);
            font-size: 25px;
            margin-left: 10px;
            margin-right: 10px;
        }
        
        a{
            text-decoration: none;
            color: black;
            
          
        }

        img{
            background-color: rgb(0, 0, 0);
            padding-top: 5px;
            padding-bottom: 10px;
            width: 220px;
            height: 120px;
            display: block;
            margin: auto;
        }
        
        body{
            background-color: rgba(65, 65, 65, 0.479);
            
        }

        th{
        background-color: grey;
        margin-left: 20px;
        width: 350px;
        box-shadow: 1px 1px 1px 0px;
        
        
      }
      td{
        text-align: center; 
      }

      button.cadastrar{
        border-radius: 10px;
        width: 170px;
        height: 30px;
        margin-bottom: 10px;
      }
      h1{
        text-align: center;
      }
      
      div.form-group{
        text-align: center;

      }



    </style>
   
</head>
<body>

    <nav>
        <img src="{{asset('imagens/barberlogmenor.jpg')}}" alt="">
        <a href="{{route('view.web')}}" class="nav1">Home</a>
        <a href="{{route('Dashboard.home')}}" class="nav1">Dashboard</a>
        <a href="{{route('tabelaBarbeiro.home')}}" class="nav1">Barbeiros</a>
        <a href="{{route('tabelaCliente.home')}}" class="nav1">Clientes</a>
        <a href="{{route('tabela.horarios')}}" class="nav1">Horários</a>
    </nav>


    @yield('conteudo')
    
</body>
</html>