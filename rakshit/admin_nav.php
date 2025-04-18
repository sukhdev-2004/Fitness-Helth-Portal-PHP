<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Navigation Bar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f8f9fa;
            color: balck;
            font-weight:bold;
            padding: 1rem 2rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #343a40;
        }
        .navbar ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }
        .navbar ul li {
            margin: 0 1rem;
        }
        .navbar ul li a {
            color: #343a40;
            text-decoration: none;
            font-size: 1rem;
            transition: color 0.3s;
        }
        .navbar ul li a:hover {
            color: #007bff;
        }
        .navbar .logout {
            background-color: #007bff;
            color: #fff;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .navbar .logout:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="navbar">
    <div class="logo">Admin Panel</div>
    <ul>
        <li><a href="user.php">All Users</a></li>
        <li><a href="active.php">Active Workouts</a></li>
        <li><a href="review.php">Feedbacks</a></li>
    </ul>
</div>

</body>
</html> 