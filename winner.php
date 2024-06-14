<?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("location:index.php");
}

?>

<?php echo $_SESSION["username"] ?>
<?php

$host="localhost";
$user="root";
$password="";
$db="user";

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
	die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];

	$sql="select * from login where username= '".$username."' AND password='".$password."'
	";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{   
		$_SESSION["username"]=$username;
		header("location:userhome.php");

	}

	elseif($row["usertype"]=="admin")
	{ 
		$_SESSION["username"]=$username;
		header("location:adminhome.php");

	}
	else
	{
       echo "Wrong Username / Password";
	}
}

?>


<!DOCTYPE html>
<html>
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
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: flex;
            padding: 30px 0;
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
            background-color: #555;
        }
        main {
            padding: 20px;
            text-align: center; 
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
            background-color: #555555;
            color: #ddd;
            text-align: center;
            padding: 10px 0;
        }
        h1 {
            margin: 5px auto;
            text-align: center;
            color: white;
            font-size: 1em;
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
            font-size: 1em;
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
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 1348px; 
            height: 200px; 
        }
        /* announcement */
        .image-wrapper {
            background-color: #555;
            color: #fff;
            text-align: center;
        }
        .item {
            position: relative;
            display: inline-block;
            margin: 5px;
            padding: 10px;
            background-color: #444;
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
            background-color: #444;
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

    </style>
    <nav>
    <a href="announcement.php" class="back">back</a>
    </nav>
</head>
<body>
    <header>
        <button id="openBtn" class="button"><span>Profile</span></button>
        <div id="profilePopup" class="popup">
            <div class="popup-content">
                <div class="profile-header">
                    <h2> Profile</h2>
                    <span class="closeBtn">&times;</span>
                </div>
                <div class="wordopenprofile">
                <p>Name: Admin</p>
                <div class="log">
                 <a href="index.php" target="_blank">Logout</a>
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
            <div class="item"><a href="winner.php">Winner Updates</a>
            </div>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Add New Winner</title>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Add New Winner</h1>
        </header>
        
        <form action="process.php" method="post">
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="title" placeholder="Name:">
            </div>
            <div class="form-elemnt my-4">
                <select name="type" id="" class="form-control">
                    <option value="">Clubs</option>
                    <option value="Chinese Club">Chinese Club</option>
                    <option value="Malay Clubs">Malay Clubs</option>
                    <option value="Food Clubs">Food Clubs</option>
                    <option value="Badminton Clubs">Badminton Clubs</option>
                </select>
            </div>
            <div>
            <div class="item"><a href="winner.php">Add Winners</a>
            </div>
        </form>
        
        
    </div>
</body>
</html>
        <footer>
            <p>&copy; 2024 MMU Clubhub Connect. All Rights Reserved.</p>
        </footer>
</body>
</html>
