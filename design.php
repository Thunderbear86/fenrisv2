<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Fenris - Design</title>

    <meta name="robots" content="All">
    <meta name="author" content="Thorbjørn 'Thunderbear' Wagner">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/ef424bfb92.js" crossorigin="anonymous"></script>

</head>

<body class="port">


<div class="container">
    <div class="row">
        <nav>
            <?php include 'menu.php';?>
        </nav>
    </div>
</div>


<main>

    <h1 class="text-center" style="margin-top: 10vh;">
        Grafisk
        <span class="sec-text">Design</span>
    </h1>


    <h2 class="mb-4 plink text-center">
        \\ <a href="Kodning.php" class="plink">Webdesign</a> \\<a href="design.php" class="plink"> <span class="sec-text">Grafisk Design</span></a> \\ <a href="foto.php" class="plink">Foto Redigering</a> \\
    </h2>

    <div class="text-center">
        <?php include 'ikoner.php';?>
    </div>


    <!-- Portfolio Tiles -->

    <div class="container mt-5">
        <div class="row mx-3">
            <div class="col-sm-4">
                <div class="tile mb-4 rounded-circle">
                    <a href="vector.php">
                        <div class="tile-image">
                            <img src="img/port/vector/car1.jpg" alt="Vector" class="img-fluid">
                            <div class="tile-text">
                                <h3>Vector</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="tile mb-4 rounded-circle">
                    <a href="compos.php">
                        <div class="tile-image">
                            <img src="img/port/compos/op.png" alt="Komposition" class="img-fluid">
                            <div class="tile-text">
                                <h3>Komposition</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="tile mb-4 rounded-circle">
                    <a href="ai.php">
                        <div class="tile-image">
                            <img src="img/port/ai/viking.png" alt="AI" class="img-fluid">
                            <div class="tile-text">
                                <h3>AI</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>




    </div>


    </div>

</main>

<footer>
    <?php include 'footer.php';?>
</footer>


<!-- Java Menu -->
<script src="js/main.js"></script>

<!-- Bootstrap -->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>




</body>
</html>

