<?php
require dirname(__DIR__) . "/Controller/auth_verify.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP HelpDesk - Editar chamado</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="m-5">
  <nav class="bg-info d-flex justify-content-between p-3">
    <div>
      <a href="dashboard.php" class="text-white text-decoration-none">Dashboard</a>
      <a href="add-new-call.php" class="text-white text-decoration-none">Abrir chamado</a>
      <a href="../Controller/Call.php?operation=findAll" class="text-white text-decoration-none">Listar chamados</a>
    </div>
    <a href="../Controller/Auth.php?operation=logout" class="text-white text-decoration-none">Sair</a>
  </nav>
  <main class="bg-primary card d-flex align-items-center mt-5">
    <form action="../Controller/Call.php?operation=edit" method="post" class="w-75 p-3">
      <input type="hidden" id="code" name="code" value="<?= $_SESSION["call"]["id"] ?>">
      <label for="user_name">Nome do usuário</label>
      <input type="text" id="user_name" name="user_name" class="form-control" required value="<?= $_SESSION["user_data"]["name"] ?>" />
      <label for="user_email">Email do usuário</label>
      <input type="email" id="user_email" name="user_email" class="form-control" required value="<?= $_SESSION["user_data"]["email"] ?>" />
      <label for="pc_number">Número do equipamento</label>
      <input type="number" id="pc_number" name="pc_number" class="form-control" required value="<?= $_SESSION["call"]["equipment_id"] ?>" />
      <label for="floor">Andar do equipamento</label>
      <input type="number" id="floor" name="floor" class="form-control" required value="<?= $_SESSION["call"]["floor"] ?>" />
      <label for="room">Sala do equipamento</label>
      <input type="number" id="room" name="room" class="form-control" required value="<?= $_SESSION["call"]["room"] ?>" />
      <label for="classification" class="d-block">Classificação</label>
      <select name="classification" id="classification" class="form-select">
        <option value="low">Baixo</option>
        <option value="medium">Médio</option>
        <option value="high">Alto</option>
      </select>
      <label for="description">Descrição da ocorrência</label>
      <textarea name="description" id="description" cols="30" rows="5" class="form-control" required><?= $_SESSION["call"]["description"] ?></textarea>
      <label for="notes">Notas e observações</label>
      <textarea name="notes" id="notes" cols="30" rows="5" class="form-control"><?= $_SESSION["call"]["notes"] ?></textarea>
      <button class="btn btn-light mt-3">Salvar</button>
    </form>
  </main>
</body>

</html>