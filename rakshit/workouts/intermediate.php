<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Hub - Intermediate Workouts</title>
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .workout-header {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                        url('https://images.unsplash.com/photo-1581009146145-b5ef050c2e1e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 4rem 0;
            text-align: center;
            margin-bottom: 3rem;
        }

        .program-stats {
            display: flex;
            justify-content: center;
            gap: 3rem;
            margin-top: 2rem;
        }

        .stat-item {
            text-align: center;
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .workout-plan {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .day-schedule {
            margin-bottom: 2rem;
        }

        .exercise-row {
            display: flex;
            align-items: center;
            padding: 1rem;
            border-bottom: 1px solid #eee;
        }

        .exercise-row:last-child {
            border-bottom: none;
        }

        .exercise-info {
            flex: 1;
        }

        .exercise-sets {
            color: #666;
        }

        .video-btn {
            padding: 0.5rem 1rem;
            background: #f8f9fa;
            border: none;
            border-radius: 5px;
            color: var(--primary-color);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .video-btn:hover {
            background: var(--primary-color);
            color: white;
        }

        .superset-group {
            border-left: 3px solid var(--primary-color);
            padding-left: 1rem;
            margin: 1rem 0;
        }

        .superset-label {
            color: var(--primary-color);
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .equipment-needed {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 1.5rem;
            margin-top: 1rem;
        }

        .equipment-list {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 1rem;
        }

        .equipment-item {
            background: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .equipment-item i {
            color: var(--primary-color);
        }

        .video-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 1000;
        }
        .video-modal-content {
            position: relative;
            width: 80%;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
        }
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .close-modal {
            position: absolute;
            right: 10px;
            top: 10px;
            font-size: 24px;
            cursor: pointer;
            color: #333;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="../home.php" class="logo">
                <i class="fas fa-dumbbell"></i>
                <span>Fitness Hub</span>
            </a>
            <ul class="nav-links">
                <li><a href="../home.php">Home</a></li>
                <li><a href="../workouts.php" class="active">Workouts</a></li>
                <li><a href="../nutrition.php">Nutrition</a></li>
                <li><a href="../progress.php">Progress</a></li>
                <li><a href="../profile.php">Profile</a></li>
            </ul>
        </div>
    </nav>

    <!-- Workout Header -->
    <section class="workout-header">
        <div class="container">
            <h1>Intermediate Workout Program</h1>
            <p>Take your fitness to the next level</p>
            <div class="program-stats">
                <div class="stat-item">
                    <div class="stat-value">45</div>
                    <div class="stat-label">Minutes/Session</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">5</div>
                    <div class="stat-label">Days/Week</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">500</div>
                    <div class="stat-label">Calories/Workout</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <!-- Program Overview -->
            <div class="workout-plan">
                <h2>5-Day Split Program</h2>
                <p>This intermediate program focuses on building strength and muscle with a mix of compound and isolation exercises.</p>
                
                <!-- Day 1: Chest & Triceps -->
                <div class="day-schedule">
                    <h3>Day 1: Chest & Triceps</h3>
                    <div class="superset-group">
                        <div class="superset-label">Superset 1:</div>
                        <div class="exercise-row">
                            <div class="exercise-info">
                                <h4>Bench Press</h4>
                                <div class="exercise-sets">4 sets x 10 reps</div>
                            </div>
                            <button class="video-btn">Watch Video</button>
                        </div>
                        <div class="exercise-row">
                            <div class="exercise-info">
                                <h4>Tricep Pushdowns</h4>
                                <div class="exercise-sets">4 sets x 12 reps</div>
                            </div>
                            <button class="video-btn">Watch Video</button>
                        </div>
                    </div>
                    <div class="exercise-row">
                        <div class="exercise-info">
                            <h4>Incline Dumbbell Press</h4>
                            <div class="exercise-sets">3 sets x 12 reps</div>
                        </div>
                        <button class="video-btn">Watch Video</button>
                    </div>
                </div>

                <!-- Day 2: Back & Biceps -->
                <div class="day-schedule">
                    <h3>Day 2: Back & Biceps</h3>
                    <div class="superset-group">
                        <div class="superset-label">Superset 1:</div>
                        <div class="exercise-row">
                            <div class="exercise-info">
                                <h4>Barbell Rows</h4>
                                <div class="exercise-sets">4 sets x 10 reps</div>
                            </div>
                            <button class="video-btn">Watch Video</button>
                        </div>
                        <div class="exercise-row">
                            <div class="exercise-info">
                                <h4>Barbell Curls</h4>
                                <div class="exercise-sets">4 sets x 12 reps</div>
                            </div>
                            <button class="video-btn">Watch Video</button>
                        </div>
                    </div>
                </div>

                <!-- Equipment Needed -->
                <div class="equipment-needed">
                    <h3>Equipment Needed</h3>
                    <div class="equipment-list">
                        <div class="equipment-item">
                            <i class="fas fa-dumbbell"></i>
                            <span>Dumbbells</span>
                        </div>
                        <div class="equipment-item">
                            <i class="fas fa-weight-hanging"></i>
                            <span>Barbell</span>
                        </div>
                        <div class="equipment-item">
                            <i class="fas fa-compress-arrows-alt"></i>
                            <span>Cable Machine</span>
                        </div>
                        <div class="equipment-item">
                            <i class="fas fa-bench-press"></i>
                            <span>Bench</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Modal -->
    <div id="videoModal" class="video-modal">
        <div class="video-modal-content">
            <span class="close-modal">&times;</span>
            <div class="video-container">
                <iframe id="videoFrame" width="560" height="315" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <script>
        // Video button functionality with THENX exercise videos
        const exerciseVideos = {
            'Bench Press': 'https://www.youtube.com/embed/vthMCtgVtFw',
            'Tricep Pushdowns': 'https://www.youtube.com/embed/REZgVjQ8Bvk',
            'Incline Dumbbell Press': 'https://www.youtube.com/embed/8iPEnn-ltC8',
            'Barbell Rows': 'https://www.youtube.com/embed/eZXBniHfYcU',
            'Barbell Curls': 'https://www.youtube.com/embed/YsQPmGGmZ5w'
        };

        const modal = document.getElementById('videoModal');
        const videoFrame = document.getElementById('videoFrame');
        const closeBtn = document.querySelector('.close-modal');

        document.querySelectorAll('.video-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const exercise = btn.parentElement.querySelector('h4').textContent;
                const videoUrl = exerciseVideos[exercise];
                if (videoUrl) {
                    videoFrame.src = videoUrl;
                    modal.style.display = 'block';
                }
            });
        });

        closeBtn.addEventListener('click', () => {
            modal.style.display = 'none';
            videoFrame.src = '';
        });

        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.style.display = 'none';
                videoFrame.src = '';
            }
        });
    </script>
</body>
</html>
