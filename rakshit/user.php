<?php
include 'admin_nav.php';
include 'con.php';

$select = mysqli_query($con,"SELECT * FROM `login`");
$tot_row = mysqli_num_rows($select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .container {
            padding: 2rem;
        }
        .user-table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .user-table th, .user-table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .user-table th {
            background-color: #f1f1f1;
            font-weight: bold;
        }
        .user-table tr:hover {
            background-color: #f9f9f9;
        }
        img{
            border-radius:50%;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>User Data</h1>
    <table class="user-table">
        <?php
            if($tot_row > 0)
            {
                ?>
                <tr>
                <th>Sr No</th>
                <th>Profile</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
            </tr>
            <?php
                $i=1;
                while($row = mysqli_fetch_assoc($select))
                {
                    ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><img src="./uploads/<?php echo $row['photo']?>" height="100px" width="100px"></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['phone']?></td>
                        <td><?php echo $row['pass']?></td>
                    </tr>
                    <?php
                    $i++;
                }
            }
        ?>
    </table>
</div>

</body>
</html>
