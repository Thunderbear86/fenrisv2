<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>JS Clock</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link rel="icon" href="https://fav.farm/🔥" />

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>
<div class="clock">
    <div class="clock-face">
        <div class="hand hour-hand"></div>
        <div class="hand min-hand"></div>
        <div class="hand second-hand"></div>
    </div>
</div>


<style>
    html {
        background: #018DED url(https://unsplash.it/1500/1000?image=881&blur=5);
        background-size: cover;
        font-family: 'helvetica neue';
        text-align: center;
        font-size: 10px;
    }

    body {
        margin: 0;
        font-size: 2rem;
        display: flex;
        flex: 1;
        min-height: 100vh;
        align-items: center;
    }

    .clock {
        width: 30rem;
        height: 30rem;
        border: 20px solid white;
        border-radius: 50%;
        margin: 50px auto;
        position: relative;
        padding: 2rem;
        box-shadow:
                0 0 0 4px rgba(0,0,0,0.1),
                inset 0 0 0 3px #EFEFEF,
                inset 0 0 10px black,
                0 0 10px rgba(0,0,0,0.2);
    }

    .clock-face {
        position: relative;
        width: 100%;
        height: 100%;
        transform: translateY(-3px); /* account for the height of the clock hands */
    }

    .hand {
        width: 50%;
        height: 6px;
        background: black;
        position: absolute;
        top: 50%;
        transform-origin: 100%;
        transform: rotate(90deg);
        transition: all 0.05s;
        transition-timing-function: cubic-bezier(0.1, 2.7, 0.58, 1);
    }
</style>
<!-- Her skal sidens indhold ligge -->

<!-- jsclock -->
<script src="jsclock.js"></script>

</body>
</html>
