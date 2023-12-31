<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Gasto Inteligente - Iniciar sesión</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
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
              <h3 class="mb-4 text-center">¿Ya tiene una cuenta?</h3>
              <!-- Modificar la acción del formulario para apuntar al nuevo endpoint de la API -->
              <form action="./api/login_user.php" method="post" class="signin-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Correo" name="email" required>
                </div>
                <div class="form-group">
                  <input id="password-field" type="password" class="form-control" placeholder="Contraseña" name="password" required>
                  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control btn btn-primary submit px-3">Iniciar sesión</button>
                </div>
                <div class="form-group d-md-flex">
                  <div class="w-50">
                    <label class="checkbox-wrap checkbox-primary">Recuérdame
                      <input type="checkbox" name="remember" checked>
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="w-50 text-md-right">
                    <a href="#" style="color: #fff">Contraseña olvidada</a>
                  </div>
                </div>
              </form>
              <p class="w-100 text-center">&mdash; O Iniciar sesión con &mdash;</p>
              <div class="social d-flex text-center">
                <a href="#" class="px-2 py-2 mr-2 rounded"><span class="ion-logo-Correo mr-2"></span> Google</a>
                <a href="#" class="px-2 py-2 mr-2 rounded"><span class="ion-logo-twitter mr-2"></span> Github</a>
              </div>

              <!-- Línea "¿Eres nuevo? Crea una cuenta" como enlace -->
              <p class="w-100 text-center mt-3">¿Eres nuevo? <a href="./register.php" style="color: #fff;">Crea una cuenta</a></p>

            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>
