<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="stylecrud.css">
  <title>crudaluno</title>
</head>
<body>

<div class="topo">

<nav class="navbar navbar-expand-sm  navbar-dark" styles="widht: 150px">
  <div class="container-fluid">
  <img src="./2-removebg-preview (1).png" alt="eu" widht=200px height= 150px >
    <a class="navbar-brand" href="#"> <h1>Lista de Alunos: </h1></a> 
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
        $nome = $_GET["nome"];
        $cpf = $_GET["cpf"];
        $email= $_GET["email"];
        $senha= $_GET["senha"];
        $cidade= $_GET["cidade"];
        $estado= $_GET["estado"];
        $cep= $_GET["cep"];
        $ocupacao= $_GET["ocupacao"];
        $instituicao= $_GET["instituicao"];

        ##codigo SQL
        $sql = "INSERT INTO aluno(nome,cpf,email, senha, cidade, estado, cep, ocupacao, instituicao) 
                VALUES('$nome','$cpf','$email','$senha','$cidade','$estado',' $cep','$ocupacao','$instituicao')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> o aluno
                $nome foi Incluido com sucesso!!!"; 
                echo " <button class='button'><a href='index.php'>voltar</a></button>";
            }
        }
#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $cidade = $_POST["cidade"];
    $id = $_POST["id"];
    

   
      ##codigo sql
    $sql = "UPDATE  aluno SET nome= :nome, cpf= :cpf, cidade= :cidade WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':cidade',$cidade, PDO::PARAM_STR);
    $stmt->bindParam(':cpf',$cpf, PDO::PARAM_INT);
    $stmt->execute();
 


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o aluno
             $nome foi Alterado com sucesso!!!"; 

            echo " <button class='button'><a href='index.php'>voltar</a></button>";
        }

}        


##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `aluno` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o aluno
             $id foi excluido!!!"; 

            echo " <button class='button'><a href='listaalunos.php'>voltar</a></button>";
        }

}

        
?>

</div>

<div class="rodape">

@Dyjayny 2023
</div>