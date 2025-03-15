<?php

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Principal | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  <!-- custom css -->
  <link rel="stylesheet" href="../assets/css/resources/style.css">
  <link rel="stylesheet" href="../assets/css/principal/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



  <!-- custom js -->
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php

  include('../resources/navbar.php');


  ?>

<div class="main main_container">
    <div class="container">
        <img src="../assets/img/main/Principal.jpg" alt="Principal Photo">
        <h2>Dr. C. Mathalai Sundaram</h2>
        <p class="text-center"><strong>Principal, NSCET</strong></p>

        <p>
            As a 21st century organization, NSCET desires to set an approach to learning that incorporates inquiry, research, 
            analytical thinking and an ethical approach that becomes a lifetime habit. I strongly believe that education is a 
            collaborative effort that involves professional administrators, committed teachers and motivated students. 
            We dedicate ourselves as professional administrators in creating a dynamic education programme empowering 
            the students in a global perspective. Learning at NSCET is a wholesome package of attitude, challenge, and opportunity.
        </p>

        <div class="profile-details">
            <h3>Profile Details</h3>
            <p><strong>Designation:</strong> Professor & Principal</p>
            <p><strong>Department:</strong> Mechanical Engineering</p>
            <p><strong>Education:</strong></p>
            <ul>
                <li>Ph.D. in Mechanical Engineering (Composite Tool Materials), Anna University (2011-2017)</li>
                <li>M.E. in Manufacturing Engineering, Anna University of Technology, Trichy (2008-2010)</li>
                <li>M.B.A in Production Engineering, Madurai Kamaraj University (2002-2004)</li>
                <li>B.E in Mechanical Engineering, Madras University (1996-2000)</li>
            </ul>
        </div>

        <div class="profile-details">
            <h3>Experience</h3>
            <p>Professor & Principal of NSCET since June 2017</p>
            <p>Professor & Vice Principal at NSCET for 4 years</p>
            <p>Assistant Professor at Bharath Niketan Engineering College for 2 years</p>
            <p>Assistant/Associate Professor at NSCET for 3 years</p>
            <p>Lecturer & Head of Department at multiple polytechnic colleges for over 8 years</p>
        </div>

        <div class="profile-details">
            <h3>Publications & Patents</h3>
            <p><strong>Total Publications:</strong> 32</p>
            <p><strong>Patents:</strong></p>
            <ul>
                <li>Automation in Portable Oil Seal Assembly Machine (2017)</li>
                <li>Flower Garland Making Machine (2022)</li>
                <li>Movable Staircase and Lifting Setup in Vehicle (2023)</li>
            </ul>
        </div>

        <div class="contact-info">
            <p><strong>Email:</strong> <a href="mailto:principal@nscet.org">principal@nscet.org</a></p>
            <p><strong>Contact:</strong> +91 94434 88999, +91 98426 85138</p>
        </div>
    </div>
</div>





 
  <?php

  include('../resources/footer.php');


  ?>




  <!-- custom js -->
  <script src="../assets/js/resources/script.js"></script>
  <!-- swiper -->
 
</body>

</html>