<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Hub - Beginner Workouts</title>
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .workout-header {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                        url('https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 4rem 0;
            text-align: center;
            margin-bottom: 3rem;
        }

        .exercise-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .exercise-card:hover {
            transform: translateY(-5px);
        }

        .exercise-image {
            height: 200px;
            position: relative;
            overflow: hidden;
        }

        .exercise-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .exercise-details {
            padding: 1.5rem;
        }

        .exercise-meta {
            display: flex;
            gap: 1rem;
            margin: 1rem 0;
            color: #666;
            font-size: 0.9rem;
        }

        .exercise-meta i {
            color: var(--primary-color);
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

        .tips-section {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 2rem;
            margin-top: 2rem;
        }

        .tip-item {
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .tip-icon {
            color: var(--primary-color);
            font-size: 1.2rem;
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
            <h1>Beginner Workout Program</h1>
            <p>Perfect for those just starting their fitness journey</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <!-- Program Overview -->
            <div class="workout-plan">
                <h2>4-Week Program Overview</h2>
                <p>This program is designed for beginners to build strength and endurance gradually.</p>
                
                <!-- Week 1 -->
                <div class="day-schedule">
                    <h3>Week 1: Foundation</h3>
                    <div class="exercise-row">
                        <div class="exercise-info">
                            <h4>Bodyweight Squats</h4>
                            <div class="exercise-sets">3 sets x 10 reps</div>
                        </div>
                        <button class="video-btn">Watch Video</button>
                    </div>
                    <div class="exercise-row">
                        <div class="exercise-info">
                            <h4>Push-ups (Modified)</h4>
                            <div class="exercise-sets">3 sets x 5 reps</div>
                        </div>
                        <button class="video-btn">Watch Video</button>
                    </div>
                    <div class="exercise-row">
                        <div class="exercise-info">
                            <h4>Walking Lunges</h4>
                            <div class="exercise-sets">2 sets x 10 steps each leg</div>
                        </div>
                        <button class="video-btn">Watch Video</button>
                    </div>
                </div>

                <!-- Week 2 -->
                <div class="day-schedule">
                    <h3>Week 2: Building Strength</h3>
                    <div class="exercise-row">
                        <div class="exercise-info">
                            <h4>Dumbbell Squats</h4>
                            <div class="exercise-sets">3 sets x 12 reps</div>
                        </div>
                        <button class="video-btn">Watch Video</button>
                    </div>
                    <div class="exercise-row">
                        <div class="exercise-info">
                            <h4>Dumbbell Rows</h4>
                            <div class="exercise-sets">3 sets x 10 reps</div>
                        </div>
                        <button class="video-btn">Watch Video</button>
                    </div>
                </div>
            </div>

            <!-- Tips Section -->
            <div class="tips-section">
                <h2>Beginner Tips</h2>
                <div class="tip-item">
                    <div class="tip-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="tip-content">
                        <h4>Focus on Form</h4>
                        <p>Perfect your form before increasing weights or reps.</p>
                    </div>
                </div>
                <div class="tip-item">
                    <div class="tip-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="tip-content">
                        <h4>Stay Consistent</h4>
                        <p>Aim for 3-4 workouts per week with rest days in between.</p>
                    </div>
                </div>
                <div class="tip-item">
                    <div class="tip-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="tip-content">
                        <h4>Listen to Your Body</h4>
                        <p>Take extra rest if needed and stay hydrated.</p>
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
            'Bodyweight Squats': 'https://www.youtube.com/embed/C_VtOYc6j5c',
            'Push-ups (Modified)': 'https://www.youtube.com/embed/0pkjOk0EiAk',
            'Walking Lunges': 'https://www.youtube.com/embed/L8fvypPrzzs',
            'Dumbbell Squats': 'https://www.youtube.com/embed/R0poZOqb4hE',
            'Dumbbell Rows': 'https://www.youtube.com/embed/6SSaYzEHzEE'
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
