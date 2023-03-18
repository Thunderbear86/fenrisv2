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
        <span class="sec-text">Fenris</span> \\ Branding & Udvikling \\
    </h2>

    <!-- Service Section -->

    <div class="services">

        <div class="services__container">
            <div class="card">
                <h2>Kodning</h2>
                <p class="sec-text">Html - CSS - Java</p>
            </div>
            <div class="card">
                <h2>Design</h2>
                <p class="sec-text">Vector - AI - Photoshop</p>
            </div>
            <div class="card">
                <h2>SoMe</h2>
                <p class="sec-text">Planlægning og Udførsel</p>
            </div>
        </div>
    </div>

        <div class="row g-3">
            <div class="icons">
                <a href="#">
                    <i class="fab fa-twitter fa-2x"></i>
                </a>
                <a href="#">
                    <i class="fab fa-facebook fa-2x"></i>
                </a>
                <a href="#">
                    <i class="fab fa-linkedin fa-2x"></i>
                </a>
                <a href="#">
                    <i class="fab fa-github fa-2x"></i>
                </a>
            </div>
        </div>

    </div>

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

