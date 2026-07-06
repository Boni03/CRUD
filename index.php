<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Cadastro</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cadastro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="index.php?page=novo">Novo Usuario</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="index.php?page=listar">Lista de Usuarios</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

        
    
    <div class="container">
      <div class="row">
        <div class="col-md-5">

        <?php
        include ("config.php");
        switch(@$_REQUEST['page']){
            case "novo":
                include ("novo-usuario.php");
                break;
            case "listar":
                include ("listar-usuario.php");
                break;
            case "salvar":
                include ("salvar-usuario.php");
                break;
            case "editar":
                include ("editar-usuario.php");
                break;
            case "excluir":
                include ("excluir-usuario.php");
                break;
            default:
                print "<h1>Bem-vindo ao sistema de cadastro de usuarios</h1>";
        }
        ?>

        </div>
      </div>
    </div>





   
    <script src="js/bootstrap.bundle.min.js" ></script>

    
  </body>
</html>