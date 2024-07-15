

<body>

    <main>

        <div class="container-fluid">

            <!-- Header Start -->
            <?php include '../common/header.php'; ?>
            <?php include '../common/nav.php'; ?>
            <!-- Header End -->

            <!-- Hero Section Start -->
            <section class="hero-section d-flex justify-content-center align-items-center mb-5 mt-5 mt-md-0" data-aos="fade-up" data-aos-easing="ease-in-back">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col">
                            <div class="hero-content text-center">
                                <img src="../assets/img/group_photo1.jpg" class="rounded-3 shadow-lg w-100">
                                <!-- <h1 class="text-white">90.8 Mhz FM Community Radio, GNDEC</h1> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Hero Section End -->
            <hr>

            <!-- About Section Start -->
            <div class="container about-section rounded-3 text-white my-5" data-aos="fade-up">
                <div class="card rounded-3 border border-dark" style="background-image: url('../assets/img/recording_system.jpg'); background-size: cover; background-position: center;">
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
                    <h1 class="text-center" >Contact Us</h1>
                    <div class="row">
                        <div class="col-md-6" >
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
                        <div class="col-md-6" >
                            <!-- <h1 class="text-center">Location</h1> -->
                            <div class="d-flex justify-content-center mt-4" >
                                <iframe class="rounded-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3424.9395765694885!2d75.85755807558536!3d30.860366674522965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a832d5a158fd1%3A0xc8823d2bbed466b0!2s90.8%20MHz%20FM%20Community%20Radio%20Station!5e0!3m2!1sen!2sin!4v1719149075746!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact Us Section End -->


    </main>
    <!-- Footer Start -->
    <?php include '../common/footer.php'; ?>
    <!-- Footer End -->

    <!-- Custom JavaScript Start -->
    <!-- <script src="./assets/javascript/script.js"></script> -->
    <!-- <script src="./assets/javascript/color-modes.js"></script> -->

    
</body>

</html>