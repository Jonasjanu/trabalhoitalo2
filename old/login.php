<!-- jonas januario da silva -->

<html lang = "pt">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="formulário" content="formulário para monitoria">
  <title>
    Pagina para monitoria voluntária
  </title> 
  <link href="css/bootstrap.min.js" rel="stylesheet" type="text/css"/>
  <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script> 
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
 
     <body>
     <?php
include 'temp.php'
?>
      <form method="POST" action = "">
      <div  >
      <img src="./imagem/ifce.PNG" alt="some text" width=120 height=100 align="right">
     <h1  style="font-size:300%" >Faça seu login</h1>
     
      <div>
      <div class="form-label-group" style="width:400;height:50">
       <label for="inputEmail" >Email</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
      </div><br><br>

      <div class="form-label-group" style="width:400;height:50">
        <label for="inputPassword">Senha</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
      </div><br><br>
      <a href="P3.html" style="width:400;height:50">Esquecer senha </a><br>
            

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me">Lembre de mim
      </div>
    <br><br>
 <input type="submit" value="Acessar" style="width:90;height:50">
      <p class="mt-5 mb-3 text-muted"></p>
    </div>


          
           <div align="right"><footer class="rodape-pagina">
           <b>&copy; IFCE Campos Acopiara 2019</b>
        </footer></div>
    </body>
  </html> 