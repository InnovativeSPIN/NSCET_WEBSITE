<?php

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  <!-- custom css -->
  <link rel="stylesheet" href="../assets/css/resources/style.css">
  <link rel="stylesheet" href="../assets/css/about/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <style>
    .main h2 {
      text-transform: uppercase;
    }
    .timeline-section {
  max-width: 900px;
  margin: 3rem auto;
  padding: 2rem;
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
}

.timeline-section h2 {
  text-align: center;
  font-size: 2rem;
  color: #003366;
  margin-bottom: 2rem;
}

.timeline {
  position: relative;
  margin-left: 30px;
  padding-left: 20px;
  border-left: 4px solid #0056b3;
}

.timeline-item {
  margin-bottom: 2rem;
  position: relative;
}

.timeline-item::before {
  content: '';
  width: 16px;
  height: 16px;
  background-color: #0056b3;
  border-radius: 50%;
  position: absolute;
  left: -34px;
  top: 4px;
}

.timeline-year {
  font-weight: bold;
  font-size: 1.2rem;
  color: #0056b3;
  margin-bottom: 0.5rem;
}

.timeline-content {
  background-color: #f0f6ff;
  padding: 1rem 1.2rem;
  border-radius: 8px;
  line-height: 1.6;
}


  </style>
  <style>
    .awards-slider-section {
  max-width: 1200px;
  padding: 2rem;
  background: #fff;
  
  text-align: center;
}

.awards-slider-section h2 {
  font-size: 2rem;
  color: #003366;
  margin-bottom: 1.5rem;
}

.awards-slider {
  overflow-x: auto;
  padding-bottom: 1rem;
  -webkit-overflow-scrolling: touch;
}

.awards-list {
display: grid;
grid-template-columns: repeat(3,1fr);
gap: 2rem;
}

.awards-list li {
  min-width: 250px;
  background-color: #f0f6ff;
  padding: 1rem;
  border-left: 6px solid #0056b3;
  border-radius: 10px;
  font-size: 1rem;
  color: #333;
  flex-shrink: 0;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
}

.awards-list .year {
  font-weight: bold;
  color: #0056b3;
  margin-right: 0.5rem;
  display: block;
  font-size: 1.1rem;
}
.awards-slider {
  scroll-snap-type: x mandatory;
}

.awards-list li {
  scroll-snap-align: start;
}
.awards-list li img{
  width: 280px;
  height: 300px;
  object-fit: cover;
}

@media screen  and (max-width:768px){
  .awards-list {

grid-template-columns: repeat(1,1fr);

}
}

  </style>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- custom js -->
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>

</head>

<body>

  <?php

  include('../resources/navbar.php');


  ?>


  <div class="main">

    <h2>About the College</h2>
   <div class="about-img-slider">
<div class="swiper about-swiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide"><img src="./img/Colleg photos 1.jpg" alt=""></div>
    <div class="swiper-slide"><img src="./img/College photos 2.jpg" alt=""></div>
    <div class="swiper-slide"><img src="./img/college photos 3.jpg" alt=""></div>
    <div class="swiper-slide"><img src="./img/college photos 4.jpg" alt=""></div>
    <div class="swiper-slide"><img src="./img/DJI_0005 new.JPG" alt=""></div>
  </div>

  <!-- Optional navigation buttons -->
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>

  <!-- Optional pagination -->
  <div class="swiper-pagination"></div>
</div>
</div>


    <p>
      Nadar Saraswathi College of Engineering and Technology (NSCET), established in 2010 in Theni, Tamil Nadu, is a premier non-autonomous institution affiliated with Anna University, Chennai, since its inception on the 21st. Dedicated to academic excellence, NSCET offers a world-class learning environment with state-of-the-art infrastructure, well-equipped laboratories, and a serene campus fostering creativity and innovation. With seven specialized departments, the college provides industry-relevant knowledge and hands-on experience, ensuring holistic education. The lush greenery, modern facilities, and vibrant atmosphere enable students to excel in academics and extracurriculars, making NSCET a preferred choice for aspiring engineers.
    </p>

    <p>
      NSCET stands as a beacon of quality education with a vision to be a leading technological institution, promoting innovation and excellence. Its mission is to deliver professional, constructive, and learner-centered education, shaping skilled, ethical professionals ready for national development. By blending academic rigor with industrial exposure, NSCET prepares future-ready, socially responsible graduates to tackle evolving market challenges.
    </p>


    <div class="main-form">
      <section class="awards-section content-main">
  <h2>Achievements & Awards</h2>
  <ul class="awards-list">
    <li><span class="year">2022</span> <span>
      CAPTAIN TV Best College Award
    </span>
  <span>
    <img src="/about/img/CAPTAINTV.png" alt="">
  </span></li>
    <li><span class="year">2021</span>
  <span>
     Best College Award
  </span>
<span>
   <img src="/about/img/BESTCOLLEGE.png" alt="">
