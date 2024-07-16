<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de massagem</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://01.org/clear-sans">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <?php 
        print"
        
        <div class='header'>

            <h1 class='title'>Juices Qi</h1>
            
            <div class='header-icons1>

                <a><img src='../img/search_FILL0_wght400_GRAD0_opsz24.png'></a>
                <a><img src='../img/account_circle_FILL0_wght400_GRAD0_opsz24.png'></a>

            </div>  

        </div>  

        <div class='login'>

            <form action='../../index.html?operation=login' method='post' class='form_login' name='form_login'>

                <label class='label_login' style='text-align: center'>Você errou</label>
                <br>
                <button type='submit' class='btn_login'>Sair</button>

            </form>

        </div>

        "

    ?>

    <?php  session_start();  ?>

    <?php if (!empty($_SESSION["msg_error"])) : ?>

    <div class="alert alert-danger">

        <p><?= $_SESSION["msg_error"]; ?></p>

    </div>

    <?php unset($_SESSION["msg_error"]); endif; ?>

</body>

</html>