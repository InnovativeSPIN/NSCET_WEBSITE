<?php

include('./resources/conn.php');


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
  <link rel="stylesheet" href="./assets/css/resources/style.css">
  <link rel="stylesheet" href="./assets/css/home/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



  <!-- custom js -->
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php

  include('./resources/navbar.php');


  ?>

  <!-- hero section -->

  <div class="hero_section">
    <div class="swiper mySwiper hero_swiper">
      <div class="swiper-wrapper mySwiper_wrapper">
        <?php
        $data = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='heroSection'"));
        $jsonData = json_decode($data['content'], true);
        foreach ($jsonData as $data) {
        ?>
          <div class="swiper-slide " id="hero_main_content" style="background:url(./admin/<?php echo $data['image'] ?>) no-repeat center/cover">
            <div class="hero_section_content">
              <h2>
                <?php echo $data['heading'] ?>

              </h2>
              <p>
                <?php echo $data['paragraph'] ?>
              </p>
            </div>
          </div>

        <?php
        }
        ?>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev custom_swiper-button-prev"></div>
      <div class="swiper-button-next custom_swiper-button-next"></div>

    </div>
  </div>

  <!-- about -->
   
<div class="institute-about ">

<div class="insititute-vision content-main "  >

<h2>
VISION
</h2>
<div class="vision-content" >
  <p>To establish ourselves as a leading technological institutions.
  </p>
</div>

</div>
<div class="insititute-mission content-main">
  <h2>MISSION</h2>
<div class="mission-content ">
  <ul>
  <li>To provide professional, Constructive and learner centered education.</li>
<li>To make learners contribute to the development of nation through academic and industrial excellence.</li>
<li>To encourage learners involve in innovative researches with ethics.</li>
<li>To produce competitive and confident graduates to face the ever growing challenges of the labor market.</li>
  </ul>
</div>
</div>
<div class="video-section">
<iframe width="380" height="200" 
    src="https://www.youtube.com/embed/WzJ1evTcBVE?modestbranding=1&rel=0&controls=0" 
    title="NSCET - NAAC PEER TEAM VISIT - DAY 1 - 06.06.24" 
    frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
    referrerpolicy="strict-origin-when-cross-origin" 
    allowfullscreen>
</iframe>
</div>
<!-- <div class="insititute-values content-main">
<h2>VALUES</h2>
<div class="values-content">
  <ul>
  <li>Values</li>
<li>Excellence</li>
<li>Diversity and Inclusion</li>
<li>Innovation</li>
<li>Innovation</li>
<li>Community Engagement</li>
  </ul>
</div>

</div>
   -->
</div>




  <?php

  include('./resources/footer.php');


  ?>




  <!-- custom js -->
  <script src="./assets/js/resources/script.js"></script>
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