
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
<style>

</style>
</head>
<body>
<?php include 'header.php' ?>
<!-- contactus---------------- -->
<div class="container-fluid mt-5 mb-5" style="padding-top: 100px;">
<div class="container  text-center">
  <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
    <div class="col">
      <div class="p-3 border bg-light designcontact">
      <i class="fa fa-map-marker iconcolor" aria-hidden="true"></i>
      <h6 class="hedingcolor">OUR MAIN OFFICE</h6>
      <p>16 Navneet Vihar, Sector 9, Indira Nagar, Lucknow 226021</p>
      </div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light designcontact">
      <i class="fa fa-phone iconcolor" aria-hidden="true"></i>
      <h6 class="hedingcolor">PHONE NUMBER</h6>
      <p>234-9876-5400<br>
        888-0123-4567 (Toll Free)</p>
      </div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light designcontact">
      <i class="fa fa-fax iconcolor" aria-hidden="true"></i>
      <h6 class="hedingcolor">FAX</h6>
      <p>1-234-567-8900<br>1-234-567-8900</p>
      </div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light designcontact">
      <i class="fa fa-envelope iconcolor" aria-hidden="true"></i>
      <h6 class="hedingcolor">EMAIL</h6>
      <p>gyan.guru@gmail.com<br>
        info@gmail.com
     </p>
      </div>
    </div>
   
  </div>
</div>
<h2 class="text-center mt-5">CONTACT US</h2>
<div class="row mt-5">
    <div class="col-md-8 col8design">
    <form action="action/config.php" method="post">
  <div class="row">
    <div class="col mb-4">
      <input type="text" name="name" class="form-control inputcontact" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name">
    </div>
    <div class="col mb-4">
      <input type="email" name="email" class="form-control inputcontact" id="exampleInputPassword1" placeholder="Enter Your Valid Email Address">
    </div>
  </div>
  <div class="row">
    <div class="col mb-4">
      <input type="text" name="phone" class="form-control inputcontact" id="exampleInputPassword1" placeholder="Enter Your Valid Phone Number">
    </div>
    <div class="col mb-4">
      <input type="text" name="subject" class="form-control inputcontact" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Subject">
    </div>
  </div>
  <div class="form-floating">
    <textarea name="comments" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
    <label for="floatingTextarea2">Comments</label>
  </div>
  <div class="mb-4 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    I agree to the terms and conditions and privacy policy.
  </div>
  <div class="text-center">
    <button type="submit" class="btn btn-primary subscribebtn mt-2 p-2">SUBMIT</button>
  </div>
</form>
    </div>
    <div class="col-md-4 col4degisn">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.669432966492!2d80.99925417614809!3d26.882241761398163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be34af2e0d36f%3A0x13fc545254663b45!2sDo%20It%20For%20Me%20LLC!5e0!3m2!1sen!2sin!4v1687944925475!5m2!1sen!2sin" width="500" height="400" style="border:1px solid gray;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>




</div>


<!-- contactus---------------- -->
<?php include 'footer.php' ?>
  <!-- ----------------------------- -->
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

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>


  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>






