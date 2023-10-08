<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="estilo.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container-fluid center">
    <div class="row">
      <h1>Iniciar Sesión</h1>
      <div class="col">
        <form action="<?= base_url('usuario/login') ?>" method="post">
          <div class="mb-3">
            <input type="email" placeholder="Correo Electronico" class="form-control" id="CE" name="CE">
          </div>
          <div class="mb-3">
            <input type="password" placeholder="Contraseña" class="form-control" id="Pass" name="Pass">
          </div>
          <div class="d-flex justify-content-around">
            <button type="submit" class="btn btn-light btn-block w-25">Ingresar</button>
            <button type="button" class="btn btn-outline-light btn-block w-25" data-bs-toggle="modal" data-bs-target="#Regis">Registrarse</button>
          </form>
          </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="Regis" tabindex="-1" aria-labelledby="Regis" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="Regis">Registro de Usuario</h1>
        </div>
        <form action="<?= base_url('usuario') ?>" method="post">
          <div class="modal-body">

            <div class="mb-3">
              <input type="text" placeholder="Usuario" class="form-control" id="NN" name="NN">
            </div>
            <div class="mb-3">
              <input type="email" placeholder="Correo Electronico" class="form-control" id="CEr" name="CEr">
            </div>
            <div class="mb-3">
              <input type="password" placeholder="Contraseña" class="form-control" id="Passr" name="Passr">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" value="Submit" class="btn btn-dark">Registrarse</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
