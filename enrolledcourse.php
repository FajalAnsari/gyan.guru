<?php
session_start();
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
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.1.0/build/pure-min.css">
    <link rel="stylesheet" href="https://purecss.io/layouts/side-menu/styles.css">
    <script src="https://purecss.io/js/ui.js"></script>
    <title>Eduprix</title>
    <style>

    </style>
</head>

<body>
    <?php include 'header.php' ?>


    <div class="container-fluid">
        <div class="row" style="margin-top: 90px;">

<<<<<<< HEAD
            <div class="col-md-2" style="background-color: #8080804f;">
=======
            <div class="col-md-2" style="background-color: #8080804f; height:100vh;">



<!-- ///////////////////////////old code -->
                <!-- <?php
                        $res = mysqli_query($con, "SELECT * FROM `curicullum_title` WHERE `post_id` = '$id'");
                        if (mysqli_num_rows($res) > 0) {

                            while ($data = mysqli_fetch_array($res)) { ?>
                        <li class="questioncuri">
                            <?= $data['title'] ?>
                        </li>
                        <?php
                                $cur1 = mysqli_query($con, "SELECT * FROM `curicullum` WHERE `curi_id` = $data[id]  ");
                                while ($data2 = mysqli_fetch_array($cur1)) { ?>
                            <div>
                                <a href="enrolledcourse.php?id=<?= $id ?>&cid=<?= $data2['id'] ?>" class="ancquestion">
                                    <p class="curi"><?= $data2['question']; ?></p>
                                </a>
                            </div>

                    <?php }
                            }
                        }


                        // Display quiz after listing all the questions
                        $quizRes = mysqli_query($con, "SELECT * FROM `quiz` WHERE `quizid` = '$id'");
                        if (mysqli_num_rows($quizRes) > 0) {
                            $quizData = mysqli_fetch_array($quizRes);
                    ?>
                    <li class="quizcuri questioncuri">
                        <a href="quiz.php?id=<?= $id ?>&quizid=<?= $quizData['quizid'] ?>" class="ancquiz ancquestion text-info">
                            <?= $quizData['quiz'] ?>
                        </a>
                    </li>
                <?php } ?> -->

<!-- ////////////////////old code -->
>>>>>>> 30970f9eab498a65e22faa30a9f4e3d92661256a








<<<<<<< HEAD

            <?php
$shownQuizzes = array();

$res = mysqli_query($con, "SELECT * FROM `curicullum_title` WHERE `post_id` = '$id'");
if (mysqli_num_rows($res) > 0) {
    while ($data = mysqli_fetch_array($res)) {
?>
        <li class="questioncuri">
            <?= $data['title'] ?>
        </li>
        <?php
        $cur1 = mysqli_query($con, "SELECT * FROM `curicullum` WHERE `curi_id` = $data[id]");
        while ($data2 = mysqli_fetch_array($cur1)) {
        ?>
            <div>
                <a href="enrolledcourse.php?id=<?= $id ?>&cid=<?= $data2['id'] ?>" class="ancquestion">
                    <p class="curi"><?= $data2['question']; ?></p>
                </a>
            </div>
        <?php
        }
        // Fetch all quizzes for this curriculum title and store them in $quizDataArray.
        $quizRes = mysqli_query($con, "SELECT * FROM `quiz` WHERE `quizid` = '$id' AND `quizid` NOT IN ('" . implode("','", $shownQuizzes) . "')");
        $quizDataArray = array();
        while ($quizData = mysqli_fetch_array($quizRes)) {
            $quizDataArray[] = $quizData;
            $shownQuizzes[] = $quizData['quizid'];
        }
        // Check if there are quizzes related to the current curriculum title.
        if (!empty($quizDataArray)) {
        ?>
            <!-- Display the quiz options after curriculum questions. -->
            <li class="quizcuri questioncuri">
                <a href="quiz.php?id=<?= $id ?>&quizid=<?= $quizDataArray[0]['quizid'] ?>" class="ancquiz ancquestion text-info">
                    <?= $quizDataArray[0]['quiz'] ?>
                </a>
            </li>
            <!-- You can display more quizzes if needed -->
        <?php
        }
    }
}
?>


</div>
                <?php include 'footer.php' ?>

            </div>

=======
                <?php
                $shownQuizzes = array();

                $res = mysqli_query($con, "SELECT * FROM `curicullum_title` WHERE `post_id` = '$id'");
                if (mysqli_num_rows($res) > 0) {
                    while ($data = mysqli_fetch_array($res)) {
                ?>
                        <li class="questioncuri">
                            <?= $data['title'] ?>
                        </li>
                        <?php
                        $cur1 = mysqli_query($con, "SELECT * FROM `curicullum` WHERE `curi_id` = $data[id]");
                        while ($data2 = mysqli_fetch_array($cur1)) {
                        ?>
                            <div>
                                <a href="enrolledcourse.php?id=<?= $id ?>&cid=<?= $data2['id'] ?>" class="ancquestion">
                                    <p class="curi"><?= $data2['question']; ?></p>
                                </a>
                            </div>
                        <?php
                        } 
                        $quizRes = mysqli_query($con, "SELECT * FROM `quiz` WHERE `quizid` = '$id' AND `quizid` NOT IN ('" . implode("','", $shownQuizzes) . "')");
                        if (mysqli_num_rows($quizRes) > 0) {
                            $quizData = mysqli_fetch_array($quizRes);
                            $shownQuizzes[] = $quizData['quizid'];
                        ?>
                            <li class="quizcuri questioncuri">
                                <a href="quiz.php?id=<?= $id ?>&quizid=<?= $quizData['quizid'] ?>" class="ancquiz ancquestion text-info">
                                    <?= $quizData['quiz'] ?>
                                </a>
                            </li>
                <?php
                        }
                    }
                }
                ?>

            </div>

            <div class="col-md-10 mt-3">
                <?php
                if (!isset($_GET['cid'])) {
                    $cur1 = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `curicullum`")); ?>

                    <b><?= $cur1['question'] ?></b><br>
                    <p><?= $cur1['answer'] ?></p>



                <?php
                } else {
                    $cur1 = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `curicullum` WHERE `id` = $_GET[cid]")); ?>


                    <b><?= $cur1['question'] ?></b><br>
                    <p><?= $cur1['answer'] ?></p>

                <?php    } ?>
              

            </div>
            <?php include 'footer.php' ?>

>>>>>>> 30970f9eab498a65e22faa30a9f4e3d92661256a


        </div>

    </div>





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