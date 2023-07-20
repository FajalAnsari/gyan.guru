
<?php
session_start();
// Assuming you have already established a database connection
$connection = mysqli_connect("localhost", "root", "", "eduprix");

// Check if the 'id' parameter exists in the URL
if (isset($_GET['id'])) {
    $quizId = $_GET['id'];

    // Retrieve quiz questions and options from the database for the specified quiz ID
    $query = "SELECT 
    qt.id AS quiz_id,
    qt.quizid AS quiz_group_id,
    qt.quiz AS quiz_name,
    qst.question_id,
    qst.question_text
  FROM
    quiz AS qt
  JOIN
    quiz_questions AS qst
  ON
    qt.quizid = qst.question_id";

    $result = mysqli_query($connection, $query);

    // Store the retrieved questions and options in an associative array
    $questions = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $questionId = $row['question_id'];
        $questionText = $row['question_text'];

        // Fetch options for the current question from the database
        $options_query = "SELECT option_id, option_text, is_correct FROM quiz_options WHERE question_id =  $questionId";
        $options_result = mysqli_query($connection, $options_query);

        // Store options in an array for the current question
        $options = array();
        while ($option_row = mysqli_fetch_assoc($options_result)) {
            $options[] = array(
                'option_id' => $option_row['option_id'],
                'option_text' => $option_row['option_text'],
                'is_correct' => $option_row['is_correct']
            );
        }

        // Add the question and its options to the $questions array
        $questions[$questionId] = array(
            'question_text' => $questionText,
            'options' => $options
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


