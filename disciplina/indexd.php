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

<style>
  body{
    width: 100%;
    height: 100vh;
    display: flex;
    background-color: rgba(122, 139, 231, 0.747);
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    
    
}

.conteudo{
    width: 500px;
    height: 600px;
    display: flex;
    background-color: transparent;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
   padding: 15px;
    
    
    
}

.botoes{
  height: 300px;
    width: 450px;
    display: flex;
    justify-content: center;
    flex-direction: row;
    flex-wrap: wrap;
    margin: 10px;
    align-items: center;
    
}
.butao{ 
    height: 50px;
    width: 400px;
    font-family: 'Times New Roman', Times, serif;
    border-radius: 10px;
    border:transparent;
  
   
   


  }

  .butao2{ 
    height: 50px;
    width: 400px;
    font-family: 'Times New Roman', Times, serif;
    border-radius: 10px;
    border:transparent;
   
   
   


  }
  .button{
    background-color: rgb(27, 136, 32);
    width: 400px;
    height: 50px;
    font-family: 'Times New Roman', Times, serif;
    border-radius: 10px;
    border:transparent;
    color: rgb(27, 136, 32) ;

   
    
    text-align: center;
    
   
}

</style>
<body>
    <div class="topo">

        <nav class="navbar navbar-expand-sm  navbar-dark" styles="widht: 150px">
          <div class="container-fluid">
          <img src="./2-removebg-preview (1).png" alt="eu" widht=200px height= 150px >
            <a class="navbar-brand" href="#"> <h1>  Atividade - Formulário de Cadastro de Disciplinas :) </h1></a> 
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

        <div class="botoes">
            
        <Div class="butao">
    <button class="button"><a href="caddisc.php">CADASTRAR</a></button>
    </Div>

     <Div class="butao2">
   
    <button class="button"><a href="listadisciplina.php">LISTA DE DISCIPLINAS</a></button>
     </Div>

     </div>

    </div>

       <div class="rodape">
           <p>@Dyjayny 2023</p>
       </div>
   
   
   
   </body>
   </html>