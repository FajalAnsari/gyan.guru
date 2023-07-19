<?php

error_reporting(0);
include 'db_connect.php';

date_default_timezone_set("Asia/Kolkata");

$comp = $comp_name = 'Gyan Guru';
$page = ucwords(pathinfo(str_replace('-', ' ', $_SERVER['PHP_SELF']), PATHINFO_FILENAME));
$path = "../assets/imgs/"; //Admin Side
$path2 = './img/post/';  // User Side



//=============================== Admin login ==============================================

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($con, $_POST['email1']);
    $password = mysqli_real_escape_string($con, $_POST['password1']);


    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password' ";
    $results = mysqli_query($con, $query);
    if (mysqli_num_rows($results) > 0) {
        $r = mysqli_fetch_array($results);
        session_start();
        $_SESSION['email'] = $r['username'];
        $_SESSION['image'] = $r['image'];


        echo ' <script>
            alert("Login Success...\nWelcome to ' . $comp_name . ' ");
            window.location.href="../index.php"; </script> ';
    } else {
        echo ' <script>alert("Invalid Credential"); window.location.href="";</script> ';
    }
}



// signup------------------------------------------- -->
$showAlert1 = false;
$showAlert2 = false;
$showAlert = false;
if (isset($_POST['save'])) {

    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $confirm = $_POST['confirm'];
    $sql = "SELECT * FROM `admin` WHERE username ='$email'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($res);

    // matched confirm password and password//
    if (($pass != $confirm)) {
        $showAlert1 = true;
    }
    //    checking email already exist or not//
    elseif ($email == $row['username']) {
        $showAlert2 = true;
    } else {
        // insert query//
        $sql1 = "INSERT INTO `admin`( `username`, `password`,  `firstname`, `lastname`) VALUES ('$email','$pass','$first','$last') ";
        $res1 = mysqli_query($con, $sql1);
        $_SESSION['email'] = $_POST['email'];
        if ($res1) {
            $showAlert = true;
        }
    }
}
if ($showAlert) {
    echo '<div class="alert alert-success" role="alert" >
        success
        </div>';
}
if ($showAlert1) {
    echo '<div class="alert alert-danger" role="alert" >
        Password not  matched </div>';
}
if ($showAlert2) {
    echo '<div class="alert alert-danger" role="alert" >
        User is already exists
        </div>';
}


// <!-- ------------------------------------------------------------------------------------------------- -->



//================================ Add post =======================================
if (isset($_POST['add_post'])) {

    $cat_id = $_POST['cat_id'];
    $title = $_POST['title'];
    $lebal = $_POST['lebal'];
    $tags = $_POST['tags'];
    $desc = $_POST['desc'];
    $post_date = date('d M Y');
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

    move_uploaded_file($_FILES['image']['tmp_name'], "../assets/imgs/" . $file_name);

    $sql = "INSERT INTO `posts`(`cat_id`, `title`, `lebal`, `tags`, `desc`, `image` ,`post_date`)
	
	 VALUES ('$cat_id','$title','$lebal','$tags','$desc','$file_name','$post_date')";

    $qry = mysqli_query($con, $sql) or die(mysqli_error($con));

    if ($qry) {
        echo '<script> alert("Added Successful"); window.location.href="../index.php"; </script> ';
    }
}

//================================ Update post =======================================
if (isset($_POST['post_update'])) {
    $cat = $_POST['cat'];
    $state = $_POST['state'];
    $job_title = $_POST['job_title'];
    $post_date = $_POST['post_date'];
    $last_date = $_POST['last_date'];
    $short_info = $_POST['short_info'];
    $date_title = $_POST['date_title'];
    $imp_date = $_POST['imp_date'];
    $fee_title = $_POST['fee_title'];
    $fee = $_POST['fee'];
    $age_title = $_POST['age_title'];
    $age = $_POST['age'];
    $post_details  = $_POST['post_details'];
    $cat_details = $_POST['cat_details'];
    $link_title = $_POST['link_title'];
    $links = $_POST['links'];
    $res_title = $_POST['res_title'];
    $resource = $_POST['resource'];
    $id = $_POST['id'];

    $sql = "UPDATE `posts` SET `cat_id`= '$cat', `state`= '$state', `job_title`= '$job_title', `short_info`= '$short_info', `post_date`= '$post_date', `last_date`= '$last_date', `date_title`= '$date_title', `imp_date`= '$imp_date', `fee_title`= '$fee_title', `app_fee`= '$fee', `age_title`= '$age_title', `age_limit`= '$age', `post_details`= '$post_details', `cat_wise_post`= '$cat_details', `link_title`= '$link_title', `links`= '$links', `res_title`= '$res_title', `resource`= '$resource' WHERE id= '$id'";



    $qry = mysqli_query($con, $sql) or die(mysqli_error($con));

    echo '<script> alert("Update Successful"); window.location.href=""; </script> ';
}

//================================ Delete post =======================================
if (isset($_POST['delete_post'])) {
    $id = $_POST['id'];

    $qry = mysqli_query($con, "DELETE FROM `posts` WHERE id = '$id' ");
    if ($qry) {
        echo '<script> alert("Deleted Successful"); window.location.href="post-list"; </script> ';
    }
}


//============================ Add Category =======================================
if (isset($_POST['add_category'])) {
    $category = $_POST['category'];
    $qry = mysqli_query($con, "INSERT INTO `category`(`category`) VALUES ('$category')");
    echo '<script> alert("Successful"); window.location.href=""; </script> ';
}
//============================ Update Category =======================================
if (isset($_POST['category_update'])) {
    $category = $_POST['category'];
    $id = $_POST['id'];
    $qry = mysqli_query($con, "UPDATE `category` SET `category` = '$category' WHERE `id` = '$id';");
    echo '<script> alert("Successful"); window.location.href=""; </script> ';
}
//==============Delete Category =======================================
if (isset($_POST['delete_category'])) {
    $id = $_POST['id'];

    $qry = mysqli_query($con, "DELETE FROM `category` WHERE `id` = '$id'");
    echo '<script> alert("Deleted Successful"); window.location.href=""; </script> ';
}



//============================ Add Curicullum Title =======================================
if (isset($_POST['add_curicullum_title'])) {
    
    $post_id = $_POST['post_id'];
    $title = $_POST['title'];

    $qry = mysqli_query($con, "INSERT INTO `curicullum_title`(`title`,`post_id`) VALUES ('$title','$post_id')");
    echo '<script> alert("Successful"); window.location.href=""; </script> ';
}


//================================ Add Curicullum =======================================
if (isset($_POST['add_curicullum'])) {

    // $post_id = $_POST['post_id'];
    $curi_id = $_POST['curi_id'];
    $qus = $_POST['qus'];
    $ans = $_POST['ans'];

    $sql = "INSERT INTO `curicullum`(`curi_id`, `question`, `answer`)
	
	 VALUES ('$curi_id','$qus','$ans')";

    $qry = mysqli_query($con, $sql) or die(mysqli_error($con));

    if ($qry) {
        echo '<script> alert("Added Successful"); window.location.href=""; </script> ';
    }
}




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $comments = $_POST['comments'];

    // Validate form data (perform necessary validation checks)

    // Send the message
    $to = 'urmila@difm.tech'; // Replace with your email address
    $subject = 'New Message: ' . $subject;
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Comments: $comments\n";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        // Message sent successfully
        echo 'Message sent! Thank you for contacting us.';
    } else {
        // Error sending message
        echo 'An error occurred while sending the message. Please try again later.';
    }
}
