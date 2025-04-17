<?php

include('../resources/conn.php');


if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}


$per_page = 10; // Number of tickets per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Calculate offsets
$start = ($page - 1) * $per_page;

// Queries with pagination
$student_query = "SELECT * FROM students_tickets ORDER BY created_at DESC LIMIT $start, $per_page";
$parent_query = "SELECT * FROM parents_tickets ORDER BY created_at DESC LIMIT $start, $per_page";
$staff_query = "SELECT * FROM staffs_tickets ORDER BY created_at DESC LIMIT $start, $per_page";

$student_result = $conn->query($student_query);
$parent_result = $conn->query($parent_query);
$staff_result = $conn->query($staff_query);

// Fetch all tickets
$students_tickets = $student_result->num_rows > 0 ? $student_result->fetch_all(MYSQLI_ASSOC) : [];
$parents_tickets = $parent_result->num_rows > 0 ? $parent_result->fetch_all(MYSQLI_ASSOC) : [];
$staffs_tickets = $staff_result->num_rows > 0 ? $staff_result->fetch_all(MYSQLI_ASSOC) : [];

$total_students_tickets = $conn->query("SELECT COUNT(id) AS total FROM students_tickets")->fetch_assoc()['total'];
$total_parents_tickets = $conn->query("SELECT COUNT(id) AS total FROM parents_tickets")->fetch_assoc()['total'];
$total_staffs_tickets = $conn->query("SELECT COUNT(id) AS total FROM staffs_tickets")->fetch_assoc()['total'];

$total_pages_students = ceil($total_students_tickets / $per_page);
$total_pages_parents = ceil($total_parents_tickets / $per_page);
$total_pages_staffs = ceil($total_staffs_tickets / $per_page);

