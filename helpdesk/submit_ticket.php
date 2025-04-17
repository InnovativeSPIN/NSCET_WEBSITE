<?php
include('../resources/conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $role = $_POST['role'];
    $name = $_POST['name'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $ticket_id = strtoupper(uniqid("NSHD_")); 

    
    $regno = $mob_no = $dept = $email = $address = NULL;

    if ($role === 'student') {
        $regno = $_POST['regno'];
        $dept = $_POST['dept'];
        $year = $_POST['year'];
        $email = $_POST['email'];

        $sql = "INSERT INTO students_tickets (ticket_id, role, name, regno, dept, year, email, title, description) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssss", $ticket_id, $role, $name, $regno, $dept, $year, $email, $title, $description);
    } elseif ($role === 'parent') {
        $mob_no = $_POST['mob_no'];
        $address = $_POST['address'];

        $sql = "INSERT INTO parents_tickets (ticket_id, role, name, mob_no, address, title, description) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssss", $ticket_id, $role, $name, $mob_no, $address, $title, $description);
    } elseif ($role === 'staff') {
        $dept = $_POST['dept'];
        $mob_no = $_POST['mob_no'];
        $email = $_POST['email'];

        $sql = "INSERT INTO staffs_tickets (ticket_id, role, name, dept, mob_no, email, title, description) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssss", $ticket_id, $role, $name, $dept, $mob_no, $email, $title, $description);
    }

    if ($stmt->execute()) {
        echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    showSuccessPopup('$ticket_id');
                });
              </script>";
    } else {
        error_log("SQL Error: " . $stmt->error);
        echo "<p>Error: " . $stmt->error . "</p>";
    }
    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helpdesk Form</title>
   <link rel="stylesheet" href="../assets/css/helpdesk/submit_ticket.css">
   <style>
    #successPopup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000; 
    margin-left: 550; 
}


    #successPopup .popup-content {
    background-color: white;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
    max-width: 400px;
    width: 90%;
    animation: fadeIn 0.3s ease-in-out; /* Optional animation */
    position: relative;
}

/* Fade-in animation */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: scale(0.9);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

/* Close button styling */
#successPopup .close {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 20px;
    cursor: pointer;
    color: black;
}

/* Media query for small screens (mobile devices) */
@media screen and (max-width: 768px) {
    #successPopup .popup-content {
        width: 90%; /* Ensure popup fits within the viewport */
        padding: 15px; /* Slightly reduce padding */
        font-size: 14px; /* Adjust font size for readability */
        margin:0%;
    
    }
    #successPopup{
        margin: auto;
    }

    #successPopup .close {
        top: 8px;
        right: 10px;
        font-size: 18px; /* Adjust close button size */
    }
}

/* Media query for extra-small screens (very small devices) */
@media screen and (max-width: 480px) {
    #successPopup .popup-content {
        width: 95%; /* Make popup even more compact */
        padding: 10px; /* Further reduce padding */
        font-size: 12px; /* Smaller font size for ultra-small devices */
    }

    #successPopup .close {
        top: 5px;
        right: 8px;
        font-size: 16px; /* Smaller close button */
    }
    #successPopup{
        margin: auto;
    }
}
h2{
    margin-left: 600px;
    color: #007bff;
    margin-bottom: 20px;
    font-size: 24px;
    font-weight: bold;

}


    </style>
</head>
<body>

<h2>Submit a Query</h2>
<form method="POST" action="">
    <label>Name:</label><br>
    <input type="text" name="name" required><br>
    <label>Role:</label><br>
    <select name="role" id="role" onchange="toggleFields()" required>
        <option value="student" selected>Student</option>
        <option value="parent">Parent</option>
        <option value="staff">Staff</option>
    </select><br><br>
    <div id="studentFields">
        <label>RegNo:</label><br>
        <input type="text" name="regno"><br>
        <label>Department:</label><br>
        <input type="text" name="dept"><br>
        <label>Year:</label><br>
        <select name="year">
            <option value="1st">1st</option>
            <option value="2nd">2nd</option>
            <option value="3rd">3rd</option>
            <option value="4th">4th</option>
        </select><br>
        <label>Email:</label><br>
        <input type="email" name="email"><br>
    </div>
    <div id="parentFields" style="display: none;">
        <label>Mobile Number:</label><br>
        <input type="text" name="mob_no"><br>
        <label>Address:</label><br>
        <textarea name="address"></textarea><br>
    </div>
    <div id="staffFields" style="display: none;">
        <label>Department:</label><br>
        <input type="text" name="dept"><br>
        <label>Mobile Number:</label><br>
        <input type="text" name="mob_no"><br>
        <label>Email:</label><br>
        <input type="email" name="email"><br>
    </div>
    <label>Query Title:</label><br>
    <input type="text" name="title" required maxlength="25"><br>
    <label>Description:</label><br>
    <textarea name="description" required></textarea><br><br>
    <button type="submit">Submit</button>
</form>

<script>
function toggleFields() {
    const role = document.getElementById('role').value;
    document.getElementById('studentFields').style.display = role === 'student' ? 'block' : 'none';
    document.getElementById('parentFields').style.display = role === 'parent' ? 'block' : 'none';
    document.getElementById('staffFields').style.display = role === 'staff' ? 'block' : 'none';
}
function showSuccessPopup(ticket_id) {
    const popupHTML = `
       <div id="successPopup" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <h2>Success</h2>
        <p>Your Ticket ID: <strong id="ticketId">${ticket_id}</strong></p>
        <button onclick="copyTicketId()">Copy Ticket ID</button>
        <a href="check_ticket_status.php">Click here to check your ticket status</a>
        <p>*Note : Copy your ticket id </p>
        <button onclick="closePopup()">Close</button>
    </div>
</div>
    `;
   
    document.body.insertAdjacentHTML('beforeend', popupHTML);
    document.getElementById('successPopup').style.display = 'block';
}
function copyTicketId() {
        const ticketId = document.getElementById('ticketId').textContent;
        navigator.clipboard.writeText(ticketId).then(() => {
            alert('Ticket ID copied to clipboard!');
        }).catch(err => {
            alert('Failed to copy Ticket ID. Please try again.');
            console.error(err);
        });
    }

function closePopup() {
    const popup = document.getElementById('successPopup');
    if (popup) {
        popup.style.display = 'none';
        popup.remove(); // Remove the popup from the DOM
    }
}

</script>

</body>
</html>




