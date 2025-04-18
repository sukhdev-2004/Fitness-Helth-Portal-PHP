<?php
include 'con.php';
session_start();
$email = $_SESSION['email'];
session_abort();
$select = mysqli_query($con,"SELECT * FROM workout WHERE email = '$email'");
$tot_rows = mysqli_num_rows($select);
$row = mysqli_fetch_assoc($select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Hub - Workouts</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .workout-filters {
            margin-bottom: 2rem;
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 0.5rem 1rem;
            border: 2px solid var(--primary-color);
            border-radius: 25px;
            background: transparent;
            color: var(--primary-color);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn.active, .filter-btn:hover {
            background: var(--primary-color);
            color: white;
        }

        .workout-program {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .workout-program:hover {
            transform: translateY(-5px);
        }

        .workout-image {
            height: 200px;
            overflow: hidden;
        }

        .workout-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .workout-details {
            padding: 1.5rem;
        }

        .workout-meta {
            display: flex;
            gap: 1rem;
            margin: 1rem 0;
            color: #666;
            font-size: 0.9rem;
        }

        .workout-meta i {
            color: var(--primary-color);
        }

        .difficulty {
            display: inline-block;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .beginner { background: #e3fcef; color: #00a651; }
        .intermediate { background: #fff4e5; color: #ff9800; }
        .advanced { background: #ffe5e5; color: #ff4444; }
        .btn-primary
        {
           margin-top: 30%;
           margin-right: 40%;
           text-decoration: none;
        }
        .workout-details{
            height: 300px;
        }
        .btn-primary{
            position: relative;
            top: 10%;
        }

        /* Modal Styles */
        .workout-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .workout-form {
            background: white;
            padding: 1.5rem;
            border-radius: 15px;
            width: 90%;
            max-width: 450px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .workout-form h2 {
            color: var(--primary-color);
            margin-bottom: 1rem;
            text-align: center;
            font-size: 1.5rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.3rem;
            font-weight: 500;
            color: #333;
            font-size: 0.9rem;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 0.6rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 0.9rem;
        }

        .form-buttons {
            display: flex;
            justify-content: flex-end;
            gap: 0.8rem;
            margin-top: 1.2rem;
        }

        .btn-cancel, .btn-start {
            padding: 0.6rem 1.2rem;
            font-size: 0.9rem;
        }

        .btn-cancel {
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 500;
            background: #f0f0f0;
            color: #333;
        }

        .btn-start {
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 500;
            background: var(--primary-color);
            color: white;
            margin-top: 10px;
        }

        .btn-start:hover {
            opacity: 0.9;
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
                <li><a href="workouts.php" class="active">Workouts</a></li>
                <li><a href="nutrition.php">Nutrition</a></li>
                <li><a href="progress.php">Progress</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="feedback.php">Feedback</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <h1>Workout Programs</h1>
            <?php
            if($tot_rows < 1)
            {
                ?>
            <div class="notice" style="margin-bottom: 30px">
                <font color="red"><h3><i class="fas fa-exclamation-triangle"></i> &nbsp;After Submitting Workouts Form , Should Not Be Changed For 10 Days!</h3></font>
            </div>
            <?php
            }
        ?>
        <?php
            if($tot_rows < 1)
            {
                ?>
            <div class="grid grid-3">
            <div class="workout-program">
                    <div class="workout-image">
                        <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" alt="Cardio Training">
                    </div>
                    <div class="workout-details">
                        <span class="difficulty beginner">Beginner</span>
                        <h3>Cardio Blast</h3>
                        <div class="workout-meta">
                            <span><i class="far fa-clock"></i> 30 mins</span>
                            <span><i class="fas fa-fire"></i> 300 cal</span>
                            <span><i class="fas fa-signal"></i> Low Impact</span>
                        </div>
                        <p>High-energy cardio workout to boost endurance and burn fat.</p>
                        <div class="workout-actions">
                            <button class="btn-start" onclick="openWorkoutModal()">Start Workout</button><br>
                            
                        </div>
                    </div>
                </div>
                <!-- Strength Program -->
                <div class="workout-program">
                    <div class="workout-image">
                        <img src="https://images.unsplash.com/photo-1534258936925-c58bed479fcb?ixlib=rb-1.2.1&auto=format&fit=crop&w=1031&q=80" alt="Strength Training">
                    </div>
                    <div class="workout-details">
                        <span class="difficulty intermediate">Intermediate</span>
                        <h3>Power Lifting Fundamentals</h3>
                        <div class="workout-meta">
                            <span><i class="far fa-clock"></i> 45 mins</span>
                            <span><i class="fas fa-fire"></i> 400 cal</span>
                            <span><i class="fas fa-signal"></i> Normal Impact</span>
                        </div>
                        <p>Master the basics of powerlifting with proper form and technique.</p>
                        <div class="workout-actions">
                            <button class="btn-start" onclick="openWorkoutModal()">Start Workout</button>
                            
                        </div>
                    </div>
                </div>

                <!-- HIIT Program -->
                <div class="workout-program">
                    <div class="workout-image">
                        <img src="https://images.unsplash.com/photo-1599901860904-17e6ed7083a0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" alt="HIIT Training">
                    </div>
                    <div class="workout-details">
                        <span class="difficulty advanced">Advanced</span>
                        <h3>HIIT Extreme</h3>
                        <div class="workout-meta">
                            <span><i class="far fa-clock"></i> 25 mins</span>
                            <span><i class="fas fa-fire"></i> 450 cal</span>
                            <span><i class="fas fa-signal"></i> High Impact</span>
                        </div>
                        <p>Intense interval training to maximize calorie burn and strength.</p>
                        <div class="workout-actions">
                            <button class="btn-start" onclick="openWorkoutModal()">Start Workout</button>
                           
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <?php
    }
    elseif($tot_rows > 0)
    {
        $pre_date = $row['start_date'];
        $curr_date = date('d-m-Y');

        $predtobj = new DateTime($pre_date);
        $curdtobj = new DateTime($curr_date);
        $interval = $predtobj->diff($curdtobj);
        $days = $interval->days;
        if($row['w_type'] == "Beginner")
        {
            ?>
            <div class="grid grid-3">
            <div class="workout-program">
                    <div class="workout-image">
                        <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" alt="Cardio Training">
                    </div>
                    <div class="workout-details">
                        <span class="difficulty beginner">Beginner</span>
                        <h3>Cardio Blast</h3><h4>On-Going (<?php echo $days; ?> days)</h4>
                        <div class="workout-meta">
                            <span><i class="far fa-clock"></i> 30 mins</span>
                            <span><i class="fas fa-fire"></i> 300 cal</span>
                            <span><i class="fas fa-signal"></i> Low Impact</span>
                        </div>
                        <p>High-energy cardio workout to boost endurance and burn fat.</p>
                        <div class="workout-actions">
                            <button class="btn-start" onclick="redirect()">Start Workout</button>
    
                        </div>
                    </div>
                </div>
                <script>
                    function redirect(){
                        window.location.href = "workouts/beginner.php";
                    }
                </script>
                <?php   
        }
        elseif($row['w_type'] == "Intermediate")
        {
            ?>
            <div class="grid grid-3">
            <div class="workout-program">
                    <div class="workout-image">
                        <img src="https://images.unsplash.com/photo-1534258936925-c58bed479fcb?ixlib=rb-1.2.1&auto=format&fit=crop&w=1031&q=80" alt="Strength Training">
                    </div>
                    <div class="workout-details">
                        <span class="difficulty intermediate">Intermediate</span>
                        <h3>Power Lifting Fundamentals</h3><h4>On-Going (<?php echo $days; ?> days)</h4>
                        <div class="workout-meta">
                            <span><i class="far fa-clock"></i> 45 mins</span>
                            <span><i class="fas fa-fire"></i> 400 cal</span>
                            <span><i class="fas fa-signal"></i> Normal Impact</span>
                        </div>
                        <p>Master the basics of powerlifting with proper form and technique.</p>
                        <div class="workout-actions">
                            <button class="btn-start" onclick="redirect()">Start Workout</button>
                            
                        </div>
                    </div>
                </div>
                <script>
                    function redirect(){
                        window.location.href = "workouts/intermediate.php";
                    }
                </script>
                <?php
        }
        elseif($row['w_type'] == "Advanced")
        {
            ?>
            <div class="grid grid-3">
            <div class="workout-program">
                    <div class="workout-image">
                        <img src="https://images.unsplash.com/photo-1599901860904-17e6ed7083a0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" alt="HIIT Training">
                    </div>
                    <div class="workout-details">
                        <span class="difficulty advanced">Advanced</span>
                        <h3>HIIT Extreme</h3><h4>On-Going (<?php echo $days; ?> days)</h4>
                        <div class="workout-meta">
                            <span><i class="far fa-clock"></i> 25 mins</span>
                            <span><i class="fas fa-fire"></i> 450 cal</span>
                            <span><i class="fas fa-signal"></i> High Impact</span>
                        </div>
                        <p>Intense interval training to maximize calorie burn and strength.</p>
                        <div class="workout-actions">
                            <button class="btn-start" onclick="redirect()">Start Workout</button>
                           
                        </div>
                    </div>
                </div>
                <script>
                    function redirect(){
                        window.location.href = "workouts/advanced.php";
                    }
                </script>
                <?php
        }
    }
    ?>
    <div class="workout-modal" id="workoutModal">
        <div class="workout-form">
            <h2>Start Your Workout</h2>
            <form method="POST">
                <div class="form-group">
                    <label for="workout_type">Workout Type</label>
                    <select id="workout_type" name="workout_type" required>
                        <option value="">Select Workout Type</option>
                        <option value="Beginner">Beginner</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Advanced">Advanced</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="weight_goal">Weight Goal</label>
                    <select id="weight_goal" name="goal" required>
                        <option value="">Select Weight Goal</option>
                        <option value="Loss">Weight Loss</option>
                        <option value="Gain">Weight Gain</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="current_weight">Current Weight (kg)</label>
                    <input type="number" id="current_weight" name="current_weight" step="0.1" required>
                </div>


                <div class="form-buttons">
                    <button type="button" class="btn-cancel" onclick="closeWorkoutModal()">Cancel</button>
                    <button type="submit" name="start" class="btn-start">Start Workout</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Filter functionality
        const filterBtns = document.querySelectorAll('.filter-btn');
        
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                filterBtns.forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                btn.classList.add('active');
                // Here you would typically filter the workout programs
            });
        });

        function openWorkoutModal() {
            document.getElementById('workoutModal').style.display = 'flex';
        }

        function closeWorkoutModal() {
            document.getElementById('workoutModal').style.display = 'none';
        }

        // Close modal when clicking outside
        document.getElementById('workoutModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeWorkoutModal();
            }
        });
    </script>
</body>
</html>
<?php
    if(isset($_POST['start']))
    {
        $workout_type = $_POST['workout_type'];
        $goal = $_POST['goal'];
        $current_weight = $_POST['current_weight'];
        $date = date('d-m-Y');
        $insert = mysqli_query($con,"INSERT INTO `workout`(`w_type`, `weight`, `curr_weight`, `email`,`start_date`) VALUES ('$workout_type','$goal','$current_weight','$email','$date')");
        if($insert){
            
            if($workout_type == "Beginner")
            {
                echo "<script>alert('Workout Started!');</script>";
                echo "<script>window.location.href='workouts/beginner.php';</script>";
            }elseif($workout_type == "Intermediate")
            {
                echo "<script>alert('Workout Started!');</script>";
                echo "<script>window.location.href='workouts/intermediate.php';</script>";
            }elseif($workout_type == "Advanced")
            {
                echo "<script>alert('Workout Started!');</script>";
                echo "<script>window.location.href='workouts/advanced.php';</script>";
            }
        }
        else
        {
            echo "<script>alert('Error starting workout');</script>";
        }
    }
?>
