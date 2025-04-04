<?php
include ('./partials/header.php');
include ('./conn/conn.php');
include ('./partials/modal.php');
?>

<div class="main">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand ml-4" href="#">Online Quiz System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="./student.php">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse mr-4" id="navbarSupportedContent">
            <div class="ml-auto">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="pills-home">
        <h2 id="welcome-teacher">Welcome Student!</h2>
        <small>This is a student area where you can take quizzes, and the result will be sent to the teacher area after you have submitted.</small>
        <br>
        <button id="takeQuiz">
            <a class="nav-link" href="./take-quiz.php" style="color: inherit">Take Quiz <i class="fa-solid fa-arrow-right"></i></a>
        </button>
    </div>

    <!-- Feedback Form Section -->
    <div id = "pills-home" class="feedback-container mt-5 text-centre">
    <h3>Provide Your Feedback</h3>
    <form action="submit_feedback.php" method="POST" onsubmit="return validateFeedbackForm()" class="mx-auto" style="max-width: 850px;">
        <div class="form-group">
            <label class="nav-link" for="questionSuggestion">Suggest a Question:</label>
            <textarea name="questionSuggestion" id="questionSuggestion" class="form-control" rows="3" placeholder="Type your question suggestion here" minlength="16" maxlength="255" required></textarea>
            <small id="charCount" class="form-text text-muted">Must be between 16 and 255 characters.</small>
        </div>
        <div class="form-group">
            <label for="experienceRating">Rate Your Experience:</label>
            <select name="experienceRating" id="experienceRating" class="form-control" required>
                <option value="5">Excellent</option>
                <option value="4">Good</option>
                <option value="3">Average</option>
                <option value="2">Poor</option>
                <option value="1">Very Poor</option>
            </select>
        </div>
        <button type="submit" class="btn btn-dark">Submit Feedback</button>
    </form>
</div>

<script>
    function validateFeedbackForm() {
        const question = document.getElementById('questionSuggestion').value.trim();
        if (question.length < 16 || question.length > 255) {
            alert('The question suggestion must be between 16 and 255 characters.');
            return false;
        }
        return true;
    }
</script>


<?php include ('./partials/footer.php') ?>
