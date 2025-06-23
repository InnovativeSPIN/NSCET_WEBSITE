<?php
include('../resources/conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Corner</title>
    <!-- Bootstrap 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/resources/style.css">
    <link rel="stylesheet" href="../assets/css/informationcorner/style.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('../resources/navbar.php'); ?>

    <div class="container my-5">
        <h1 class="text-center mb-4">Information Corner</h1>
        <div class="row g-4">
            <!-- Circular and Notices Card -->
            <div class="col-md-3">
                <a href="circular.php" class="text-decoration-none">
                    <div class="card h-100 shadow-sm text-center">
                        <div class="card-body">
                            <i class="fas fa-bullhorn fa-3x mb-3 text-primary"></i>
                            <h5 class="card-title">Circular and Notices</h5>
                            <p class="card-text">Recent updates and circulars from all departments.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Announcements Card -->
            <div class="col-md-3">
                <a href="announcements.php" class="text-decoration-none">
                    <div class="card h-100 shadow-sm text-center">
                        <div class="card-body">
                            <i class="fas fa-bell fa-3x mb-3 text-primary"></i>
                            <h5 class="card-title">Announcements</h5>
                            <p class="card-text">Latest announcements from the institution.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Newsletters Card -->
            <div class="col-md-3">
                <a href="newsletters.php" class="text-decoration-none">
                    <div class="card h-100 shadow-sm text-center">
                        <div class="card-body">
                            <i class="fas fa-newspaper fa-3x mb-3 text-primary"></i>
                            <h5 class="card-title">Newsletters</h5>
                            <p class="card-text">Recent newsletters and publications.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Job Openings Card -->
            <div class="col-md-3">
                <a href="job_openings.php" class="text-decoration-none">
                    <div class="card h-100 shadow-sm text-center">
                        <div class="card-body">
                            <i class="fas fa-briefcase fa-3x mb-3 text-primary"></i>
                            <h5 class="card-title">Job Openings</h5>
                            <p class="card-text">Available job opportunities for 2024 and 2025.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <?php include('../resources/footer.php'); ?>

    <!-- Custom JS -->
    <script defer src="../assets/js/resources/script.js"></script>
</body>
</html>