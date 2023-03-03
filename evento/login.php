<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Peixe</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="app/Css/style.css">
</head>

  <body>
  <script src="Js/script.js"></script>
    <header class="header">
        <div class="hText">
            <h1>Assistência Social</h1>
            <p>Cadastro do Peixe</p>
        </div>
    </header>


    <div class="corpo" >
        <div class="card1">
          <p><img class="backimg">
        </div>

        <div class="card">
          <a class="links" id="paralogin"></a>
          <a class="links" id="paracadastro"></a>
          
          
          <div class="card">
            <!--FORMULÁRIO DE CADASTRO-->
            <div id="cadastro">
              <form method="post" action="##"> 
                <h1>Cadastro</h1> 
                
                <p> 
                  <label for="nome_cad">Seu nome</label>
                  <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="nome" />
                </p>
                
                <p> 
                  <label for="email_cad">Seu e-mail</label>
                  <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
                </p>
                
                <p> 
                  <label for="senha_cad">Sua senha</label>
                  <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex. 1234"/>
                </p>
                
                <p> 
                  <buttom type="submit" value="Cadastrar"/> 
                </p>
                
                <p class="link">  
                  Já tem conta?
                  <a href="#paralogin"> Ir para Login </a>
                </p>
              </form>
            </div>      
            <!--FORMULÁRIO DE LOGIN-->
            <div id="login">
              <form method="post" action="php/log.php"> 
                <h1 class="hlog">Login</h1> 
                <p> 
                  <label for="nome_login">Codigo de Acesso</label>
                  <input id="nome_login" maxlength="5" name="codigo" required="required" type="text" placeholder="Informe o Codigo de acesso de 5 dígitos"/>
                </p>
                
                <p> 
                  <label for="email_login">Senha</label>
                  <input id="email_login" name="senha" required="required" type="password" placeholder="ex. senha" /> 
                </p>
                
                <p> 
                  <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
                  <label for="manterlogado">Manter-me logado</label>
                </p>
                
                <p> 
                  <input type="submit" name="logar" value="Entrar" /> 
                </p>
                
                <p class="link">
                  Ainda não tem conta?
                  <a href="#paracadastro">Cadastre-se</a>
                </p>
              </form>
              </div>
              
      
         <!-- card -->
        </div>
       <!-- corpo -->
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
  </body>
</html>