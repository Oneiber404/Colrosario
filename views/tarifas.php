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
<a href="#" class="btn btn-primary px-3 back-to-top" style="display: inline;"><i class="fa fa-angle-double-up"></i></a>  <!-- Page Header Start -->
  <div class="container-fluid bg-service py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">tarifas</h1>
                    </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="../index.php">Inicio</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="">tarifas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Page Header End -->


    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <div class="d-flex mb-2">
                            <a class="text-secondary text-uppercase font-weight-medium" href="">Colegio Nuestra Señora del Rosario</a>
                        </div>
                        <h1 class="section-title mb-3">Detalle de tarifas por grado escolar</h1>
                    </div>

                    <div class="mb-5">
                        <img class="img-fluid rounded w-100 mb-4" src="../assets/img/img-pag/tarifas.png" alt="Image">
                        <p><h3 style="text-align:center">COSTOS EDUCATIVOS AÑO 2023 TARIFA DE MATRÍCULA Y PENSIONES</h3></p>

                        <!-- Detail Start -->
                        <?php include '../includes/tarifas-table.php';?>
                        <!-- Detail End -->

                    </div>
                </div>
<!-- Detail Start -->
<?php include '../includes/detail.php';?>
<!-- Detail End -->


<!-- Footer Start -->
<?php include '../includes/footer.php';?>
<!-- Footer End -->
