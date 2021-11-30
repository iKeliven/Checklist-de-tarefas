<?php 
    require_once 'config.php';

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="author" content="Keliven Demarchi" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Checklist</title>
    <link rel="icon" href="checklist.png">

    <link href="./css/style.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php
    $fuso = new DateTimeZone('America/Sao_Paulo');
    $data = new DateTime();
    $data->setTimezone($fuso);

    
?>
    <header>
        <div class="two logo">
            <img src="checklist.png" alt="checklist">
            <h2>Checklist</h2>
        </div>
        <div class="two datetime">
            <h3><?php echo $data->format('d-m-Y H:i');?> hs</h3>
        </div>
    </header>
    <main>
        <section class="bBottom">
            <form  action="config.php" method="post" class="four">
                <label>Adicionar Tarefa</label>
                <input type="text" id="tarefa" name ="tarefa" placeholder="Tarefa...">
                <input typr="submit" class="addBtn" value="Adicionar">
            </form>
        </section>
        <?php           
           
        ?>
        <section>
            <div class="title">
                <h1>Tarefas pendentes </h1>
            </div>
            <div class="four">
                <ul id="checklist">
                    <?php
                        // listando as tarefas pendentes
                        $sql_lista_tarefa = "SELECT * FROM ".$sql['base']." WHERE status = 'N' ORDER BY posicao ASC";
                        $exe_lista_tarefa = mysql_query($sql_lista_tarefa, $base) or die("Erro ao listar tarefas pendentes.");
                        $num_lista_tarefa = mysql_num_rows($exe_lista_tarefa);
                        if ($num_lista_tarefa > 0){
                            while ($reg_lista_tarefa = mysql_fetch_array($exe_lista_tarefa, MYSQL_ASSOC)){
                            ?>
                                <li><?=stripslashes($reg_lista_tarefa['name'])?> <a href="<?=$_SERVER['PHP_SELF']?>?ac=mm&id=<?=$reg_lista_tarefa['id']?>">[Realizado]</a></li>
                            <?php
                            }
                        }
                    ?>
                </ul>

                <div class="title">
                    <h1>Tarefas realizadas </h1>
                </div>
                <ul>
                    <?php
                    // listando as tarefas já realizadas
                    $sql_lista_re = "SELECT * FROM ".$sql['base']." WHERE status = 'S' ORDER BY posicao ASC";
                    $exe_lista_re = mysql_query($sql_lista_re, $base) or die("Erro ao listar tarefas pendentes.");
                    $num_lista_re = mysql_num_rows($exe_lista_re);
                    if ($num_lista_re > 0){
                        while ($reg_lista_re = mysql_fetch_array($exe_lista_re, MYSQL_ASSOC)){
                        ?>
                        <li class="checked" ><?=stripslashes($reg_lista_re['name'])?></li>
                    <?php
                        }
                    }
                    ?>
                </ul>
                    
            </div>
        </section>
    <main>
</body>
</html>