<?php 

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NPTEL  | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="../assets/css/resources/style.css">

<style>
    .edc-main {
  max-width: 1200px;
  margin: 40px auto;
  padding: 30px;
  background-color: #fff;
  border-radius: 12px;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08);
  font-family: 'Segoe UI', sans-serif;
  color: #333;
  line-height: 1.7;
}

.edc-main header {
  text-align: center;
  margin-bottom: 30px;
}

.edc-main header h1 {
  font-size: 30px;
  color: #1292e2; 
  margin-bottom: 10px;
}

.edc-main header h2 {
  font-size: 20px;
  color: #444;
}

.partnership-image {
  width: 100%;
  max-width: 800px;
  display: block;
  margin: 0 auto;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

figure {
  text-align: center;
  margin-bottom: 25px;
}

figcaption {
  margin-top: 10px;
  font-style: italic;
  color: #666;
  font-size: 15px;
}.partnership-image{
    width: 280px;
}

.overview h2,
.objectives h2,
.benefits h2 {
  font-size: 24px;
  color: #1292e2;
  margin-bottom: 12px;
  border-left: 5px solid #1292e2;
  padding-left: 10px;
}

.overview p {
  font-size: 16px;
  text-align: justify;
  margin-bottom: 16px;
}

.objectives ul,
.benefits ul {
  list-style-type: disc;
  padding-left: 20px;
}

.objectives ul li,
.benefits ul li {
  margin-bottom: 10px;
  background-color: #f9f9f9;
  padding: 10px 15px;
  border-left: 4px solid ;
  border-radius: 6px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.05);
}

@media (max-width: 768px) {
  .edc-main {
    padding: 20px;
    margin: 20px;
  }

  .edc-main header h1 {
    font-size: 24px;
  }

  .overview h2,
  .objectives h2,
  .benefits h2 {
    font-size: 20px;
  }

  .partnership-image {
    max-width: 100%;
  }
}
</style>
<!-- custom js -->
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include('../resources/navbar.php');?>


<div class="edc-main">
  <header>
    <h1>NSCET × NPTEL Local Chapter</h1>
  </header>

  <figure>
    <a href="https://nptel.ac.in/" target="_blank">
      <img src="/e-learning/files/nptel.png" alt="NSCET and NPTEL Collaboration" class="partnership-image">
    </a>
    <figcaption>NSCET partners with NPTEL to provide advanced online learning opportunities</figcaption>
  </figure>

  <section class="overview">
    <h2>Program Overview</h2>
    <p>
      Nadar Saraswathi College of Engineering and Technology (NSCET) has established a Local Chapter in collaboration with the National Programme on Technology Enhanced Learning (NPTEL) — a joint initiative by the IITs and IISc funded by the Ministry of Education, Government of India. This initiative aims to enhance the quality of technical education by providing free access to high-quality online courses and certifications in engineering, science, management, and humanities.
    </p>
    <p>
      NSCET’s NPTEL Local Chapter serves as a bridge between the institution and the extensive resources available through NPTEL. Through this partnership, students and faculty gain access to expertly designed video lectures, assignments, and proctored examinations, helping them stay current with industry-relevant knowledge and improve their academic credentials.
    </p>
  </section>

  <section class="objectives">
    <h2>Objectives</h2>
    <ul>
      <li><strong>Access to Quality Content:</strong> Provide students with access to curated courses developed by IITs and IISc faculty.</li>
      <li><strong>Certification:</strong> Facilitate participation in NPTEL’s certification exams to enhance career opportunities and academic records.</li>
      <li><strong>Faculty Development:</strong> Support continuous learning and skill development for NSCET faculty members.</li>
      <li><strong>Academic Support:</strong> Encourage the use of NPTEL content as supplementary resources for classroom teaching and self-study.</li>
    </ul>
  </section>

  <section class="benefits">
    <h2>Key Benefits</h2>
    <ul>
      <li>Access to 2500+ courses across multiple disciplines.</li>
      <li>Mentorship and support from NPTEL-certified faculty coordinators.</li>
      <li>Improved employability and skill set through domain-focused learning paths.</li>
      <li>Recognition from premier institutions (IITs/IISc) upon successful completion.</li>
    </ul>
  </section>
</div>



<?php include('../resources/footer.php'); ?>

<!-- custom js -->
<script src="./assets/js/resources/script.js"></script>
</body>
</html>