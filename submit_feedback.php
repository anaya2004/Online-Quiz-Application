<?php
include('./conn/conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $questionSuggestion = $_POST['questionSuggestion'];
    $experienceRating = $_POST['experienceRating'];

    $stmt = $conn->prepare("INSERT INTO tbl_feedback (question_suggestion, experience_rating) VALUES (?, ?)");
    $stmt->execute([$questionSuggestion, $experienceRating]);

    if ($stmt) {
        echo "<script>alert('Thank you for your feedback!'); window.location.href = './student.php';</script>";
    } else {
        echo "<script>alert('Error submitting feedback. Please try again.'); window.location.href = './student.php';</script>";
    }
}
?>
