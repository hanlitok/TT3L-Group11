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
    <title>Club Details</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-image: url('aa.jpg');
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

        #openBtn {
            position: absolute;
            top: 10px;
            right: 10px;
            display: inline-block;
            border-radius: 80px;
            background-color: #444;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 15px;
            padding: 10px;
            width: 180px;
            transition: all 0.5s;
            cursor: pointer;
        }

        #openBtn span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        #openBtn span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        #openBtn:hover span {
            padding-right: 20px;
        }

        #openBtn:hover span:after {
            opacity: 1;
            right: 0;
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

        .category-section {
            margin-bottom: 20px;
            position: relative;
        }

        .image-container {
            position: relative;
            height: 300px;
            overflow: hidden;
        }

        .hero-image, .hero-image-right {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('clubs.jpg');
            height: 100%;
            width: 100%;
            background-position: left;
            background-repeat: no-repeat;
            background-size: cover;
            position: absolute;
            top: 0;
            border-radius: 3%;
            transition: left 2s;
        }

        .hero-image-right {
            background-position: right;
        }

        .hero-text {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }

        .hero-text h2 {
            margin: 0;
            font-size: 2em;
        }

        .hero-text ul {
            list-style: none;
            padding: 0;
            text-align: left;
            display: inline-block;
        }

        .hero-text ul li {
            margin-bottom: 10px;
        }

        .hero-text button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 10px 25px;
            color: black;
            background-color: #ddd;
            text-align: center;
            cursor: pointer;
        }

        .hero-text button:hover {
            background-color: #555;
            color: white;
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

        .container {
            padding: 2rem;
        }

        .club {
            background-color: rgba(255, 255, 255, 0.8);
            margin-bottom: 1rem;
            padding: 1rem;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
            text-align: left;
        }

        .club h2 {
            margin-top: 0;
        }

        .club:hover {
            background-color: rgba(255, 255, 255, 1);
        }
    </style>
</head>
<body>
    <header>
        <h1>Club Details</h1>
        <button id="openBtn"><span> <a href="userhome.php">back</a></span></button>
    </header>

    <nav>
        <ul>
            <li><a href="#club1">About us</a></li>
            <li><a href="#club2">Club Name</a></li>
            <li><a href="#club3">Membership Information</a></li>
            <li><a href="#club4">Contact Information</a></li>
        </ul>
    </nav>

    <main>
        <div class="container">
            <div class="club" id="club1">
                <h3><details>Our university is home to a vibrant and diverse array of student clubs and organizations that cater to a wide range of interests and passions. Whether you are looking to enhance your academic experience, explore new hobbies, or meet like-minded individuals, our clubs offer something for everyone.

                    Each club is dedicated to providing enriching experiences, fostering a sense of community, and offering opportunities for personal and professional growth. From academic and professional organizations to cultural, recreational, and social clubs, you’ll find a group that aligns with your interests and goals.
                    
                    On this page, you'll find detailed information about each club, including:
                    
                    Description: An overview of the club's mission and objectives.
                    Activities: A list of events and activities organized by the club.
                    Contact Information: How to get in touch with club representatives.
                    Meeting Times: Regular meeting schedules and locations.
                    Joining a club is a fantastic way to make the most of your university experience. We encourage you to explore the various clubs listed below and get involved in the ones that resonate with you. Whether you're a seasoned member or new to the university, there’s always a place for you in our vibrant club community.</p></details></h3>
                <p><strong>Welcome to the Club Details page!</strong> 
            </div>
        </div>
    </main>

    <footer>
        &copy; 2024 Club Details. All rights reserved.
    </footer>
</body>
</html>
