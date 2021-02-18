<?php 
    require_once('db.class.php');
    
    $objDb = new db();
    $link = $objDb->conecta_mysql();
    $query = "SELECT codigo, descricao FROM turmas";
    $dados = mysqli_query($link, $query);

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    <title>WEB| Web Lines Sistemas </title>
</head>

<body>

    <div class="barranav">
        <div class="nav-logo">
            <a><img src="logo300x85.png"></a>
        </div>
        <!--Logo-->
        <div class="nav-menu">
            <ul>
                <li><a href="#">INSTITUCIONAL</a></li>
                <li><a href="#">SOLUÇÕES</a></li>
                <li><a href="#">REQUISIÇÃO</a></li>
                <li><a href="#">CONTATO</a></li>
                <li><a href="#">SAC</a></li>
                <li style="border: none;"><a href="#">TRABALHE CONOSCO</a></li>
            </ul>
        </div>
        <!--Menu-->
    </div>
    <!--Barra de navegação-->

    <div class="container">
    
    <div class="cabecalho">
        <h1>Cadastro de aluno</h1>
        <hr>    
    </div><!--Cabeçalho-->
    
    <div class="formulario">
        <form  method="post" action="insere_aluno.php">
            <div class="campo">
                <label for="nome"class="legenda"><strong>Nome </strong></label>
                <input type="text"  placeholder="Digite o nome" name="nome" id="nome" required>
            </div>

            <div class="campo">
                <label for="ra"class="legenda"><strong>R.A.</strong></label>
                <input type="text"  placeholder="Digite o r.a" name="ra" id="ra">
            </div>

            <div class="campo">
                <label for="email"class="legenda"><strong>Email</strong></label>
                <input type="email"  placeholder="Digite o  e-mail" id="email" name="email">
            </div>

            <div class="campo">
                <label for="turma"class="legenda"><strong>Turma</strong></label>
                <select  id="turma" name="turma" required>
                    <option disabled selected>Selecione uma turma</option>
                    <?php
                        while($turma = mysqli_fetch_array($dados)){
                    ?>
                        <option value="   <?php  echo $turma['codigo'] ?>    ">
                            <?php 
                               echo $turma['descricao'];
                            ?>
                        </option>
                    <?php 
                        } 
                    ?>

                </select>
            </div>
              
            <button type="submit" class="btn">Enviar</button>  
        </form>
             
               
    </div><!--Formulario-->

</body>


</html>

