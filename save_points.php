<a?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("location:index.php");
}

?></a>
<?php
session_start();
if (!isset($_SESSION["username"])) {

}

if (isset($_POST['points'])) {
    $points = intval($_POST['points']);
    $_SESSION['points'] = $points;

    // Database connection
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'phplogin';
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

    if (mysqli_connect_errno()) {
        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    $stmt = $con->prepare("UPDATE accounts SET points = ? WHERE id = ?");
    $stmt->bind_param('ii', $points, $_SESSION['id']);
    $stmt->execute();
    $stmt->close();

    echo "Points saved successfully";
} else {
    echo "No points data received";
}
?>
