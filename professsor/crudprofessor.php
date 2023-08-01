<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="stylecrud.css">
  <title>crudprofessor</title>
</head>
<body>

<div class="topo">

<nav class="navbar navbar-expand-sm  navbar-dark" styles="widht: 150px">
  <div class="container-fluid">
  <img src="./2-removebg-preview (1).png" alt="eu" widht=200px height= 150px >
    <a class="navbar-brand" href="#"> <h1>Lista de Professores: </h1></a> 
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
##permite acesso as variaves dentro do aquivo conexao
require_once('conexao.php');



##cadastrar
if(isset($_GET['cadastrar'])){
        ##dados recebidos pelo metodo GET
        $nome= $_GET['nome'];
        $estatus= $_GET['estatus'];
        $idade= $_GET['idade'];
        $endereco= $_GET['endereco'];
        $datanascimento= $_GET['datanascimento'];
        $cpf= $_GET['cpf'];

        ##codigo SQL
        $sql = " INSERT INTO professor(nome, estatus, idade, cpf, endereco, datanascimento)
        VALUES ('$nome','$estatus','$idade','$cpf','$endereco','$datanascimento')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> o professor
                $nome foi Incluido com sucesso!!!"; 
                echo " <button class='button'><a href='indexp.php'>voltar</a></button>";
            }
        }
#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $idade = $_POST["idade"];
    $cpf = $_POST["cpf"];
    $estatus = $_POST["estatus"];
    $datanascimento = $_POST["datanascimento"];
    $id = $_POST["id"];

    

   
      ##codigo sql
    $sql = "UPDATE  professor SET nome= :nome, endereco= :endereco, idade= :idade, cpf= :cpf, estatus= :estatus, datanascimento= :datanascimento WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':endereco',$endereco, PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
    $stmt->bindParam(':cpf',$cpf, PDO::PARAM_INT);
    $stmt->bindParam(':estatus',$estatus, PDO::PARAM_STR);
    $stmt->bindValue (":datanascimento",$datanascimento, PDO::PARAM_STR);
    $stmt->execute();
 


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o professor
             $nome foi Alterado com sucesso!!!"; 

            echo " <button class='button'><a href='indexp.php'>voltar</a></button>";
        }

}        


##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `professor` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o aluno
             $id foi excluido!!!"; 

            echo " <button class='button'><a href='listaprofessor.php'>voltar</a></button>";
        }

}

        
?>

</div>

<div class="rodape">

@Dyjayny 2023
</div>