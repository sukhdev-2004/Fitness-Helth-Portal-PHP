<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Hub - Nutrition Guide</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .nutrition-header {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                        url('https://images.unsplash.com/photo-1490645935967-10de6ba17061?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 4rem 0;
            text-align: center;
            margin-bottom: 3rem;
        }

        .meal-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
        }

        .meal-image {
            height: 200px;
            overflow: hidden;
        }

        .meal-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .meal-details {
            padding: 1.5rem;
        }

        .nutrition-facts {
            display: flex;
            gap: 1rem;
            margin: 1rem 0;
        }

        .nutrition-fact {
            text-align: center;
            flex: 1;
            padding: 0.5rem;
            background: #f8f9fa;
            border-radius: 8px;
        }

        .nutrition-fact .label {
            font-size: 0.8rem;
            color: #666;
        }

        .nutrition-fact .value {
            font-weight: 600;
            color: var(--primary-color);
        }

        .macro-chart {
            height: 10px;
            background: #f8f9fa;
            border-radius: 5px;
            margin: 1rem 0;
            display: flex;
        }

        .macro-protein { background: #ff6b6b; width: 30%; }
        .macro-carbs { background: #339af0; width: 45%; }
        .macro-fats { background: #ffd43b; width: 25%; }

        .meal-tags {
            display: flex;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .meal-tag {
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
            background: #e9ecef;
        }

        .supplements-section {
            padding: 2rem 0;
            background: #f8f9fa;
        }

        .supplements-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .section-title {
            text-align: center;
            color: var(--primary-color);
            margin-bottom: 2rem;
        }

        .supplements-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .supplement-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            padding: 2rem;
        }

        .supplement-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
            text-align: center;
        }

        .supplement-info {
            padding: 1.5rem;
        }

        .supplement-info h3 {
            color: #333;
            margin-bottom: 1rem;
            font-size: 1.2rem;
            text-align: center;
        }

        .benefits-list {
            list-style: none;
            padding: 0;
            margin: 1rem 0;
        }

        .benefits-list li {
            padding-left: 1.5rem;
            position: relative;
            margin-bottom: 0.5rem;
            color: #666;
        }

        .benefits-list li:before {
            content: "•";
            color: var(--primary-color);
            position: absolute;
            left: 0;
        }

        .dosage {
            background: #f8f9fa;
            padding: 0.8rem;
            border-radius: 8px;
            margin-top: 1rem;
            font-size: 0.9rem;
            color: #555;
        }

        .timing {
            color: #666;
            font-size: 0.9rem;
            margin-top: 0.5rem;
        }

        @media (max-width: 768px) {
            .supplements-grid {
                grid-template-columns: 1fr;
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
                <li><a href="nutrition.php" class="active">Nutrition</a></li>
                <li><a href="progress.php">Progress</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="feedback.php">Feedback</a></li>
            </ul>
        </div>
    </nav>

    <!-- Nutrition Header -->
    <section class="nutrition-header">
        <div class="container">
            <h1 style="margin-top:20px";>Personalized Nutrition Guide</h1>
            <p>Fuel your workouts with the right nutrition</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="main-content">

            <h2 style="margin-bottom:20px;">Recommended Meals</h2>
            <div class="grid grid-3">
                <!-- Breakfast -->
                <div class="meal-card">
                    <div class="meal-image">
                        <img src="https://images.unsplash.com/photo-1494597564530-871f2b93ac55?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" alt="Healthy Breakfast">
                    </div>
                    <div class="meal-details">
                        <h3>Power Breakfast Bowl</h3>
                        <div class="nutrition-facts">
                            <div class="nutrition-fact">
                                <div class="value">450</div>
                                <div class="label">Calories</div>
                            </div>
                            <div class="nutrition-fact">
                                <div class="value">25g</div>
                                <div class="label">Protein</div>
                            </div>
                        </div>
                        <div class="meal-tags">
                            <span class="meal-tag">High Protein</span>
                            <span class="meal-tag">Vegetarian</span>
                        </div>
                    </div>
                </div>

                <!-- Lunch -->
                <div class="meal-card">
                    <div class="meal-image">
                        <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" alt="Healthy Lunch">
                    </div>
                    <div class="meal-details">
                        <h3>Grilled Chicken Salad</h3>
                        <div class="nutrition-facts">
                            <div class="nutrition-fact">
                                <div class="value">550</div>
                                <div class="label">Calories</div>
                            </div>
                            <div class="nutrition-fact">
                                <div class="value">40g</div>
                                <div class="label">Protein</div>
                            </div>
                        </div>
                        <div class="meal-tags">
                            <span class="meal-tag">High Protein</span>
                            <span class="meal-tag">Low Carb</span>
                        </div>
                    </div>
                </div>

                <!-- Dinner -->
                <div class="meal-card">
                    <div class="meal-image">
                        <img src="https://images.unsplash.com/photo-1467003909585-2f8a72700288?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" alt="Healthy Dinner">
                    </div>
                    <div class="meal-details">
                        <h3>Salmon & Quinoa Bowl</h3>
                        <div class="nutrition-facts">
                            <div class="nutrition-fact">
                                <div class="value">600</div>
                                <div class="label">Calories</div>
                            </div>
                            <div class="nutrition-fact">
                                <div class="value">35g</div>
                                <div class="label">Protein</div>
                            </div>
                        </div>
                        <div class="meal-tags">
                            <span class="meal-tag">Omega-3</span>
                            <span class="meal-tag">Gluten-Free</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Supplements Section -->
    <section class="supplements-section">
        <div class="supplements-container">
            <h2 class="section-title">Essential Supplements</h2>
            <div class="supplements-grid">
                <!-- Whey Protein -->
                <div class="supplement-card">
                    <div class="supplement-icon">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <div class="supplement-info">
                        <h3>Whey Protein</h3>
                        <ul class="benefits-list">
                            <li>Rapid muscle recovery and growth</li>
                            <li>Improved strength and performance</li>
                            <li>Enhanced immune system function</li>
                            <li>Better appetite control</li>
                        </ul>
                        <div class="dosage">
                            <strong>Recommended Dosage:</strong> 20-30g per serving
                        </div>
                        <div class="timing">
                            Best taken: Post-workout or between meals
                        </div>
                    </div>
                </div>

                <!-- Creatine -->
                <div class="supplement-card">
                    <div class="supplement-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div class="supplement-info">
                        <h3>Creatine Monohydrate</h3>
                        <ul class="benefits-list">
                            <li>Increased strength and power</li>
                            <li>Enhanced muscle volume</li>
                            <li>Improved exercise performance</li>
                            <li>Better cognitive function</li>
                        </ul>
                        <div class="dosage">
                            <strong>Recommended Dosage:</strong> 5g daily
                        </div>
                        <div class="timing">
                            Best taken: Any time of day, consistently
                        </div>
                    </div>
                </div>

                <!-- BCAAs -->
                <div class="supplement-card">
                    <div class="supplement-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <div class="supplement-info">
                        <h3>BCAAs (Branched Chain Amino Acids)</h3>
                        <ul class="benefits-list">
                            <li>Reduced muscle soreness</li>
                            <li>Decreased muscle fatigue</li>
                            <li>Enhanced muscle recovery</li>
                            <li>Preserved lean muscle mass</li>
                        </ul>
                        <div class="dosage">
                            <strong>Recommended Dosage:</strong> 5-10g per serving
                        </div>
                        <div class="timing">
                            Best taken: During workouts or between meals
                        </div>
                    </div>
                </div>

                <!-- Pre-Workout -->
                <div class="supplement-card">
                    <div class="supplement-icon">
                        <i class="fas fa-fire"></i>
                    </div>
                    <div class="supplement-info">
                        <h3>Pre-Workout</h3>
                        <ul class="benefits-list">
                            <li>Increased energy and focus</li>
                            <li>Enhanced strength and endurance</li>
                            <li>Improved muscle pumps</li>
                            <li>Better workout performance</li>
                        </ul>
                        <div class="dosage">
                            <strong>Recommended Dosage:</strong> 1 scoop (follow product instructions)
                        </div>
                        <div class="timing">
                            Best taken: 20-30 minutes before workout
                        </div>
                    </div>
                </div>

                <!-- Fish Oil -->
                <div class="supplement-card">
                    <div class="supplement-icon">
                        <i class="fas fa-fish"></i>
                    </div>
                    <div class="supplement-info">
                        <h3>Fish Oil (Omega-3)</h3>
                        <ul class="benefits-list">
                            <li>Reduced inflammation</li>
                            <li>Better joint health</li>
                            <li>Improved heart health</li>
                            <li>Enhanced brain function</li>
                        </ul>
                        <div class="dosage">
                            <strong>Recommended Dosage:</strong> 1-3g daily
                        </div>
                        <div class="timing">
                            Best taken: With meals
                        </div>
                    </div>
                </div>

                <!-- Multivitamin -->
                <div class="supplement-card">
                    <div class="supplement-icon">
                        <i class="fas fa-pills"></i>
                    </div>
                    <div class="supplement-info">
                        <h3>Multivitamin</h3>
                        <ul class="benefits-list">
                            <li>Fill nutritional gaps</li>
                            <li>Enhanced immune function</li>
                            <li>Better energy levels</li>
                            <li>Improved overall health</li>
                        </ul>
                        <div class="dosage">
                            <strong>Recommended Dosage:</strong> 1 serving daily
                        </div>
                        <div class="timing">
                            Best taken: With breakfast
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Add animation for macro chart on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.width = entry.target.dataset.width;
                }
            });
        });

        document.querySelectorAll('.macro-chart div').forEach(macro => {
            macro.style.width = '0';
            macro.dataset.width = macro.style.width;
            observer.observe(macro);
        });
    </script>
</body>
</html>
