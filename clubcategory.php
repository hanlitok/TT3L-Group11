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
    <link rel="stylesheet" href="style1.css">
    <title>Explore Clubs</title>
    <style>
    </style>
</head>
<body>
    <header>
        <h1>Club Categories</h1>
        <a href="userhome.php" class="back">back</a>
        <button id="openBtn"><a href="exploreclub.php">Explore Clubs</a></button>
    </header>
    <nav>
        <ul>
            <a href="#sports">Sports</a>
            <a href="#academic">Academic</a>
            <a href="#arts">Arts</a>
            <a href="#technology">Technology</a>
        </ul>
    </nav>
    <main>
        <section id="sports">
            <h2>Sports Clubs</h2>
            <ul>
                <li><strong>Soccer Club:</strong> A club for those who love playing soccer. Meets every Tuesday and Thursday at 5 PM.</li>
                <li><strong>Basketball Club:</strong> Join us for regular basketball games and tournaments. Meets every Monday and Wednesday at 6 PM.</li>
                <li><strong>Swimming Club:</strong> For swimming enthusiasts of all levels. Meets every Saturday at 10 AM.</li>
            </ul>
        </section>
        <section id="academic">
            <h2>Academic Clubs</h2>
            <ul>
                <li><strong>Math Club:</strong> A club for math enthusiasts to solve problems and participate in competitions. Meets every Friday at 4 PM.</li>
                <li><strong>Science Club:</strong> Explore various scientific topics and experiments. Meets every Thursday at 3 PM.</li>
                <li><strong>Literature Club:</strong> Discuss and analyze literature. Meets every Wednesday at 2 PM.</li>
            </ul>
        </section>
        <section id="arts">
            <h2>Arts Clubs</h2>
            <ul>
                <li><strong>Drama Club:</strong> Participate in plays and drama workshops. Meets every Monday and Thursday at 5 PM.</li>
                <li><strong>Music Club:</strong> For musicians and music lovers. Meets every Tuesday at 4 PM.</li>
                <li><strong>Art Club:</strong> Create and discuss art. Meets every Friday at 3 PM.</li>
            </ul>
        </section>
        <section id="technology">
            <h2>Technology Clubs</h2>
            <ul>
                <li><strong>Robotics Club:</strong> Build and program robots. Meets every Saturday at 11 AM.</li>
                <li><strong>Programming Club:</strong> Learn and practice coding. Meets every Wednesday at 6 PM.</li>
                <li><strong>Electronics Club:</strong> Explore electronics projects. Meets every Tuesday at 5 PM.</li>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Explore Clubs. All rights reserved.</p>
    </footer>
</body>
</html>
