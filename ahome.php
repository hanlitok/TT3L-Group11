<?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("location:index.php");
}

?>

<?php echo $_SESSION["username"] ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: antiquewhite;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        p {
            margin-bottom: 20px;
            line-height: 1.6;
            color: #666;
        }
        a {
            display: block;
            margin-bottom: 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #0056b3;
        }
        nav {
            background-color: #444;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
        nav a {
            color: beige;
            text-decoration: none;
            padding: 10px 20px;
        }
        nav a.back {
            background-color: grey;
        }
        nav a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

    <div>
    <nav>
    <a href="adminhome.php" class="back">back</a>
    </nav>
    </div>
    <div class="container">
        <h1>Welcome to Your club</h1>
        <center><p>This is your club customised. You can customise it as needed for your club.</p></center>
        <a href="dailysystems.php">Daily check in</a>
        <a href="./attendance/index.php">Update Attendance</a>
    </div>
</body>
</html>