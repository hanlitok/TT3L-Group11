<?php
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
<title>Program Management</title>
<style>
    /* CSS for styling */
    body {
        font-family: Arial, sans-serif;
    }
    .form-group {
        margin-bottom: 15px;
    }
    label {
        display: block;
        font-weight: bold;
    }
    input[type="text"] {
        width: 100%;
        padding: 5px;
    }
    button {
        padding: 5px 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
    }
</style>
</head>
<body>
    <h1>Program Management</h1>
    <div class="form-group">
        <label for="program-name">Program Name:</label>
        <input type="text" id="program-name">
    </div>
    <div class="form-group">
        <label for="program-date">Program Date:</label>
        <input type="text" id="program-date" placeholder="MM/DD/YYYY">
    </div>
    <div class="form-group">
        <label for="program-location">Program Location:</label>
        <input type="text" id="program-location">
    </div>
    <button onclick="addProgram()">Add Program</button>

    <script>
        function addProgram() {
            // Get the values from the input fields
            var programName = document.getElementById('program-name').value;
            var programDate = document.getElementById('program-date').value;
            var programLocation = document.getElementById('program-location').value;

            // Add the program information (this is a simplified example)
            alert('Program added: ' + programName + ' - ' + programDate + ' - ' + programLocation);
        }
    </script>
</body>
</html>
