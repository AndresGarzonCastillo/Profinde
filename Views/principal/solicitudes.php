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
            <div class="search_bar">
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
            <div class="card text-dark bg-info mb-3 mt-5" style="max-width: 80rem;">
                <div class="card-header">Solicitudes
                    <tbody>
                        <?php foreach ($solicitudes as $solicitud) : ?>
                            <tr>
                                <td><?php echo $solicitud['id']; ?></td>
                                <td><?php echo $solicitud['nombreSolicitud']; ?></td>
                                <td><?php echo $solicitud['usuario']; ?></td>
                                <td><?php echo $solicitud['categoria']; ?></td>
                                <td><?php echo $solicitud['descripcion']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </div>
            </div>
        </section>
    </div>
</section>
<?php include_once 'Views/template-principal/footer.php'; ?>
</body>

</html>