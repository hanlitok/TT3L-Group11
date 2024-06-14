<a?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("location:index.php");
}

?>

<!DOCTYPE html>
<head>
    <title>MMU Clubhub Connect</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
         /* style for interface */
         body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;  
            background-size: cover;
        }
        header {
            color: #fff;
            text-align: center;
            padding: 50px 0;
            position: relative; /* Add this line */
        }
        #openBtn {
            position: absolute;
            top: 10px;
            right: 10px;
            display: inline-block;
            border-radius: 80px;
            background-color: #444;
            border: none;
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
            color: black;
            text-align: center;
            padding: 10px 0;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
        }
        nav a:hover {
            background-color: #888;
            border-radius: 10%;
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

        
        .header2 {
            font-family: 'Times New Roman';
            background-color: black;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
        h1 {
            margin: 5px auto;
            text-align: center;
            color: black;
            font-size: 0.5em;
            transition: 0.5s;
            font-family: Arial, Helvetica, sans-serif;
        }
        h1:hover {
            text-shadow: 0 1px 0 #ccc, 0 2px 0 #ccc,
                0 2px 0 #ccc, 0 2px 0 #ccc,
                0 2px 0 #ccc, 0 2px 0 #ccc,
                0 2px 0 #ccc, 0 2px 0 #ccc,
                0 2px 0 #ccc, 0 2px 0 #ccc,
                0 5px 0 #ccc, 0 5px 0 #ccc,
                0 20px 20px rgba(0, 0, 0, 0.5);
        }
        h2 {
            margin: 5px auto;
            text-align: center;
            color: black;
            font-size: 10em;
            transition: 0.5s;
            font-family: Arial, Helvetica, sans-serif;
        }
        h2:hover {
            text-shadow: 0 1px 0 black, 0 2px 0 black,
                0 2px 0 black, 0 2px 0 black,
                0 2px 0 black, 0 2px 0 black,
                0 2px 0 black, 0 2px 0 black,
                0 2px 0 black, 0 2px 0 black,
                0 5px 0 black, 0 5px 0 black,
                0 20px 20px rgba(0, 0, 0, 0.5);
        }
        .item {
            position: relative;
            display: inline-block;
            padding: 10px;
            border: 1px solid #444;
            cursor: pointer;
            
        }
        .fonts {
            font-family: 'Times New Roman', Times, serif;
            text-align: center;
            color: black;
            font-size: 1em;
        }
        /* Style for the detail box */
        .detail {
            position: absolute;
            display: none;
            background-color: white;
            border: 1px solid whitesmoke;
            border-radius: 50px;
            padding: 10px;
            z-index: 1;
            top: 100%; 
            width: 100%;
        }
        .item:hover .detail {
            display: block;
        }
        nav a {
            margin-right: 60px;
            text-decoration: none;
            color: white;
        }
        .button {
            display: inline-block;
            border-radius: 100px;
            background-color: #0988F9 ;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 15px;
            padding: 5px;
            width: 100px;
            transition: all 0.5s;
            cursor: pointer;
        }
        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }
        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }
        .button:hover span {
            padding-right: 20px;
        }
        .button:hover span:after {
            opacity: 1;
            right: 0;
        }
        .popup {
            display: none;
            position: fixed;
            z-index: 1;
            left: 80%;
            top: 0;
            width: 20%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
        }

        .popup-content {
            background-color: cadetblue;
            margin: 10% auto;
            padding: 10px;
            border: 1px solid #888;
            border-radius: 15%;
            width: 80%;
        }

        .profile-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .closeBtn {
            color: black;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .closeBtn:focus {
            outline: none;
        }
        .wordopenprofile {
            color: blue;
        }


.container {
    width: 100%; /* Ensures container takes the full width of its parent */
    max-width: 5000px; /* Constrains the maximum width */
    height: 1500px; /* Height to create scrolling */
    position: relative;
    overflow-x: scroll; /* Allows horizontal scrolling */
}

.image-container {
    position: relative;
    height: 500px;
    overflow: hidden;
}

.hero-image {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("clubs.jpg");
    height: 100%; /* Ensures full height within .image-container */
    width: 100%; /* Ensures full width within .image-container */
    background-position: left; /* Starts the background image from the left */
    background-repeat: no-repeat;
    background-size: cover;
    position: absolute; /* Absolute positioning within .image-container */
    left: 0; /* Start from the left */
    top: 0; /* Start from the top */
    border-radius: 3%;
    transition: left 2s; /* Slower transition for smooth movement */
}

.hero-text {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
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

.hero-image-right {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("clubs.jpg");
  width: 50%;
  height: 70%;
  background-repeat: no-repeat;
  background-size: cover;
  position: absolute;
  right: 0px;
  border-radius: 3%;
  border: hidden;
}
    </style>
</head>
<center>
    <header>
        <h1>MMU Clubhub Connect</h1>
        <button id="openBtn" class="button"><span>Profile</span></button>
        <div id="profilePopup" class="popup">
            <div class="popup-content">
                <div class="profile-header">
                   <h2>Profile</h2>
                    <span class="closeBtn">&times;</span>
                </div>
                <div class="wordopenprofile">
                <p><a href="Dailysystem.php">Daily Point:</a></p>
                <a href="./student_db/index.php">details</a></p>
                <header>

        <button id="openBtn" class="button"><div class="item"><a href="http://localhost:3000/GitExercise-GroupTT3L-11-/login/profile.php">Profile</a></button>

</header>
                <div class="log">
                <a href="./login/index.php" target="_blank">Logout</a>
                </div>

                </div>
            </div>
        </div>
    
        <script>
            document.getElementById("openBtn").addEventListener("click", function() {
                document.getElementById("profilePopup").style.display = "block";
            });
    
            document.querySelector(".closeBtn").addEventListener("click", function() {
                document.getElementById("profilePopup").style.display = "none";
            });
        </script>
    </header>
    
    <nav> 
        <div>
            <div class="item">  <a href="uhome.php">Home</a>     
            <div class="detail"> <div class="fonts"><ul>
                <li>Daily check in</li>
                <li>Update Attendance</li>
            </ul></div>
        </div>
            </div>
            <div class="item"><a href="./feedback/index.php">Feedback</a>
            <div class="detail"><div class="fonts"><ul>
                <li>Feedback Form</li>
            </ul></div></div>
            </div>
            <div class="item"><a href="uannouncement.php">Announcement</a>
            <div class="detail"><div class="fonts"><ul>
                <li>Clubs details</li>
                <li>Upcoming Events</li>
                <li>Changes or Update</li>
                <li>Update Winner</li>

            </ul></div></div>
            </div>
            <div class="item"><a href="./club/indexu.php">Club categories</a>
            <div class="detail"><div class="fonts"><ul>
                <li>Sports</li>
                <li>Academic</li>
                <li>Arts</li>
                <li>Technology</li>
            </ul></div></div>
            </div>
            <div class="item"><a href="./membership/index.php">Membership</a>
            <div class="detail"><div class="fonts"><ul>
                <li>Membership</li>
            </ul></div></div>
            </div>
            <div class="item"><a href="./clubcategory/exploreclub.php">Club Sign Up</a>
            <div class="detail"><div class="fonts"><ul>
                <li>Club join</li>
            </ul></div></div>
            </div>
    </nav>
    <div>
      <center>
        <title>change picture</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="nature2.jpg" alt="First Image">
            </div>

            <div class="item">
                <img src="nature2.jpg" alt="Second Image">
            </div>

            <div class="item">
                <img src="nature2.jpg" alt="Third Image">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
        </center>
    <div class="header2">
        <marquee>"Welcome to Clubhub, your ultimate platform for club management and engagement! Designed to streamline club operations and enhance member experiences, Clubhub offers a centralized hub for clubs, societies, and organizations. From event management to membership tracking, 
            communication tools, and resource sharing, Clubhub empowers clubs to thrive and members to connect. Join us in fostering a vibrant club community and enriching your club experience!"
        </marquee>
    </div>
    <main>
        <h2><marquee>Welcome to MMU Clubhub Connect</marquee></h2>
    </main>
    <div class="container">
        <div class="image-container">
          <div class="hero-image">
            <div class="hero-text">
              <h1 style="font-size:50px">Clubhub</h1>
              <p>(details)</p>
              <button><a href="introduction.php">CLICK ME!</a></button>
            </div>
          </div>
        </div>
      </div>
      <script>
        var lastScrollTop = 0;
        window.addEventListener('scroll', function() {
          var currentScroll = window.pageYOffset || document.documentElement.scrollTop;
          var image = document.querySelector('.hero-image');
    
          if (currentScroll > lastScrollTop) {
            // Scrolling down
            image.style.left = '0'; // Slide image out
          } else {
            // Scrolling up
            image.style.left = '100px'; // Slide image back in
          }
          lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling
        });
      </script>
      </div>
        <footer>
            <p>&copy; 2024 MMU Clubhub Connect. All Rights Reserved.</p>
        </footer>
</body>
</html>
