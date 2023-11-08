<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Thorbjørn Wagner - Udvikling og Design</title>

    <meta name="robots" content="All">
    <meta name="author" content="Thorbjørn 'Thunderbear' Wagner">
    <meta name="copyright" content="Information om copyright">


    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/ef424bfb92.js" crossorigin="anonymous"></script>

</head>

<body id="bg-img">

<div class="container">
    <div class="row">
        <nav>
            <?php include 'menu.php'; ?>
        </nav>
    </div>
</div>

<main id="home">

    <div class="container-fluid">

        <div class="row g-3 text-center mt-5">
            <div class="col">
                <h1 style="margin-top: 20vh;">Thorbjørn
                    <span class="sec-text">Wagner</span>
                </h1>
            </div>

            <h2 class="mb-4 plink">
                Design og <span class="sec-text">udvikling</span>
            </h2>

        </div>


        <div class="text-center">
            <?php include 'ikoner.php'; ?>
        </div>
    </div>

    <!-- Design -->
    <!-- Main Container -->
    <div class="container" id="portfolio" style="margin-top: 60vh;">

        <!-- Headline Row -->
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 mt-5 text-center">
                <!-- Headline Content -->
                <h2>Design</h2>
            </div>
        </div>

        <!-- Image Trigger Row -->
        <div class="row justify-content-center mt-3">
            <div class="col-auto">
                <!-- Trigger Image -->
                <img class="modal-img" id="design" src="img/port/vector/WBlogo.jpg" alt="Project Thumbnail"
                     style="width:100%;max-width:300px" data-bs-toggle="modal" data-bs-target="#designModal">
            </div>
        </div>

        <!-- Modal Design -->
        <div class="modal fade" id="designModal" tabindex="-1" aria-labelledby="designModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <!-- Carousel Wrapper -->
                        <div id="designCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <!-- Carousel Items -->
                                <div class="carousel-item active">
                                    <img src="img/port/vector/Plakat1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/port/vector/drage.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/port/vector/car1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/port/vector/car2.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/port/vector/hotdogs-01.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/port/vector/pr.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/port/vector/p4.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/port/vector/fb.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/port/vector/svamp.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/port/vector/t2.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/port/compos/turt.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/port/compos/op.png" class="d-block w-100" alt="...">
                                </div>

                                <!-- ... other items -->
                            </div>
                            <!-- Carousel Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#designCarousel"
                                    data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Tilbage</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#designCarousel"
                                    data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Frem</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 mt-2 text-center">
                <p>Photoshop & Illustrator</p>
            </div>
        </div>
    </div> <!-- End Main Container -->


    <!-- AI -->

    <!-- Main Container -->
    <div class="container" style="margin-top: 10vh;">

        <!-- Headline Row -->
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 text-center">
                <!-- Headline Content -->
                <h2>AI</h2>
            </div>
        </div>

        <!-- Image Trigger Row -->
        <div class="row justify-content-center mt-3">
            <div class="col-auto">
                <!-- Trigger Image -->
                <img class="modal-img" id="AI" src="img/port/ai/aqua.jpg" alt="Project Thumbnail"
                     style="width:100%;max-width:300px" data-bs-toggle="modal" data-bs-target="#aiModal">
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="aiModal" tabindex="-1" aria-labelledby="aiModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">AI</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <!-- Carousel Wrapper -->
                        <div id="aiControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <!-- Carousel Items -->
                                <div class="carousel-item active">
                                    <img src="img/port/ai/elf.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/port/ai/bg3.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/port/ai/aqua.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/port/ai/viking.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/port/ai/owl.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/port/ai/boy.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/port/ai/gol.jpg" class="d-block w-100" alt="...">
                                </div>

                                <!-- ... other items -->
                            </div>
                            <!-- Carousel Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#aiControls"
                                    data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Tilbage</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#aiControls"
                                    data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Frem</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 text-center mt-2">
                <p>AI produktion og redigering i Photoshop</p>
            </div>
        </div>
    </div>

    <!-- Kodning -->

    <!-- Main Container -->
    <div class="container" style="margin-top: 10vh;">

        <!-- Headline Row -->
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 text-center">
                <!-- Headline Content -->
                <div class="circle-container">
                    <h2 id="codingHeadline">Kodning</h2>
                    <!-- Circle Words -->
                    <div class="circle-word" data-word="Java"></div>
                    <div class="circle-word" data-word="PHP"></div>
                    <div class="circle-word" data-word="HTML5"></div>
                    <div class="circle-word" data-word="CSS"></div>
                    <div class="circle-word" data-word="JavaScript"></div>
                    <div class="circle-word" data-word="Python"></div>
                    <div class="circle-word" data-word="MySQL"></div>
                </div>

            </div>
        </div>

        <!-- Image Trigger Row -->
        <div class="row justify-content-center mt-3">
            <div class="col-auto">
                <!-- Trigger Image -->
                <img class="modal-img" id="kodning" src="img/kodning/WB.png" alt="Project Thumbnail"
                     style="width:100%;max-width:300px" data-bs-toggle="modal" data-bs-target="#kodningModal">
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="kodningModal" tabindex="-1" aria-labelledby="kodningLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kodning</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <!-- Carousel Wrapper -->
                        <div id="kodningControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <!-- Carousel Items -->
                                <div class="carousel-item active">
                                    <img src="img/kodning/WB.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/kodning/fenris.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/kodning/test.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/kodning/digiswap.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/kodning/frirum.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/kodning/metap.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/kodning/vilma.png" class="d-block w-100" alt="...">
                                </div>


                                <!-- ... other items -->
                            </div>
                            <!-- Carousel Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#kodningControls"
                                    data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Tilbage</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#kodningControls"
                                    data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Frem</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 mt-2 text-center">
                <!-- Headline Content -->

                    <p>Code & No-Code projekter</p>


            </div>
        </div>
    </div>

    <!-- Om Sektion -->

    <!-- Indhold -->
    <div class="container mt-5" id="om">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 pb-3">
                <div class="card rounded-circle border-3 card-bio">
                    <img src="img/portrait_small-01.jpg" alt="Thorbjørn Wagner" class="img-fluid rounded-circle border-3 card-bio">
                </div>
            </div>

            <div class="col bio">
                <ul>
                    <h2 class="sec-text">Innovativ <span class="fw-bold">multimediedesigner</span></h2>

                    <p class="fw-light">Jeg er drevet af en passion for <span class="fw-bold">design</span> og <span class="fw-bold">udvikling</span>,
                        som jeg kombinerer med min evne til at være  <span class="fw-bold">løsningsorienteret</span>. </p>

                    <p>Som autodidakt kaster jeg mig jævnligt ud i nye udfordringer og programmer. </p>

                    <p>Jeg går med en drøm om, at udvikle og designe app's og systemer, som kan gøre hverdagen nemmere for den enkelte bruger.</p>


                    <p class="fw-light">Min viden og praksiserfaring fra diverse brancher, såsom event,
                        personbeskyttelse samt social- og specialpædagogik, giver mig muligheden for, at se muligheder i, hvordan teknologi kan
                        gøre en forskel for mennesker.</p>
                    <br>

                    <h3 class="sec-text">Jeg <span class="fw-bold">brænder</span> for at udvikle mig indenfor:</h3>

                    <ul>
                        <li>HTML - CSS - Javascript</li>
                        <li>Java</li>
                        <li>Python</li>
                        <li>AI prompting</li>
                        <li>Adobe</li>
                        <li>SEO</li>
                        <li>Branding</li>
                        <li>Design</li>
                        <li>Udvikling</li>

                    </ul>


                </ul>
            </div>

        </div>

    </div>
    <div class="row gx-3 pt-5">
        <div class="col-md-4">
            <div class="job job-1 py-2 px-3 rounded-bottom border-bottom-3 d-flex flex-column h-100">
                <h3>Webdesign</h3>
                <ul>
                    <li>En unik specialdesignet hjemmeside</li>
                    <p class="fw-light pt-1">Hvilket betyder fuld kontrol over alle elementer, kodet fra første linje.</p>
                    <li>Wordpress Hjemmeside</li>
                    <p class="fw-light pt-1">Hjemmesiden er hurtigere at bygge, da den er opbygget af blokelementer.
                        Efterfølgende er det nemmere selv at vedligeholde.</p>
                    <li>Vedligeholdelse & Opdatering</li>
                    <p class="fw-light pt-1">Du får hjælp til at opdatere, opgradere,
                        re-designe eller generel vedligeholdelse af din hjemmeside.</p>
                    <li>SEO og Tekst</li>
                    <p class="fw-light pt-1">Skarpe tekster og specifikt udvalgte søgeord får din hjemmesides trafik op.</p>
                </ul>
            </div>
        </div>

        <div class="col-md-4">
            <div class="job job-2 py-2 px-3 rounded-bottom border-bottom-3 d-flex flex-column h-100">
                <h3>Grafisk Design</h3>
                <ul>
                    <li>AI Generering</li>
                    <p class="fw-light pt-1">Kunstig intelligens tager i 2023 kvantespring og brager
                        også frem, på det grafiske område!</p>

                    <p class="fw-light pt-1">Midjourney er en af de store spillere, hvor der med efterbehandling, kan skabes fantastiske billeder.
                        Jeg har været med fra beta-test og udvider løbende mine evner i AI generering.</p>
                    <li>Billedekomposition</li>
                    <p class="fw-light pt-1">Kunsten i, at sammensætte forskellige billeder og skabe en fornemmelse af, at de altid har hørt sammen.</p>
                    <li>Vector</li>
                    <p class="fw-light pt-1">Grafisk design rummer alt fra logo til kreation af figurer. Alt er tegnet digitalt i hånden og
                        giver mulighed for gennemgribende ændringer, på ingen tid.</p>
                    <li>Billederedigering</li>
                    <p class="fw-light pt-1">Få dine billeder redigeret i en klassisk, trendy eller unik stil.
                        I Photoshop er det ofte kun fantasien der sætter grænser.</p>
                </ul>
            </div>
        </div>

        <div class="col-md-4">
            <div class="job job-3 py-2 px-3 rounded-bottom border-bottom-3 d-flex flex-column h-100">
                <h3>Branding</h3>
                <ul>
                    <li>Bæredygtig profil</li>
                    <p class="fw-light pt-1">Er din virksomhed med til at tage ansvar?</p>
                    <p> Med fokus på miljø, social bæredygtighed og ledelse, skaber vi en bæredygtig profil.</p>

                    <li>Målgruppe</li>
                    <p class="fw-light pt-1">Ud fra en grundig segmentering sporer vi os ind på din optimale målgruppe.</p>
                    <p class="fw-light">Positionering hjælper din virksomhed med, at åbne for en potentielt ubenyttet markedsandel.</p>
                    <p class="fw-light">Hvilke strategier er relevante at anvende og hvordan udførers planlægning optimalt.</p>

                    <li>SoMe</li>
                    <p class="fw-light">Identitetsdannelse på de sociale medier - hvad står vi for og hvem er vi?</p>
                    <p class="fw-light">Kampagner - hvordan skaber vi awareness omkring os?</p>
                    <p class="fw-light">Content creation - giv din profil et løft med det rette indhold!</p>
                    <p class="fw-light">Byg en base - hvordan engagerer vi din målgruppe?</p>
                </ul>
            </div>
        </div>
    </div>



    <div id="contact">

        <h1 class="lg-heading text-center" style="margin-top: 10vh;">Kontakt</h1>

        <div class="text-center">
            <?php include 'ikoner.php';?>
        </div>

        <div class="container">
            <div class="row">
                <h2 class="sec-text text-center">

                </h2>
            </div>
        </div>

        <div class="container mt-5 pb-3">
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
    </div>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>

</main>


<!-- Bootstrap -->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Java Menu -->
<script src="js/cookies.js"></script>
<script type="module" src="js/main.js"></script>


</body>
</html>
