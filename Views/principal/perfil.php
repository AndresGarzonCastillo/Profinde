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
      <div class="cliente-info" style="margin: 170px !important;">
        <h4 style="margin-bottom: 50px !important;">Información del Cliente</h4>
        <p>Nombre: <?php echo $_SESSION['nombresCliente']; ?></p>
        <p>Correo Electrónico: <?php echo $_SESSION['correoCliente'];?></p>
      </div>
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
      </div>-->
    </section>
  </div>
</section>
<!-- End Content -->
<?php include_once 'Views/template-principal/footer.php'; ?>
<script src="<?php echo BASE_URL . 'assets/js/clientes.js'; ?>"></script>
</body>

</html>