<?php include_once 'Views/template-principal/header.php'; ?>
<div class="container-fluid bg-light py-2">
    <div class="col-md-6 m-auto text-center">
        <h1 class="h1 mt-3">Contact Us</h1>
        <p>
            Proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet.
        </p>
    </div>
</div>
<!-- Start Contact -->
<div class="card mb-3" style="max-width: 2000px;">
    <div class="row g-0">
    <div class="col-md-5 d-flex justify-content-center align-items-center" style="margin-left: 45px;"> 
            <img src="<?php echo BASE_URL; ?>/assets/img/profindeContactenos.jpg" class="img-fluid rounded-start w-100" alt="Profinde Contactenos">
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <div class="container py-0">
                    <div class="row py-5">
                        <form class="col-md-9 m-auto" method="post" role="form">
                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <label for="inputname">Name</label>
                                    <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Name">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label for="inputemail">Email</label>
                                    <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputsubject">Subject</label>
                                <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Subject">
                            </div>
                            <div class="mb-3">
                                <label for="inputmessage">Message</label>
                                <textarea class="form-control mt-1" id="message" name="message" placeholder="Message" rows="8"></textarea>
                            </div>
                            <div class="row">
                                <div class="col text-end mt-2">
                                    <a><br>
                                        <button class="buttonContainer">Enviar</button>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact -->
<?php include_once 'Views/template-principal/footer.php'; ?>
</body>

</html>