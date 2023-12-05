<!DOCTYPE html>
<html lang="en">

<head>
  <title>Gasto Inteligente - Registro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(./images/finance6.jpg);">
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
          <h2 class="heading-section">Gasto Inteligente</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
          <div class="login-wrap p-0">
            <h3 class="mb-4 text-center">Crear cuenta</h3>
            <!-- Modificar la acción del formulario para apuntar al nuevo endpoint de la API -->
            <form action="api/register_user.php" method="post" class="signup-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombre completo" name="nombre" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Correo" name="email" required>
              </div>
              <div class="form-group">
                <input id="password-field" type="password" class="form-control" placeholder="Contraseña" name="password" required>
                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
              </div>
              <div class="form-group">
                <button type="submit" class="form-control btn btn-primary submit px-3">Regístrate</button>
              </div>
              <div class="form-group d-md-flex">
                <div class="w-50">
                  <label class="checkbox-wrap checkbox-primary">Recuérdame
                    <input type="checkbox" checked>
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="w-50 text-md-right">
                  <a href="#" style="color: #fff;" data-toggle="modal" data-target="#termsModal">Términos & Condiciones</a>
                </div>
              </div>
            </form>
            <p class="w-100 text-center">&mdash; O inicia sesión con &mdash;</p>
            <div class="social d-flex text-center">
              <a href="#" class="px-2 py-2 mr-2 rounded"><span class="ion-logo-Correo mr-2"></span> Google</a>
              <a href="#" class="px-2 py-2 mr-2 rounded"><span class="ion-logo-twitter mr-2"></span> Github</a>
            </div>

            <!-- Línea "Ya tienes una cuenta? Iniciar sesión →" como enlace -->
            <p class="w-100 text-center mt-3">¿Ya tienes una cuenta? <a href="./login.php" style="color: #fff;">Iniciar sesión →</a></p>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal de Términos y Condiciones -->
  <div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="termsModalLabel">Términos y Condiciones</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Incluye el contenido de tus términos y condiciones aquí -->
          <?php include("./pages/Terms&Conditions.php"); ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>