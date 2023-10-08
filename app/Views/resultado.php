<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="<?= base_url() ?>estilo.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="container-fluid center">
    <div class="row">
      <div class="col d-flex align-items-center flex-column">
        <h1>¡Bienvenido!</h1>
        <h3><?= $user['usuario'] ?></h3>
        <h3>Creado: <?= $user['creacion'] ?></h3>
      </div>
    </div>
  </div>
</body>
</html>
