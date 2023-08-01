<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Formulário</title>
</head>
<body>
    <div class="topo">

        <nav class="navbar navbar-expand-sm  navbar-dark" styles="widht: 150px">
          <div class="container-fluid">
          <img src="./2-removebg-preview (1).png" alt="eu" widht=200px height= 150px >
            <a class="navbar-brand" href="#"> <h1>  Atividade - Formulário de Cadastro de Professores :) </h1></a> 
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

    <div class="conteudo" style="background-color: rgba(155, 167, 238, 0.747);">
    
         <h1>Formulário: </h1>
     <form action="cadprofessor.php" method="get" style= " display: flex; flex-direction: row; flex-wrap: wrap; height: 500px; width: 400px; padding: 100px; justify-content: flex-start; padding-top: 10px; align-items: flex-start;">
    <div>
        <p>Nome:</p>
      <input type="text" name="nome" id="nome">
    </div>

    <div>
    <p>Idade:</p>
    <input type="text" name="idade" id="idade">
    </div>

    <div>
    <p>CPF:</p>
    <input type="text" name="cpf" id="cpf">
    </div>

   

    <div>
        <p>Data de Nascimento</p>
    <input type="date" name="datanascimento" id="datanascimento">
    </div>


    <div>
    <p>Endereço:</p>
    <input type="text" name="endereco" id="endereco">
    </div>

    <div>
      <p>Status:</p>
    <select name="estatus" id="estatus">
      <option value="Escolher"> </option>
      <option value="inativo">Inativo</option>
      <option value="ativo">Ativo</option>
    </div>


   
    <div>
    <input type="submit" value="CADASTRAR" id="button">
    </div>
    
    </form>
       

    </div>
    <div class="rodape">
        <p>@Dyjayny 2023</p>
    </div>



</body>
</html>