// Handle ticket status update for any table
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['status'], $_POST['ticket_id'], $_POST['table'])) {
        $ticket_id = intval($_POST['ticket_id']); // Ensure ticket_id is an integer
        $status = $_POST['status'];
        $table = $_POST['table'];

        // Whitelist tables to prevent SQL injection
        $allowed_tables = ['students_tickets', 'parents_tickets', 'staffs_tickets'];
        if (!in_array($table, $allowed_tables)) {
            $_SESSION['message'] = "Invalid table name.";
            header('Location: dashboard.php');
            exit;
        }

        // Use a prepared statement for dynamic queries
        $update_query = "UPDATE $table SET status = ? WHERE id = ?";
        $stmt = $conn->prepare($update_query);

        if ($stmt) {
            $stmt->bind_param('si', $status, $ticket_id);
            if ($stmt->execute()) {
                $_SESSION['message'] = "Ticket status updated successfully.";
            } else {
                $_SESSION['message'] = "Error updating ticket: " . $stmt->error;
            }
            $stmt->close();
        } else {
            $_SESSION['message'] = "Error preparing statement: " . $conn->error;
        }

        header('Location: dashboard.php'); // Redirect back to the same page
        exit;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/helpdesk/dashboard.css">
    <style>
        .logout-btn{
            position: absolute;
            top: 2%;
            left: 2%;
        }
        .logout-btn button{
            background: #007BFF;
            color: white;
            border: 1px solid white;
            padding: 4px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="logout-btn">
    <form action="./logout.php" method="POST">
        <button>Logout</button>
    </form>
</div>
<div class="dashboard">
    <h2>Admin Dashboard</h2>

    <?php if (isset($_SESSION['message'])): ?>
        <div class="message"><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></div>
    <?php endif; ?>

    <!-- Students Tickets Table -->
    <h3>Student Tickets</h3>
    <table>
    <thead>
        <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Reg No</th>
            <th>Email</th>
            <th>Department</th>
            <th>Title</th>
            <!-- <th>Description</th> -->
            <th>Status</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students_tickets as $index => $ticket): ?>
            <tr>
                <td><?php echo $index + 1; ?></td> <!-- Display the serial number -->
                <td><?php echo htmlspecialchars($ticket['name']); ?></td>
                <td><?php echo htmlspecialchars($ticket['regno']); ?></td>
                <td><?php echo htmlspecialchars($ticket['email']); ?></td>
                <td><?php echo htmlspecialchars($ticket['dept']); ?></td>
                <td><?php echo htmlspecialchars($ticket['title']); ?></td>
                <!-- <td><?php echo htmlspecialchars($ticket['description']); ?></td> -->
                <td>
                    <form action="dashboard.php" method="POST" class="status-form" data-ticket-id="<?php echo $ticket['id']; ?>" data-table="students_tickets">
                        <select name="status" required>
                            <option value="Pending" <?php echo $ticket['status'] == 'Pending' ? 'selected' : ''; ?>>Pending</option>
                            <option value="Resolved" <?php echo $ticket['status'] == 'Resolved' ? 'selected' : ''; ?>>Resolved</option>
                        </select>
                        <button type="submit">Update Status</button>
                        
                    </form>
                </td>
                <td>
                    <button type="button" class="view-query-btn" data-query="<?php echo htmlspecialchars(json_encode($ticket)); ?>">View Query</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

    <div class="pagination">
        <?php for ($i = 1; $i <= $total_pages_students; $i++): ?>
            <a href="dashboard.php?page=<?php echo $i; ?>" class="<?php echo $page == $i ? 'active' : ''; ?>"><?php echo $i; ?></a>
        <?php endfor; ?>
    </div>

    <!-- Parents Tickets Table -->
    <h3>Parent Tickets</h3>
    <table>
    <thead>
        <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Mobile No</th>
            <th>Address</th>
            <th>Title</th>
            <!-- <th>Description</th> -->
            <th>Status</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($parents_tickets as $index => $ticket): ?>
            <tr>
                <td><?php echo $index + 1; ?></td> <!-- Display the serial number -->
                <td><?php echo htmlspecialchars($ticket['name']); ?></td>
                <td><?php echo htmlspecialchars($ticket['mob_no']); ?></td>
                <td><?php echo htmlspecialchars($ticket['address']); ?></td>
                <td><?php echo htmlspecialchars($ticket['title']); ?></td>
                <!-- <td><?php echo htmlspecialchars($ticket['description']); ?></td> -->
                <td>
                    <form action="dashboard.php" method="POST" class="status-form" data-ticket-id="<?php echo $ticket['id']; ?>" data-table="parents_tickets">
                        <select name="status" required>
                            <option value="Pending" <?php echo $ticket['status'] == 'Pending' ? 'selected' : ''; ?>>Pending</option>
                            <option value="Resolved" <?php echo $ticket['status'] == 'Resolved' ? 'selected' : ''; ?>>Resolved</option>
                        </select>
                        <button type="submit">Update Status</button>
                    </form>
                </td>
                <td>
                    <button type="button" class="view-query-btn" data-query="<?php echo htmlspecialchars(json_encode($ticket)); ?>">View Query</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

    <div class="pagination">
        <?php for ($i = 1; $i <= $total_pages_parents; $i++): ?>
            <a href="dashboard.php?page=<?php echo $i; ?>" class="<?php echo $page == $i ? 'active' : ''; ?>"><?php echo $i; ?></a>
        <?php endfor; ?>
    </div>

    <!-- Staffs Tickets Table -->
    <h3>Staff Tickets</h3>
    <table>
    <thead>
        <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Department</th>
            <th>Email</th>
            <th>Mobile No</th>
            <th>Title</th>
            <!-- <th>Description</th> -->
            <th>Status</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($staffs_tickets as $index => $ticket): ?>
            <tr>
                <td><?php echo $index + 1; ?></td> <!-- Display the serial number -->
                <td><?php echo htmlspecialchars($ticket['name']); ?></td>
                <td><?php echo htmlspecialchars($ticket['dept']); ?></td>
                <td><?php echo htmlspecialchars($ticket['email']); ?></td>
                <td><?php echo htmlspecialchars($ticket['mob_no']); ?></td>
                <td><?php echo htmlspecialchars($ticket['title']); ?></td>
                <!-- <td><?php echo htmlspecialchars($ticket['description']); ?></td> -->
                <td>
                    <form action="dashboard.php" method="POST" class="status-form" data-ticket-id="<?php echo $ticket['id']; ?>" data-table="staffs_tickets">
                        <select name="status" required>
                            <option value="Pending" <?php echo $ticket['status'] == 'Pending' ? 'selected' : ''; ?>>Pending</option>
                            <option value="Resolved" <?php echo $ticket['status'] == 'Resolved' ? 'selected' : ''; ?>>Resolved</option>
                        </select>
                        <button type="submit">Update Status</button>
                    </form>
                </td>
                <td>
                    <button type="button" class="view-query-btn" data-query="<?php echo htmlspecialchars(json_encode($ticket)); ?>">View Query</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

    <div class="pagination">
        <?php for ($i = 1; $i <= $total_pages_staffs; $i++): ?>
            <a href="dashboard.php?page=<?php echo $i; ?>" class="<?php echo $page == $i ? 'active' : ''; ?>"><?php echo $i; ?></a>
        <?php endfor; ?>
    </div>
</div>

<!-- Popup container -->
<div class="popup-container" id="popup-container">
    <div class="popup-header">Query Details</div>
    <table class="popup-table">
        <tr>
            <th>S.No:</th>
            <td id="popup-id"></td>
        </tr>
        <tr>
            <th>Name:</th>
            <td id="popup-name"></td>
        </tr>
        <tr>
            <th>Reg No/Mobile No:</th>
            <td id="popup-regno-mobno"></td>
        </tr>
        <tr>
            <th>Title:</th>
            <td id="popup-title"></td>
        </tr>
        <tr>
            <th>Description:</th>
            <td id="popup-description"></td>
        </tr>
        <tr>
            <th>Status:</th>
            <td id="popup-status"></td>
        </tr>
    </table>
    <a href="javascript:void(0);" class="popup-close" id="popup-close">Close</a>
</div>


<script>
    // Show popup with query details
    document.querySelectorAll('.view-query-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            const query = JSON.parse(this.getAttribute('data-query'));

            document.getElementById('popup-id').textContent = query.id;
            document.getElementById('popup-name').textContent = query.name || query.mob_no;
            document.getElementById('popup-regno-mobno').textContent = query.regno || query.mob_no;
            document.getElementById('popup-title').textContent = query.title;
            document.getElementById('popup-description').textContent = query.description;
            document.getElementById('popup-status').textContent = query.status;

            document.getElementById('popup-container').style.display = 'block';
        });
    });

    // Close popup
    document.getElementById('popup-close').addEventListener('click', function() {
        document.getElementById('popup-container').style.display = 'none';
    });

    // Handle the status update via AJAX
    document.querySelectorAll('.status-form').forEach(function(form) {
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const status = form.querySelector('select[name="status"]').value;
        const ticketId = form.dataset.ticketId;
        const table = form.dataset.table;

        fetch('dashboard.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `status=${encodeURIComponent(status)}&ticket_id=${encodeURIComponent(ticketId)}&table=${encodeURIComponent(table)}`
        })
        .then(response => response.text())
        .then(data => {
            // Display the success popup
            showSuccessPopup('Status updated successfully!');
        })
        .catch(error => {
            console.error('Error updating status:', error);
        });
    });
});


</script>

<div id="admission-enquiry" >

<h2 >Admission Enquiry</h2>

<?php

$query = "SELECT * FROM enquiry ORDER BY submitted_at DESC"; // Fetch all data
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>City</th>
                <th>School</th>
                <th>Major</th>
                <th>10th Score</th>
                <th>12th Score</th>
                <th>Heard About</th>
                <th>Submitted At</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['mobile']}</td>
                <td>{$row['city']}</td>
                <td>{$row['school']}</td>
                <td>{$row['major']}</td>
                <td>{$row['tenth_score']}</td>
                <td>{$row['twelth_score']}</td>
                <td>{$row['hear_about']}</td>
                <td>{$row['submitted_at']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "<p>No enquiries found.</p>";
}


?>



</div>

<div class="success-popup" id="successPopup">
    <div class="popup-content">
        <p>Success! Status updated successfully.</p>
        <button onclick="closePopup()">Close</button>
    </div>
</div>

</body>
</html>