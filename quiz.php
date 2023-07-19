
<?php
session_start();
// Assuming you have already established a database connection
$connection = mysqli_connect("localhost", "root", "", "eduprix");

// Check if the 'id' parameter exists in the URL
if (isset($_GET['id'])) {
    $quizId = $_GET['id'];

    // Retrieve quiz questions and options from the database for the specified quiz ID
    $query = "SELECT * FROM quiz 
              INNER JOIN quiz_questions ON quiz.quizid = quiz_questions.quizid
              INNER JOIN quiz_options ON quiz_questions.question_id = quiz_options.question_id
              WHERE quiz.quizid = '$quizId'";

    $result = mysqli_query($connection, $query);

    // Store the retrieved questions and options in an associative array
    $questions = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $questionId = $row['question_id'];
        $questionText = $row['question_text'];
        $optionId = $row['option_id'];
        $optionText = $row['option_text'];

        // Add options to the corresponding question
        if (!isset($questions[$questionId])) {
            $questions[$questionId] = array(
                'question_text' => $questionText,
                'options' => array()
            );
        }

        $questions[$questionId]['options'][] = array(
            'option_id' => $optionId,
            'option_text' => $optionText
        );
    }
} else {
    // Handle the case when 'id' parameter is not provided in the URL
    // You can redirect the user or show an error message
    echo "Quiz ID not provided in the URL.";
}
?>



<!DOCTYPE html>
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
<?php include 'header.php';?>
	<div id="page-wrap">
        <form action="result.php" method="post">
        <?php foreach ($questions as $questionId => $question): ?>
            <h4>Question <?php echo $questionId; ?>:</h4>
            <h6><?php echo $question['question_text']; ?></h6>

            <?php foreach ($question['options'] as $option): ?>
                <input type="radio" name="question_<?php echo $questionId; ?>" value="<?php echo $option['option_id']; ?>">
                <?php echo $option['option_text']; ?><br>
            <?php endforeach; ?>

            <br>
        <?php endforeach; ?>

        <input type="submit" class="btngetcourse mb-4" name ="submit" value="Submit">
    </form>
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


