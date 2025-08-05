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


    <!-- SERVICES HEADER -->
    <section id="servicesHero">
        <div class="servicesHero container">
            <div class="left">
                <p class="my-0">OUR SERVICES</p>

                <h2>Nigeria's Premium Security Technology Provider</h2>

                <p class="my-0">De-Potter Global Technologies is one of Nigeria’s leading ICT companies,
                    founded with a mission to protect people around the world through cutting-edge security technologies.
                    Our commitment to innovation and excellence drives us to deliver advanced solutions that ensure safety and
                    peace of mind in an increasingly digital world.</p>

                <!-- <p>At De-Potter Global Technologies, we offer a full range of services,
                    from concept planning through to completion. We provide detailed,
                    costed proposals with time-framed work plans and product specifications,
                    as well as recommendations to meet your functional and financial objectives.
                    Security as a topic has continued to rise and that is why we are at your service.</p>
 -->
                <a href="contact.php" class="btns text-uppercase">Book a Consultation</a>
            </div>

            <div class="right d-none d-lg-block">
                <img src="assets/solar.jpg" alt="">
            </div>
        </div>
    </section>
    <!-- SERVICES HEADER -->

    <!-- SERVICES SECTION -->
    <?php
    include('inc/services.php');
    ?>
    <!-- SERVICES SECTION -->

    <!-- WHY US -->
    <?php
    include('inc/why.php');
    ?>
    <!-- WHY US -->

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