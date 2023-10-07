<!-- Modal -->
<div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-util text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">
                    <i class="fas fa-cart-arrow-down"></i>Carrito
                </h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover align-middle" id="tableListaCarrito">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Subtotal</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-around mb-3">
                <h3 id="totalGeneral"></h3>
                <?php if (!empty($_SESSION['emailCliente'])) { ?>
                    <a class="btn btn-outline-primary" href="<?php echo BASE_URL . 'perfil'; ?>">Comprar</a>
                <?php } else { ?>
                    <a class="btn btn-outline-primary" href="#" onclick="abrirModalLogin();">Login</a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div id="modalLogin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="titleLogin">PROFINDE</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body m-3">
                <form method="get" action="">
                    <div class="text-center mb-4">
                        <img class="img-thumbnail" src="<?php echo BASE_URL . 'assets/img/logo_profinde_sin_fondo.png'; ?>" alt="" width="100">
                    </div>
                    <div class="row">
                        <div class="col-md-12" id="frmLogin">
                            <div class="form-group mb-3">
                                <label for="correoLogin">
                                    <i class="fas fa-envelope"></i>Correo
                                </label>
                                <input id="correoLogin" class="form-control" type="email" name="correoLogin" placeholder="Email">
                            </div>
                            <div class="form-group mb-3">
                                <label for="claveLogin">
                                    <i class="fas fa-key"></i>Contraseña
                                </label>
                                <input id="claveLogin" class="form-control" type="password" name="claveLogin" placeholder="Contraseña">
                            </div>
                            <a href="#" id="btnRegister">Registrarse</a>
                            <div class="float-end">
                                <button class="btn btn-primary btn-lg" type="button" id="login">Login</button>
                            </div>
                        </div>
                        <div class="col-md-12 d-none" id="frmRegister">
                            <div class="form-group mb-3">
                                <label for="nombreRegistro">
                                    <i class="fas fa-list"></i>Nombre
                                </label>
                                <input id="nombreRegistro" class="form-control" type="text" name="nombreRegistro" placeholder="Nombre">
                            </div>
                            <div class="form-group mb-3">
                                <label for="correoRegistro">
                                    <i class="fas fa-envelope"></i>Correo
                                </label>
                                <input id="correoRegistro" class="form-control" type="email" name="correoRegistro" placeholder="Email">
                            </div>
                            <div class="form-group mb-3">
                                <label for="claveRegistro">
                                    <i class="fas fa-key"></i>Contraseña
                                </label>
                                <input id="claveRegistro" class="form-control" type="password" name="claveRegistro" placeholder="Contraseña">
                            </div>
                            <a href="#" id="btnLogin">Iniciar sesion</a>
                            <div class="float-end">
                                <button class="btn btn-primary btn-lg" type="button" id="registrarse">Registrarse</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Start Footer -->
<div class="footer1">
    <footer class="fixed-bottom">
        <nav class="navbar bg-body-tertiary" style="background-color: #363F50 !important; margin-top: -1vh;">
            <a class="navbar-brand" href="#" style="justify-content: center; ">
                <a href="<?php echo BASE_URL;?>/index.php"><img src="<?php echo BASE_URL; ?>assets/img/Profinde_Logo.png" alt="Logo" width="70px" height="51px"></a>
                <a href="<?php echo BASE_URL . 'principal/shop' ?>" class="btn btn-dark" style="background-color: #363F50; border-color: #363F50;">Servicios</a>
                <a href="<?php echo BASE_URL . 'principal/about' ?>" class="btn btn-dark" style="background-color: #363F50; border-color: #363F50;">Quiénes Somos</a>
                <a href="<?php echo BASE_URL . 'principal/contactos' ?>" class="btn btn-dark" style="background-color: #363F50; border-color: #363F50;">Contáctanos</a>
                <a href="/html/contactenos.html" class="btn btn-dark" style="background-color: #363F50; border-color: #363F50;">Términos y Condiciones</a>
                <a href="/html/contactenos.html" class="btn btn-dark" style="background-color: #363F50; border-color: #363F50;">Políticas de Privacidad</a>
                <a href="/html/contactenos.html" class="btn btn-dark" style="background-color: #363F50; border-color: #363F50;">Descarga nuestra APP</a>
            </a>
        </nav>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<!--<script src="<?php echo BASE_URL; ?>assets/js/jquery-3.6.0.min.js"></script>-->
<script src="<?php echo BASE_URL; ?>assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/templatemo.js"></script>
<!--<script src="<?php echo BASE_URL; ?>assets/js/all.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/slick.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/css/slick/slick.min.css"></script>
<script src="<?php echo BASE_URL; ?>assets/css/slick/slick.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/prueba.js"></script>-->
<script src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/cdn.jsdelivr.net_npm_sweetalert2@11.7.20_dist_sweetalert2.all.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/carrito.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/login.js"></script>
<script>
    const base_url = '<?php echo BASE_URL; ?>';
</script>
</body>
