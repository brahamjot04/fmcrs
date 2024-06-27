<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>90.8 Mhz FM Community Radio GNDEC</title>

    <!-- Bootstrap CSS CDN Start-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap CSS CDN End-->

    <!-- Bootstrap Icon CDN Start -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Bootstrap Icon CDN End -->

    <!-- Custom CSS Start -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
        /* Theme Changer Icon Color Start */
        .bis {
            vertical-align: -0.125em;
            fill: currentColor;
        }

        /* Theme Changer Icon Color End */

        /* Theme Changer Button Color Start */
        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        /* Theme Changer Button Color End */
        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bis {
            display: block !important;
        }
    </style>
    <!-- Custom CSS End -->

    <!-- AOS CDN Start -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- AOS CDN End -->

    <!-- Favicon Start -->
    <link rel="icon" href="./assets/img/fmcrs.png" type="image/png">
    <!-- Favicon End -->

    <!-- Typed JS CDN Start -->
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <!-- Typed JS CDN End -->
</head>

<body>
    <!-- Theme Changer Icons End -->
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>
    <!-- Theme Changer Icons End -->

    <!-- Theme Changer Start -->
    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle rounded-3">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bis my-1 theme-icon-active" width="1em" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                    <svg class="bis me-2 opacity-50" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bis ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>
    <!-- Theme Changer End -->

    <main>

        <div class="container-fluid">

            <!-- Header Start -->
            <?php include 'header.php'; ?>
            <?php include 'nav.php'; ?>
            <!-- Header End -->

            <!-- Hero Section Start -->
            <section class="hero-section d-flex justify-content-center align-items-center mb-5 mt-5 mt-md-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col">
                            <div class="hero-content text-center">
                                <img src="./assets/img/group_photo1.jpg" class="rounded-3 shadow-lg w-100">
                                <!-- <h1 class="text-white">90.8 Mhz FM Community Radio, GNDEC</h1> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Hero Section End -->
            <hr>

            <!-- About Section Start -->
            <div class="container about-section rounded-3 text-white my-5">
                <div class="card rounded-3 border border-dark" style="background-image: url('assets/img/recording_system.jpg'); background-size: cover; background-position: center;">
                    <div class="rounded-3" style="backdrop-filter:blur(5px)">

                        <div class="row card-body">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 rounded-3">

                                <h1 class="card-title text-center" style="color: rgb(210, 199, 0);">
                                    About Us
                                </h1>
                                <p class="card-title text-center text-white">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio numquam aperiam repellat a. Quam cum, vitae assumenda libero nobis ipsum itaque! Cumque, amet consectetur incidunt sapiente nulla corrupti inventore magni tempore dolore beatae, mollitia voluptates recusandae, voluptatum praesentium voluptas! Pariatur, odit ratione deserunt in ad libero, delectus harum sed recusandae cupiditate quasi impedit consequatur maiores itaque, voluptates enim explicabo a nulla fuga alias reprehenderit nesciunt iure. Voluptatem corporis rerum dolorem ipsa fugiat, animi sit, voluptatum, magnam aperiam quis similique eaque veritatis distinctio! Maiores a eligendi itaque at, sequi corporis recusandae! Qui quas eaque amet. Fugit placeat sed vel quos amet?
                                </p>
                            </div>
                        </div>

                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
            <hr>
            <!-- About Section End -->


            <!-- Contact Us Section Start -->
            <section id="ContactUs" class="contact-us-section my-5">
                <div class="container">
                    <h1 class="text-center">Contact Us</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                                </div>
                                <div class="mb-3 d-flex justify-content-center text-center">
                                    <button type="submit" class="btn btn-primary text-center">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <!-- <h1 class="text-center">Location</h1> -->
                            <div class="d-flex justify-content-center mt-4">
                                <iframe class="rounded-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3424.9395765694885!2d75.85755807558536!3d30.860366674522965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a832d5a158fd1%3A0xc8823d2bbed466b0!2s90.8%20MHz%20FM%20Community%20Radio%20Station!5e0!3m2!1sen!2sin!4v1719149075746!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact Us Section End -->


    </main>
    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->

    <!-- Custom JavaScript Start -->
    <script src="./assets/javascript/script.js"></script>
    <script src="./assets/javascript/color-modes.js"></script>

    <!-- Typed.js Start -->
    <script>
        // Typing Effect on the header for Bigger Screens Start
        let app = document.getElementById('typed1');
        let typewriter = new Typewriter(app, {
            loop: false
        });
        typewriter.typeString('90.8 MHz FM Community Radio')
            .pauseFor(2500)
            .deleteAll()
            .typeString('Guru Nanak Dev Engineering College, Ludhiana')
            .pauseFor(2500)
            .deleteAll()
            .typeString('90.8 MHz FM Community Radio')
            .start();
        // Typing Effect on the header for Bigger Screens End

        // Typing Effect on the header for Smaller Screens Start
        let app2 = document.getElementById('typed');
        let typewriter2 = new Typewriter(app2, {
            loop: false
        });
        typewriter2.typeString('90.8 MHz FM Community Radio')
            .pauseFor(2500)
            .deleteAll()
            .typeString('Guru Nanak Dev Engineering College')
            .pauseFor(2500)
            .deleteAll()
            .typeString('90.8 MHz FM Community Radio')
            .start();
        // Typing Effect on the header for Smaller Screens End
    </script>
    <!-- Typed.js End -->
    <!-- Custom JavaScript End -->

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>