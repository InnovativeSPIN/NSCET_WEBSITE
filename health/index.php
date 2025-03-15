<?php

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Health Facilities | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  <!-- custom css -->
  <link rel="stylesheet" href="../assets/css/resources/style.css">
  <link rel="stylesheet" href="../assets/css/health/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



  <!-- custom js -->
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php

  include('../resources/navbar.php');


  ?>
  <section class="hero-section" style="background: url('../assets/img/health/health-hero.jpg') no-repeat center/cover;">
            <h1 class="dept-heading">Health Services</h1>
        </section>
<div class="main">
    <div class="health">
        

        <p class="health-intro">
            At NSCET, we prioritize the health of our students, both boys and girls. We have dedicated staff to ensure well-being, special rooms equipped for health services, and readily available first aid kits to handle emergencies effectively.
        </p>

        <img src="../assets/img/sports/Malaini.jpg" alt="Health Facility" class="health-img" width="180px">

        <h2 class="section-heading">Incharge</h2>
        <div class="incharge-container">
            <div class="incharge-item">
                <p class="incharge-name">Mrs. R. Malini</p>
                <p class="incharge-title">Physical Directress,Health Incharge</p>
            </div>
            <!-- Add more incharge members if needed -->
        </div>
    </div>
</div>





  <?php

  include('../resources/footer.php');


  ?>




  <!-- custom js -->
  <script src="../assets/js/resources/script.js"></script>
  <!-- swiper -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>

</html>