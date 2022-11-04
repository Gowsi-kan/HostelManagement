<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($connection);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8>
    <meta http-equiv=" X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="EditDeleteButton.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url(BackGroundImage.jpg)no-repeat center center fixed;
            font-family: sans-serif;
            background-size: cover;
        }

        div {
            color: #000000;
            position: absolute;
            left: 50%;
            top: 20%;
            transform: translate(-50%, -50%);
            padding: 20px;
            line-height: 30px;
        }

        div1 {
            color: #000000;
            position: absolute;
            left: 50%;
            top: 25%;
            transform: translate(-50%, -50%);
            padding: 70px;
            line-height: 70px;
        }
    </style>
</head>

<body>
    <div>
        <h2>Student</h2>
    </div>
    <div1>
        <a class="btn btn-head" href="/HostelManagement/index.php" role="button">Home</a>
        <a class="btn btn-head" href="/HostelManagement/AddStudent.php" role="button">Register</a>
        <a class="btn btn-head" href="/HostelManagement/AddRent.php" role="button">Pay</a>
    </div1>
</body>

</html>