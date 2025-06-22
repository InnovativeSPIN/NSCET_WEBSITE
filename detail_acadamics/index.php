<?php
include('../resources/conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Controller Of Examination - NSCET </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="../assets/css/resources/style.css">
<link rel="stylesheet" href="../assets/css/department/style.css">


<!-- custom js -->
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>


<?php
include('../resources/navbar.php');
?>




<section class="hero-section" style="background: url('../assets/img/department/banner/') no-repeat center/cover;">
  <h1 class="dept-heading"><strong>Academic - NSCET</strong></h1>
</section>

<div id="main-box-container">

  




  <div class="dept-page-content">
    <!-- faculty section   -->

    <div id="section-5" class="section-content" style='display:flex;justify-content:center;'>
      <div id="faculties">
        <h1 class="section-title mb-2 text-center text-uppercase" style="margin-top:5%;">COURSES</h1>
        <div class="border-line" style="margin-bottom:5%;"></div>

        <div class="faculties-container">
          <section class="">
            <main class="office_bearers_details">
              <img alt="" class="card__image" src="/files/acadamics.jpg">
            </main>
          </section>

        </div>


      </div>
    </div>

  </div>
</div>





<?php
  include('../resources/footer.php');
  ?>
<!-- custom js -->
<script src="./assets/js/resources/script.js"></script>

</body>
</html>