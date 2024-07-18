<body>
    <?php
    include '../common/header.php';
    include '../common/nav.php';
    ?>

    <main>

        <div class="container overflow-x-hidden">
            <h3 class="h1 text-center mb-5">
                Core Team Members
            </h3>
            <!-- Staff Members Start -->
            <div class="row mt-3 d-flex align-items-center justify-content-evenly">

                <h5 class="h3 text-center">
                    Our Faculty Members
                </h5>

                <?php
                $faculty_cards = "SELECT * FROM faculty_members";
                $faculty_cards_result = mysqli_query($conn, $faculty_cards);
                while ($faculty = mysqli_fetch_assoc($faculty_cards_result)) {
                ?>
                    <div class="col-md-3">
                        <div class="card mb-5 mt-3">
                            <img src=" ../assets/img/core_members/<?php echo $faculty['profilepic'] ?>" style="width: 100%" alt="" class="card-img-top">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $faculty['name'] ?></h5>
                                <p class="card-text"><?php echo $faculty['role'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <!-- Staff Members End -->

            <!-- Coordinators Start -->
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
                            <img src=" ../assets/img/core_members/<?php echo $core['profilepic'] ?>" style="width: 100%" alt="" class="card-img-top">
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
            <!-- Coordinators End -->

            <!-- Team Members Start -->
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
                            <img src=" ../assets/img/core_members/<?php echo $core2['profilepic'] ?>" style="width: 100%" alt="" class="card-img-top">
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
            <!-- Team Members End -->
        </div>
    </main>


    <?php
    include '../common/footer.php';
    ?>
</body>