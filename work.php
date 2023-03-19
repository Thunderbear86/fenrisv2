<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Fenris - Portfolio</title>

    <meta name="robots" content="All">
    <meta name="author" content="Thorbjørn 'Thunderbear' Wagner">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/ef424bfb92.js" crossorigin="anonymous"></script>

</head>

<body>


<nav>
    <?php include 'menu.php';?>
</nav>


<main id="home">

    <h1 style="margin-top: 10vh;">
        Portfolio
        <span class="sec-text">Oversigt</span>
    </h1>

    <h2 class="sm-heading">
        \\ Branding & Udvikling \\
    </h2>

    <?php include 'ikoner.php';?>

    <!-- Kort Port-->

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                <div class="tile mb-4 rounded-circle">
                    <a href="Kodning.php">
                        <div class="tile-image">
                            <img src="img/kodning/fenris.png" alt="Kodning" class="img-fluid">
                        </div>
                        <div class="tile-title">
                            <h5 class="text-center">Kodning</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="tile mb-4 rounded-circle">
                    <a href="design.php">
                        <div class="tile-image">
                            <img src="img/port/viking.png" alt="Design" class="img-fluid">
                        </div>
                        <div class="tile-title">
                            <h5 class="text-center">Design</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="tile mb-4 rounded-circle">
                    <a href="SoMe.php">
                        <div class="tile-image">
                            <img src="img/some/#" alt="SoMe" class="img-fluid">
                        </div>
                        <div class="tile-title">
                            <h5 class="text-center">SoMe</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->

    <footer>
        <?php include 'footer.php';?>
    </footer>

</main>


<!-- Java Menu -->
<script src="js/main.js"></script>

<!-- Bootstrap -->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>




</body>
</html>

