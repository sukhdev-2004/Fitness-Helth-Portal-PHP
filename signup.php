<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Hub - Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .signup-container {
            height: fit-content;
            width: 700px;
            margin-bottom: 50px;
        }
        .profile-upload {
            text-align: center;
            margin-bottom: 20px;
        }
        .profile-pic {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
            border: 3px solid var(--primary-color);
        }
        .upload-btn-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }
        .upload-btn {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            background-color: white;
            padding: 8px 20px;
            border-radius: 8px;
            font-size: 14px;
            cursor: pointer;
        }
        .upload-btn:hover {
            background-color: var(--primary-color);
            color: white;
        }
        .upload-btn-wrapper input[type=file] {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="video-background">
        <video autoplay muted loop id="myVideo">
            <source src="https://res.cloudinary.com/dxssqb6l8/video/upload/v1605257675/fitness_video_background.mp4" type="video/mp4">
        </video>
    </div>
    
    <div class="overlay"></div>

    <div class="container signup-container">
        <div class="form-header">
            <i class="fas fa-dumbbell"></i>
            <h2 class="form-title">Join Fitness Hub</h2>
        </div>

        <form id="signupForm" method="post" enctype="multipart/form-data" class="animated-form">
            <div class="profile-upload">
                <img src="https://via.placeholder.com/150" alt="Profile Picture" id="profile-preview" class="profile-pic">
                <div class="upload-btn-wrapper">
                    <button class="upload-btn" type="button">Choose Profile Picture</button>
                    <input type="file" name="profile_pic" id="profile_pic" accept="image/*" required>
                </div>
            </div>

            <div class="input-group">
                <div class="input-icon">
                    <i class="fas fa-user"></i>
                    <input type="text" id="fullname" name="fullname" placeholder="Full Name" required>
                </div>
            </div>

            <div class="input-group">
                <div class="input-icon">
                    <i class="fas fa-envelope"></i>
                    <input type="email" id="email" name="email" placeholder="Email Address" required>
                </div>
            </div>

            <div class="input-group">
                <div class="input-icon">
                    <i class="fas fa-phone"></i>
                    <input type="number" id="phone" name="phone" placeholder="Phone No" required minlength="10">
                </div>
            </div>

            <div class="input-group">
                <div class="input-icon">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" name="password" placeholder="Password" required minlength="8">
                </div>
            </div>

            <div class="input-group">
                <div class="input-icon">
                    <i class="fas fa-check-circle"></i>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
                </div>
            </div>

            <button type="submit" name="signup" class="btn signup-btn">
                <span>Sign Up</span>
                <i class="fas fa-arrow-right"></i>
            </button>

            <div class="switch-form">
                <p>Already have an account? <a href="index.php" class="login-link">Login</a></p>
            </div>
        </form>
    </div>

    <script>
        // Profile picture preview
        document.getElementById('profile_pic').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('profile-preview').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });

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
include('con.php');
    if(isset($_POST['signup'])){
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $profile = $_FILES['profile_pic']['name'];
        $upload_img =  move_uploaded_file($_FILES["profile_pic"]["tmp_name"],"uploads/".$_FILES["profile_pic"]["name"]);
        if($upload_img){
            $phone_len = strlen($phone);
            if($phone_len == 10){
                if($password == $confirm_password){
                    $insert = mysqli_query($con,"INSERT INTO `login`(`name`, `photo`,`email`, `phone`, `pass`) VALUES ('$fullname','$profile','$email','$phone','$password')");
                    if($insert){
                        echo "<script>alert('Signup Successful!');</script>";
                    }else{
                        echo "<script>alert('Something went wrong');</script>";
                    }
                }
                else{
                    echo "<script>alert('Password does not match');</script>";
                }
            }
            else{
                echo "<script>alert('Phone number must be 10 digits');</script>";
            }
        }
        else{
            echo "<script>alert('Profile picture not uploaded');</script>";
        }
    }
?>
