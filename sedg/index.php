<?php 

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SEDG | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="../assets/css/resources/style.css">

<style>
    .sedg-container {
  max-width: 1100px;
  margin: 40px auto;
  padding: 30px;
  background-color: #ffffff;
  border-radius: 12px;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08);
  font-family: 'Segoe UI', sans-serif;
  color: #333;
  line-height: 1.7;
  background: #fdfdfd;
}

.sedg-header h1 {
  font-size: 30px;
  color: #2e3c92;
  text-align: center;
  margin-bottom: 25px;
}

.sedg-intro p {
  font-size: 16px;
  margin-bottom: 16px;
  text-align: justify;
}

.sedg-objectives, .sedg-activities {
  margin-top: 30px;
}

.sedg-objectives h2,
.sedg-activities h2 {
  font-size: 22px;
  color: #1a237e;
  margin-bottom: 15px;
  border-left: 5px solid #3949ab;
  padding-left: 10px;
}

.sedg-objectives ul,
.sedg-activities ul {
  list-style: none;
  padding-left: 0;
}

.sedg-objectives ul li,
.sedg-activities ul li {
  margin-bottom: 12px;
  background: #eef2ff;
  padding: 12px 16px;
  border-radius: 8px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.05);
}

.sedg-objectives ul li strong {
  color: #2e3c92;
}

@media (max-width: 768px) {
  .sedg-container {
    padding: 20px;
    margin: 20px;
  }

  .sedg-header h1 {
    font-size: 24px;
  }

  .sedg-objectives h2,
  .sedg-activities h2 {
    font-size: 20px;
  }
}
.top-columns {
  display: flex;
  justify-content: center;
  gap: 30px;
  flex-wrap: wrap;
  padding: 20px;
  margin: 30px auto;
  max-width: 1000px;
}

.top-columns a {
  text-decoration: none;
}

.top-columns a:hover {
  text-decoration: none;
}
.column-card {
  background: #f0f4ff;
  border-radius: 12px;
  padding: 25px 30px;
  width: 180px;

  text-align: center;
  box-shadow: 0 4px 8px rgba(0,0,0,0.08);
  transition: transform 0.3s ease, background-color 0.3s ease;
}


.column-card i {
  font-size: 30px;
  color: #1a237e;
  margin-bottom: 12px;
  display: block;
}

.column-card span {
  font-size: 16px;
  color: #333;
  font-weight: 600;
}
.column-card:hover{
    transform: scale(1.02);
}

@media (max-width: 600px) {
  .top-columns {
    flex-direction: column;
    align-items: center;
  }

  .column-card {
    width: 90%;
  }
}


</style>
<!-- custom js -->
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include('../resources/navbar.php');?>




<div class="sedg-container">
  <header class="sedg-header">
    <h1>Socio-Economically Disadvantaged Groups Cell (SEDG)</h1>
  </header>

  <section class="sedg-intro">
    <p>
      The SEDG Cell has been established to ensure that students belonging to Socio-Economically Disadvantaged Groups (SEDGs) have a safe and secure environment and equitable access to quality education in Higher Educational Institutions (HEIs), as specified in the National Education Policy (NEP) 2020 of GOI.
    </p>
    <p>
      Accessibility of quality education to all has been a major challenge in countries all over the world. In India, there are several disadvantaged groups—such as women, minorities, SCs and STs, OBCs, PwDs, and EWSs—who lag behind others in the field of education. The Government of India aims to include all in national development, with NEP 2020 emphasizing the need to address the concerns of SEDG students.
    </p>
    <p>
      The SEDG Cell is committed to fostering inclusivity and equal opportunities for all students, regardless of their socio-economic backgrounds. The cell functions as a dedicated support system to ensure that students from underprivileged sections of society can thrive academically, socially, and personally.
    </p>
  </section>

  <section class="sedg-objectives">
    <h2>Objectives</h2>
    <ul>
      <li><strong>Empowerment:</strong> Provide holistic support to socio-economically disadvantaged students to help them excel in academics and beyond.</li>
      <li><strong>Awareness:</strong> Create awareness about various government and institutional schemes, scholarships, and opportunities available to SEDG students.</li>
      <li><strong>Skill Development:</strong> Organize training sessions, workshops, and mentorship programs to enhance employability and personal development.</li>
      <li><strong>Support System:</strong> Establish a strong support network to address challenges related to finances, academics, and mental health.</li>
    </ul>
  </section>

  <section class="sedg-activities">
    <h2>Key Activities</h2>
    <ul>
      <li>Guidance on availing scholarships, fee waivers, and education loans.</li>
      <li>Remedial classes, peer tutoring, and access to additional learning resources.</li>
      <li>Tailored workshops on soft skills, technical skills, and career readiness.</li>
      <li>Sessions on government and private schemes beneficial for socio-economically disadvantaged students.</li>
      <li>Psychological and career counseling to ensure the well-being and holistic development of students.</li>
    </ul>
  </section>
  
<div class="top-columns">
  <a href="/helpdesk/">
    <div class="column-card">
      <i class="fas fa-comment-dots"></i>
      <span>Grievance</span>
    </div>
  </a>
  <a href="/sedg/scholarship.php">
    <div class="column-card">
      <i class="fas fa-graduation-cap"></i>
      <span>Scholarship</span>
    </div>
  </a>
  <a href="/sedg/welfare.php" >
    <div class="column-card">
      <i class="fas fa-hands-helping"></i>
      <span>Welfare Links</span>
    </div>
  </a>
</div>
</div>





<?php include('../resources/footer.php'); ?>

<!-- custom js -->
<script src="./assets/js/resources/script.js"></script>
</body>
</html>