<a?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-image: url('bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        header {
            color: #fff;
            text-align: center;
            padding: 20px 0;
            position: relative;
        }

        nav {
            background-color: #444;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 10px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
        }

        nav ul li a:hover {
            background-color: #555;
        }

        main {
            padding: 20px;
            text-align: center;
        }

        .announcement-container {
            padding: 2rem;
        }

        .announcement {
            background-color: rgba(255, 255, 255, 0.8);
            margin-bottom: 1rem;
            padding: 1rem;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
        }

        .announcement h2 {
            margin-top: 0;
        }

        .announcement:hover {
            background-color: rgba(255, 255, 255, 1);
        }

        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
        .logout {
            position:absolute;
            top: 30px;
            right:5px;
            background-color: #FFF2F4;
            color: black;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;
        }
    </style>
</head>
<body>


    <header>
        <h1>Latest Announcements</h1>
    </header>
    <nav>
        <ul>
            <li><a href="./announcement/indexu.php">Announcement</a></li>
            <li><a href="uupdate.php">Changes Or Updates</a></li>
            <li><a href="indexu.php">Winner Update</a></li>
        </ul>
    </nav>
    <main>
    <div class="logout">
        <a href="http://localhost:3000/GitExercise-GroupTT3L-11-/userhome.php">Back</a>
    </div>
        <div class="announcement-container">
            <div class="announcement" id="announcement1">
                <h2>Announcement </h2>
                <p><strong>Date:</strong> January 1, 2024</p>
                <p>This is the first announcement. Here you can provide detailed information about the announcement, including any important dates, details, and relevant links.</p>
            </div>

            <div class="announcement" id="announcement2">
                <h2>Announcement</h2>
                <p><strong>Date:</strong> February 1, 2024</p>
                <p>This is the second announcement. Here you can provide detailed information about the announcement, including any important dates, details, and relevant links.</p>
            </div>

            <div class="announcement" id="announcement3">
                <h2>Announcement </h2>
                <p><strong>Date:</strong> March 1, 2024</p>
                <p>This is the third announcement. Here you can provide detailed information about the announcement, including any important dates, details, and relevant links.</p>
            </div>
            <!-- Add more announcements as needed -->
        </div>
    </main>

    <footer>
        &copy; 2024 Announcements. All rights reserved.
    </footer>
</body>
</html>
