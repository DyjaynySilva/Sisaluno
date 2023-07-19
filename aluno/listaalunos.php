<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="styles1.css">
  <title>lista aluno</title>
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

  

<?php 
/*
 * Melhor prática usando Prepared Statements
 * 
 */
  require_once('conexao.php');
   
  $retorno = $conexao->prepare('SELECT * FROM aluno');
  $retorno->execute();

?>       
        <h1> Atenção! Só é permitido alterar o nome, o CPF e a cidade.</h1>  
        <table> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>CPF</th>
                    <th>CIDADE</th>
                    <th>EMAIL</th>
                    <th>SENHA</th>
                    <th>ESTADO</th>
                    <th>CEP</th>
                    <th>OCUPAÇÃO</th>
                    <th>INSTITUIÇÃO</th>

                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                            <td> <?php echo $value['id']?>  </td> 
                            <td> <?php echo $value['nome']?>  </td> 
                            <td> <?php echo $value['cpf']?>  </td> 
                            <td> <?php echo $value['cidade']?> </td> 
                            <td> <?php echo $value['email']?>  </td> 
                            <td> <?php echo $value['senha']?>  </td> 
                            <td> <?php echo $value['estado']?>  </td> 
                            <td> <?php echo $value['cep']?>  </td> 
                            <td> <?php echo $value['ocupacao']?>  </td> 
                            <td> <?php echo $value['instituicao']?>  </td> 

                            <td>
                               <form method="POST" action="altaluno.php">

                                         <input name="id" type="hidden" value=" <?php echo $value['id'];?>"/>
                                        <input name="nome" type="hidden" value=" <?php echo $value['nome'];?>"/>
                                        <input name="cpf" type="hidden" value=" <?php echo $value['cpf'];?>"/>
                                        <input name="cidade" type="hidden" value=" <?php echo $value['cidade'];?>"/>
                                        <input name="email" type="hidden" value=" <?php echo $value['email'];?>"/>
                                        <input name="senha" type="hidden" value=" <?php echo $value['senha'];?>"/>
                                        <input name="estado" type="hidden" value=" <?php echo $value['estado'];?>"/>
                                        <input name="cep" type="hidden" value=" <?php echo $value['cep'];?>"/>
                                        <input name="ocupacao" type="hidden" value=" <?php echo $value['ocupacao'];?>"/>
                                        <input name="instituicao" type="hidden" value=" <?php echo $value['instituicao'];?>"/>

                                        <button name="alterar"  type="submit" style="background-color: rgb(46, 179, 19);width: 70px;height: 30px;font-family: 'Times New Roman', Times, serif;border-radius: 10px;border:transparent;padding: 10px;margin: 20px;" >Alterar</button>
                                </form>

                             </td> 

                             <td>
                               <form method="GET" action="crudaluno.php">

                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <input name="nome" type="hidden" value="<?php echo $value['nome'];?>"/>
                                        <input name="cpf" type="hidden" value=" <?php echo $value['cpf'];?>"/>
                                        <input name="cidade" type="hidden" value=" <?php echo $value['cidade'];?>"/>
                                        <input name="email" type="hidden" value=" <?php echo $value['email'];?>"/>
                                        <input name="senha" type="hidden" value=" <?php echo $value['senha'];?>"/>
                                        <input name="estado" type="hidden" value=" <?php echo $value['estado'];?>"/>
                                        <input name="cep" type="hidden" value=" <?php echo $value['cep'];?>"/>
                                        <input name="ocupacao" type="hidden" value=" <?php echo $value['ocupacao'];?>"/>
                                        <input name="instituicao" type="hidden" value=" <?php echo $value['instituicao'];?>"/>

                                        <button name="excluir"  type="submit" style=" background-color: rgb(235, 10, 29);width: 70px;height: 30px; font-family: 'Times New Roman', Times, serif;border-radius: 10px;border:transparent;padding: 10px;margin: 20px;">Excluir</button>
                                </form>

                             </td> 


                       
                      </tr>
                    <?php  }  ?> 
                 </tr>
            </tbody>
        </table>
<?php  
   echo "<br>";       
   echo "<button class=button  style= background-color: rgb(19, 155, 179);width: 70px;height: 30px; font-family: 'Times New Roman', Times, serif;border-radius: 10px;border:transparent;padding: 10px;margin: 20px; button3'><a href='index.php'>voltar</a></button>";
   echo "<br>";   
?>

<div class="rodape">

@Dyjayny Silva
</div>

</body>
</html>