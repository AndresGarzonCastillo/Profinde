<?php include_once 'Views/template-principal/header.php'; ?>
<div class="container-fluid" style="min-height: 75vh;">
  <div class="row" style="justify-content: center; margin-top: 2vh; margin-left: 10vh;">
    <div class="col-6">
      <img src="<?php echo BASE_URL; ?>assets/img/Profinde_Registro.svg" alt="" style="width: 30rem; margin-top: -2vh;">
    </div>
    <div class="col-6" style="height: 30rem; width: 30rem;">
      <div class="card" style="width: 22rem; background-color: #D8EFFA; border: none;">
        <div class="row" style="text-align: center; color: grey;">
          <h2>Bienvenido</h2>
        </div>
        <p class="card-text mb-1 text-center">Para continuar con tu registro completa la siguiente informacion</p>
        <div class="card-body">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nombreRegistro" placeholder="name@example.com">
            <label for="floatingInput">Nombres</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="correoRegistro" placeholder="Password">
            <label for="floatingPassword">Correo Electronico</label>
          </div>
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="telefonoRegistro" placeholder="3102003000">
            <label for="floatingInput">Numero de telefono</label>
          </div>
          <div class="form-floating mb-2">
            <input type="password" class="form-control" id="claveRegistro" placeholder="Password">
            <label for="floatingPassword">Contraseña</label>
          </div>
          <div class="row" style="justify-content: center;">
            <a id="registrarse" class="btn btn-primary" type="button" style="background-color: #4EB9EF; border: none;">Registrarme</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<?php include_once 'Views/template-principal/footer.php'; ?>