<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Java30</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/javadrum.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="https://fav.farm/🔥" />
    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<!-- javadrum -->
<div class="keys">
    <div data-key="65" class="key">
        <kbd>A</kbd>
        <span class="sound">clap</span>
    </div>
    <div data-key="83" class="key">
        <kbd>S</kbd>
        <span class="sound">hihat</span>
    </div>
    <div data-key="68" class="key">
        <kbd>D</kbd>
        <span class="sound">kick</span>
    </div>
    <div data-key="70" class="key">
        <kbd>F</kbd>
        <span class="sound">openhat</span>
    </div>
    <div data-key="71" class="key">
        <kbd>G</kbd>
        <span class="sound">boom</span>
    </div>
    <div data-key="72" class="key">
        <kbd>H</kbd>
        <span class="sound">ride</span>
    </div>
    <div data-key="74" class="key">
        <kbd>J</kbd>
        <span class="sound">snare</span>
    </div>
    <div data-key="75" class="key">
        <kbd>K</kbd>
        <span class="sound">tom</span>
    </div>
    <div data-key="76" class="key">
        <kbd>L</kbd>
        <span class="sound">tink</span>
    </div>
</div>

<audio data-key="65" src="java/01%20-%20JavaScript%20Drum%20Kit/sounds/clap.wav"></audio>
<audio data-key="83" src="java/01%20-%20JavaScript%20Drum%20Kit/sounds/hihat.wav"></audio>
<audio data-key="68" src="java/01%20-%20JavaScript%20Drum%20Kit/sounds/kick.wav"></audio>
<audio data-key="70" src="java/01%20-%20JavaScript%20Drum%20Kit/sounds/openhat.wav"></audio>
<audio data-key="71" src="java/01%20-%20JavaScript%20Drum%20Kit/sounds/boom.wav"></audio>
<audio data-key="72" src="java/01%20-%20JavaScript%20Drum%20Kit/sounds/ride.wav"></audio>
<audio data-key="74" src="java/01%20-%20JavaScript%20Drum%20Kit/sounds/snare.wav"></audio>
<audio data-key="75" src="java/01%20-%20JavaScript%20Drum%20Kit/sounds/tom.wav"></audio>
<audio data-key="76" src="java/01%20-%20JavaScript%20Drum%20Kit/sounds/tink.wav"></audio>

<!-- jsclock -->

<!-- javadrum -->
<script src="javadrum.js"></script>


<!-- Her skal sidens indhold ligge -->



</body>
</html>
