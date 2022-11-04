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
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        background: url(bgImage.jpg)no-repeat center center fixed;
        font-family: sans-serif;
        background-size: cover;
    }
</style>
<style>
    body {
        margin: 0;
        padding: 0;
        background: url(bgImage.jpg)no-repeat center center fixed;
        font-family: sans-serif;
        background-size: cover;
    }
</style>

<body>
    <div class="container my-5">
        <h2>List of Furnitures</h2>
        <a class="btn btn-head" href="/HostelManagement/HomeEmployee.php" role="button">Home</a>
        <a class="btn btn-head" href="/HostelManagement/AddFurniture.php" role="button">New furniture</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>FurnitureID</th>
                    <th>nChair</th>
                    <th>nTable</th>
                    <th>RoomID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "hostel management system";
                $connection = new mysqli($servername, $username, $password, $database);
                if ($connection->connect_error) {
                    die("Connection failed: " . $connection->connect_error);
                }

                $sql = "SELECT * FROM furniture";
                $result = $connection->query($sql);

                if (!$result) {
                    die("Invalid query: " . $connection->error);
                }

                while ($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                    <td>$row[FurnitureID]</td>
                    <td>$row[nChair]</td>
                    <td>$row[nTable]</td>
                    <td>$row[RoomID]</td>
                    <td>
                        <a class='btn btn-head btn-sm' href='/HostelManagement/UpdateFurniture.php?FurnitureID=$row[FurnitureID]'>Update</a>
                        <a class='btn btn-delete btn-sm' href='/HostelManagement/DeleteFurniture.php?FurnitureID=$row[FurnitureID]'>Delete</a>
                    </td>
                    </tr>
                    ";
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>