<?php include './action/db_connect.php' ?>
<!DOCTYPE html>

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


</head>

<body>
    <?php include 'header.php'; ?>


    <div class="container topcourse" style="margin-top:100px;">
    
    <div class="row row-cols-1 row-cols-md-4 g-4 mt-5" >
     
    <?php
        if (isset($_GET['search'])) {
            $filtervalues = $_GET['search'];
            $sanitizedFilter = '%' . $con->real_escape_string($filtervalues) . '%';
            $query = "SELECT * FROM `posts` WHERE category LIKE ?";

            // PREPARE STATEMENT
            $stmt = $con->prepare($query);
            if ($stmt) {
                // BIND PARAMETER
                $stmt->bind_param("s", $sanitizedFilter);

                // EXECUTE QUERY
                $stmt->execute();

                // GET RESULT
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    

                    // OUTPUT DATA OF EACH ROW
                    while ($row = $result->fetch_assoc()) {
        ?>
                        <div class="col">
                            <div class="card cardborder">
                                <img src='<?php echo 'assets/imgs/' . $row['image']; ?>' class="card-img-top" alt="..." style="height: 245px;">
                                <div class="card-body">
                                    <a href="coursedetails.php?id=<?php echo $row['id']; ?>">
                                        <button type="button" class="btn btn-primary position-relative bgi">
                                            VIEW COURSE
                                            <span class="position-absolute top-100 start-100 translate-middle badge">
                                                Free
                                                <span class="visually-hidden">unread messages</span>
                                            </span>
                                        </button>
                                    </a>
                                    <h5 class="card-title"><?php echo $row['title'] ?></h5>
                                    <!-- <p class="card-text"><?php echo $row['desc'] ?></p> -->
                                </div>
                            </div>
                        </div>
        <?php
                    }
                } else {
                    echo "<h2>No results found for: " . htmlspecialchars($filtervalues) . "</h2>"; // Display the search term
                }
            } else {
                echo "Error in the query.";
            }
        }
        ?>
</div>
</div>


    <?php include 'footer.php' ?>

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
</body>

</html>