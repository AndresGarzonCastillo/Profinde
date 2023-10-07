<?php include_once 'Views/template-principal/header.php'; ?>
<link rel="stylesheet" href="<?php echo BASE_URL; ?>//assets/css/servicios.css">
<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/prueba.css">
<script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<section class="servicios">
    <div class="gallery">
        <div class="gallery-container">
            <div class="gallery-item">
                <img class="img" src="<?php echo BASE_URL; ?>assets/img/ProfindeGrupo.jpg" alt="Profinde Grupo">
                <div class="textoCarrusel">
                    <h5 style="background-color: black; color: white; text-align: center">PROFINDE</h5>
                </div>
            </div>
            <div class="gallery-item">
                <img class="img" src="<?php echo BASE_URL; ?>assets/img/profindeConstruccion.jpg" alt="Profinde construcción">
                <div class="textoCarrusel">
                    <h5 style="background-color: black; color: white; text-align: center">Construcción</h5>
                    <p style="background-color: black; color: white; text-align: center">Electricistas, Ornamentadores, Plomeros, Albañiles, Maestros Diseñadores de Interiores</p>
                </div>
            </div>
            <div class="gallery-item">
                <img class="img" src="<?php echo BASE_URL; ?>assets/img/profindeDomestico.jpg" alt="Profinde doméstico">
                <div class="textoCarrusel">
                    <h5 style="background-color: black; color: white; text-align: center">Servicio Doméstico</h5>
                    <p style="background-color: black; color: white; text-align: center">Aseo del Hogar, Cocinero, Jardinero, Niñera, Masajista, Chofer Paseador de Mascotas, Tutor/Traductor, Enfermero</p>
                </div>
            </div>
            <div class="gallery-item">
                <img class="img" src="<?php echo BASE_URL; ?>assets/img/profindeImagen.jpg" alt="Profinde imagen">
                <div class="textoCarrusel">
                    <h5 style="background-color: black; color: white; text-align: center">Asesor de Imágen</h5>
                    <p style="background-color: black; color: white; text-align: center">Peluquero, Maquillador, Estilista, Manicurista/Pedicurista, Tratamiento Capilar</p>
                </div>
            </div>
            <div class="gallery-item">
                <img class="img" src="<?php echo BASE_URL; ?>assets/img/profindeTecnico.jpg" alt="Profinde técnico">
                <div class="textoCarrusel">
                    <h5 style="background-color: black; color: white; text-align: center">Servicio Técnico</h5>
                    <p style="background-color: black; color: white; text-align: center">Computadores, Celulares, Electrodomésticos, Maquinas de Coser</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="landing">
    <div class="inicio2">
        <img class="pr" src="<?php echo BASE_URL; ?>assets/img/profindeLanding.jpg" alt="Profinde">
    </div>
    <div class="inicio1">
        <h1><strong>Profinde</strong></h1><br>
        <h4>Encontrando Profesionales Independientes</h4><br>
        <h5>Calidad, honestidad, eficacia</h5>
        <p>
            En PROFINDE encuentras el servicio que buscas con calidad inigualable.
            Contarás con todo lo necesario para comunicarte con tu profesional
            para atender tu necesidad a tu medida y al alcance de un click
        </p>
        <a onclick="abrirModalLogin();"><br>
            <button class="buttonContainer">Registrate</button>
        </a>
    </div>
</section>
<script src="<?php echo BASE_URL; ?>assets/js/prueba.js"></script>
<!--End Brands-->
<?php include_once 'Views/template-principal/footer.php'; ?>
</body>

</html>