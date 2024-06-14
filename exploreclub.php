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
    <title>Join the Club Program</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <main>
        <section id="home">
            <h2>Welcome to Join the Club Program</h2>
            <p>Join our program to become a member of various clubs and enjoy exciting activities!</p>
        </section>
        <section id="about">
            <h2>About Us</h2>
            <p>Our Join the Club program helps students find and join clubs that match their interests and passions.</p>
        </section>
        <section id="clubs">
            <h2>Available Clubs</h2>
            <div class="club">
                <h3>Photography Club</h3>
                <p>Enhance your photography skills and capture beautiful moments.</p>
            </div>
            <div class="club">
                <h3>Robotics Club</h3>
                <p>Build and program robots with like-minded enthusiasts.</p>
            </div>
            <!-- Add more clubs as needed -->
        </section>
        <section id="signup">
            <h2>Sign Up to Join</h2>
            <form action="submit_form.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="club">Select Club:</label>
                <select id="club" name="club">
                    <option value="photography">Photography Club</option>
                    <option value="robotics">Robotics Club</option>
                    <!-- Add more clubs as needed -->
                </select>
                <br>
                <button type="submit">Join Now</button>
            </form>
        </section>
        <section id="contact">
            <h2>Contact Us</h2>
            <p>Email: MMUClubhub@gmail.com</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Join the Club Program. All rights reserved.</p>
    </footer>
</body>
</html>