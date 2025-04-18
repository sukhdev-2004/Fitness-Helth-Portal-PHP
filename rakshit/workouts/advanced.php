<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Hub - Advanced Workouts</title>
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .workout-header {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                        url('https://images.unsplash.com/photo-1526506118085-60ce8714f8c5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 4rem 0;
            text-align: center;
            margin-bottom: 3rem;
        }

        .intensity-meter {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .intensity-dot {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background: rgba(255,255,255,0.3);
        }

        .intensity-dot.active {
            background: var(--primary-color);
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

        .exercise-details {
            display: flex;
            gap: 2rem;
            margin-top: 0.5rem;
        }

        .exercise-metric {
            font-size: 0.9rem;
            color: #666;
        }

        .exercise-metric i {
            color: var(--primary-color);
            margin-right: 0.5rem;
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

        .circuit-group {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 1.5rem;
            margin: 1rem 0;
        }

        .circuit-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .circuit-timer {
            background: var(--primary-color);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
        }

        .warning-box {
            background: #fff3cd;
            border: 1px solid #ffeeba;
            color: #856404;
            padding: 1rem;
            border-radius: 10px;
            margin: 1rem 0;
        }

        .warning-box i {
            margin-right: 0.5rem;
        }

        .progress-tracker {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            margin-top: 2rem;
        }

        .progress-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid #eee;
        }

        .progress-bar {
            width: 200px;
            height: 8px;
            background: #f8f9fa;
            border-radius: 4px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: var(--primary-color);
            width: 0;
            transition: width 1s ease;
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
            <h1>Advanced Workout Program</h1>
            <p>High-intensity training for experienced athletes</p>
            <div class="intensity-meter">
                <div class="intensity-dot active"></div>
                <div class="intensity-dot active"></div>
                <div class="intensity-dot active"></div>
                <div class="intensity-dot active"></div>
                <div class="intensity-dot active"></div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <div class="warning-box">
                <i class="fas fa-exclamation-triangle"></i>
                This program is designed for experienced athletes. Ensure proper form and warm-up before attempting these exercises.
            </div>

            <!-- Program Overview -->
            <div class="workout-plan">
                <h2>Advanced Power Building Program</h2>
                <p>A high-intensity program combining strength and hypertrophy training.</p>
                
                <!-- Day 1: Power -->
                <div class="day-schedule">
                    <h3>Day 1: Power Development</h3>
                    <div class="exercise-row">
                        <div class="exercise-info">
                            <h4>Power Cleans</h4>
                            <div class="exercise-details">
                                <span class="exercise-metric">
                                    <i class="fas fa-layer-group"></i>5 sets x 3 reps
                                </span>
                                <span class="exercise-metric">
                                    <i class="fas fa-tachometer-alt"></i>85% 1RM
                                </span>
                            </div>
                        </div>
                        <button class="video-btn">Watch Video</button>
                    </div>

                    <div class="circuit-group">
                        <div class="circuit-header">
                            <h4>Olympic Circuit</h4>
                            <span class="circuit-timer">30 sec rest between exercises</span>
                        </div>
                        <div class="exercise-row">
                            <div class="exercise-info">
                                <h4>Snatch Pulls</h4>
                                <div class="exercise-details">
                                    <span class="exercise-metric">
                                        <i class="fas fa-layer-group"></i>4 sets x 5 reps
                                    </span>
                                </div>
                            </div>
                            <button class="video-btn">Watch Video</button>
                        </div>
                        <div class="exercise-row">
                            <div class="exercise-info">
                                <h4>Clean & Jerk</h4>
                                <div class="exercise-details">
                                    <span class="exercise-metric">
                                        <i class="fas fa-layer-group"></i>4 sets x 3 reps
                                    </span>
                                </div>
                            </div>
                            <button class="video-btn">Watch Video</button>
                        </div>
                    </div>
                </div>

                <!-- Progress Tracker -->
                <div class="progress-tracker">
                    <h3>Strength Standards</h3>
                    <div class="progress-row">
                        <span>Squat (2.5x bodyweight)</span>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="progress-row">
                        <span>Deadlift (3x bodyweight)</span>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 75%"></div>
                        </div>
                    </div>
                    <div class="progress-row">
                        <span>Bench Press (2x bodyweight)</span>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 90%"></div>
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
            'Power Cleans': 'https://www.youtube.com/embed/x1Yj_Nzp6p4',
            'Snatch Pulls': 'https://www.youtube.com/embed/-nHg0Ht1Cw4',
            'Clean & Jerk': 'https://www.youtube.com/embed/PjY1rH4_MOA'
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

        // Animate progress bars on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.width = entry.target.dataset.progress;
                }
            });
        });

        document.querySelectorAll('.progress-fill').forEach(bar => {
            const width = bar.style.width;
            bar.style.width = '0';
            bar.dataset.progress = width;
            observer.observe(bar);
        });
    </script>
</body>
</html>
