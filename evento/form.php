<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Peixe</title>
    <link href="css/cad.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="app/Css/style.css">
</head>


<body>
<script src="Js/script.js"></script>
    <header class="header">
        <h1>Assistência Social</h1>
        <p>Cadastro do Peixe</p>
        <div class="navcontent">
            <nav class="navbar">
                <a href="index.php">DASHBOARD</a>
            </nav>
        </div>
    </header>


    <div class="corpo">
        <div class="card">

            <div class="cont-titulo">
                <h2 class="mt-3">
                    Novo Cadastro
                </h2>
            </div>
            <form method="post" id="formCont" action='php/dados.php'>

                <!-- ========= INICIO DO FORMULARIO ============== -->
                <div class="form-group">
                    <!-- ========= DIVISORIA DO FORMULARIO ============== -->
                    <div class="cont-input1">
                        <div class="cont-formSus">
                            <label> Codigo </label>
                            <input type="text" class="form-control" name="comprova" maxLength="04" autocomplete="off">
                        </div>

                        <div class="cont-formCpf">
                            <label for="name">CPF</label>
                            <div class="inst">
                                <input class="form-control" id="cpf" oninput="mascara(this)" type="text" name="cpf"
                                    placeholder="" onblur="validarCPF(this)" required>
                            </div>
                            <div id="res" name="res"></div>
                            
                        </div>
                            
                            


                        <div class="cont-formCpf">
                            <label for="name">NIS</label>
                            <div class="inst">
                                <input class="form-control" oninput="mass(this)" type="text" name="nis" placeholder=""
                                    required>
                            </div>
                        </div>

                        <div class="cont-form">
                            <label for="estado">Local de Entrega</label>
                            <select id="" class="form-select" name="bairro" autocomplete="off">
                                <option value="" data-default disabled selected></option>
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

                    </div>

                    <!-- ========= DIVISORIA DO FORMULARIO ============== -->
                    <div class="cont-input">
                        <div class="cont-form">
                            <label> Nome </label>
                            <input type="text" class="form-control" name="name" autocomplete="off">
                        </div>

                        <div class="cont-form">
                            <label> Endereço </label>
                            <input type="text" class="form-control" name="elog" autocomplete="off">
                        </div>


                    </div>


                    <!-- ========= BOTÃO DO FORMULARIO ============== -->
                    <div class="cont-buttom">
                        <button type="submit" name="bt-logar" id="btnSubmit" class="btn btn-success">Enviar</button>
                    </div>
                </div>
            </form>
            <!-- card -->
        </div>
        <!-- corpo -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>