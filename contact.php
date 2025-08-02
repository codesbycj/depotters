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

    <!-- CONTACT -->
    <div id="contact">
        <div class="contact container">
            <div class="top text-center w-75 m-auto mb-5 d-none d-md-block">
                <h1>Get in Touch with Us</h1>
                <p>Have questions about our security solutions? Our team is ready to provide expert advice and
                    customized recommendations for your specific needs.</p>
            </div>

            <div class="content">
                <div class="left">
                    <h2 class="my-0 text-center text-lg-start">Contact Information</h2>
                    <p class="mb-5 text-center text-lg-start">Reach out to us through any of these channels <br /> and
                        we'll respond promptly to your inquiry.</p>

                    <div class="details">
                        <div class="each">
                            <i class="fa-solid fa-calendar-days"></i>
                            <div class="detail">
                                <p class="fw-bold my-0">
                                    Our Headquarters</p>
                                <p class=" my-0">Port Harcourt, Rivers State, Nigeria</p>
                            </div>
                        </div>
                        <div class="each">
                            <i class="fa-solid fa-shield-halved"></i>
                            <div class="detail">
                                <p class="fw-bold my-0">
                                    Phone Numbers</p>
                                <p class=" my-0">08130200276 <br /> 08034583072</p>
                            </div>
                        </div>
                        <div class="each">
                            <i class="fa-solid fa-award"></i>
                            <div class="detail">
                                <p class="fw-bold my-0">
                                    Email Address</p>
                                <p class=" my-0">depotterglobal@gmail.com</p>
                            </div>
                        </div>
                        <div class="each">
                            <i class="fa-solid fa-award"></i>
                            <div class="detail">
                                <p class="fw-bold my-0">
                                    Technical Support</p>
                                <p class=" my-0">support@depotterglobal.com <br /> Available 24/7 for emergency services
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="hours">
                        <h4>Business Hours</h4>

                        <div class="hour">
                            <p class="my-0">Monday - Friday</p>
                            <p class="my-0">8:00AM - 6:00PM</p>
                        </div>
                        <div class="hour">
                            <p class="my-0">Saturday</p>
                            <p class="my-0">9:00AM - 4:00PM</p>
                        </div>
                        <div class="hour">
                            <p class="my-0">Sunday</p>
                            <p class="my-0">Emergency Services Only</p>
                        </div>

                    </div>
                </div>

                <div class="right">
                    <h2>Send Us a Message</h2>
                    <p>Fill out the form below and we'll get back to you within 24 hours.</p>

                    <form action="">
                        <div class="question">
                            <label for="" class="fw-bold">Full Name</label>
                            <input type="text">
                        </div>
                        <div class="question">
                            <label for="" class="fw-bold">Email Address</label>
                            <input type="text">
                        </div>
                        <div class="question">
                            <label for="" class="fw-bold">Phone Number </label>
                            <input type="text">
                        </div>

                        <div class="question">
                            <label for="" class="fw-bold">Subject</label>

                            <select name="subject" id="subject" style="height: 40px; padding: 0 1rem;">
                                <option value="">Select a Subject</option>
                                <option value="">General inquiry</option>
                                <option value="">Sales inquiry</option>
                                <option value="">Technical Support</option>
                                <option value="">Request a Quote</option>
                                <option value="">Career Opportunity</option>
                                <option value="">Other</option>
                            </select>
                        </div>
                        <div class="question">
                            <label for="" class="fw-bold">Your Message</label>
                            <textarea name="" id="" style="height: 200px;"></textarea>
                        </div>

                        <button type="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT -->
     
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