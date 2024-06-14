<a?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("location:index.php");
}

?>
<?php
session_start();
if (!isset($_SESSION["username"])) {;

}

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Fetch user points from the database
$stmt = $con->prepare("SELECT points FROM accounts WHERE id = ?");
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($points);
$stmt->fetch();
$stmt->close();

// Define rewards
$rewards = [
    "voucher10" => ["name" => "Voucher $10", "cost" => 10],
    "voucher20" => ["name" => "Voucher $20", "cost" => 20],
    "voucher50" => ["name" => "Voucher $50", "cost" => 50]
];

// Handle reward redemption
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["reward"])) {
    $rewardKey = $_POST["reward"];
    if (array_key_exists($rewardKey, $rewards)) {
        $reward = $rewards[$rewardKey];
        if ($points >= $reward["cost"]) {
            $points -= $reward["cost"];
            $_SESSION["points"] = $points;

            // Save the redeemed voucher to the database
            $stmt = $con->prepare("INSERT INTO vouchers (user_id, voucher_name) VALUES (?, ?)");
            $stmt->bind_param('is', $_SESSION['id'], $reward['name']);
            $stmt->execute();
            $stmt->close();

            // Update the points in the database
            $stmt = $con->prepare("UPDATE accounts SET points = ? WHERE id = ?");
            $stmt->bind_param('ii', $points, $_SESSION['id']);
            $stmt->execute();
            $stmt->close();

            $message = "{$reward['name']} redeemed successfully!";
        } else {
            $message = "Not enough points to redeem {$reward['name']}.";
        }
    } else {
        $message = "Invalid reward selected.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Redeem Rewards</title>
</head>
<body>
    <nav>
        <a href="uhome.php" class="back">Back</a>
        <a href="http://localhost:3000/GitExercise-GroupTT3L-11-/Dailysystem.php" class="back">Mini Calendar</a>
    </nav>
    <div class="container">
        <h1>Redeem Rewards</h1>
        <div id="pointsDisplay">Points: <?php echo $points; ?></div>
        <?php if ($message) { echo "<p>$message</p>"; } ?>
        <form method="POST">
            <label for="reward">Choose a reward:</label>
            <select name="reward" id="reward">
                <?php
                foreach ($rewards as $key => $reward) {
                    echo "<option value=\"$key\">{$reward['name']} - {$reward['cost']} points</option>";
                }
                ?>
            </select>
            <button type="submit">Redeem Reward</button>
        </form>
    </div>
</body>
</html>
