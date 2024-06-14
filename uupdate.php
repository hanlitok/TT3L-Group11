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
    <title>Changes and Updates</title>
    <style>
        /* CSS Styles Go Here */
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('aa.jpg');
}

header {
    background-color: #333;
    color: white;
    padding: 10px 0;
    text-align: center;
}

header h1 {
    margin: 0;
}

h2 {
    color: white;
    

}
h3{
    color:white ;
    text-align: center
    
}
p{
    color:white
}
nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin: 0 10px;
}

nav ul li a {
    color: white;
    text-decoration: none;
}

main {
    padding: 20px;
}

section {
    margin-bottom: 50px;
    color: white;
}

.club {
    border: 10px solid #ccc;
    padding: 10px;
    margin-bottom: 10px;
}

form {
    max-width: 400px;
    margin: 0 auto;
}

form label {
    display: block;
    margin-top: 10px;
}

form input, form select, form button {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px 0;
    position: fixed;
    bottom: 0;
    width: 100%;
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
h2 {
    margin: 5px auto;
    text-align: center;
    color: white;
    font-size: 2em;
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

.closeBtn:hover,
.closeBtn:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.closeBtn:focus {
    outline: none;
}
.wordopenprofile {
    color: white;
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
    background-color: #555;
    margin: 10% auto;
    padding: 10px;
    border: 1px solid #888;
    width: 80%;
}
p {
    text-align: center;
}
li{
    text-align: center;
    color: white;
}
    </style>
</head>
<body>
    <header>
        <h1><p>Changes and Updates</p></h1>
        <button id="openBtn" class="button"><span>Previous</span></button>
        <div id="profilePopup" class="popup">
            <div class="popup-content">
                <div class="profile-header">
                    <span class="closeBtn">&times;</span>
                </div>
                <div class="wordopenprofile">
                <p> <a href="announcement.php">Latest announcement</a></p>
                <p> <a href="userhome.php">Home</a></p>
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
    <div class="container">
        <section>
            <div class="update">
                <h2>Latest Update: June 4, 2024</h2>
                <p><strong>We are excited to announce the latest update to our website!</strong></p>
    <p><strong>This update also includes various performance improvements and bug fixes to enhance the overall user experience.</strong></p>
    <p><strong>Thank you for your continued support!</strong></p>
        
            </div>
            <div class="update">
                <h3>May 20, 2024</h3>
                <p><strong>Improved website performance.</strong></p>
            </div>
        </section>
        <section>
            <h2>Feedback</h2>
            <form action="submit_feedback.php" method="post">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Your Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <input type="submit" value="Submit Feedback">
            </form>
        </section>
    </div>
    <footer>
            &copy; 2024 MMU Clubhub Connect. All Rights Reserved.
        </footer>
</body>
</html>
