<?php
include 'con.php';
session_start();
$email = $_SESSION['email'];
session_abort();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback - Fitness Hub</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .feedback-container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .feedback-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .feedback-header h1 {
            color: var(--primary-color);
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .feedback-header p {
            color: #666;
            font-size: 1.1rem;
        }

        .feedback-form {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #333;
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            font-family: inherit;
        }

        .form-group textarea {
            min-height: 120px;
            resize: vertical;
        }

        .rating-group {
            display: flex;
            gap: 1rem;
            margin: 1rem 0;
        }

        .rating-option {
            flex: 1;
            text-align: center;
        }

        .rating-option input[type="radio"] {
            display: none;
        }

        .rating-option label {
            display: block;
            padding: 1rem;
            border: 2px solid #ddd;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .rating-option input[type="radio"]:checked + label {
            border-color: var(--primary-color);
            background: var(--primary-color);
            color: white;
        }

        .rating-option i {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            display: block;
        }

        .submit-btn {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            width: 100%;
            transition: opacity 0.3s ease;
        }

        .submit-btn:hover {
            opacity: 0.9;
        }

        @media (max-width: 768px) {
            .rating-group {
                flex-direction: column;
                gap: 0.5rem;
            }

            .feedback-form {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="home.php" class="logo">
                <i class="fas fa-dumbbell"></i>
                <span>Fitness & Health Portal</span>
            </a>
            <ul class="nav-links">
                <li><a href="home.php">Home</a></li>
                <li><a href="workouts.php">Workouts</a></li>
                <li><a href="nutrition.php">Nutrition</a></li>
                <li><a href="progress.php">Progress</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="feedback.php" class="active">Feedback</a></li>
            </ul>
        </div>
    </nav>

    <div class="feedback-container">
        <div class="feedback-header" style="margin-top: 80px">
            <h1>Your Feedback Matters</h1>
            <p>Help us improve your fitness journey by sharing your thoughts and experiences.</p>
        </div>

        <form class="feedback-form"  method="POST">
            <div class="form-group">
                <label for="feedback_type">Type of Feedback</label>
                <select id="feedback_type" name="feedback_type" required>
                    <option value="">Select Feedback Type</option>
                    <option value="general">General Feedback</option>
                    <option value="workout">Workout Programs</option>
                    <option value="nutrition">Nutrition Plans</option>
                    <option value="website">Website Experience</option>
                    <option value="suggestion">Suggestion</option>
                </select>
            </div>

            <div class="form-group">
                <label>How would you rate your experience?</label>
                <div class="rating-group">
                    <div class="rating-option">
                        <input type="radio" id="rating1" name="rating" value="1" required>
                        <label for="rating1">
                            <i class="fas fa-angry"></i>
                            Poor
                        </label>
                    </div>
                    <div class="rating-option">
                        <input type="radio" id="rating2" name="rating" value="2">
                        <label for="rating2">
                            <i class="fas fa-frown"></i>
                            Fair
                        </label>
                    </div>
                    <div class="rating-option">
                        <input type="radio" id="rating3" name="rating" value="3">
                        <label for="rating3">
                            <i class="fas fa-meh"></i>
                            Good
                        </label>
                    </div>
                    <div class="rating-option">
                        <input type="radio" id="rating4" name="rating" value="4">
                        <label for="rating4">
                            <i class="fas fa-smile"></i>
                            Very Good
                        </label>
                    </div>
                    <div class="rating-option">
                        <input type="radio" id="rating5" name="rating" value="5">
                        <label for="rating5">
                            <i class="fas fa-grin-stars"></i>
                            Excellent
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="feedback_text">Your Feedback</label>
                <textarea id="feedback_text" name="feedback_text" placeholder="Share your thoughts, suggestions, or concerns..." required></textarea>
            </div>

            <div class="form-group">
                <label for="improvements">What can we improve?</label>
                <textarea id="improvements" name="improvements" placeholder="Any specific areas where we can do better?"></textarea>
            </div>

            <button type="submit" name="submit" class="submit-btn">Submit Feedback</button>
        </form>
    </div>
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $rating = $_POST['rating'];
        $feedback_text = $_POST['feedback_text'];
        $improvements = $_POST['improvements'];
        $type = $_POST['feedback_type'];
        $insert = mysqli_query($con,"INSERT INTO `feedback`(`type`, `exprience_rate`, `review`, `improve`, `u_email`) VALUES ('$type','$rating','$feedback_text','$improvements','$email')");
        if($insert){
            echo "<script>alert('Feedback Submitted!');</script>";
            echo "<script>window.location.href='home.php';</script>";
        }
        else
        {
            echo "<script>alert('Error submitting feedback');</script>";
        }
    }
?>