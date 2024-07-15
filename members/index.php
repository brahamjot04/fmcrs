<body>
    <?php
    include 'header.php';
    include 'nav.php';
    ?>

    <main>

        <div class="container overflow-x-hidden">
            <h3 class="h1 text-center mb-5">
                Core Team Members
            </h3>
            <div class="row mt-3 d-flex align-items-center justify-content-evenly">

                <h5 class="h3 text-center">
                    Our Coordinators
                </h5>

                <?php
                $core_cards = "SELECT * FROM core_team WHERE role='Coordinator' OR role='Co-Coordinator'";
                $core_cards_result = mysqli_query($conn, $core_cards);
                while ($core = mysqli_fetch_assoc($core_cards_result)) {
                ?>
                    <div class="col-md-3">
                        <div class="card mb-5 mt-3">
                            <img src=" ./assets/img/core_members/<?php echo $core['profilepic'] ?>" style="width: 100%" alt="" class="card-img-top">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $core['name'] ?></h5>
                                <p class="card-text"><?php echo $core['role'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="row mt-3 d-flex align-items-center justify-content-evenly">

                <h5 class="h3 text-center">
                    Our Team Members
                </h5>

                <?php
                $core_cards2 = "SELECT * FROM core_team WHERE role!='Coordinator' AND role!='Co-Coordinator'";
                $core_cards_result2 = mysqli_query($conn, $core_cards2);
                while ($core2 = mysqli_fetch_assoc($core_cards_result2)) {
                ?>
                    <div class="col-md-3">
                        <div class="card mb-5 mt-3">
                            <img src=" ./assets/img/core_members/<?php echo $core2['profilepic'] ?>" style="width: 100%" alt="" class="card-img-top">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $core2['name'] ?></h5>
                                <p class="card-text"><?php echo $core2['role'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </main>


    <?php
    include 'footer.php';
    ?>
</body>