<?php
include"lock.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - <?php echo $login_session = $row['c_name']; ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            text-align: center;
        }

        .container {
            max-width: 500px;
            padding: 20px;
            border-radius: 5px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
        }

        .heading {
            color: #007bff; /* Blue */
        }

        .btn {
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="heading">Welcome to Home Page</h2>
        <!-- Uncomment this block if you want to add a search form
        <form action="" method="POST">
            Search By User Value:<br>
            <input type="text" name="search"><br>
            <input type="submit" class="btn btn-primary" name="submit" value="Search">
        </form>
        -->
        <a class="btn btn-secondary" href="logout.php">Logout</a>
        <a class="btn btn-secondary" href="search.php">SEARCH</a>
    </div>
    <!-- Bootstrap JS (place this at the end of the body to improve page load time) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
