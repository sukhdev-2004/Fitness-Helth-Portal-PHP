
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Hub - Home</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            margin-top: -80px;
        }

        .featured-workouts {
            padding: 4rem 0;
        }

        .workout-card {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            height: 200px;
        }

        .workout-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .workout-card .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.8));
            padding: 1rem;
            color: white;
        }

        .stats-section {
            background: var(--primary-color);
            color: white;
            padding: 4rem 0;
            margin: 4rem 0;
        }

        .stat-card {
            text-align: center;
        }

        .stat-card i {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .stat-card .number {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        .btn-primary{
            position: absolute;
            top: 30%;
            right: 40%;
            text-decoration: none;
        }
        h1{
            margin-top: 40px;
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
                <li><a href="home.php" class="active">Home</a></li>
                <li><a href="workouts.php">Workouts</a></li>
                <li><a href="nutrition.php">Nutrition</a></li>
                <li><a href="progress.php">Progress</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="feedback.php">Feedback</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Transform Your Body, Transform Your Life</h1>
            <p class="mt-3">Join our community and achieve your fitness goals with expert guidance</p>
            <a href="workouts.php" class="btn btn-primary mt-4">Start Your Journey</a>
        </div>
    </section>

    <!-- Featured Workouts -->
    <section class="featured-workouts">
        <div class="container">
            <h2>Featured Workouts</h2>
            <div class="grid grid-3 mt-4">
                <div class="workout-card">
                    <img src="https://images.unsplash.com/photo-1534258936925-c58bed479fcb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1031&q=80" alt="Strength Training">
                    <div class="overlay">
                        <h3>Strength Training</h3>
                        <p>Build muscle and increase strength</p>
                    </div>
                </div>
                <div class="workout-card">
                    <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Cardio">
                    <div class="overlay">
                        <h3>Cardio Blast</h3>
                        <p>Improve endurance and burn fat</p>
                    </div>
                </div>
                <div class="workout-card">
                    <img src="https://images.unsplash.com/photo-1599901860904-17e6ed7083a0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Yoga">
                    <div class="overlay">
                        <h3>Yoga Flow</h3>
                        <p>Enhance flexibility and mindfulness</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="grid grid-4">
                <div class="stat-card">
                    <i class="fas fa-users"></i>
                    <div class="number">10,000+</div>
                    <div class="label">Active Members</div>
                </div>
                <div class="stat-card">
                    <i class="fas fa-dumbbell"></i>
                    <div class="number">500+</div>
                    <div class="label">Workout Plans</div>
                </div>
                <div class="stat-card">
                    <i class="fas fa-apple-alt"></i>
                    <div class="number">300+</div>
                    <div class="label">Nutrition Plans</div>
                </div>
                <div class="stat-card">
                    <i class="fas fa-medal"></i>
                    <div class="number">95%</div>
                    <div class="label">Success Rate</div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Add scroll animation for stats
        const stats = document.querySelectorAll('.stat-card .number');
        let animated = false;

        function animateStats() {
            if (animated) return;

            stats.forEach(stat => {
                const target = parseInt(stat.textContent);
                let current = 0;
                const increment = target / 50;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        clearInterval(timer);
                        current = target;
                    }
                    stat.textContent = Math.round(current) + (stat.textContent.includes('%') ? '%' : '+');
                }, 20);
            });

            animated = true;
        }

        // Trigger animation when stats section is in view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateStats();
                }
            });
        });

        observer.observe(document.querySelector('.stats-section'));
    </script>
</body>
</html>
