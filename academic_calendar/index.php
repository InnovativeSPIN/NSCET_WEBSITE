<?php 

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Academic calendar | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="../assets/css/resources/style.css">
<link rel="stylesheet" href="../assets/css/academic_calendar/style.css">


<!-- custom js -->
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include('../resources/navbar.php');?>


<section class="hero-section" style="background: url('../assets/img/main/college_main.jpg') no-repeat center/cover;">
  <h1 class="dept-heading">Academic calendar</h1>
</section>
<div class="container">
<div class="about_content">
   <p>
   Our academic calendar provides a structured timeline of important dates, including semester start and end dates, examination schedules, holidays, and other key academic events. It helps students and faculty stay informed and plan their academic activities efficiently.

   </p>
   <br>
   <p>
   Regular updates ensure that any changes or additions are promptly communicated. The calendar serves as a guide for academic progress, assisting students in meeting deadlines and preparing for assessments. Stay updated to make the most of your academic journey.

   </p>
</div>
<div class="calender mt-4 ">
<h2>Academic Calendars List</h2>

    <ul class="ml-5">
  <li><a href="/assets/pdf/academic_calendars/Aca Calendar 2018-2019 Even Sem.doc">Academic Calendar 2018-2019 Even Sem</a></li>
  <li><a href="/assets/pdf/academic_calendars/Aca Calendar 2019-2020 ODD Sem.doc">Academic Calendar 2019-2020 ODD Sem</a></li>
  <li><a href="/assets/pdf/academic_calendars/Aca Calendar 2019-2020 Even Sem.doc">Academic Calendar 2019-2020 Even Sem</a></li>
  <li><a href="/assets/pdf/academic_calendars/Acade Calendar 2021-2022.doc">Academic Calendar 2021-2022</a></li>
  <li><a href="/assets/pdf/academic_calendars/Aca Calendar 2021-2022 ODD Sem.doc">Academic Calendar 2021-2022 ODD Sem</a></li>
  <li><a href="/assets/pdf/academic_calendars/Aca Calendar 2022-2023 ODD Sem.doc">Academic Calendar 2022-2023 ODD Sem</a></li>
  <li><a href="/assets/pdf/academic_calendars/Aca Calendar 2022-2023 EVEN Sem.doc">Academic Calendar 2022-2023 Even Sem</a></li>
  <li><a href="/assets/pdf/academic_calendars/Aca Calendar 2022-2023 Full.doc">Academic Calendar 2022-2023 </a></li>
  <li><a href="/assets/pdf/academic_calendars/Academic Calendar 23.docx">Academic Calendar 2023</a></li>
  <li><a href="/assets/pdf/academic_calendars/2023-24 ODD SEM.pdf">Academic Calendar 2023-2024 ODD Sem</a></li>
  <li><a href="/assets/pdf/academic_calendars/2023-24 EVEN SEM.pdf">Academic Calendar 2023-2024 Even Sem</a></li>
</ul>


</div>
</div>

<?php include('../resources/footer.php'); ?>

<!-- custom js -->
<script src="../assets/js/resources/script.js"></script>
</body>
</html>