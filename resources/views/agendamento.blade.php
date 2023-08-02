<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agendamento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .container h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input[type="text"] {
            width: 100%;
            padding: 5px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        .form-group input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            color: #fff;
            cursor: pointer;
            border-radius: 3px;
        }
        .form-select input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            color: #fff;
            cursor: pointer;
            border-radius: 3px;
        }
        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    @php
        // dd($clientes, $barbeiros , $horarios)
    @endphp

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    @include('nav')

    <div class="container">
        <h2>Agendar horário</h2>
        <form action="{{route('cadastrar.agendamento')}}" method="GET">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite o nome completo..." required>
            </div>

            <div class="form-group">
                <label for="nome">CPF:</label>
                <input type="text" id="cpf" name="cpf" placeholder="Digite o CPF..." required>
            </div> 


            <h6><b>Profissional:</b></h6>
            <select class="form-select" id="barbeiro" name="barbeiro">
                <option selected>Selecione Barbeiro</option>                             
                @foreach ($barbeiros as $barbeiro)
                    <option value="{{$barbeiro->Nome}}">{{$barbeiro->Nome}}</option>
                @endforeach            
            </select> <br>


            
            <h6><b>Selecione o horário</b></h6>
            <select class="form-select" id="horario" name="horario">
                <option selected>Selecione Horário</option>
                @foreach ($horarios as $horario)
                    <option value="{{$horario->horario}}">{{$horario->horario}}</option>
                @endforeach
            </select> <br>
                
              
            <div class="form-group">
                <input type="submit" value="Agendar">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
</body>
</html>