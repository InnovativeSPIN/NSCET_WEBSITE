<?php
include('../resources/conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports | <?php echo $colle_Name; ?></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/resources/style.css">
    <link rel="stylesheet" href="../assets/css/sport/style.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('../resources/navbar.php'); ?>

    <div class="main">
    <div class="sports">
        <!-- Hero Section -->
        <section class="hero-section" style="background: url('../assets/img/sports/sports.JPG') no-repeat center/cover;">
            <h1 class="dept-heading">Sports</h1>
        </section>

        <!-- Intro Paragraph -->
        <p class="sports-intro">
            At NSCET College, sports are a key part of student life, promoting teamwork, fitness, and discipline. The college provides excellent facilities for both boys and girls, encouraging participation in various sports like football, basketball, cricket, volleyball, and athletics. Regular tournaments and events help students showcase their talent and sportsmanship. Whether for fun or competition, NSCET ensures every student gets the opportunity to excel in sports.
        </p>

      <!-- Sports Incharge Section -->
<h2 class="section-heading">Sports Incharge</h2>
<div class="incharge-container">
    <div class="incharge-item">
        <img src="../assets/img/sports/sundararajan.jpg" alt="Sundararajan" class="incharge-img">
        <h3 class="incharge-name">Mr. K. Sundararajan</h3>
        <p class="incharge-details">M.A., M.P.Ed., M.Phil., PG.YED., (Ph.D)., <br>HOD & Physical Director</p>
    </div>
    <div class="incharge-item">
        <img src="../assets/img/sports/Nethaji.jpg" alt="Selva Kumar" class="incharge-img">
        <h3 class="incharge-name">Mr.Nethaji</h3>
        <!-- <p class="incharge-details">BPES., M.P.Ed., M.Phil., <br>Physical Director</p> -->
    </div>
    <div class="incharge-item">
        <img src="../assets/img/sports/Malaini.jpg" alt="Malini" class="incharge-img">
        <h3 class="incharge-name">Mrs. R. Malini</h3>
        <p class="incharge-details">B.P.Ed., M.P.Ed., P.G.D.Y., <br>Physical Directress</p>
    </div>
</div>

        <!-- Sports List Section -->
        <h2 class="section-heading">Sports in Our College</h2>
        <div class="sports-container">
            <div class="sport-item">
                <h4 class="sport-title">Basketball</h4>
                <img src="../assets/img/sports/Basketball.png" alt="Basketball" class="sport-img">
            </div>
            <div class="sport-item">
                <h4 class="sport-title">Volleyball</h4>
                <img src="../assets/img/sports/vally.png" alt="Volleyball" class="sport-img">
            </div>
            <div class="sport-item">
                <h4 class="sport-title">Badminton</h4>
                <img src="../assets/img/sports/badmiton.png" alt="Badminton" class="sport-img">
            </div>
            <div class="sport-item">
                <h4 class="sport-title">Kabaddi</h4>
                <img src="../assets/img/sports/kabadi.png" alt="Kabaddi" class="sport-img">
            </div>
            <div class="sport-item">
                <h4 class="sport-title">Table Tennis</h4>
                <img src="../assets/img/sports/table.png" alt="Kho Kho" class="sport-img">
            </div>
            <div class="sport-item">
                <h4 class="sport-title">Kho Kho</h4>
                <img src="../assets/img/sports/khokho.png" alt="Kho Kho" class="sport-img">
            </div>
            <div class="sport-item">
                <h4 class="sport-title">Handball</h4>
                <img src="../assets/img/sports/handball.png" alt="Kho Kho" class="sport-img">
            </div>
        </div>
    </div>
</div>

    <?php include('../resources/footer.php'); ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../assets/js/resources/script.js"></script>
</body>
</html>