<?php
include 'con.php';
session_start();
$email = $_SESSION['email'];
session_abort();
$select = mysqli_query($con,"SELECT * FROM `login` WHERE `email` = '$email'");
$row = mysqli_fetch_assoc($select);

$select_workout = mysqli_query($con,"SELECT * FROM `workout` WHERE `email` = '$email'");
$rows = mysqli_fetch_assoc($select_workout);

    $pre_date = $rows['start_date'];
    $curr_date = date('d-m-Y');

    $predtobj = new DateTime($pre_date);
    $curdtobj = new DateTime($curr_date);
    $interval = $predtobj->diff($curdtobj);
    $days = $interval->days;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Hub - Profile</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .profile-banner {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            padding: 3rem 0;
            color: white;
            margin-bottom: 2rem;
        }

        .profile-header {
            display: flex;
            align-items: center;
            gap: 2rem;
            height: 200px;
            max-width: 1200px;
            margin-top: 30px;
            padding: 0 2rem;
        }

        .profile-pic {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid white;
            object-fit: cover;
        }

        .profile-info h1 {
            position:absolute;
            bottom:58%;
            color:black;
        }

        .profile-stats {
            display: flex;
            gap: 2rem;
            margin-top: 1rem;
        }

        .stat {
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            padding: 1rem 2rem;
            border-radius: 10px;
        }

        .stat-value {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .stat-label {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
            margin-top: 2rem;
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
            height: 8px;
            background: #f8f9fa;
            border-radius: 4px;
            margin-top: 0.5rem;
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            background: var(--primary-color);
            border-radius: 4px;
            transition: width 2s ease;
        }

        .achievement-card {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s;
        }

        .achievement-card:hover {
            transform: translateY(-2px);
        }

        .achievement-icon {
            width: 60px;
            height: 60px;
            background: #f8f9fa;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--primary-color);
        }

        .achievement-info {
            flex: 1;
        }

        .achievement-date {
            color: #666;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .grid-2 {
                grid-template-columns: 1fr;
            }
            
            .profile-header {
                flex-direction: column;
                text-align: center;
            }

            .profile-stats {
                justify-content: center;
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
                <li><a href="profile.php" class="active">Profile</a></li>
                <li><a href="feedback.php">Feedback</a></li>
            </ul>
        </div>
    </nav>

    <!-- Profile Banner -->
    <section class="profile-banner">
        <div class="container">
            <div class="profile-header">
                <img src="./uploads/<?php echo $row['photo'];?>" alt="Profile Picture" class="profile-pic">
                <div class="profile-info">
                    <h1>Hello <br><?php echo $row['name']; ?><br>
                    Email : <?php echo $row['email']; ?><br>
                    Phone : <?php echo $row['phone']; ?>
                    </h1>
                    <div class="profile-stats">
                        <div class="stat">
                            <div class="stat-value">156</div>
                            <div class="stat-label">Workouts</div>
                        </div>
                        <div class="stat">
                            <div class="stat-value">12</div>
                            <div class="stat-label">Achievements</div>
                        </div>
                        <div class="stat">
                            <div class="stat-value">85%</div>
                            <div class="stat-label">Goal Progress</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <!-- Profile Tabs -->
            <div class="profile-tabs">
                <div class="profile-tab active"><h1>Overview</h1></div>
            </div>

            <!-- Overview Section -->
            <div class="grid grid-2">
                <!-- Current Goals -->
                <div class="settings-section">
                    <h2>Current Goals</h2>
                    <div class="settings-group">
                        <label>Current Wight</label>
                        <div><?php if($days<10){echo $rows['curr_weight'].".".$days;}else{echo "1 Kg";}?> kg</div>
                        <div class="goal-progress">
                            <div class="progress-bar" style="width: <?php echo $rows['curr_weight']+$days; ?>%"></div>
                        </div>
                    </div>
                    <div class="settings-group">
                        <label>Weight Goal</label>
                        <div><?php echo $rows['curr_weight']+1;?> kg</div>
                        <div class="goal-progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                    </div>
                    <div class="settings-group">
                        <label>Weekly Workouts</label>
                        <div><?php echo $days; ?> days completed Out of 10</div>
                        <div class="goal-progress">
                            <div class="progress-bar" style="width: <?php echo $days*10; ?>%"></div>
                        </div>
                    </div>
                </div>

                <!-- Recent Achievements -->
                <div class="settings-section">
                    <h2>Recent Achievements</h2>
                    <div class="achievement-card">
                        <div class="achievement-icon">
                            <i class="fas fa-fire"></i>
                        </div>
                        <div class="achievement-info">
                            <h3><?php echo $days?>-Day Streak</h3>
                            <div class="achievement-date">Completed on Jan 15, 2025</div>
                        </div>
                    </div>
                    <div class="achievement-card">
                        <div class="achievement-icon">
                            <i class="fas fa-dumbbell"></i>
                        </div>
                        <div class="achievement-info">
                            <h3><?php if($days<10){echo $days*100 .' Grms';}else{echo "1 Kg";}?> <?php echo $rows['weight'];?></h3>
                            <div class="achievement-date">Achieved on Jan 10, 2025</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        // Tab switching functionality
        const tabs = document.querySelectorAll('.profile-tab');
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                // Here you would typically show/hide corresponding content
            });
        });

        // Animate progress bars on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.width = entry.target.dataset.progress;
                }
            });
        });

        document.querySelectorAll('.progress-bar').forEach(bar => {
            const width = bar.style.width;
            bar.style.width = '0';
            bar.dataset.progress = width;
            observer.observe(bar);
        });
    </script>
</body>
</html>
