<?php
include 'con.php';
session_start();
$email = $_SESSION['email'];
session_abort();
$select = mysqli_query($con,"SELECT * FROM `workout` WHERE `email` = '$email'");
$row = mysqli_fetch_assoc($select);
    $pre_date = $row['start_date'];
    $curr_date = date('d-m-Y');
    $predtobj = new DateTime($pre_date);
    $curdtobj = new DateTime($curr_date);
    $interval = $predtobj->diff($curdtobj);
    $days = $interval->days;
$curr_weight = $row['curr_weight'].".".$days;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Hub - Progress Tracking</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .progress-cards {
            margin-bottom: 3rem;
        }

        .metric-card {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .metric-card i {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .metric-value {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .metric-label {
            color: #666;
        }

        .trend-indicator {
            position: absolute;
            top: 1rem;
            right: 1rem;
            padding: 0.3rem 0.6rem;
            border-radius: 15px;
            font-size: 0.8rem;
        }

        .trend-up {
            background: #e3fcef;
            color: #00a651;
        }

        .trend-down {
            background: #ffe5e5;
            color: #ff4444;
        }

        .chart-container {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 2rem;
        }

        .workout-log {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
        }

        .log-entry {
            display: flex;
            align-items: center;
            padding: 1rem;
            border-bottom: 1px solid #eee;
        }

        .log-entry:last-child {
            border-bottom: none;
        }

        .log-icon {
            width: 40px;
            height: 40px;
            background: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-right: 1rem;
        }

        .log-details {
            flex: 1;
        }

        .log-date {
            color: #666;
            font-size: 0.9rem;
        }

        .achievement-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.5rem 1rem;
            background: #f8f9fa;
            border-radius: 20px;
            margin: 0.5rem;
        }

        .achievement-badge i {
            color: #ffd700;
            margin-right: 0.5rem;
        }
        h1{
            margin-bottom: 15px;
        }
        .settings-section {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .settings-section h2 {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
        }

        .settings-group {
            margin-bottom: 1.5rem;
        }

        .settings-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #666;
            font-weight: 500;
        }

        .goal-progress {
            height: 20px;
            background: #f0f0f0;
            border-radius: 10px;
            margin: 1rem 0;
            overflow: hidden;
            width: 100%;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .progress-bar {
            height: 100%;
            background: var(--primary-color);
            border-radius: 10px;
            transition: width 1.5s ease-in-out;
            width: 0;
        }

        .progress-bar.animate {
            width: var(--target-width);
        }

        .progress-percentage {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .achievement-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 1rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .settings-group {
            width: 100%;
        }

        .progress-label {
            font-size: 1.2rem;
            font-weight: 500;
            color: #333;
            margin-bottom: 0.5rem;
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
                <li><a href="progress.php" class="active">Progress</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="feedback.php">Feedback</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <h1>Progress Tracking</h1>

            <!-- Progress Metrics -->
            <div class="grid grid-4 progress-cards">
                <div class="metric-card">
                    <i class="fas fa-weight"></i>
                    <div class="metric-value"><?php echo $curr_weight." Kg"; ?></div>
                    <div class="metric-label">Current Weight</div>
                    <span class="trend-indicator trend-down" style="background: #e3fcef;color: #00a651;"><?php echo "+0.".$days; ?></span>
                </div>
                <div class="metric-card">
                    <i class="fas fa-running"></i>
                    <div class="metric-value"><?php echo $days." Days"; ?></div>
                    <div class="metric-label">Total Days Of Workouts</div>
                    <span class="trend-indicator trend-up"><?php echo "+".$days;?></span>
                </div>
                <div class="metric-card">
                    <i class="fas fa-fire"></i>
                    <div class="metric-value"><?php echo $days*700;?></div>
                    <div class="metric-label">Calories Burned</div>
                    <span class="trend-indicator trend-up"><?php echo "+".$days*10 . "%";?></span>
                </div>
                <div class="metric-card">
                    <i class="fas fa-medal"></i>
                    <div class="metric-value"><?php echo $days*10 . "%";?></div>
                    <div class="metric-label">Progress Of Weight <?php echo $row['weight'];?></div>
                    <span class="trend-indicator trend-up"><?php echo "+".$days*10 . "%";?></span>
                </div>
            </div>   
            <h1>Progress Report</h1>
            <div class="achievement-card">
                <div class="settings-group">
                    <div class="progress-percentage"><?php echo $days. "0%"; ?> Completed</div>
                    <div class="progress-label">Overall Progress</div>
                    <div class="goal-progress">
                        <div class="progress-bar" style="--target-width: <?php echo min($days * 10, 100); ?>%"></div>
                    </div>
                </div>   
            </div>      
        </div>
    </div>

   <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the progress bar
        const progressBar = document.querySelector('.progress-bar');
        
        // Add animation class after a short delay
        setTimeout(() => {
            progressBar.classList.add('animate');
        }, 500);
    });
   </script>
</body>
</html>
