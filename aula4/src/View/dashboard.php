<?php require_once dirname(__DIR__) . "/Controller/AuthVerify.php"; ?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="p-5">

    <?php
        print "
            <img src='dance.gif' alt='logotipo' title='dance' width='300px' style='display: block; margin-left: auto; margin-right: auto;'>
            <br>
            <h1 style='text-align: center'>Consegi</h1>
            <h5 style='text-align: center'><a href='../Controller/aula4.php?operation=logout'> <- SAIR</a></h5>
            "
    ?>

    <nav class="bg-info p-3 d-flex justify-content-between">
        <div>
            <a href="addNewCall.php" class="text-white text-decoration-none">Nova chamada</a>
            <br>
            <a href="listCalls.php" class="text-white text-decoration-none">Lista de chamadas</a>
        </div>
    </nav>

    <main class="text-center">
        <?php session_start();?>
        <h1>Eaí <?= $_SESSION["userData"]["nome"] ?></h1>
    </main>
    
</body>

</html>