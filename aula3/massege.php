<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Massege</title>

</head>

<body>
    <main>
        <?php
            session_start();
            if(!empty($_SESSION["error"])):
        ?>

        <p><?= $_SESSION["error"]?></p>

        <?php endif; ?>
        <?php unset ($_SESSION["error"]);?>
    </main>
</body>

</html>