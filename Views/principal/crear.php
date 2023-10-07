<?php include_once 'Views/template-principal/header.php'; ?>
<section class="sectionp">
    <div class="containerp">
        <nav class="navp">
            <div class="navbarp">
                <div class="logop">
                    <img class="imgp rounded-circle" src="<?php echo BASE_URL . 'assets/img/perfilProfinde.jpg'; ?>" alt="" width="150">
                </div>
                <h3 class="h3">Bienvenido <?php echo $_SESSION['nombresCliente']; ?></h3>
                <ul class="ulp">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL . 'clientes' ?>">
                            <i class="fas fa-chart-bar"></i>
                            <span class="navp-item">Mi Cuenta</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL . 'principal/crear' ?>">
                            <i class="fas fa-chart-bar"></i>
                            <span class="navp-item">Crear solicitud</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL . 'principal/solicitudes' ?>">
                            <i class="fas fa-chart-bar"></i>
                            <span class="navp-item">Servicios</span>
                        </a>
                    </li>
                    <!--<li><a href="#">
              <i class="fas fa-cog"></i>
              <span class="navp-item">Configuración</span>
            </a>
          </li>
          <li><a href="#">
              <i class="fas fa-question-circle"></i>
              <span class="navp-item">Ayuda</span>
            </a>
          </li>-->
                    <li><a href="home/session">
                            <i class="fab fa-dochub"></i>
                            <span class="navp-item">Cerrar sesion</span>
                        </a>
                    </li>
                    <li><a href="#" class="logout">
                            <i class="fas fa-sign-out-alt"></i>
                            <span class="navp-item">Cerrar</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <section class="mainp">
            <!--<div class="search_bar">
                <input type="search" placeholder="Buscar">
                <select name="" id="" placeholder="Categoria">
                    <option>Categoria</option>
                    <option>Web Design</option>
                    <option>App Design</option>
                    <option>App Development</option>
                </select>
                <select class="filter">
                    <option>Filtrar</option>
                </select>
            </div>

             <div class="tags_bar">
        <div class="tag">
          <i class="fas fa-times"></i>
          <span>Programador</span>
        </div>  
        <div class="tag">
          <i class="fas fa-times"></i>
          <span>Junior</span>
        </div>
        <div class="tag">
          <i class="fas fa-times"></i>
          <span>PHP</span>
        </div>
        <div class="tag">
          <i class="fas fa-times"></i>
          <span>JavaScript</span>
        </div>
      </div> -->
            <div class="card mt-5">
                <div class="card-body">
                    <form class="row gx-4 gy-3 align-items-center" method="POST" action="<?php echo BASE_URL . 'clientes/crear'; ?>">
                        <div class="col-sm-6">
                            <label class="visually-hidden" for="specificSizeInputName">Nombre del Servicio</label>
                            <input type="text" class="form-control" id="specificSizeInputName" name="nombreSolicitud" placeholder="Nombre del Servicio">
                        </div>
                        <div class="col-sm-3">
                            <label class="visually-hidden" for="specificSizeSelect1">Preference</label>
                            <select class="form-select" id="specificSizeSelect1" name="usuario">
                                <option selected></option>
                                <option value="1">Contratante</option>
                                <option value="2">Contratista</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label class="visually-hidden" for="specificSizeSelect2">Preference</label>
                            <select class="form-select" id="specificSizeSelect2" name="categoria">
                                <option selected>Categoria:</option>
                                <option value="1">Servicio Tecnico</option>
                                <option value="2">Construccion</option>
                                <option value="3">Asesor de Imagen</option>
                                <option value="4">Servicio Domestico</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Descripcion del Servicio</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="descripcion" rows="3"></textarea>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary" id="crear">Crear</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</section>
<?php include_once 'Views/template-principal/footer.php'; ?>
</body>

</html>