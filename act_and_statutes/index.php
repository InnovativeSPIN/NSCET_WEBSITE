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
<link rel="stylesheet" href="../assets/css/department/style.css">


<style>
  .main-content-section{
    display: none;
    padding: 20px;
    margin-top: 20px;
  }

  .main-content-section.active {
    display: block; /* Show only the active section */
  }
  body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f5f7fa;
  color: #333;
}

.main-content-section {
  display: none;
  padding: 2rem 1rem;
}

.main-content-section.active {
  display: block;
}

.content-main {
  background-color: #ffffff;
  border-radius: 16px;
  padding: 2rem;
  margin: 1.5rem auto;
  max-width: 960px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
}

.content-main h2 {
  text-align: center;
  font-size: 2rem;
  color: #003366;
  margin-bottom: 1.5rem;
  position: relative;
}

.content-main h2::after {
  content: '';
  display: block;
  width: 60px;
  height: 3px;
  background-color: #003366;
  margin: 0.5rem auto 0;
  border-radius: 2px;
}

.content-main ul,
.content-main ol {
  list-style: none;
  padding-left: 0;
}

.content-main li {
  background-color: #f0f6ff;
  margin-bottom: 1rem;
  padding: 1rem 1.5rem;
  border-left: 6px solid #0056b3;
  border-radius: 8px;
  transition: background-color 0.3s ease;
}

.content-main li:hover {
  background-color: #e6f0ff;
}

.policy-points ol {
  counter-reset: item;
}

.policy-points ol li::before {
  counter-increment: item;
  content: counter(item) ". ";
  font-weight: bold;
  color: #0056b3;
  margin-right: 0.5rem;
  display: inline-block;
}

.policy-points strong {
  display: block;
  font-size: 1.1rem;
  margin-bottom: 0.4rem;
  color: #002b5c;
}

iframe {
  width: 100%;
  max-width: 900px;
  height: 800px;
  border: none;
  display: block;
  margin: 0 auto;
}

.main-content-section img {
  display: block;
  max-width: 100%;
  height: auto;
  margin: 0 auto;
  border-radius: 12px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
.menu__link{
  text-transform: uppercase;
}


</style>

<!-- custom js -->
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include('../resources/navbar.php');?>
<div id="main-box-container">

 <section class="navigation-bar">
    <nav class="page__menu menu">
     <ul class="menu__list r-list">
  <li class="menu__group"><a href="#" class="menu__link r-link" data-section="section-1">VISION & MISSION</a></li>
  <li class="menu__group"><a href="#" class="menu__link r-link" data-section="section-2">QUALITY POLICY</a></li>
  <li class="menu__group"><a href="#" class="menu__link r-link" data-section="section-3">Policy document</a></li>
  <li class="menu__group"><a href="#" class="menu__link r-link" data-section="section-4">organizational chart</a></li>
</ul>

    </nav>
  </section>

  <div class="dept-page-content">
     <div id="section-1"  class="main-content-section">
      <section>
       <div class="insititute-vision content-main ">

      <h2>
        VISION
      </h2>
      <div class="vision-content">
        <ul>
          <li>To establish ourselves as a leading technological institutions.</li>
        </ul>

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
    </section>
     </div>

     <div id="section-2"  class="main-content-section">
      <section class="quality-policy content-main">
  <h2>Quality Policy</h2>
  <p>
    At NSCET, our unwavering commitment is to deliver excellence in education, research, and service,
    consistently surpassing the expectations of our stakeholders. Our quality policy is anchored in the following guiding principles:
  </p>
  <div class="policy-points">
    <ol>
      <li>
        <strong>Academic Excellence:</strong>
        <p>
          Our focus is on cultivating a vibrant learning environment that nurtures academic brilliance, fosters innovation,
          and promotes critical thinking. Our programs are meticulously crafted to align with global standards and industry demands,
          ensuring that our graduates are exceptionally prepared for successful careers.
        </p>
      </li>
      <li>
        <strong>Student-Centric Approach:</strong>
        <p>
          Our topmost priority is our students. We are devoted to creating a supportive and inclusive learning atmosphere
          that fosters personal and professional growth. Our aim is to cultivate the intellectual curiosity and creativity of our students.
        </p>
      </li>
      <li>
        <strong>Research and Innovation:</strong>
        <p>
          We actively promote a culture of research and innovation among our faculty and students. Our objective is to contribute to the
          advancement of knowledge and technology through leading-edge research projects and collaborations with industry and academia.
        </p>
      </li>
      <li>
        <strong>Industry Engagement:</strong>
        <p>
          We proactively involve ourselves with industry partners to bridge the gap between academia and the professional world.
          Collaborations with industry leaders, internships, and industry-relevant projects are integral components of our programs,
          ensuring that our graduates are well-prepared for the demands of the industry.
        </p>
      </li>
      <li>
        <strong>Quality Management System:</strong>
        <p>
          NSCET is steadfast in the implementation and upkeep of a robust quality management system that aligns with pertinent
          standards and regulations. We consistently review and enhance our processes to improve efficiency and effectiveness.
        </p>
      </li>
      <li>
        <strong>Stakeholder Satisfaction:</strong>
        <p>
          We highly value the feedback and satisfaction of our students, faculty, staff, alumni, and industry partners. Regular surveys and
          open communication channels are in place to comprehend their needs and expectations, and we are committed to addressing them promptly.
        </p>
      </li>
    </ol>
  </div>
  <p>
    This quality policy forms the bedrock of our dedication to excellence, and we are resolute in its continual improvement to
    meet the ever-evolving needs of our stakeholders.
  </p>
</section>

     </div>
       <div id="section-3"  class="main-content-section">
<section>
            <iframe src="./policies.pdf" frameborder="0" width="800" height="890"></iframe>

</section>
     </div>
   

     <div id="section-4" class="main-content-section">
     
    <section>
          <img src="./Nscet_Chart.png" alt="">
    </section> 
    
     </div>
  </div>
  </div>

<?php include('../resources/footer.php'); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const menuLinks = document.querySelectorAll('.menu__link');
  const sections = document.querySelectorAll('.main-content-section');

  // Show first section by default
  if (sections.length > 0) {
    sections[0].classList.add('active');
  }

  menuLinks.forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      const targetId = this.getAttribute('data-section');

      // Remove active class from all sections
      sections.forEach(section => section.classList.remove('active'));

      // Add active class to target section
      const targetSection = document.getElementById(targetId);
      if (targetSection) {
        targetSection.classList.add('active');
      }
    });
  });
});
</script>

<!-- custom js -->
<script src="../assets/js/resources/script.js"></script>
</body>
</html>