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

    <link rel="stylesheet" href="style.css">
    <title>De Potters Global</title>
</head>

<body>
    <!-- NAVBAR -->
    <?php
    include('inc/nav.php');
    ?>
    <!-- NAVBAR -->

    <!-- HERO -->
    <section id="her">
        <div class="hero container text-white position-relative">
            <div class="content d-flex flex-column flex-lg-row align-items-lg-center justify-content-lg-between  z-1">
                <div class="left">
                    <p class="fw-semibold">Welcome to De-Potter</p>
                    <p class="display-5 fw-bolder">ADVANCED SECURITY SOLUTIONS FOR EVERY SPACE</p>
                    <p>The best home security solution of 2024 combine AI-powered cameras, smart integration, and 24/7
                        monitoring for ultimate protection & convenience.</p>

                    <button class="btns fw-bold">
                        <a href="contact.php">Book a Consulation</a>
                    </button>
                </div>

                <div class="right">
                    <img src="assets/10010.png" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>
    <!-- HERO -->

    <!-- HERO DETAILS SECTION -->
    <section class="heroDeets container position-relative">
        <div class="details">
            <div class="each">
                <img src="assets/cctv1.png" alt="">
                <p>Premium Indoor Cameras</p>
            </div>
            <div class="each">
                <img src="assets/cctv2.png" alt="">
                <p>24/7 Quick Alarm Response</p>
            </div>
            <div class="each">
                <img src="assets/cctv3.png" alt="">
                <p>Amazing Security System</p>
            </div>

        </div>
    </section>
    <!-- HERO DETAILS SECTION -->

    <!-- ABOUT SECTION -->
    <?php
    include('inc/aboutt.php');
    ?>
    <!-- ABOUT SECTION -->

    <!-- SERVICES SECTION -->
    <section id="services">
        <div class="services container">
            <div class="topz text-center mx-auto mb-5">
                <p class="my-0 fw-semibold">SERVICES</p>
                <p class="display-5 fw-bolder"><span style="color: var(--color-primary);">Comprehensive Security</span>
                    and surveillance solutions</p>
            </div>

            <div class="mid row g-5 mt-5">
                <div class="each col-12 col-md-6 col-lg-4">
                    <div class="eachIn">
                        <img src="assets/10014.jpg" alt="">
                        <div class="px-4 pt-4 pb-5 text-center">
                            <h4 class="fw-semibold mb-3">Surveillance and Security Systems</h4>
                            <p style="color: var(--color-dark); margin-bottom: 30px;">We offer comprehensive security
                                solutions, including
                                CCTV and monitoring, to protect your property with reliable, cutting-edge technology.
                            </p>
                            <a href="contact.php" class="btns">Contact Us</a>
                        </div>
                    </div>
                </div>

                <div class="each col-12 col-md-6 col-lg-4">
                    <div class="eachIn">
                        <img src="assets/10015.jpg" alt="">
                        <div class="px-4 pt-4 pb-5 text-center">
                            <h4 class="fw-semibold mb-3">Smart Automation and Control</h4>
                            <p style="color: var(--color-dark); margin-bottom: 30px;">Our services provide seamless
                                integration of automated systems for lighting, temperature, and access, simplifying your
                                home or office management.
                            </p>
                            <a href="contact.php" class="btns">Contact Us</a>
                        </div>
                    </div>
                </div>

                <div class="each col-12 col-md-6 col-lg-4">
                    <div class="eachIn">
                        <img src="assets/10016.jpg" alt="">
                        <div class="px-4 pt-4 pb-5 text-center">
                            <h4 class="fw-semibold mb-3">Power, Connectivity & Communication</h4>
                            <p style="color: var(--color-dark); margin-bottom: 30px;">We ensure robust infrastructure
                                with expert installation of power, internet, and communication lines for reliable and
                                efficient operations.
                            </p>
                            <a href="contact.php" class="btns">Contact Us</a>
                        </div>
                    </div>
                </div>

                <div class="each col-12 col-md-6 col-lg-4">
                    <div class="eachIn">
                        <img src="assets/10017.jpg" alt="">
                        <div class="px-4 pt-4 pb-5 text-center">
                            <h4 class="fw-semibold mb-3">General Contracts and Supply</h4>
                            <p style="color: var(--color-dark); margin-bottom: 30px;">We manage a wide range of projects
                                and supply essential materials, providing a reliable single point of contact for all
                                your contracting needs.
                            </p>
                            <a href="contact.php" class="btns">Contact Us</a>
                        </div>
                    </div>
                </div>

                <div class="each col-12 col-md-6 col-lg-4">
                    <div class="eachIn">
                        <img src="assets/10018.jpg" alt="">
                        <div class="px-4 pt-4 pb-5 text-center">
                            <h4 class="fw-semibold mb-3">Automated Gates and Doors</h4>
                            <p style="color: var(--color-dark); margin-bottom: 30px;">We install advanced automated
                                gates and doors, offering enhanced security and convenience with modern,
                                remote-controlled access.
                            </p>
                            <a href="contact.php" class="btns">Contact Us</a>
                        </div>
                    </div>
                </div>

                <div class="each col-12 col-md-6 col-lg-4">
                    <div class="eachIn">
                        <img src="assets/10019.jpg" alt="">
                        <div class="px-4 pt-4 pb-5 text-center">
                            <h4 class="fw-semibold mb-3">Solar Power Solutions</h4>
                            <p style="color: var(--color-dark); margin-bottom: 30px;">Our solutions deliver reliable
                                backup power, ensuring your home or business remains operational and energy-independent
                                during outages.
                            </p>
                            <a href="contact.php" class="btns">Contact Us</a>
                        </div>
                    </div>
                </div>

                <div class="each col-12 col-md-6 col-lg-4">
                    <div class="eachIn">
                        <img src="assets/10014.jpg" alt="">
                        <div class="px-4 pt-4 pb-5 text-center">
                            <h4 class="fw-semibold mb-3">Communication Systems</h4>
                            <p style="color: var(--color-dark); margin-bottom: 30px;">We provide clear and secure
                                communication with modern intercom and networking systems, enhancing safety and
                                connectivity for your property.
                            </p>
                            <a href="contact.php" class="btns">Contact Us</a>
                        </div>
                    </div>
                </div>

                <div class="each col-12 col-md-6 col-lg-4">
                    <div class="eachIn">
                        <img src="assets/10014.jpg" alt="">
                        <div class="px-4 pt-4 pb-5 text-center">
                            <h4 class="fw-semibold mb-3">Car Tracking Solutions</h4>
                            <p style="color: var(--color-dark); margin-bottom: 30px;">Our advanced GPS tracking services
                                offer real-time location and security monitoring, helping you protect and manage your
                                vehicles with ease.
                            </p>
                            <a href="contact.php" class="btns">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICES SECTION -->

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

    <!-- OUR PROJECTS SECTION -->
    <section id="services">
        <div class="services container">
            <div class="topz text-center mx-auto mb-5">
                <p class="my-0 fw-semibold">OUR PROJECTS</p>
                <p class="display-5 fw-bolder"><span style="color: var(--color-primary);">Advanced</span>
                    Features Security</p>
            </div>

            <div class="mid row g-5 mt-5">
                <div class="each col-12 col-md-6 col-lg-4">
                    <div class="eachIn">
                        <img src="assets/10014.jpg" alt="">
                        <div class="px-4 pt-4 pb-5 text-center">
                            <h4 class="fw-semibold mb-3">Surveillance and Security Systems</h4>
                        </div>
                    </div>
                </div>

                <div class="each col-12 col-md-6 col-lg-4">
                    <div class="eachIn">
                        <img src="assets/10015.jpg" alt="">
                        <div class="px-4 pt-4 pb-5 text-center">
                            <h4 class="fw-semibold mb-3">Smart Automation and Control</h4>
                        </div>
                    </div>
                </div>

                <div class="each col-12 col-md-6 col-lg-4">
                    <div class="eachIn">
                        <img src="assets/10016.jpg" alt="">
                        <div class="px-4 pt-4 pb-5 text-center">
                            <h4 class="fw-semibold mb-3">Power, Connectivity & Communication</h4>
                        </div>
                    </div>
                </div>

                <div class="each col-12 col-md-6 col-lg-4">
                    <div class="eachIn">
                        <img src="assets/10017.jpg" alt="">
                        <div class="px-4 pt-4 pb-5 text-center">
                            <h4 class="fw-semibold mb-3">General Contracts and Supply</h4>
                        </div>
                    </div>
                </div>

                <div class="each col-12 col-md-6 col-lg-4">
                    <div class="eachIn">
                        <img src="assets/10018.jpg" alt="">
                        <div class="px-4 pt-4 pb-5 text-center">
                            <h4 class="fw-semibold mb-3">Automated Gates and Doors</h4>
                        </div>
                    </div>
                </div>

                <div class="each col-12 col-md-6 col-lg-4">
                    <div class="eachIn">
                        <img src="assets/10019.jpg" alt="">
                        <div class="px-4 pt-4 pb-5 text-center">
                            <h4 class="fw-semibold mb-3">Solar Power Solutions</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR PROJECTS SECTION -->

    <!-- OUR FEATURES SECTION -->
    <section id="features">
        <div class="features container flex-column d-flex gap-5">
            <div class="topz">
                <p class="fw-semibold">OUR FEATURE</p>
                <p class="display-6 fw-bold">Advanced security systems, reliable CCTV solutions</p>
            </div>

            <div class="mid row g-4">
                <div class="each col-12 col-md-6 col-lg-3">
                    <div class="imgg mb-4">
                        <img src="assets/247.png" alt="">
                    </div>
                    <p class="fw-bold my-0">24/7 Support</p>
                    <p class="my-0">We provide round-the-clock technical support for your peace
                        of mind.</p>
                </div>

                <div class="each col-12 col-md-6 col-lg-3">
                    <div class="imgg mb-4">
                        <img src="assets/cctv1.png" alt="">
                    </div>
                    <p class="fw-bold my-0">Proactive Maintenance</p>
                    <p class="my-0">Our services include routine checks to prevent potential
                        system failures.</p>
                </div>

                <div class="each col-12 col-md-6 col-lg-3">
                    <div class="imgg mb-4">
                        <img src="assets/cctv2.png" alt="">
                    </div>
                    <p class="fw-bold my-0">Customized Solutions</p>
                    <p class="my-0">Tailored security systems designed to meet your specific
                        needs.</p>
                </div>

                <div class="each col-12 col-md-6 col-lg-3">
                    <div class="imgg mb-4">
                        <img src="assets/cctv3.png" alt="">
                    </div>
                    <p class="fw-bold my-0">Remote Access</p>
                    <p class="my-0">Control and monitor your security system from anywhere,
                        anytime.</p>
                </div>

            </div>
        </div>
    </section>
    <!-- OUR FEATURES SECTION -->

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