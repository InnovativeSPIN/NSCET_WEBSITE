<?php

include('../resources/conn.php');

if (isset($_SESSION['username'])) {
    header("Location: ./index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        echo "<script>alert('All fields are required');</script>";
    } else {
        $stmt = $conn->prepare("SELECT password FROM users WHERE name = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
        
            if ($password==$user['password']) {
                $_SESSION['username'] = $username;
                header("Location: ./");
                exit();
            } else {
                echo "<script>alert('Incorrect password. Please try again');</script>";
            }
        } else {
            echo "<script>alert('User not found. Please check your username');</script>";
        }

        $stmt->close();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../assets/css/resources/resource.css">
    <style>
    body {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: var(--background-color);
    overflow: hidden;
}

.login-container {
    background: var(--dark-bglight-color);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    padding: 40px;
    width: 320px;
    box-shadow: 0 8px 32px rgba(0, 16, 191, 0.5);
    border: 1px solid var(--bglight-color);
    position: relative;
    overflow: hidden;
    animation: fadeIn 0.8s ease-in-out;
}

.login-container h2 {
    color: var(--white);
    text-align: center;
    margin-bottom: 30px;
    font-size: 28px;
    text-transform: uppercase;
    letter-spacing: 2px;
    text-shadow: 0 0 10px var(--primary-color);
}

.login-container label {
    color: var(--white-text);
    font-size: 14px;
    margin-bottom: 8px;
    display: block;
    font-weight: 500;
}

.login-container input {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border: none;
    border-radius: 12px;
    background: var(--bglight-color);
    color: var(--white);
    font-size: 16px;
    box-shadow: inset 4px 4px 8px rgba(0, 0, 0, 0.1), 
                inset -4px -4px 8px rgba(255, 255, 255, 0.1);
    box-sizing: border-box;
    transition: all 0.3s ease;
}

.login-container input:focus {
    outline: none;
    background: rgba(0, 16, 191, 0.5);
    box-shadow: 0 0 15px var(--primary-color);
}

.login-container input::placeholder {
    color: var(--white-text);
}

.login-container button {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 12px;
    background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
    color: var(--white);
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
    cursor: pointer;
    transition: all 0.4s ease;
    box-shadow: 0 5px 15px rgba(0, 16, 191, 0.5);
}

.login-container button:hover {
    background: linear-gradient(90deg, var(--secondary-color), var(--primary-color));
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0, 16, 191, 0.5);
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 400px) {
    .login-container {
        width: 90%;
        padding: 20px;
    }
}
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>