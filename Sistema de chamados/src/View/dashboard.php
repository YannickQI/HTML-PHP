<?php
require dirname(__DIR__) . "/Controller/auth_verify.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HelpDesk - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="m-5">
    <nav class="bg-info d-flex justify-content-between p-3">
        <div>
            <a href="#" class="text-white text-decoration-none">Dashboard</a>
            <a href="add-new-call.php" class="text-white text-decoration-none">Abrir chamado</a>
            <a href="../Controller/Call.php?operation=findAll" class="text-white text-decoration-none">Listar chamados</a>
        </div>
        <a href="../Controller/Auth.php?operation=logout" class="text-white text-decoration-none">Sair</a>
    </nav>
    <main class="text-center">
        <h1>Bem-vindo(a) ao nosso sistema <?= $_SESSION["user_data"]["name"] ?></h1>
        <img src="https://d1ltgr77xghfz9.cloudfront.net/wp-content/uploads/sites/2/2017/12/o-que-e-help-desk.jpg" alt="Foto suporte" width=500>
    </main>
</body>

</html>