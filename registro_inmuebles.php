<?php
require 'database.php';

$db = new Database();
$con = $db->conectar();

//destruir la sesion y borrar todo lo que haya en la pagina

//session_destroy();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Registrar Usuario</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/LOGO.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container-fluid" style="border-top: 1px solid #E1E1E1; padding: 20px; "></div>
    </div>
    <div class="container">
        <form class="dashboard-container FormularioAjax" method="POST" data-form="save" data-lang="es"
            autocomplete="off" action="guardar_inmueble.php" enctype="multipart/form-data">
            <input type="hidden" name="modulo_producto" value="registro">
            <fieldset class="mb-4">
                <legend><i class="fas fa-box"></i> &nbsp; Registre el inmueble</legend>
                <div class="container-fluid"><br>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="col-12 col-md-9">
                                <div class="form-outline mb-4">
                                    <label for="tipo" class="nav-link"><i class="fas fa-id-card"></i>
                                        &nbsp;<strong>Tipo de inmueble </strong></label>
                                    <input type="text"  pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().!#$%&’*+/=?^_`{|}~-].,\s ]{4,520}" class="form-control" name="tipo"
                                        id="tipo" maxlength="10" placeholder="Obligatorio" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-outline mb-4">
                                <div class="mb-4">
                                    <div class="form-outline mb-4">
                                        <label for="direccion" class="nav-link"><i class="fas fa-user"></i>
                                            &nbsp;<strong>Direccion</strong></label>
                                        <input type="text" value="" onkeyup="mayus(this);"
                                            pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().!#$%&’*+/=?^_`{|}~-].,\s ]{4,520}"
                                            class="form-control" name="direccion" id="direccion" maxlength="90"
                                            placeholder="Obligatorio" text-transform="capitalize" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset class="mb-4">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="col-12 col-md-9">
                                <div class="form-outline mb-4">
                                    <div class="mb-4">

                                        <div class="form-outline mb-4">
                                            <label for="identificador" class="nav-link"><i class="fas fa-phone"></i>
                                                &nbsp;<strong>Identificador </strong></label>
                                            <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().!#$%&’*+/=?^_`{|}~-].,\s ]{4,520}" class="form-control" name="identificador"
                                                id="identificador" maxlength="10" placeholder="Obligatorio" required>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="fecha" class="nav-link"><i class="fas fa-user"></i>
                                            &nbsp;<strong>Fecha de Venta</strong></label>
                                        <input type="date" value="" onkeyup="mayus(this);"

                                            class="form-control" name="fecha" id="fecha" maxlength="90"
                                            placeholder="Obligatorio" text-transform="capitalize" required>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-outline mb-4">
                                <div class="mb-4">
                                <label for="identidad" class="nav-link"><i class="fas fa-phone"></i>
                                                &nbsp;<strong>No identidad </strong></label>
                                            <input type="text" pattern="[0-9]{10,10}" class="form-control" name="identidad"
                                                id="identidad" maxlength="10" placeholder="Obligatorio" required>
                                </div>
                            </div>
                           
                        </div>

                    </div>
                </div>

            </fieldset>
            <p class="text-center">
                <strong><small>Los campos marcados con * son obligatorios</small></strong>
            </p>

            <p class="text-center" style="margin-top: 40px;">
                <button type="submit" class="btn btn-primary" name="save"><i class="far fa-save"></i> &nbsp;
                    GUARDAR</button>
            </p>

        </form>
    </div>

 


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="bootstrap.bundle.min.js"></script>
    <script>
    function mayus(e) {
        e.value = e.value.toUpperCase();
    }

    function minus(e) {
        e.value = e.value.toLowerCase();
    }
    </script>
</body>

</html>