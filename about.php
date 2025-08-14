<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">


    <link rel="stylesheet" href="style.css">
    <title>De Potters Global</title>
</head>

<body>
    <!-- NAVBAR -->
    <?php
    include('inc/nav.php');
    ?>
    <!-- NAVBAR -->

    <!-- HERO SECTION -->
    <div id="aboutHero">
        <div class="topz">
            <h1 class="display-2 fw-bold">Our Story, Vision & Values</h1>
            <p>Discover the driving force behind Nigeria's premium security technology provider and our commitment to
                innovation, reliability, and excellence.</p>
        </div>
    </div>

    <!-- STORY SECTION -->
    <div id="story">
        <div class="story container">
            <div class="top text-center">
                <h2 class="display-4 fw-bold">Our Story</h2>
                <p>The journey of De-Potter Global Technologies from inception to becoming a leader in security
                    innovation</p>
            </div>

            <div class="bottom">
                <div class="left">
                    <h1 style="color: var(--color-primary);">Building a Legacy of Security Excellence</h1>

                    <p style="line-height: 2;">Founded on <b>July 17, 2020</b>, and registered under the <b>Corporate
                            Affairs Commission (RC Number:
                            3136328)</b>,
                        De-Potter Global Technologies began as a vision to redefine security and technology integration
                        in
                        Africa. <b>Headquartered in Port Harcourt, Rivers State, Nigeria</b>, we have grown from a
                        modest
                        startup
                        to one of Nigeria's emerging leaders at the intersection of Information and Communication
                        Technology
                        (ICT) and security solutions.</p>

                    <p style="line-height: 2;">Our journey has been marked by continuous innovation, strategic
                        partnerships, and an unwavering
                        commitment to delivering solutions that not only protect but also empower our clients. What
                        began as
                        a specialized security technology provider has evolved into a comprehensive solutions company
                        offering cutting-edge services across multiple sectors</p>

                    <div class="details">
                        <div class="each">
                            <i class="fa-solid fa-calendar-days"></i>
                            <div class="detail">
                                <p class="fw-bold my-0">
                                    Company Founded</p>
                                <p class=" my-0">July 2020 - Registered with CAC to begin operations</p>
                            </div>
                        </div>
                        <div class="each">
                            <i class="fa-solid fa-shield-halved"></i>
                            <div class="detail d-flex flex-column gap-2">
                                <p class="fw-bold my-0">
                                    First Major Project</p>
                                <p class=" my-0">2021 - Completed large-scale security installation for corporate
                                    client</p>
                                <a href="index.php#projects" class="btns" style="text-decoration: none; width: fit-content;">More Projects</a>
                            </div>
                        </div>
                        <div class="each">
                            <i class="fa-solid fa-award"></i>
                            <div class="detail">
                                <p class="fw-bold my-0">
                                    Industry Recognition</p>
                                <p class=" my-0">2022 - Recognized as emerging leader in security technology</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="right d-none d-lg-block">
                    <img src="assets/about.avif" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>

    <!-- MISSION SECTION -->
    <section id="mission">
        <div class="mission container d-flex flex-column flex-lg-row">
            <div class="left d-none d-lg-block">
                <img src="assets/OIP.webp" alt="" srcset="">
            </div>

            <div class="right flex-column d-flex gap-4">
                <div class="each d-flex gap-4 align-items-start">
                    <i class="fa-solid fa-bullseye mt-2"></i>
                    <div class="">
                        <p class="fw-bold mb-3 lead ">Our Mission</p>
                        <p style="color: rgb(250, 233, 233);">To deliver smart ICT and
                            security solutions that protect,
                            empower, and drive digital
                            growth.</p>
                    </div>
                </div>
                <div class="each d-flex gap-4 align-items-start">
                    <i class="fa-solid fa-eye mt-2"></i>
                    <div class="">
                        <p class="fw-bold mb-3 lead ">Our Vision</p>
                        <p style="color: rgb(250, 233, 233);">To be a trusted leader in
                            security innovation across
                            Africa.</p>
                    </div>
                </div>
                <div class="each d-flex gap-4 align-items-start">
                    <i class="fa-solid fa-handshake mt-2"></i>
                    <div class="">
                        <p class="fw-bold mb-3 lead ">Our Promise</p>

                        <p style="color: rgb(250, 233, 233);">At De-Potter Global Technologies, we guarantee:</p>

                        <p style="color: rgb(250, 233, 233);">Premium quality products from trusted global manufacturers</p>
                        <p style="color: rgb(250, 233, 233);">Expert installation by certified technicians</p>
                        <p style="color: rgb(250, 233, 233);">Comprehensive after-sales support and maintenance </p>
                        <p style="color: rgb(250, 233, 233);">Customized solutions tailored to your specific needs</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MISSION SECTION -->

    <!-- ABOUT SECTION -->
    <?php
    include('inc/aboutt.php');
    ?>
    <!-- ABOUT SECTION -->


    <!-- LEADERSHIP -->
    <div id="team">
        <div class="team container">
            <div class="topz text-center mx-auto">
                <h1>Our Leadership</h1>
                <p>The visionary minds driving innovation and excellence at De-Potter Global Technologies</p>
            </div>
            <div class="leaders row g-5">
                <div class="each col-12 col-md-6 col-lg-4">
                    <div class="eachIn">
                        <img src="assets/Edward.jpg" alt="" class="img-fluid">
                        <div class="words">
                            <h2>Mr. Edward U. Sampson</h2>
                            <p class="mb-4">Founder & Chief Executive Officer</p>
                            <p class="my-0">A visionary leader with deep expertise in CCTV installation, smart home
                                automation, and network infrastructure who drives the company's strategic direction and
                                innovation initiatives.</p>
                        </div>
                    </div>
                </div>
                <div class="each col-12 col-md-6 col-lg-4">
                    <div class="eachIn">
                        <img src="assets/Izuchukwu.jpg" alt="" class="img-fluid">
                        <div class="words">
                            <h2>Mr. Ugwuanyi E. Izuchukwu</h2>
                            <p class="mb-4">Co-founder / Chief Technology Officer</p>
                            <p class="my-0">Oversees all technical operations with specialization in system architecture
                                and
                                emerging security technologies, ensuring our solutions remain at the industry forefront.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="each col-12 col-md-6 col-lg-4">
                    <div class="eachIn">
                        <img src="assets/Kingston.png" alt="" class="img-fluid">
                        <div class="words">
                            <h2>Mr. Nworgu C. Kingston</h2>
                            <p class="mb-4">Administrative Director & CMO</p>
                            <p class="my-0">Leads company operations and marketing strategies, building the De-Potter
                                brand
                                as synonymous with reliability and innovation in security technology.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LEADERSHIP -->

    <!-- WHY US -->
    <?php
    include('inc/why.php');
    ?>
    <!-- WHY US -->

    <!-- WHAT WE DO  -->
    <?php
    include('inc/whatwedo.php');
    ?>
    <!-- WHAT WE DO  -->

    <!-- TECHNICAL SECTION -->
    <?php
    include('inc/technical.php');
    ?>
    <!-- TECHNICAL SECTION -->

    <!-- TESTIMONIAL SECTION -->
    <?php
    include('inc/testimonial.php');
    ?>
    <!-- TESTIMONIAL SECTION -->

    <!-- FOOTER -->
    <?php
    include('inc/footer.php');
    ?>



    <!-- JQUERY SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- SLICK FOR THE TESTIMONIAL -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>

    <!-- LINKED JAVASCRIPT -->
    <script src="script.js"></script>
</body>

</html>