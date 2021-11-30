<?php
/**
 * Configurar a aplicação
 *
 * @author Keliven Bordin Demarchi
 *
 * 
 */
  
  // conectando com o banco de dados e escolhendo o banco de dados.
  $sql["host"] = "localhost";
  $sql["usuario"] = "root";
  $sql["senha"] = "";
  $sql["base"] = "checklist";


  $conexao = mysqli_connect($sql["host"],$sql["usuario"],$sql["senha"]);
  $select_database = mysqli_select_db($conexao, $sql["base"]);
  mysqli_query($conexao, "SET NAMES utf8");


  
  // inicializando
 
  if (isset($_GET['ac'])){
     // adicionando tarefa
     if ($_GET['ac'] == "add"){
        // validando
        if (isset($_POST['tarefa'])){
           if (empty($_POST['tarefa'])){
              $erro_ = true;
           }
        } else {
           $erro_ = true;
        }
        if ($erro_ == false){
           $tarefa    = addslashes(htmlentities($_POST['tarefa']));
           $sql_add_tarefa = "INSERT INTO `".$sql['base']."` (`name` , `status` )
                          VALUES (
                          '$tarefa', 'N'
                          )";
           $exe_add_tarefa = mysql_query($sql_add_tarefa, $conexao) or die("Erro ao adiconar tarefa.");
        }
     }
     
     // marcando como realizada
     if ($_GET['ac'] == 'mm'){
        //validando
        if (isset($_GET['id'])){
           if (empty($_GET['id']) || !is_numeric($_GET['id'])){
              $erro_ = true;
           }
        } else {
           $erro_ = true;
        }
        
        // tudo ok
        if ($erro_ == false){
           $id = addslashes(htmlentities($_GET['id']));
           $sql_altera = "UPDATE ".$sql['base']." SET status = 'S' WHERE id = '$id'";
           $exe_altera = mysql_query($sql_altera, $conexao) or die("Erro ao marcar uma tarefa como realizada.");
        }
     }
  }
  
?>