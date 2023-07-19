<?php 
  include 'action/config.php';
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
<!-- Allcourse---------------- -->
<div class="container topcourse" style="margin-top: 110px;">
    <span>
      <div class="seaside mt-5 respontopcoures">All COURSES </div>
      <nav aria-label="Page navigation example">
        <ul class="pagination page">
          <li class="page-item">
            <a class="page-link colorchange" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link colorchange" href="#">1</a></li>
          <li class="page-item"><a class="page-link colorchange" href="#">2</a></li>
          <li class="page-item"><a class="page-link colorchange" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link colorchange" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </span>
    <div class="row row-cols-1 row-cols-md-4 g-4 mt-3">
    <?php
    $query = "SELECT * FROM `posts`;";
  
  // FETCHING DATA FROM DATABASE
  $result = $con->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
           
    ?>
      <div class="col">
        <div class="card cardborder">
          <img src='<?php echo 'assets/imgs/' . $row['image']; ?>' class="card-img-top" alt="..."> 
          <div class="card-body">
            <a href="coursedetails.php ?id=<?php echo $row['id'];?>">
            <button type="button" class="btn btn-primary position-relative bgi">
              VIEW COURSE
              <span class="position-absolute top-100 start-100 translate-middle badge">
                Free
                <span class="visually-hidden">unread messages</span>
              </span>
            </button>
            </a>
            <h5 class="card-title"><?php echo $row['title']?></h5>
            <!-- <p class="card-text"><?php echo $row['desc']?></p> -->
          </div>
        </div>
      </div>

      <?php 
        }
      }
      ?>
     
      
    
    
     
   
    
    </div>
    <br>
    <div>
      <nav aria-label="Page navigation example">
      <ul class="pagination page page2 iid">
        <li class="page-item">
          <a class="page-link colorchange" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link colorchange" href="#">1</a></li>
        <li class="page-item"><a class="page-link colorchange" href="#">2</a></li>
        <li class="page-item"><a class="page-link colorchange" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link colorchange" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
  </div>
<!-- Allcourses---------------- -->
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






