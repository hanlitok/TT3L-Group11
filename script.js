/* script.js */
document.addEventListener('DOMContentLoaded', function () {
    const monthEl = document.querySelector('.month');
    const daysContainer = document.querySelector('.days');
    const pointsDisplay = document.getElementById('pointsDisplay');
  
    const pointsKey = 'dailyCheckInPoints';
    const checkInStatusKey = 'checkInStatus';
  
    let points = parseFloat(localStorage.getItem(pointsKey)) || 0;
    let checkInStatus = JSON.parse(localStorage.getItem(checkInStatusKey)) || {};
  
    pointsDisplay.textContent = `Points: ${points}`;
  
    const currentMonth = new Date().getMonth();
    const currentYear = new Date().getFullYear();
    const currentDay = new Date().getDate();
    const today = new Date().toLocaleDateString('en-US', { weekday: 'long' });
  
    function renderCalendar(month, year) {
        daysContainer.innerHTML = '';
        monthEl.textContent = new Date(year, month).toLocaleDateString('en-US', { month: 'long', year: 'numeric' });
  
        const firstDayOfMonth = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();
  
        for (let i = 0; i < firstDayOfMonth; i++) {
            const emptyDay = document.createElement('div');
            emptyDay.classList.add('day');
            daysContainer.appendChild(emptyDay);
        }
  
        for (let i = 1; i <= daysInMonth; i++) {
            const dayEl = document.createElement('div');
            dayEl.classList.add('day');
            dayEl.textContent = i;
  
            const date = new Date(year, month, i).toLocaleDateString('en-US');
  
            if (i === currentDay && month === currentMonth && year === currentYear) {
                dayEl.classList.add('today');
            }
  
            if (checkInStatus[date]) {
                dayEl.classList.add('checked-in');
            }
  
            dayEl.addEventListener('click', () => handleCheckIn(date, dayEl));
            daysContainer.appendChild(dayEl);
        }
    }
  
    function handleCheckIn(date, element) {
        const todayDate = new Date().toLocaleDateString('en-US');
  
        if (date === todayDate && !checkInStatus[date]) {
            points += 0.5;
            checkInStatus[date] = true;
            localStorage.setItem(pointsKey, points);
            localStorage.setItem(checkInStatusKey, JSON.stringify(checkInStatus));
            pointsDisplay.textContent = `Points: ${points}`;
            element.classList.add('checked-in');
            alert('Check-in successful! You have earned 0.5 points.');
        } else if (checkInStatus[date]) {
            alert('You have already checked in today!');
        } else {
            alert('You can only check in on the current day.');
        }
    }
  
    document.querySelector('.today-btn').addEventListener('click', () => {
        renderCalendar(currentMonth, currentYear);
    });
  
    document.querySelector('.prev-btn').addEventListener('click', () => {
        if (currentMonth === 0) {
            renderCalendar(11, currentYear - 1);
        } else {
            renderCalendar(currentMonth - 1, currentYear);
        }
    });
  
    document.querySelector('.next-btn').addEventListener('click', () => {
        if (currentMonth === 11) {
            renderCalendar(0, currentYear + 1);
        } else {
            renderCalendar(currentMonth + 1, currentYear);
        }
    });
  
    // Automatically render the calendar for the current month and year
    renderCalendar(currentMonth, currentYear);
  });
// Check if points are already stored in localStorage, if not, initialize them to 0
if (!localStorage.getItem("points")) {
    localStorage.setItem("points", "0");
}

// Function to update points in localStorage
function updatePoints(points) {
    localStorage.setItem("points", points.toString());
}

// Function to get points from localStorage
function getPoints() {
    return parseInt(localStorage.getItem("points"));
}

// Function to display points on the profile
function displayPoints() {
    document.getElementById("pointsDisplay").innerText = getPoints();
}

// Call displayPoints() to initially display points
displayPoints();
function gainPoints(points) {
    let currentPoints = getPoints();
    currentPoints += points; // Add the new points
    updatePoints(currentPoints); // Update the points in localStorage
    displayPoints(); // Update the displayed points on the profile
}
// Assume this is called when the user successfully checks in
gainPoints(10); // Add 10 points to the user's total points

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

