<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    

    <style>
        nav {
           
            background-color: rgb(0, 0, 0);
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
            box-shadow: 5px 5px 5px 5px;
            margin-left: 0px;
            margin-right: 10px;
            text-align: ;
        }
        
        a.nav1 {
            text-decoration: none;
            color: rgb(255, 255, 255);
            font-size: 20px;
            margin-left: 10px;
            margin-right: 10px;
        }
        
        a{
            text-decoration: none;
            color: black;
            
          
        }

        img {
            background-color: rgb(0, 0, 0);
            padding-top: 5px;
            padding-bottom: 10px;
            width: 220px;
            height: 160px;
            display: block;
            margin: auto;
        }
        
        body {
            background-color: rgba(65, 65, 65, 0.479);
            
        }

        th {
        background-color: grey;
        margin-left: 20px;
        width: 350px;
        box-shadow: 1px 1px 1px 0px;
        
        
        }

        td {
        text-align: center; 
        }

      button.cadastrar {
        border-radius: 10px;
        width: 170px;
        height: 30px;
        margin-bottom: 10px;
      }

      h1 {
        text-align: center;
      }
      
      div.form-group {
        text-align: center;

      }

      .loginbuton {
        background-color: rgb(0, 0, 0);
        margin: auto;
        color: rgba(5, 5, 5, 0);
        
      }
      

      
      
      




    </style>
</head>
<body>

    <header>
       
        <nav>
            
            <a href="{{route('validar.usuario')}}" class="loginbuton">Login</a>
            <img src="{{asset('imagens/barberlogmenor.jpg')}}" alt="">
            <a href="{{route('view.web')}}" class="nav1">Home</a>
            <a href="#" class="nav1">Serviços</a>
            <a href="{{route('/contatos/view')}}" class="nav1">Contatos</a>
            <a href="#" class="nav1">Agendamentos</a>
            
        </nav>
        

    </header>

    @yield('conteudo')


    
</body>
</html>