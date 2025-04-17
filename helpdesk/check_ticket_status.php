<?php
include '../resources/conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ticket_id = $_POST['ticket_id'];

    
    $sql = "SELECT ticket_id, role, name, title, description, status FROM students_tickets WHERE ticket_id = '$ticket_id'
            UNION ALL
            SELECT ticket_id, role, name, title, description, status FROM parents_tickets WHERE ticket_id = '$ticket_id'
            UNION ALL
            SELECT ticket_id, role, name, title, description, status FROM staffs_tickets WHERE ticket_id = '$ticket_id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                margin: 0;
                padding: 0;
            }

            h2 {
                text-align: center;
                color: #333;
                margin-top: 50px;
            }

            h3 {
                color: #2e3a59;
                font-size: 1.8em;
                margin-bottom: 20px;
                text-align: center;
            }

            .ticket-details {
                max-width: 600px;
                margin: 20px auto;
                padding: 20px;
                background-color: #ffffff;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }

            .ticket-details p {
                font-size: 1.1em;
                margin: 10px 0;
                color: #555;
            }

            .ticket-details span {
                font-weight: bold;
                color: #333;
            }

            .ticket-details .status {
                background-color: #e7f4e8;
                color: #5cb85c;
                padding: 5px 10px;
                border-radius: 5px;
            }

            .ticket-details .no-status {
                background-color: #f8d7da;
                color: #c82333;
                padding: 5px 10px;
                border-radius: 5px;
            }

            .ticket-not-found {
                text-align: center;
                color: #ff4444;
                font-size: 1.2em;
                margin-top: 30px;
            }
        </style>";
        
        echo "<div class='ticket-details'>";
        echo "<h3>Ticket Details</h3>";
        echo "<p><span>Ticket ID:</span> " . $row['ticket_id'] . "</p>";
        echo "<p><span>Role:</span> " . $row['role'] . "</p>";
        echo "<p><span>Name:</span> " . $row['name'] . "</p>";
        echo "<p><span>Title:</span> " . $row['title'] . "</p>";
        echo "<p><span>Description:</span> " . $row['description'] . "</p>";
        echo "<p><span>Status:</span> " . (isset($row['status']) ? "<span class='status'>" . $row['status'] . "</span>" : "<span class='no-status'>Status not available</span>") . "</p>";
        echo "</div>";
    } else {
        echo "<p class='ticket-not-found'>No ticket found with ID: $ticket_id</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Ticket Status</title>
    <link rel="stylesheet" href="../assets/css/helpdesk/check_ticket_status.css">
</head>
<body>
    <h2>Check Your Ticket Status</h2>
    <form method="POST" action="">
        <label>Enter your Ticket ID:</label><br>
        <input type="text" name="ticket_id" required><br><br>
        <button type="submit">Check Status</button>
    </form>
</body>
</html>
