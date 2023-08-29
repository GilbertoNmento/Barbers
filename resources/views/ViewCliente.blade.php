<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>

section.imagem1 {
        background-image: url('/imagens/imgbarb2.avif');
        /* background-repeat: no-repeat; */
        background-position: center center;
        background-size: 100%; 
        margin-top: 10px;
        height: auto;
        width: auto;
        box-shadow: 2px 2px 10px 1px;
        
      
      }

      section.imagem2 {
        margin-top: 20px;
        background-image: url('/imagens/imgbarb3.jpg');
        
        
        /* background-repeat: no-repeat; */
        background-position: left center;
        box-shadow: 2px 2px 10px 1px;
        height: auto;
        
      }
    </style>
    

@include('NavCliente')
</head>
<body>

    <header>
       

    </header>

    

    <div>
      <section class="imagem2" id="img02">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br>
      
      
      </section>
    </div>

    <section class="imagem1" id="img01">

      <br>
      <br>
      <br>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


 </section>



    <footer>
      <p>Contatos</p>
      <a href="">WhatsApp</a>
      <a href="">Instagram</a>
      <a href=""></a>


    </footer>
  


    @yield('conteudo')
    
</body>
</html>