<a?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("location:index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>MMU Clubhub Connect</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<header>
    <h1>MMU Clubhub Connect</h1>
</header>

<nav> 
    <div>
        <div class="item">  <a href="home.html">Home</a>     
        <div class="detail"> <div class="fonts"><ul>
            <li>Manage Programs</li>
            <li>Update Winners</li>
            <li>Award Points</li>
            <li>Update Attendance</li>
        </ul></div>
    </div>
        </div>
        <div class="item"><a href="Feeback.html">Feedback</a>
        <div class="detail"><div class="fonts"><ul>
            <li>Feedback Form</li>
        </ul></div></div>
        </div>
        <div class="item"><a href="example.html">Announcement</a>
        <div class="detail"><div class="fonts"><ul>
            <li>Club details</li>
            <li>Upcoming Events</li>
            <li>Changes or Updates</li>
            <li>Important News</li>
            <li>Feedback Requests</li>
        </ul></div></div>
        </div>
        <div class="item"><a href="example.html">Club categories</a>
        <div class="detail"><div class="fonts"><ul>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
        </ul></div></div>
        </div>
        <div class="item"><a href="example.html">Membership</a>
        <div class="detail"><div class="fonts"><ul>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
        </ul></div></div>
        </div>
</nav>
<body>
<head>
    <title>change picture</title>
    <script type="text/javascript">
        function displayNextImage() {
            x = (x === images.length - 1) ? 0 : x + 1;
            document.getElementById("img").src = images[x];
        }

        function displayPreviousImage() {
            x = (x <= 0) ? images.length - 1 : x - 1;
            document.getElementById("img").src = images[x];
        }

        function startTimer() {
            setInterval(displayNextImage, 3000);
        }

        var images = [], x = -1;
        images[0] = "image1.jpg";
        images[1] = "image2.jpg";
        images[2] = "image3.jpg";
    </script>
</head>

<body onload="startTimer()">
<div class="image-wrapper">
<img id="img" class="center" src="startpicture.jpg"/>
<button class="button" style="vertical-align:middle" onclick="displayPreviousImage()"><span>Previous</span></button>
<button class="button" style="vertical-align:middle" onclick="displayPreviousImage()"><span>Next</span></button>
</div>
</body>
<div class="header2">
    <marquee>"Welcome to Clubhub, your ultimate platform for club management and engagement! Designed to streamline club operations and enhance member experiences, Clubhub offers a centralized hub for clubs, societies, and organizations. From event management to membership tracking, 
        communication tools, and resource sharing, Clubhub empowers clubs to thrive and members to connect. Join us in fostering a vibrant club community and enriching your club experience!"
    </marquee>
</div>
<main>
    <h2><marquee>Welcome to MMU Clubhub Connect</marquee></h2>
    <div class="title">
        <h1><img src="booking icon.png" style="margin-left: 20px;" width="50" height="50"/></h1>
    </div>
</main>
<footer>
    <p>&copy; 2024 MMU Clubhub Connect. All Rights Reserved.</p>
</footer>
</body>
</html>