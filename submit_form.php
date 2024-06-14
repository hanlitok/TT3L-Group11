<a?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("location:index.php");
}

?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $club = htmlspecialchars($_POST['club']);

    // Process the form data, e.g., save to a database or send an email

    echo "Thank you, $name! You have successfully signed up for the $club.";
}
?>
