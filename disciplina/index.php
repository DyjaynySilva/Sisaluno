


   <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Formulário</title>
</head>

<style>
.body{
    height: 100vh;
    width: 100%;
    margin: 0%;
    padding: 0%;
    font-family: 'Times New Roman', Times, serif;
    background-color: rgba(155, 167, 238, 0.747);
}
.topo{
    background-color: rgb(95, 95, 211);
    width: 100%;
    height: 120px;
    display: flex;
    justify-content: flex-start;
    text-align: center;

    position: sticky;
    top:0;
    
}


.conteudo{
    width: 100%;
    height: 600px;
    display: flex;
    background-color: rgba(155, 167, 238, 0.747);
    flex-direction: column;
   
    justify-content: center;
    align-items: center;
   
    
    
    
}

.botoes{
  height: 500px;
    width: 700px;
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    margin: 10px;
    align-items: center;
    
}
.butao{ 
    height: 300px;
    width: 150px;
    font-family: 'Times New Roman', Times, serif;
    border-radius: 10px;
    border:transparent;
    top: 50px;

  }

  .butao2{ 
    height: 300px;
    width: 150px;
    font-family: 'Times New Roman', Times, serif;
    border-radius: 10px;
    border:transparent;
    
  }
  .butao3{ 
    height: 300px;
    width: 150px;
    font-family: 'Times New Roman', Times, serif;
    border-radius: 10px;
    border:transparent;
    
  }


  .button{
    background-color:  rgb(95, 95, 211);
    width: 250px;
    height: 300px;
    font-family: 'Times New Roman', Times, serif;
    border-radius: 10px;
    border:transparent;
    color: rgb(27, 136, 32) ;

   
    
    text-align: center;
    
   
}
.rodape{
    width: 100%;
    height: 100px; 
    background-color:rgb(95, 95, 211) ;
    justify-content: center;
    text-align: center;
    align-items: center;
    display: flex;
    color: wheat;
}


a:link{
    color: white;
    text-decoration: none;

}
a:visited{
    color: white;
    text-decoration: none;
}
h1{
    padding-left: 110px;
    padding-top: 30px;
    font-family: 'Times New Roman', Times, serif;
}

</style>
<body>
    <div class="topo">

        <nav class="navbar navbar-expand-sm  navbar-dark" styles="widht: 150px">
          <div class="container-fluid">
          <img src="./2-removebg-preview (1).png" alt="eu" widht=200px height= 150px >
            <a class="navbar-brand" href="#"> <h1>  Formulário de Controle Acadêmico :) </h1></a> 
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
            
        <Div class="butao" style= " height: 300px;
    width: 150px;
    font-family: 'Times New Roman', Times, serif;
    border-radius: 10px;
    border:transparent;
    top: 50px;
">


    <button class="button"><a href="indexa.php"><img src="./image-removebg-preview.png" alt="eu" widht=200px height= 150px ><br>
    ALUNO</a></button>
    </Div>

     <Div class="butao2">
   
    <button class="button"><a href="indexp.php"><img src="./2354280-removebg-preview.png" alt="eu" widht=200px height= 150px ><br>PROFESSOR</a></button>
     </Div>

     <Div class="butao3">
   
   <button class="button"><a href="indexd.php"><img src="./livro.png" alt="eu" widht=200px height= 150px ><br>
    DISCIPLINAS</a></button>
    </Div>

     </div>

    </div>





       <div class="rodape">
           <p>@Dyjayny 2023</p>
       </div>
   
   
   
   </body>
   </html>