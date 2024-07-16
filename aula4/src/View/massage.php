<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERROU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="p-5">
    <?php
    print"
    <img src='bravo.gif' alt='logotipo' title='dance' width='300px' style='display: block; margin-left: auto; margin-right: auto;'>
    <br>
    <h1 style='text-align: center'>Você errou</h1>
    <h5 style='text-align: center'><a href='../Controller/aula4.php?operation=logout'> <- VOLTAR</a></h5>
    "
    ?>

    <?php
        session_start();
        if(!empty($_SESSION["msg_error"])):
    ?>

    <div class="alert alert-danger">
            <p><?=$_SESSION["msg_error"] ?></p>
    </div>

    <?php
        unset($_SESSION["msg_error"]);
        endif;
    ?>

    <?php
        if(!empty($_SESSION["msg_warning"])):
    ?>

    <div class="alert alert-warning">
            <p><?= $_SESSION["msg_warning"]; ?></p>
    </div>

    <?php
        unset($_SESSION["msg_warning"]);
        endif;
    ?>

</body>

</html>