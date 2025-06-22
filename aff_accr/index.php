<?php
include('../resources/conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Affiliation & Accrediation - NSCET </title>
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

<style>
    button {
  margin-top: 15px;
  padding: 10px 20px;
  font-size: 16px;
  background-color: #007BFF;
  color: white;
  border: none;
  border-radius: 8px;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}
</style>


<!--<section class="hero-section" style="background: url('../assets/img/department/banner/') no-repeat center/cover;">-->
<!--  <h1 class="dept-heading"><strong>Controller Of Examination</strong></h1>-->
<!--</section>-->

<div id="main-box-container">

  <!--<section class="navigation-bar">-->
  <!--  <nav class="page__menu menu">-->
  <!--    <ul class="menu__list r-list">-->
  <!--      <li class="menu__group">Affiliation & Accrediation</li>-->
  <!--    </ul>-->
  <!--  </nav>-->
  <!--</section>-->
  <!-- reposive icon -->



  <div class="dept-page-content">
    <!-- faculty section   -->

    <div id="section-5" class="section-content">
      <div id="faculties">
        <h1 class="section-title mb-2 text-center text-uppercase" style="margin-top:5%;">Affiliation & Accrediation</h1>
        <div class="border-line" style="margin-bottom:5%;"></div>

        <div class="faculties-container">
          <section class="">
            <main class="office_bearers_details">
              <section class="college_info">
                <p style="margin: 20px 0; line-height: 1.6;">
                  Nadar Saraswathi College of Engineering and Technology, established in 2010, is a renowned institution approved by AICTE, New Delhi, and affiliated to Anna University, Chennai. Since its inception, the college has maintained a strong commitment to quality education and academic excellence. It has been awarded the ISO 9001:2015 certification for its robust quality management systems and has earned an impressive NAAC A accreditation, reflecting its high standards in teaching, infrastructure, and student outcomes. Through its disciplined environment and student-centric approach, NSCET continues to be a leading choice for aspiring engineers.
                </p>
                <a href="/files/Approval%20and%20accrediation.pdf" target="_blank" style="display: inline-block; padding: 10px 20px; background-color: #007BFF; color: white; text-decoration: none; border-radius: 6px;">
  Certificate
</a>
              </section>
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