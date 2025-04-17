<?php


// Database connection
include('../resources/conn.php');


$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to fetch admin details
    $query = "SELECT * FROM users WHERE email = ? LIMIT 1";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the password
        if ($password==$user['password']) {
            // Set session variables
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_name'] = $user['name'];
            
            // Redirect to the dashboard
            header('Location: dashboard.php');
            exit;
        } else {
            $error = "Invalid email or password.";
        }
    } else {
        $error = "Admin not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../assets/css/helpdesk/login.css">
    <style> </style>
</head>
<body>

<div class="login-form">
    <h2>Admin Login</h2>
    <?php if (isset($error)) { echo "<div class='error'>$error</div>"; } ?>
    <form action="" method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
