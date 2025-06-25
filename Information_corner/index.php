<?php
include('../resources/conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Corner | <?php echo isset($colle_Name) ? $colle_Name : 'NSCET'; ?></title>
    <!-- Bootstrap 5.0.0-alpha1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/resources/style.css">
    <link rel="stylesheet" href="../assets/css/informationcorner/style.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
    <!-- Favicon Placeholder -->
    <link rel="icon" href="../assets/img/favicon.ico" type="image/x-icon">
    <style>
        /* Navbar Fix */
        /* .navbar { */
            /* z-index: 1000; */
            /* background: #fff !important; */
            /* box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); */
        /* } */
        .navbar-toggler {
            border: none;
            padding: 0.5rem;
        }
        .navbar-collapse {
            background: #fff;
        }
      
        @media (max-width: 767px) {
            .navbar-collapse {
                max-height: 80vh;
                overflow-y: auto;
            }
            body {
                padding-top: 60px;
            }
        }
        /* Card Hover Effect */
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15) !important;
        }
    </style>
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <!-- Custom JS -->
    <script defer src="../assets/js/resources/script.js"></script>
    <!-- Fallback for Navbar Toggler -->
    <script>
        (function() {
            document.addEventListener('DOMContentLoaded', () => {
                const toggler = document.querySelector('.navbar-toggler');
                const collapse = document.querySelector('.navbar-collapse');
                if (toggler && collapse) {
                    toggler.addEventListener('click', () => {
                        collapse.classList.toggle('show');
                    });
                }
            });
        })();
    </script>
</body>
</html>