<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Cadastro Cisternas</title>
  </head>
  <body>

    <!-- Toolbar do sistema -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Cadastro Cisternas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=novo">Cadastrar Cisterna</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=listar">Listar Cisternas</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <!-- Chamar os demais arquivos passando pela home (index) -->
                <?php
                    include("config.php");
                    switch(@$_REQUEST["page"]){
                    case "novo":
                        include ("cadastrar-cisterna.php");
                    break;
                    case "listar" :
                        include ("listar-cisterna.php");
                    break;
                    case "salvar";
                        include("salvar-cisterna.php");
                    break;
                    case "editar";
                        include("editar-cisterna.php");
                    break;
                    default: 
                        print "<h1>Bem vindos!</h1>";
                        print "<p><h6>Nesse sistema você pode cadastrar uma cisterna e consultar a tabela de cisternas cadastradas no banco de dados.</h6></p>";
                    }
                ?>
            </div>
        </div>
    </div>



      <script src="js/bootstrap.min.js"></script>
  </body>
</html>