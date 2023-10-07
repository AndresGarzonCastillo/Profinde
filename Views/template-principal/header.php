<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  href="<?php echo BASE_URL . 'assets/css/slick/style2.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . 'assets/css/slick/style3.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . 'assets/css/slick/servicios.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . 'assets/css/slick/prueba.css'; ?>">
    <link rel="apple-touch-icon" href="<?php echo BASE_URL . 'assets/img/apple-icon.png'; ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL . 'assets/img/Profinde_flotante.ico'; ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . 'assets/css/font-awesome.min.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . 'assets/css/slick/slick-theme.min.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . 'assets/css/slick/slick-theme.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . 'assets/css/slick/slick.min.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . 'assets/css/slick/slick.css'; ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . 'assets/css/bootstrap.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . 'assets/css/templatemo.css'; ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . 'assets/css/templatemo.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . 'assets/css/custom.css;' ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://www.paypal.com/sdk/js?client-id=<?php echo CLIENT_ID; ?>&currency=<?php echo MONEDA; ?>"></script>
    <title><?php echo TITLE . ' - ' . $data['title']; ?></title>
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand text-util logo h1 align-self-center" href="<?php echo BASE_URL; ?>">
            <img src="<?php echo BASE_URL; ?>/assets/img/logo_profinde_sin_fondo.png" style="width: 10%;" class="nav__logo">
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="align-self-center d-flex justify-content-start">
                    <ul class="nav navbar-nav d-flex justify-content-start mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL . 'principal/shop'?>">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL . 'principal/contactos' ?>">Contactenos</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fas fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#" id="verCarrito">
                        
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-util text-dark" id="btnCantidadCarrito"></span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="<?php echo BASE_URL . 'principal/deseo' ?>">
                        
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-util text-dark" id="btnCantidadDeseo"></span>
                    </a>
                    <?php if (!empty($_SESSION['correoCliente'])) { ?>
                        <a class="nav-icon position-relative text-decoration-none" href="<?php echo BASE_URL . 'clientes' ?>">
                            <img src="<?php echo BASE_URL . 'assets/img/perfilProfinde.jpg'?>" alt="" width="50">
                        </a>
                    <?php } else { ?>
                        <a class="nav-icon position-relative text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#modalLogin">
                            <i class="fas fa-fw fa-user text-dark mr-3"></i>
                            <!--<span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-util text-dark"></span>-->
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->
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
    