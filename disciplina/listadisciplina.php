<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>lista disciplina</title>
</head>
<body>

<div class="topo">

<nav class="navbar navbar-expand-sm  navbar-dark" styles="widht: 150px">
  <div class="container-fluid">
  <img src="./2-removebg-preview (1).png" alt="eu" widht=200px height= 150px >
    <a class="navbar-brand" href="#"> <h1>Lista de Disciplinas: </h1></a> 
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

  

<?php 
/*
 * Melhor prática usando Prepared Statements
 * 
 */
  require_once('conexao.php');
   
  $retorno = $conexao->prepare('SELECT * FROM disciplina');
  $retorno->execute();

?>       

 <style>
  body{
    height: 100vh;
    width: 100%;
    margin: 0;
    padding: 0%;
    font-family: 'Times New Roman', Times, serif;
    background-color: rgba(122, 139, 231, 0.747);
}


table {
    font-family: 'Times New Roman', Times, serif;
    border-collapse: collapse;
    padding-left: 25px;
    padding-top: 5px;
    margin: 20px;
    align-items: center;
    justify-content: center;
    

  }
  
  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }
  
  tr:nth-child(even) {
    background-color: #fafafa;
  }

  h1{
    padding-left: 110px;
    padding-top: 30px;
    font-family: 'Times New Roman', Times, serif;
    color: white;
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
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    flex-wrap: wrap;

}
.conteudo2{
  height: 100px;
  width: 200px;
  display: flex;
    justify-content: space-between;
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
    margin-top: 10px;
}
button{
    background-color: rgb(19, 155, 179);
    width: 70px;
    height: 40px;
    font-family: 'Times New Roman', Times, serif;
    border-radius: 10px;
    border:transparent;
    padding: 10px;
    margin: 20px;

    top:100px;
}

a:link{
    color: white;
    text-decoration: none;

}
a:visited{
    color: white;
    text-decoration: none;
}
.conteudo, h1{
    color: black;

}
form{
    width: 150px;
}
#nome{
    width: 500px;
    height: 20px;
}

 </style>
<div class="conteudo">
        <table> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME DA DISCIPLINA</th>
                    <th>CARGA HORÁRIA</th>
                    <th>SEMESTRE</th>
                    
                   

                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                            <td> <?php echo $value['id']?>  </td> 
                            <td> <?php echo $value['nomedisciplina']?>  </td>  
                            <td> <?php echo $value['ch']?> </td> 
                            <td> <?php echo $value['semestre']?> </td>
                           
                             
                            

                            <td>
                               <form method="POST" action="altdisciplina.php">

                                         <input name="id" type="hidden" value=" <?php echo $value['id'];?>"/>
                                        <input name="nomedisciplina" type="hidden" value=" <?php echo $value['nomedisciplina'];?>"/>
                                        <input name="ch" type="hidden" value=" <?php echo $value['ch'];?>"/>
                                        <input name="semestre" type="hidden" value=" <?php echo $value['semestre'];?>"/>
                                       
                                      
                                       
                                        <button name="alterar"  type="submit" style="background-color: rgb(46, 179, 19);width: 70px;height: 30px;font-family: 'Times New Roman', Times, serif;border-radius: 10px;border:transparent;padding: 10px;margin: 20px;" >Alterar</button>
                                </form>

                             </td> 

                             <td>
                               <form method="GET" action="cruddisciplina.php">

                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <input name="nomedisciplina" type="hidden" value="<?php echo $value['nomedisciplina'];?>"/>
                                        <input name="ch" type="hidden" value=" <?php echo $value['ch'];?>"/>
                                        <input name="semestre" type="hidden" value=" <?php echo $value['semestre'];?>"/>
                                        

                                        <button name="excluir"  type="submit" style=" background-color: rgb(235, 10, 29);width: 70px;height: 30px; font-family: 'Times New Roman', Times, serif;border-radius: 10px;border:transparent;padding: 10px;margin: 20px;">Excluir</button>
                                </form>

                             </td> 


                       
                      </tr>
                    <?php  }  ?> 
                 </tr>
            </tbody>
        </table>


        <div class="conteudo2">
<?php  
   echo "<br>";       
   echo "<button class=button  style= background-color: rgb(19, 155, 179);width: 100px;height: 50px; font-family: 'Times New Roman', Times, serif;border-radius: 10px;border:transparent;padding: 10px;margin: 20px; button3'><a href='index.php'>voltar</a></button>";
   echo "<br>";   
?>
</div>
        </div>

        


<div class="rodape">

@Dyjayny Silva
</div>


</body>
</html>