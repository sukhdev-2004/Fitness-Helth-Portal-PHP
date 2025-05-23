<?php
    include 'admin_nav.php';
    include 'con.php';
    $select = mysqli_query($con,"SELECT * FROM `feedback`");
    $tot_row = mysqli_num_rows($select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User and Reviews Data Page</title>
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
        .user-table, .review-table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }
        .user-table th, .user-table td, .review-table th, .review-table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .user-table th, .review-table th {
            background-color: #f1f1f1;
            font-weight: bold;
        }
        .user-table tr:hover, .review-table tr:hover {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Feedbacks</h1>
    <table class="user-table">
        <?php
            if($tot_row > 0)
            {
                $i=1;
                ?>
                <tr>
                <th>Sr No</th>
                <th>Feedback Type</th>
                <th>Rate</th>
                <th>Review</th>
                <th>Improve</th>
                <th>Email</th>
            </tr>
                <?php
                while($row = mysqli_fetch_assoc($select))
                {
                    ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $row['type']?></td>
                        <td><?php echo $row['exprience_rate']?></td>
                        <td><?php echo $row['review']?></td>
                        <td><?php echo $row['improve']?></td>
                        <td><?php echo $row['u_email']?></td>
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