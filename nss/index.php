<?php 

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>National Service Scheme (NSS) | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="../assets/css/resources/style.css">
<link rel="stylesheet" href="../assets/css/nss/style.css">


<!-- custom js -->
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include('../resources/navbar.php');?>

<section class="hero-section" style="background: url('../assets/img/nss/main.png') no-repeat center/cover;">
  <h1 class="dept-heading">National Service Scheme (NSS)</h1>
</section>


<div class="container main_container">
        <h2 class="text-center">National Service Scheme (NSS)</h2>
        
        <h3>About NSS:</h3>
        <p>The National Service Scheme (NSS) is a government-sponsored voluntary program aimed at developing students' personality through community service. It is a platform for students to engage in social welfare activities and contribute to nation-building.</p>
        
        <h3>Objectives of NSS:</h3>
        <ul>
            <li>To develop a sense of social and civic responsibility.</li>
            <li>To understand the community and its problems.</li>
            <li>To encourage students to find practical solutions to social issues.</li>
            <li>To develop leadership skills and teamwork.</li>
            <li>To promote national integration and social harmony.</li>
        </ul>

        <h3>Activities Conducted by NSS:</h3>
        <ul>
            <li><strong>Community Service:</strong> Blood donation camps, tree plantation, and awareness drives.</li>
            <li><strong>Health & Hygiene Programs:</strong> Medical camps, sanitation drives, and nutrition awareness.</li>
            <li><strong>Educational Programs:</strong> Literacy campaigns, career guidance, and personality development.</li>
            <li><strong>Environmental Awareness:</strong> Cleanliness drives, eco-friendly initiatives, and conservation programs.</li>
            <li><strong>Relief Work:</strong> Disaster relief, fundraising, and helping the needy.</li>
        </ul>

        <div class="image_container">
         <img src="../assets/img/nss/img1.jpeg" alt="">
         <img src="../assets/img/nss/img2.jpeg" alt="">
         <img src="../assets/img/nss/img3.jpeg" alt="">
         <img src="../assets/img/nss/img4.jpeg" alt="">
         <img src="../assets/img/nss/img5.jpeg" alt="">
         <img src="../assets/img/nss/img6.jpeg" alt="">
      </div>
    </div>


<?php include('../resources/footer.php'); ?>

<!-- custom js -->
<script src="../assets/js/resources/script.js"></script>
</body>
</html>