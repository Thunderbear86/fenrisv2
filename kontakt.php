<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Fenris - Kontakt</title>

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

<main id="contact">

    <h1 class="lg-heading text-center" style="margin-top: 10vh;">Kontakt</h1>

<div class="text-center">
    <?php include 'ikoner.php';?>
</div>

    <div class="contaier">
        <div class="row">
            <h2 class="sec-text text-center">

            </h2>
        </div>
    </div>

<div class="container pb-3">
        <form class="col-sm-8 offset-sm-2" action="submit_form.php" method="POST">
            <div class="form-group">
                <label for="navn">Navn</label>
                <input type="text" class="form-control" id="navn" name="navn" placeholder="Indtast dit navn" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Indtast din email" required>
            </div>
            <div class="form-group">
                <label for="telefon">Telefon</label>
                <input type="tel" class="form-control" id="telefon" name="telefon" placeholder="Indtast dit nummer">
            </div>
            <div class="form-group">
                <label for="emne">Emne</label>
                <input type="text" class="form-control" id="emne" name="emne" placeholder="Indtast emnet for din besked">
            </div>
            <div class="form-group">
                <label for="besked">Besked</label>
                <textarea class="form-control" id="besked" name="besked" rows="3" placeholder="Indtast din besked"></textarea>
                <br>
            </div>
            <button type="submit" class="btn btn-custom">Send</button>
        </form>
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
