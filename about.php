
<?php

session_start();

//Check if the user is already logged in
if (!isset($_SESSION['email'])) {
   
    // Redirect the user to the home page or any other authorized page
    // header("Location: sigin_up.php");
    
}


?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="assets/css/style.css" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Eduprix</title>
</head>
<body>
<?php include 'header.php' ?>
  <div class="container-fluid backgr mb-5"   style="margin-top: 150px;">
  <div class="container">
  <div class="seaside text-center">All COURSES </div>
  <p class="text-center m-5 fs-5 mt-3">Welcome to Gyan guru free learning website! We are passionate about providing high-quality educational resources and empowering individuals to expand their knowledge and skills.</p>
  <div class="row gx-5 rowabout">   
    <div class="col mt-5">
     <div class="p-3 backimgs text-white fs-1 fw-bold text-center">Who We Are
        <P class="text-white bglight fs-5">Welcome to Gyan Guru, your go-to destination for free learning resources! Gyan Guru is a dedicated platform designed to provide high-quality educational materials to 
            learners of all ages and backgrounds. Our aim is to promote lifelong learning and empower individuals to acquire knowledge and skills in a wide range of subjects.</p>
     </div>
    </div>
    <div class="col mt-5">
      <div class="p-3 backimgs1  text-white fs-1 fw-bold text-center">Our Aim
        <p class="text-white fs-5">The aim of a Gyan Guru website is to provide universal access to education, foster 
            lifelong learning, support personal growth and skill development, bridge educational gaps, offer flexibility and self-paced 
            learning, promote collaboration and community building, drive continuous improvement and innovation, and empower individuals for 
            social mobility. These aims collectively contribute to creating a more inclusive, knowledgeable, and empowered society.</p>
      </div>
    </div>
  </div>
  <div class="col mt-3">
      <div class="p-3  backimgs2 text-white fs-1 fw-bold text-center">Our Purpose
        <p class="text-white fs-5">The purpose of a Gyan Guru website encompasses providing accessible education, empowering lifelong learning, 
            bridging educational gaps, enhancing skills, fostering a global community, enabling flexibility and self-paced learning, driving continuous improvement 
            and innovation, and democratizing education. These platforms serve as catalysts for personal growth, knowledge 
            dissemination, and societal development, enabling individuals worldwide to unlock their full potential and achieve their learning goals.</p>
      </div>
    </div>
</div>
</div>
<?php include 'footer.php' ?>
  <script>const openSidebar = () => {
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
  };</script>
</body>
</html>