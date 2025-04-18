<?php
session_start();
include 'con.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $feedback_type = mysqli_real_escape_string($con, $_POST['feedback_type']);
    $rating = mysqli_real_escape_string($con, $_POST['rating']);
    $feedback_text = mysqli_real_escape_string($con, $_POST['feedback_text']);
    $improvements = mysqli_real_escape_string($con, $_POST['improvements']);
    $email = $_SESSION['email'];
    $date = date('Y-m-d H:i:s');

    // Insert feedback into database
    $query = "INSERT INTO feedback (email, feedback_type, rating, feedback_text, improvements, created_at) 
              VALUES ('$email', '$feedback_type', '$rating', '$feedback_text', '$improvements', '$date')";

    if (mysqli_query($con, $query)) {
        echo "<script>
                alert('Thank you for your feedback!');
                window.location.href = 'feedback.php';
              </script>";
    } else {
        echo "<script>
                alert('Error submitting feedback. Please try again.');
                window.location.href = 'feedback.php';
              </script>";
    }
}
?>
