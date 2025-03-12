<?php

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  <!-- custom css -->
  <link rel="stylesheet" href="../assets/css/resources/style.css">
  <link rel="stylesheet" href="../assets/css/about/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



  <!-- custom js -->
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php

  include('../resources/navbar.php');


  ?>


        <div class="main">

        <h2>About the College</h2>
        <img src="/assets/img/about/nscetmain.jpg" alt="">

        <p>
    Nadar Saraswathi College of Engineering and Technology (NSCET), located in Theni, Tamil Nadu, is a premier institution dedicated to academic excellence and technological advancements. The college is affiliated with Anna University and offers a world-class learning environment with state-of-the-art infrastructure, well-equipped laboratories, and a serene campus that fosters creativity and innovation. With a strong commitment to holistic education, NSCET provides a vibrant atmosphere for students to excel in both academics and extracurricular activities. The institution boasts seven specialized departments, each designed to equip students with industry-relevant knowledge and hands-on experience. The lush greenery, modern facilities, and student-friendly environment make NSCET a preferred choice for aspiring engineers.
</p>

<p>
    NSCET stands as a beacon of quality education, guided by a clear vision and mission. The college envisions itself as a leading technological institution, fostering innovation and excellence in engineering education. With a mission to provide professional, constructive, and learner-centered education, NSCET aims to shape students into skilled professionals who can contribute to national development. The institution encourages students to engage in innovative research with ethical values while preparing them to confidently face the ever-evolving challenges of the labor market. By blending academic rigor with industrial exposure, NSCET nurtures future-ready graduates who are not just technically proficient but also socially responsible.
</p>

        </div>



































































 

  <?php

  include('../resources/footer.php');


  ?>




  <!-- custom js -->
  <script src="../assets/js/resources/script.js"></script>
  <!-- swiper -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      autoplay: {
        delay: 2000,
      },
    });
  </script>
</body>

</html>