<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styless.css">
    <title>cadprofessor</title>
</head>
<body>
<div class="topo">

<nav class="navbar navbar-expand-sm  navbar-dark" styles="widht: 150px">
  <div class="container-fluid">
  <img src="./2-removebg-preview (1).png" alt="eu" widht=200px height= 150px >
    <a class="navbar-brand" href="#"> <h1> Formulário de cadastro de Professores</h1></a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="https://github.com/DyjaynySilva"><p>Códigos</p><br></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><p>Vetores</p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><p>Barras de navegações</p></a>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><p>Favoritos</p></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Crepúsculo</a></li>
            <li><a class="dropdown-item" href="#">MPB</a></li>
            <li><a class="dropdown-item" href="#">Como eu era antes de você</a></li>
          </ul>
        </li>
      </ul>
    </div>

      
  </div>

</nav>
</div>

   


<div class="conteudo">

<?php
        $nome= $_GET['nome'];
        $estatus= $_GET['estatus'];
        $idade= $_GET['idade'];
        $endereco= $_GET['endereco'];
        $datanascimento= $_GET['datanascimento'];
        $cpf= $_GET['cpf'];
       

        require_once('conexao.php');

        $sql= " INSERT INTO professor(nome, estatus, idade, cpf, endereco, datanascimento)
                VALUES ('$nome','$estatus','$idade','$cpf','$endereco','$datanascimento')";

        $stmt= $conexao->prepare($sql);

        if ($stmt->execute()) {
          echo " <strong> Ok!</strong> O/A professor(a) 
          $nome foi Incluido(a) com sucesso!!!";
        }
        

         
        
        echo '<button class="button"><a href="indexp.php">voltar</a></button>';
    ?>


</div>



<div class="rodape">

@DyjaynySilva
</div>
</body>
</html>