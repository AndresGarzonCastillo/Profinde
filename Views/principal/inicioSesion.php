<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/inicioSesion.css">
<?php include_once 'Views/template-principal/header.php'; ?>
<div class="container-fluid">
  <div class="row rowcenter">
    <div class="col-sm-6">
      <img src="<?php echo BASE_URL; ?>assets/img/Profinde_Sesion.jpg" alt="" style="height: 25rem; width: 25rem;  margin-left: 12vh !important; margin-top: -11vh;">
    </div>
    <div class="col-sm-6">
      <div class="card" style="border-radius: 0px; width: 25rem;  width: 22rem; margin-left: 10vh; margin-top: -13vh; box-shadow:3px 5px 2.5px grey; border-radius: 10px;">
        <div class="card-body text-center">
          <form>
            <div class="mb-3">
              <h3 style="color: #4EB9EF;">INICIAR SESION</h3>

              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" placeholder="Email">
                <label for="floatingInput">Email</label>
              </div>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="password" placeholder="Contraseña">
              <label for="floatingInput">Contraseña</label>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto mt-2">
              <a onclick="validar()" class="btn btn-primary btn mb-1" style="background-color: #4EB9EF; color: white; border-color:#4EB9EF ;">INGRESAR</a>
            </div>

            <div class="row mr-1 mt-2 mb-2">
              <a href="/html/recPassword.html">¿Has olvidado tu Contraseña?</a>
            </div>
          </form>
          <div class="row mb-3 m-1">
            <button type="button" class="btn btn-light" style="border: silver solid 1px; background-color: white; color: silver; border-radius: 5px;">Iniciar
              sesion con Google</button>
          </div>
          <div class="row m-1">
            <button type="button" class="btn btn-light" style="border: silver solid 1px; background-color: white; color: silver; border-radius: 5px;">Iniciar
              sesion con Facebook</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once 'Views/template-principal/footer.php'; ?>