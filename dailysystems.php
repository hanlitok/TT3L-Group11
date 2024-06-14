<a?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("location:index.php");
}

?>

<?php
session_start();
if (!isset($_SESSION["username"])) {
}

$points = isset($_SESSION["points"]) ? $_SESSION["points"] : 0;
$_SESSION["points"] = 0; // Set initial points to 0
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Mini Calendar</title>
</head>
<body>
    <div>
        <nav>
            <a href="ahome.php" class="back">Back</a>
            <a href="redeems.php" class="back">Redeem Rewards</a>
        </nav>
    </div>
    <div class="container">
        <div class="calendar">
            <div class="header">
                <div class="month"></div>
                <div class="btns">
                    <div class="btn today-btn">
                        <i class="fas fa-calendar-day"></i>
                    </div>
                    <div class="btn prev-btn">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                    <div class="btn next-btn">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </div>
            <div class="weekdays">
                <div class="day">Sun</div>
                <div class="day">Mon</div>
                <div class="day">Tue</div>
                <div class="day">Wed</div>
                <div class="day">Thu</div>
                <div class="day">Fri</div>
                <div class="day">Sat</div>
            </div>
            <div class="days" id="daysContainer">
                <!-- Days will be added using JavaScript -->
            </div>
        </div>
        <div id="pointsDisplay" class="points-display">Points: <?php echo $points; ?></div>
        <button onclick="savePoints()">Save Points</button>
    </div>

    <!-- SCRIPT -->
    <script src="script.js"></script>
    <script>
        let points = <?php echo $points; ?>;

        function savePoints() {
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "save_points.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log(xhr.responseText);
                }
            };
            xhr.send("points=" + points);
        }

        function updatePoints() {
            const pointsDisplay = document.getElementById('pointsDisplay');
            pointsDisplay.textContent = `Points: ${points}`;
        }

        function toggleDay(event) {
            const day = event.target;
            if (!day.classList.contains('checked')) {
                day.classList.add('checked');
                points++;
                updatePoints();
            }
        }

        function createCalendarDays() {
            const daysContainer = document.getElementById('daysContainer');
            for (let i = 1; i <= 31; i++) {
                const day = document.createElement('div');
                day.textContent = i;
                day.addEventListener('click', toggleDay);
                daysContainer.appendChild(day);
            }
        }

        createCalendarDays();
    </script>
</body>
</html>