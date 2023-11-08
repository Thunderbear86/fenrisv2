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
    <div class="container" style="margin-top: 60vh;">

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
