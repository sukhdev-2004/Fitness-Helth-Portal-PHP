<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Fitness & Health Portal</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .admin-login-container {
            max-width: 400px;
            margin: 2rem auto;
            padding: 2rem;
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            height: 520px;
        }

        .admin-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .admin-header i {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .admin-header h1 {
            color: #333;
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
        }

        .admin-header p {
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

        .admin-btn {
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

        .error-message {
            background: #ffe5e5;
            color: #ff4444;
            padding: 0.8rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            text-align: center;
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
    <div class="admin-login-container">
        <div class="admin-header">
            <i class="fas fa-user-shield"></i>
            <h1>Admin Login</h1>
            <p>Access the admin dashboard</p>
        </div>

        <?php if(isset($message)): ?>
            <div class="error-message">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <form action="" method="post">
            <div class="input-group">
                <label for="admin_id">Admin ID</label>
                <input type="text" name="admin_id" id="admin_id" required placeholder="Enter your admin ID">
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required placeholder="Enter your password">
            </div>

            <button type="submit" name="submit" class="admin-btn">
                <i class="fas fa-sign-in-alt"></i>
                <span>Login as Admin</span>
            </button>
        </form>

        <div class="back-to-login">
            <a href="index.php">Back to User Login</a>
        </div>
    </div>
</body>
</html>

<?php
    include 'con.php';
    if(isset($_POST['submit'])){
        $admin_id = $_POST['admin_id'];
        $password = $_POST['password'];
        $select = mysqli_query($con,"SELECT * FROM `admin` WHERE `id` = '$admin_id' AND `pass` = '$password'");
        if(mysqli_num_rows($select) > 0)
        {
            echo "<script>alert('Login Successful!');</script>";
            echo "<script>location.href='user.php';</script>";
        }
    }

?>