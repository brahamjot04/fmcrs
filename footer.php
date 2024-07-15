<div class="container border-top mt-3">
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 mb-3 border-bottom">
        <div class="col mb-1">
            <a href="./index.php" class="d-flex align-items-center justify-content-center mb-3 link-body-emphasis text-decoration-none fw-bold">
                <img src="./assets/img/fmcrs.png" alt="90.8 MHz FMCRS Logo" width="50" /><br />
                <span class="ms-3 d-md-block d-none">90.8 Mhz FM <br />Community Radio</span>
                <span class="ms-3 d-md-none d-block">90.8 Mhz FM Community Radio</span>
            </a>
            <!-- Social Icons Start -->
            <div class="d-flex justify-content-evenly social-links mt-5">
                <!-- LinkedIn Start -->
                <a href="https://www.linkedin.com/company/90.8-mhz-fm-community-radio-gndec/" target="_blank" class="text-decoration-none">
                    <i class="bi bi-linkedin linkedin"></i>
                </a>
                <!-- LinkedIn End -->

                <!-- Instagram Start -->
                <a href="https://www.instagram.com/fmcrsgndec" target="_blank" class="text-decoration-none">
                    <i class="bi bi-instagram instagram"></i>
                </a>
                <!-- Instagram End -->

                <!-- Facebook Start -->
                <a href="https://www.facebook.com/p/908-MHz-FM-Community-Radio-Station-GNDEC-Ludhiana-100075834916259/" target="_blank" class="text-decoration-none">
                    <i class="bi bi-facebook facebook"></i>
                </a>
                <!-- Facebook End -->

                <!-- YouTube Start -->
                <a href="https://www.youtube.com/@fmcrsgndec/" target="_blank" class="text-decoration-none">
                    <i class="bi bi-youtube yt"></i>
                </a>
                <!-- YouTube End -->

                <!-- Spotify Start -->
                <a href="https://open.spotify.com/show/02jYncJsuur3VIRqccfKHs" target="_blank" class="text-decoration-none">
                    <i class="bi bi-spotify spotify"></i>
                </a>
                <!-- Spotify End -->
            </div>

            <!-- Social Icons End -->
        </div>

        <div class="col mb-1"></div>

        <div class="col mb-1">
            <h5>Useful Links</h5>
            <div class="">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="./index.php" class="nav-link p-0 text-body-secondary">Home</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="./gallery.php" class="nav-link p-0 text-body-secondary">Gallery</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="./livefm/index.php" class="nav-link p-0 text-body-secondary">Live FM</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="./index.php#ContactUs" class="nav-link p-0 text-body-secondary">Contact</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col mb-1">
            <div class="mb-4"></div>
            <div class="">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="./events.php" class="nav-link p-0 text-body-secondary">Events</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="./podcasts.php" class="nav-link p-0 text-body-secondary">Podcasts</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="./members.php" class="nav-link p-0 text-body-secondary">Members</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="https://www.gndec.ac.in" class="nav-link p-0 text-body-secondary">GNDEC Home</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col mb-1">
            <h5>Contact Info</h5>
            <div>
                <p>
                    <i class="bi bi-geo-alt-fill"></i>
                    <span class="ms-2">FM-CRS Studio, 1st floor, PG Block, GNDEC</span>
                </p>
            </div>
            <div>
                <p>
                    <i class="bi bi-envelope"></i>
                    <a href="mailto:fmcrs@gndec.ac.in" class="ms-2 text-decoration-none link-body-emphasis">fmcrs@gndec.ac.in</a>
                </p>
            </div>
            <div>
                <i class="bi bi-telephone-fill"></i>
                <a href="tel:+91161XXXXXXX" class="text-decoration-none ms-2 link-body-emphasis">+91-161-XXXXXXX</a>
            </div>
        </div>
    </footer>
    <!-- <div class="text-center"> -->

    <p class="text-center text-body-secondary">
        &copy; <span id="year"></span> - All Rights Reserved - GNDEC | Made with
        &hearts; by
        <a href="./devs.php" class="text-decoration-none">Technical Team, FMCRS</a>
    </p>
    <!-- </div> -->
</div>



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

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<!-- Bootstrap JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Custom JavaScript End -->