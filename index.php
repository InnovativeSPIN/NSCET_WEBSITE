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

    <div class="insititute-vision content-main ">

      <h2>
        VISION
      </h2>
      <div class="vision-content">
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

  <!-- news updates -->
  <div id="news_section">
  <h2 class="news_section_title">News & Updates</h2>
    <div class="news_section">
   
    <div class="new_updates marquee-container">
      
    <div class="marquee-wrapper">
    <?php
    $data = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='newsSection'"));
    $jsonData = json_decode($data['content'], true);
    $jsonData = array_reverse($jsonData);
    ?>
    <?php foreach ($jsonData as $data) { ?>
      <div class="new_updates_main_content ">
        <div class="new_update_img">
          <img src="./admin/<?php echo $data['imgUrl'] ?>" alt="" class="new_image">
        </div>
        <div class="new_updates_content">
          <a href="#">
            <?php echo $data['date'] ?>
          </a>
          <span class="mx-1">/</span>
          <a href="#">
            <?php echo $data['tags'] ?>
          </a>
          <h3 class="post-heading mt-2">
            <a href="#">
              <?php echo $data['title'] ?>
            </a>
          </h3>
        </div>
      </div>
    <?php } ?>
    
</div>
</div>
      <!-- <div class="news_section_content">
        <h3 style="text-align: center;" class="news-wrapper-head">NSCET - NEWS</h3>
        <marquee height="360px" behavior="scroll" direction="up" scrollamount="4" onmouseover="this.stop();" onmouseout="this.start();" style="padding:12px">

          <ul>
            <li><img width="65px" src="assets/img/main/new.gif" alt=""> Join the Two-Day Workshop on "Design and Development of Antennas and RF Systems for 5G Wireless Communication: From Concept to Reality" on 20-21 February 2025.</li>
            <li><img width="65px" src="assets/img/main/new.gif" alt=""> Pongal Celebration 2025 at NSCET on 11.01.2025, 9:30 AM. Join us for a joyous traditional gathering and festivities!</li>
            <li><img width="65px" src="assets/img/main/new.gif" alt=""> Join the 3rd International Conference on Advanced Material Processing and Sustainable Energy (AMPSE-2025) on 25th April 2025. Explore innovations and sustainability!</li>
          </ul>
        </marquee>
      </div> -->

    </div>
  </div>


  <!-- facts section -->

  
  <section class="fact-section spad set-bg " data-setbg="img/fact-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-3 fact">
          <div class="fact-icon">
          <i class="fas fa-crown"></i>
          </div>
          <div class="fact-text">
            <h2>14</h2>
            <p>YEARS</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 fact">
          <div class="fact-icon">
            <i class="fas fa-briefcase"></i>
          </div>
          <div class="fact-text">
            <h2>87+</h2>
            <p>TEACHERS</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 fact">
          <div class="fact-icon">
            <i class="fas fa-user"></i>
          </div>
          <div class="fact-text">
            <h2>1000+</h2>
            <p>STUDENTS</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 fact">
          <div class="fact-icon">
            <i class="fas fa-pencil-alt"></i>
          </div>
          <div class="fact-text">
            <h2>15+</h2>
            <p>MOU'S</p>
          </div>
        </div>
      </div>
    </div>
  </section>




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