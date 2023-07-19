<?php

include 'action/config.php';
error_reporting(E_ALL);
$id = $_GET['id'];
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Eduprix</title>
    <style>

    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <!-- coursesection---------------- -->

    <div class="container" style="margin-top: 90px;">
        <div class="row">
            <div class="col-lg-8">
                <?php $row = mysqli_fetch_array(mysqli_query($con,  "SELECT * FROM `posts` WHERE id= $id")); ?>
                <h1 class="coursetitleh1 mt-5"><?php echo $row['title'] ?></h1>
                <p class="mt-5">Teacher : <b>U.M.</b></p>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs navtabul mt-5">
                    <li class="nav-item">
                        <a class="nav-link active colorancher" data-bs-toggle="tab" href="#msg">Drscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link colorancher" data-bs-toggle="tab" href="#pro">Curriculum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link colorancher" data-bs-toggle="tab" href="#set">Annoucement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link colorancher" data-bs-toggle="tab" href="#rev">Reviews</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <?php

                // FETCHING DATA FROM DATABASE
                $row = mysqli_fetch_array(mysqli_query($con,  "SELECT * FROM `posts` WHERE id= $id")); ?>
                <div class="tab-content">
                    <div class="tab-pane container imgresponsivediv active mt-5" id="msg">
                        <div><img src=<?php echo 'assets/imgs/' . $row['image']; ?> width="100%" height="350px" /></div>
                        <div class="mt-5">
                            <h3><?php echo $row['title'] ?></h3>
                            <p><?php echo $row['desc'] ?></p>

                        </div>

                        <div>
                            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 mt-5 mb-5 text-center">
                                <?php
                                $data1 =   explode(',', "$row[tags]");
                                foreach ($data1 as $value) { ?>
                                    <div class="col">
                                        <div class="p-1 bg-light"><?= $value ?></div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane container fade" id="pro"> <?php

                        $cur = mysqli_query($con, "SELECT * FROM `curicullum_title` WHERE `post_id` = $id  ");


                        if (mysqli_num_rows($cur) > 0) {
                            while ($data1 = mysqli_fetch_array($cur)) { ?>
                                <h5 class="mt-5"><?= $data1['title']; ?></h5>
                                <?php
                                $cur1 = mysqli_query($con, "SELECT * FROM `curicullum` WHERE `curi_id` = $data1[id]  ");
                                while ($data2 = mysqli_fetch_array($cur1)) { ?>
                                    <div>
                                        <a href="enrolledcourse.php?id=<?= $id ?>&cid=<?= $data2['id'] ?>" class="ancquestion">
                                            <p class="curi"><?= $data2['question']; ?></p>
                                        </a>
                                    </div>
                        <?php }
                            }
                        } ?>

                    </div>

                    <div class="tab-pane container fade" id="set">

                        <div class="row">
                            <div class="col text-center mt-5"><img src="./assets/imgs/announcement-vector-8753409.png" width="200px" /></div>
                            <div class="col text-center">
                                <h4 class="mt-5">IMPORTANT <br> ANNOUCEMENT</h4>
                                <h6 class="mt-5">Course Name : <b>Vision and Mission</b></h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                                <b>22/03/2023</b>

                            </div>
                        </div>

                    </div>
                    <div class="tab-pane container fade" id="rev">
                        <h2 class="mt-5">Reviews</h2>
                        <P> <b class="fs-1">5,2</b><span class="ms-3 reviewsicon">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </span> <br><span class="reviewsword">Be the first to add a review Be the first to add a review Be the first to add a review Be the first to add a review.
                                Be the first to add a review Be the first to add a review Be the first to add a review Be the first to add a reviewBe the first to add a review Be the first to add a review Be the first to add a review Be the first to add a review
                            </span>
                        </P>
                    </div>

                </div>
            </div>


            <div class="col-lg-4">
                <div class="mt-5 mx-3 ">

                    <a href="enrolledcourse.php?id=<?= $id ?>"><button type="button" class="btn btngetcourse btn-lg">Get Course</button></a>
                    <p class="mt-5">Category : <b>Developement</b></p>
                    <p class="mt-5 text-center">Enrolled Course : <b>2</b></p>
                    <hr>
                    <p class="mt-5 text-center">Lectures : <b>2</b></p></i>
                    <hr>
                    <p class="mt-5 text-center">Levels : <b>Begginer</b></p>
                    <hr>
                    <div class="mt-5 designdiv">
                        <p class="mt-5 text-center m-4">: <b>Reviews</b><br>

                        <P>
                            <i class="fa fa-star reviewsicon" aria-hidden="true"></i>
                            <i class="fa fa-star reviewsicon" aria-hidden="true"></i>
                            <i class="fa fa-star reviewsicon" aria-hidden="true"></i>
                            <i class="fa fa-star reviewsicon" aria-hidden="true"></i>
                            <i class="fa fa-star reviewsicon" aria-hidden="true"></i>
                            </span> <br><span class="reviewsword">Be the first to add a review Be the first to add a review Be the first to add a review Be the first to add a review.
                            </span>
                        </P>

                    </div>

                </div>
            </div>

        </div>

    </div>
    <!-- coursesection---------------- -->
    <?php include 'footer.php' ?>
    <!-- ----------------------------- -->
    <script>
        const openSidebar = () => {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        };

        const closeSidebar = () => {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        };
        const opend = () => {
            document.getElementById("mySlidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        };

        const closeSlidebar = () => {
            document.getElementById("mySlidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        };
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>