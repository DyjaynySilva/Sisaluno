<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="styles1.css">
  <title>altdisciplina</title>
</head>
<body>

<div class="topo">

<nav class="navbar navbar-expand-sm  navbar-dark" styles="widht: 150px">
  <div class="container-fluid">
  <img src="./2-removebg-preview (1).png" alt="eu" widht=200px height= 150px >
    <a class="navbar-brand" href="#"> <h1>Altere A Disciplina: </h1></a> 
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
<style>

body{
    height: 100vh;
    width: 100%;
    margin: 10px;
    padding: 0%;
    font-family: 'Times New Roman', Times, serif;
    background-color: rgba(122, 139, 231, 0.747);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    flex-wrap: wrap;
}

.conteudo{
    width: 99.5%;
    height: 800px;
    display: flex;
    background-color: transparent;
    padding-top: 5px;
    padding-left: 20px;
    font-family: 'Times New Roman', Times, serif;
    
    
    
}
</style>
<div class="conteudo">

<?php
    require_once('conexao.php');

    $id = $_POST['id'];

        

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM disciplina where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   
        $nomedisciplina= $array_retorno["nomedisciplina"];
        $ch= $array_retorno["ch"];
        $semestre= $array_retorno["semestre"];
        
       
        
    


?>

  <form method="POST" action="cruddisciplina.php">
         Nome da Disciplina:
        <input type="text" name="nomedisciplina" id="" value=<?php echo $nomedisciplina?> >
        Carga Horária:
        <input type="text" name="ch" id="" value=<?php echo $ch?> >
        Semestre:
        <input type="text" name="semestre" id="" value=<?php echo $semestre?> >

        <input type="hidden" name="id" id="" value=<?php echo $id ?> >
        
       
        
        <input type="submit"  name="update" value="Alterar" style=" background-color: rgb(27, 136, 32); width: 70px; height: 30px; font-family: 'Times New Roman', Times, serif; border-radius: 10px; border:transparent; padding: 10px; margin: 20px;">

  </form>

  </div>

  <div class="rodape">
    @Dyjayny 2023
  </div>
</body>
</html>