</span></li>
    <li><span class="year">2019</span> <span>
      Best Engineering College Award
    </span>
    <span>
       <img src="/about/img/BESTCOLLEGE2019.png" alt="">
    </span>
  </li>
    <li><span class="year">2019</span> <span>
      Intellectual Property Awards
    </span>
  <span>
    <img src="/about/img/IntellectualProperty.png" alt="">
  </span></li>
    <li><span class="year">2018</span> <span>
      Best Engineering College Award
    </span>
    <span>
      <img src="/about/img/BESTENGINEERING2018.png" alt="">
    </span>
  </li>
    
    <li><span class="year">2016</span> <span>
      Best Educational Institution Award
    </span>
  <span>
    <img src="/about/img/y2016.png" alt="">
  </span>
  </li>
  
  </ul>
</section>


    </div>


    <div class="time-line-form">
      <section class="timeline-section">
  <h2>History</h2>
  <div class="timeline">
    <div class="timeline-item">
      <div class="timeline-year">2010</div>
      <div class="timeline-content">NSCET established with B.E. - CIVIL, CSE, ECE, MECH</div>
    </div>

    <div class="timeline-item">
      <div class="timeline-year">2014</div>
      <div class="timeline-content">
        B.E., EEE & M.E., Manufacturing and Structural inaugurated<br>
        B.E., MECH intake increased to 120<br>
        ISO 9001:2008 certified
      </div>
    </div>

    <div class="timeline-item">
      <div class="timeline-year">2015</div>
      <div class="timeline-content">
        Out Sourcing Partner of HCL<br>
        Secured 85.4% Result and ranked 26th among 522 Engineering Colleges in Tamil Nadu
      </div>
    </div>

    <div class="timeline-item">
      <div class="timeline-year">2016</div>
      <div class="timeline-content">
        ISO 9001:2015 Certified<br>
        Mechanical Engineering recognized as Research Centre
      </div>
    </div>

    <div class="timeline-item">
      <div class="timeline-year">2017</div>
      <div class="timeline-content">
        New Canteen Inaugurated<br>
        NPTEL local chapter established
      </div>
    </div>

    <div class="timeline-item">
      <div class="timeline-year">2018</div>
      <div class="timeline-content">
        New Entrance Arch Inaugurated<br>
        Attempted "WORLD GUINNESS RECORD"<br>
        New Library “KAMARAJAR KNOWLEDGE CENTRE” Inaugurated<br>
        SPACE EXPO with ISRO<br>
        IIC Inaugurated
      </div>
    </div>

    <div class="timeline-item">
      <div class="timeline-year">2019</div>
      <div class="timeline-content">
        2nd position in SIH<br>
        Celebrated 100th Anniversary of TMHNU<br>
        Participated in Kaja Puyal relief works
      </div>
    </div>

    <div class="timeline-item">
      <div class="timeline-year">2020</div>
      <div class="timeline-content">
        Renewable Energy Lab established<br>
        Automatic Hand Sanitizer by ECE students<br>
        COVID-19 isolation ward & ICMR portal support
      </div>
    </div>

    <div class="timeline-item">
      <div class="timeline-year">2021</div>
      <div class="timeline-content">
        Educational Excellence & LEAD Awards for Principal<br>
        2nd in Anna University Zone-17 Chess Tournament<br>
        COVID-19 vaccination camp<br>
        NDLI established<br>
        IIC 5-star status<br>
        Participated in Manthan Hackathon
      </div>
    </div>

    <div class="timeline-item">
      <div class="timeline-year">2022</div>
      <div class="timeline-content">
        B.Tech., IT and AI & DS Inaugurated<br>
        First in SIH<br>
        Second in PLI Hackathon – ₹2.5 Lakhs
      </div>
    </div>

    <div class="timeline-item">
      <div class="timeline-year">2023</div>
      <div class="timeline-content">
        B.Tech., IT and AI & DS Inaugurated<br>
        ISO 9001:2015 Certified<br>
        Installed Biogas & Solar plant<br>
        Two First Positions in SIH – ₹2 Lakhs
      </div>
    </div>

    <div class="timeline-item">
      <div class="timeline-year">2024</div>
      <div class="timeline-content">
        NAAC ‘A’ Grade Certification<br>
        Ranked 21st in Tamil Nadu Engineering Colleges<br>
        WG Tech IT Company Inaugurated<br>
        Intake increase for B.Tech - IT & AI&DS<br>
        36 Hours Hackathon Event
      </div>
    </div>
  </div>
</section>

    </div>
  </div>





  <?php

  include('../resources/footer.php');


  ?>




  <!-- custom js -->
  <script src="../assets/js/resources/script.js"></script>
  <script>
   
  const swiper = new Swiper('.about-swiper', {
    loop: true,
    spaceBetween: 20,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      640: { slidesPerView: 1 },
      768: { slidesPerView: 1},
      1024: { slidesPerView: 1 }
    }
  });
</script>


</body>

</html>
