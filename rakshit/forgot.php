<?php
include 'con.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Fitness & Health Portal</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f4f4f4;
        }

        .forgot-container {
            max-width: 600px;
            width: 100%;
            background: white;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
            margin-bottom: 40px;
            height: 730px;
        }

        .forgot-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .forgot-header i {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .forgot-header h2 {
            color: #333;
            margin-bottom: 0.5rem;
        }

        .forgot-header p {
            color: #666;
            font-size: 0.9rem;
        }

        .input-group {
            margin-bottom: 1.5rem;
        }

        .input-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
            font-weight: 500;
        }

        .input-group input {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .input-group input:focus {
            border-color: var(--primary-color);
            outline: none;
        }

        .reset-btn {
            width: 100%;
            padding: 1rem;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .reset-btn:hover {
            background: blue;
        }

        .message {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            text-align: center;
        }

        .error-message {
            background: #ffe5e5;
            color: #ff4444;
        }

        .success-message {
            background: #e3fcef;
            color: #00a651;
        }

        .back-to-login {
            text-align: center;
            margin-top: 1rem;
        }

        .back-to-login a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }

        .back-to-login a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="forgot-container">
        <div class="forgot-header">
            <i class="fas fa-unlock-alt"></i>
            <h2>Forgot Password</h2>
        </div>

        <form action="" method="post">
            <div class="input-group">
                <label for="user_id">User ID (Email)</label>
                <input type="email" name="user_id" id="user_id" required placeholder="Enter your registered email" value="<?php echo isset($_POST['user_id']) ? htmlspecialchars($_POST['user_id']) : ''; ?>">
            </div>

            <div class="input-group">
                <label for="phone">Registered Phone Number</label>
                <input type="tel" name="phone" id="phone" required placeholder="Enter your registered phone number" value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>">
            </div>

            <div class="input-group">
                <label for="new_password">New Password</label>
                <input type="password" name="new_password" id="new_password" required placeholder="Enter new password" minlength="8">
            </div>

            <div class="input-group">
                <label for="confirm_password">Confirm New Password</label>
                <input type="password" name="confirm_password" id="confirm_password" required placeholder="Confirm new password" minlength="8">
            </div>

            <button type="submit" name="reset" class="reset-btn">
                <i class="fas fa-key"></i>
                <span>Reset Password</span>
            </button>
        </form>

        <div class="back-to-login">
            <a href="index.php">Back to Login</a>
        </div>
    </div>
</body>
</html>
<?php
    if(isset($_POST['reset']))
    {
        $user_id = $_POST['user_id'];
        $phone = $_POST['phone'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

        $select = mysqli_query($con,"SELECT * FROM `login` WHERE `email` = '$user_id' AND `phone` = '$phone'");
        if(mysqli_num_rows($select) > 0)
        {
            if($new_password == $confirm_password)
            {
                $update = mysqli_query($con,"UPDATE `login` SET `pass` = '$new_password' WHERE `email` = '$user_id' AND `phone` = '$phone'");
                if($update)
                {
                    echo "<script>alert('Password reset successful!');</script>";
                    echo "<script>location.href='index.php';</script>";
                }
                else
                {
                    echo "<script>alert('Failed to reset password. Please try again');</script>";
                }
            }
            else
            {
                echo "<script>alert('Passwords do not match. Please try again');</script>";
            }
        }
        else
        {
            echo "<script>alert('Invalid user ID or phone number. Please try again');</script>";
        }
    }
?>