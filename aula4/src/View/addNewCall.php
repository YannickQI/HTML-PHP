<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova chamada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body >

    <?php 
    print"

    <main class='d-flex justify-content-center align-items-center vh-100'>

    <form action='../Controller/CallView.php?operation=insert' method='post' class='w-50 h-50 bg-primary p-3'>
 
    <input type='name' id='nome' name='nome' required placeholder='nome' class='form-control my-3'>
    <input type='email' id='email' name='email' required placeholder='@email.com' class='form-control my-3'>
    <input type='name' id='Equipamentos' name='Equipamentos' required placeholder='Equipamentos' class='form-control my-3'>

    
    <button type='submit' class='btn btn-light my-3'>Enviar</button>

    <br>
    <h5 style='text-align: center'><a href='dashboard.php' class='text-white'> <- SAIR</a></h5>

    </form>
    </main>

    "
    ?>

</body>

</html>