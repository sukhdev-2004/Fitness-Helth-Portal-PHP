<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Hub - Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="video-background">
        <video autoplay muted loop id="myVideo">
            <source src="https://res.cloudinary.com/dxssqb6l8/video/upload/v1605257675/fitness_video_background.mp4" type="video/mp4">
        </video>
    </div>
    
    <div class="overlay"></div>

    <div class="container login-container">
        <div class="form-header">
            <i class="fas fa-dumbbell"></i>
            <h2 class="form-title">Welcome Back!</h2>
        </div>

        <form id="loginForm" method="post" action="#" class="animated-form">
            <div class="input-group">
                <div class="input-icon">
                    <i class="fas fa-envelope"></i>
                    <input type="email" id="email" name="email" placeholder="Email Address" required>
                </div>
            </div>

            <div class="input-group">
                <div class="input-icon">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
            </div>

            <button type="submit" name="login" class="btn signup-btn">
                <span>Login</span>
                <i class="fas fa-arrow-right"></i>
            </button>
            <div class="switch-form">
                <p>Login As <a href="admin.php" class="login-link">Admin</a></p>
            </div>
            <div class="switch-form">
                <p><a href="forgot.php" class="login-link">Forgot Password?</a></p>
            </div>
            <div class="switch-form">
                <p>Don't have an account? <a href="signup.php" class="login-link">Sign Up</a></p>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('.animated-form');
            const inputs = form.querySelectorAll('.input-group');
            
            inputs.forEach((input, index) => {
                setTimeout(() => {
                    input.classList.add('fade-in');
                }, 200 * index);
            });
        });
    </script>
</body>
</html>

<?php
include 'con.php';
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = mysqli_query($con,"SELECT * FROM `login` WHERE `email` = '$email' AND `pass` = '$password'");
    if(mysqli_num_rows($select) > 0)
    {
        session_start();
        $_SESSION['email'] = $email;
        // session_abort();
        echo "<script>alert('Login Successful!');</script>";
        echo "<script>location.href='home.php';</script>";
    }
    else
    {
        echo "<script>alert('Invalid email or password');</script>";
    }   
}
?>
