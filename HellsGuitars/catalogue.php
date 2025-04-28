<?php
session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Hell's Guitars</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="subpage">
    <div id="page-wrapper">

        <!------------>
        <!-- HEADER -->
        <!------------>
        <?php include("inc/header.inc.php"); ?>

        <!------------->
        <!-- CONTENU -->
        <!------------->
        <section id="content">
            <div class="container">
                <div class="row">

                    <!-- SIDEBAR -->
                    <div class="col-3 col-12-medium">
                        <?php include("inc/menu.inc.php"); ?>
                    </div>

                    <!-- CONTENU PRINCIPAL -->
                    <div class="col-9 col-12-medium imp-medium">
                        <section>
                            <h2>Guitares électriques</h2>
                            <div class="row row-cols-1 row-cols-md-2 g-4">
                                <div class="col-6">
                                    <div class="card">
                                        <img src="images/prod/EPIRIVP93.jpg" class="card-img-top" alt="GuitaresElec">
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <p class="card-text"></p>
                                            <a href="#" class="btn btn-primary"></a>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-body-secondary"></small>
                                        </div>
                                    </div>
                                </div>
                        </section>
                    </div>


                </div>
            </div>
        </section>

        <!------------>
        <!-- FOOTER -->
        <!------------>
        <?php include("inc/footer.inc.php"); ?>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>