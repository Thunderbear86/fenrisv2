<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Fenris - Portfolio</title>

    <meta name="robots" content="All">
    <meta name="author" content="Thorbjørn 'Thunderbear' Wagner">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/ef424bfb92.js" crossorigin="anonymous"></script>

</head>

<body>

<div class="container">
    <div class="row">
        <nav>
            <?php include 'menu.php';?>
        </nav>
    </div>
</div>

<main id="home">

    <h1 class="text-center" style="margin-top: 10vh;">Portfolio</h1>

    <h2 class="sm-heading text-center">
        <span class="sec-text">Kreativ Fusion</span>
    </h2>

    <div class="text-center">
        <?php include 'ikoner.php';?>
    </div>

    <!-- Portfolio Tiles -->

    <div class="container mt-5">
        <div class="row mx-3">
            <div class="col-sm-4">
                <div class="tile mb-4 rounded-circle">
                    <a href="Kodning.php">
                        <div class="tile-image">
                            <img src="img/kodning/fenris.png" alt="Webdesign" class="img-fluid">
                            <div class="tile-text">
                                <h3>Kodning</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="tile mb-4 rounded-circle">
                    <a href="design.php">
                        <div class="tile-image">
                            <img src="img/port/viking.png" alt="Grafsik Design" class="img-fluid">
                            <div class="tile-text">
                                <h3>Grafisk Design</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="tile mb-4 rounded-circle">
                    <a href="foto.php">
                        <div class="tile-image">
                            <img src="img/foto/ac1.png" alt="Foto" class="img-fluid">
                            <div class="tile-text">
                                <h3>Foto</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->

<footer>
    <div class="container pt-5">
        <div class="row">
            <div class="col">
                <?php include 'footer.php';?>
            </div>
        </div>
    </div>
</footer>

</main>


<!-- Java Menu -->
<script src="js/main.js"></script>

<!-- Bootstrap -->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>




</body>
</html>

