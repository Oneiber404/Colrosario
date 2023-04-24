<!-- Page name -->
<head>
    <title>Colegio Nuestra Señora del Rosario Espinal</title>
</head>
<!-- Page name End-->

<!-- includes -->
<?php include '../includes/preload.php';?>
<?php include '../includes/head.php';?>
<?php include '../includes/header.php';?>
<!-- includes End -->

 <!-- Page Header Start -->
 <div class="container-fluid bg-service py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">Contacto</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="index.html">Inicio</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="">Contacto</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Dónde Estamos</h6>
                    <h1 class="section-title mb-3">BUZÓN DE SUGERENCIAS</h1>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control p-4" id="name" placeholder="Escriba su nombre" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control p-4" id="email" placeholder="Escriba su Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Escriba su número telefónico" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control p-4" rows="6" id="message" placeholder="Mensaje" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Enviar Mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <iframe style="width: 100%; height: 100%; object-fit: cover;"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15917.460800253808!2d-74.8878799!3d4.1483836!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x60acd31fec7ee61c!2sColegio%20Nuestra%20Se%C3%B1ora%20Del%20Rosario!5e0!3m2!1ses-419!2sco!4v1603751800300!5m2!1ses-419!2sco"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
  


<!-- Footer Start -->
<?php include '../includes/footer.php';?>
<!-- Footer End -->

   