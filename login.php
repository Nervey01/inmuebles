<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Inicio de sesion</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/coco.jpg.jpg" rel="icon">

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
        <div class="container-fluid" style="border-top: 1px solid #E1E1E1; padding: 20px; ">
            <div class="row gy-5 gx-4">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
                    <!-- LIBRE -->

                </div>
            </div>
        </div>
    </div>
    <div class="container" align="center">
        <fieldset class="mb-4">
            <legend><i class="fas fa-user"></i> &nbsp; INICIO DE SESION</legend>
            <form role="form" class="form-horizontal" method="post" name="form1" id="form1"
                action="inicio.php" autocomplete="off">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="col-12 col-md-9">
                        <div class="form-outline mb-4">
                            <div class="mb-4">
                                <div class="form-outline mb-4">
                                    <label for="cargo" class="nav-link"> &nbsp;<strong>DOCUMENTO </strong></label>
                                    <input type="text" id="usuario" class="form-control Input" name="usuario"
                                        maxlength="11" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="col-12 col-md-9">
                        <div class="form-outline mb-4">
                            <div class="mb-4">
                                <div class="form-outline mb-4">
                                    <label for="cargo" class="nav-link"> &nbsp;<strong>CONTRASEÑA </strong></label>
                                    <input type="password" id="clave" class="form-control Input" name="clave"
                                        maxlength="10" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" name="inicio" id="inicio" value="   Entrar   "
                        class="btn btn-info center-block" />
                </div><br>
                
                <input type="hidden" name="MM_insert" value="form1">
            </form>
        </fieldset>
    </div>






    <!-- Back to Top -->



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>