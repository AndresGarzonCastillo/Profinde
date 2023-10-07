<?php include_once 'Views/template-principal/header.php'; ?>
<!-- Start Banner Hero -->
<br>
<section class="hero__main container container--hero">
    <article class="hero__texts">
        <h1 class="hero__title">TENEMOS LOS MEJORES <br>SERVICIOS, CON LA <br> MEJOR CALIDAD. </h1>
        <p class="hero__paragraph">En PROFINDE encuentras el servicio que buscas con calidad <br> inigualable. Contarás con todo lo necesario para comunicarte con tu profesional para atender tu necesidad</p>
        <a onclick="abrirModalLogin();"><br>
            <button class="buttonContainer">Quiero un Servicio</button>
        </a>
    </article>
    <figure class="hero__figure">
        <img src="<?php echo BASE_URL; ?>/assets/img/profinde (2).png" class="hero__img ">
    </figure>
</section>
<br>
<br>
<main class="main">
    <section class="about" id="nosotros">
        <article class="about__container container">
            <figure class="about__figure">
                <img src="<?php echo BASE_URL; ?>/assets/img/Profinde_variedad.svg" class="about__img">
            </figure>
            <div class="about__texts">
                <h2 class="subtitle">¿Con cuántos servicios contamos?</h2>
                <p class="paragraph">En PROFINDE el servicio que necesites lo obtienes al alcance de un click,
                    contamos con muchas ramas de cada servicio trayendo hacia a ti las mas usadas y demandadas del mercado actual
                </p>
            </div>
        </article>
    </section>
    <section class="learn container" id="aprender">
        <h2 class="subtitle">¿Qué ramas tenemos?</h2>
        <div class="learn__articles">
            <article class="learn__article">
                <img src="<?php echo BASE_URL; ?>/assets/img/Profinde_cuidados-img.svg" class="learn__img">
                <h2 class="learn__title">Salud y Belleza</h2>
                <p class="paragraph">sgdfgd a dfgd fg dfhhfg fgf dfhdfhh hgfhf ghhgt hyh ert.</p>
            </article>
            <article class="learn__article">
                <img src="<?php echo BASE_URL; ?>/assets/img/Profinde_home-img.svg" class="learn__img">
                <h2 class="learn__title">Hogar</h2>
                <p class="paragraph">fgdf gfdgdf 654 gdfyh dfhdjhfgj ghdfghd hdfghdfg fhf a gfsgddfgs, sddf dffg dfgsdfg a el sdgfsdf sdfgssd sdfg gfd dfgsdfg.</p>
            </article>
            <article class="learn__article">
                <img src="<?php echo BASE_URL; ?>/assets/img/Profinde_mecanica-img.svg" class="learn__img">
                <h2 class="learn__title">Mecánica</h2>
                <p class="paragraph">gsdfgsdfg a adasdfgptar gdsfd tus gdsfgsdf a sdfgsdfgsdf sgfdsfg, sdfgsd que se sdfgsd sdfgsd fg sdfgsdfgsd sdfgsdfgsd.</p>
            </article>
        </div>
    </section>
    <section class="sponsor" id="sponsor">
        <div class="sponsor__main container">
            <article class="sponsor__texts">
                <h1 class="subtitle">¡Sé parte de este equipo!</h1>
                <p class="paragraph">En PROFINDE cada persona es escencial para que sea un sistema funcional, haz parte del equipo y ayuddemonos entre todos</p>
                <a onclick="abrirModalLogin();"><br>
                    <button class="buttonContainer">Unirme</button>
                </a>
            </article>
            <figure class="sponsor__figure">
                <img src="<?php echo BASE_URL; ?>/assets/img/Profinde_comunity-img.svg" class="sponsor__img">
            </figure>
        </div>
    </section>
</main>
<!-- End Featured Product -->
<?php include_once 'Views/template-principal/footer.php'; ?>