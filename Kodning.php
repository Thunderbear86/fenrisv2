<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Fenris - Kodning</title>

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


<main>
    <h1 style="margin-top: 10vh;">
        Mine
        <span class="sec-text">Referencer</span>
    </h1>
    <h2 class="mb-4 plink">
        \\<a href="Kodning.php" class="plink"><span class="sec-text"> Kodning </span></a>\\<a href="design.php" class="plink"> Design</a> \\ <a href="SoMe.php" class="plink">SoMe</a> \\
    </h2>

    <?php include 'ikoner.php';?>

    <div class="projects">
        <div>
            <a href="www.fenris.dk">
                <img src="img/kodning/fenris.png" alt="Project">
            </a>
            <a href="#" class="btn-light">
                <i class="fas fa-eye"></i> Se Mere
            </a>
            <a href="https://github.com/Thunderbear86/fenrisv2.git" class="btn-dark">
                <i class="fab fa-github"></i> Github
            </a>
        </div>
        <div class="item">
            <a href="#!">
                <img src="img/kodning/test.png" alt="Project">
            </a>
            <a href="#" class="btn-light">
                <i class="fas fa-eye"></i> Se Mere
            </a>
            <a href="#" class="btn-dark">
                <i class="fab fa-github"></i> Github
            </a>
        </div>
        <div class="item">
            <a href="#!">
                <img src="img/kodning/test.png" alt="Project">
            </a>
            <a href="#" class="btn-light">
                <i class="fas fa-eye"></i> Se Mere
            </a>
            <a href="#" class="btn-dark">
                <i class="fab fa-github"></i> Github
            </a>
        </div>
        <div class="item">
            <a href="#!">
                <img src="img/kodning/test.png" alt="Project">
            </a>
            <a href="#" class="btn-light">
                <i class="fas fa-eye"></i> Se Mere
            </a>
            <a href="#" class="btn-dark">
                <i class="fab fa-github"></i> Github
            </a>
        </div>
        <div class="item">
            <a href="#!">
                <img src="img/kodning/test.png" alt="Project">
            </a>
            <a href="#" class="btn-light">
                <i class="fas fa-eye"></i> Se Mere
            </a>

            <a href="#" class="btn-dark">
                <i class="fab fa-github"></i> Github
            </a>
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

