<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Assistência Social</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/bootstrap/css/bootstrap.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/css-hamburgers/hamburgers.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/select2/select2.min.css"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/form.css" />
    <!--===============================================================================================-->

  </head>

  <body>
    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100">
          <div class="login100-pic">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <img src="imagens/logo.png" alt="IMG" />
          </div>
          

    <div class="login100-form validate-form">
      
      <form method="post" action="php/dados.php">

        <div>
          <label for="name">Nº DO COMPROVANTE</label>
            <div class="inst">
              <input class="inp" type="text" name="comprova" placeholder="" required>
            </div>
        </div>

        <div>
          <label for="name">NOME</label>
            <div class="inst">
              <input class="inp" type="text" name="name" placeholder="" required>
            </div>
        </div>

        <div>
          <label for="name">CPF</label>
              <script>
                  function mascara(i){
                  var v = i.value;
                      if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
                        i.value = v.substring(0, v.length-1);
                        return;}
                  i.setAttribute("maxlength", "14");
                  if (v.length == 3 || v.length == 7) i.value += ".";
                  if (v.length == 11) i.value += "-";
                  }
              </script>
          <div class="inst">
          <input class="inp" oninput="mascara(this)" type="text" name="cpf" placeholder="" required>
          </div>        
        </div>

        <div>
          <label for="name">NIS</label>
              <script>
                  function mass(i){
                  var v = i.value;
                      if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
                        i.value = v.substring(0, v.length-1);
                        return;}
                  i.setAttribute("maxlength", "12");
                  if (v.length == 9) i.value += "-";
                  }
              </script>
          <div class="inst">
           <input class="inp" oninput="mass(this)" type="text" name="nis" placeholder="" required>
          </div>
        </div>

        <div>
          <label for="name">ENDEREÇO</label>
          <div class="inst">
            <input class="inp" type="text" name="elog" placeholder="" required>
          </div>
        </div>

        <div>
          <label for="name">BAIRRO</label>
          <select class="inp" name="bairro">
            <option value="">xxx</option> 
            <option value="">xxx</option> 
            <option value="">xxx</option> 
            <option value="">xxx</option> 
            <option value="">xxx</option> 
            <option value="">xxx</option> 
            <option value="">xxx</option> 
            <option value="">xxx</option> 
            <option value="">xxx</option> 
            <option value="">xxx</option> 
            <option value="">xxx</option> 
          </select>
        </div>
        
            <!-- Botão -->
              <div class="button">
                <button name="bt-logar" id="createButton">CADASTRAR</button>
              </div>
      </div>
    </form>


        </div>
      </div>
    </div>













  <!-- JS -->
   
    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
      $('.js-tilt').tilt({
        scale: 1.1
      })
    </script>
  </body>
</html>



