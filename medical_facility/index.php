<?php 

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medical Facility | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="../assets/css/resources/style.css">

<style>
        .Medical_Facility {
      max-width: 1000px;
      margin: 40px auto;
      padding: 30px;
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .Medical_Facility h2 {
      color: var(--primary-color);
      font-size: 28px;
      margin-bottom: 15px;
      border-bottom: 2px solid var(--light_primary);
      padding-bottom: 8px;
      font-weight: bold;
    }

    .Medical_Facility p {
      font-size: 16px;
      line-height: 1.6;
      margin-bottom: 30px;
    }

    .container .section {
      margin-bottom: 25px;
    }

    .container h3 {
      color: var(--dark-color);
      font-size: 18px;
      margin-bottom: 8px;
    }

    .container ul {
      padding-left: 20px;
    }

    .container ul li {
      margin-bottom: 6px;
    }

    .image-gallery {
      display: flex;
      gap: 20px;
      margin: 0 auto;

    justify-content: center;
    align-items: center;
    margin-bottom: 2rem;
    }

    .image-gallery img {
      width: 100%;
      max-width: 400px;
      border-radius: 8px;
      box-shadow: 0 3px 8px rgba(0, 0, 0, 0.15);
    }
.main-pdf{
  display: flex;
  justify-content: center;
  align-items: center;
  max-width: 1200px;
  margin: 0 auto;
  width: 100%;
}

.health {
  background-color: #f9f9f9;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  font-family: 'Segoe UI', sans-serif;
  max-width: 800px;
  margin: 0 auto;
}

.health-intro {
  font-size: 16px;
  line-height: 1.6;
  color: #333;
  margin-bottom: 20px;
}

.health-img {
  display: block;
  margin: 0 auto 20px auto;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
}

.section-heading {
  font-size: 22px;
  font-weight: bold;
  color: #2c3e50;
  margin-bottom: 10px;
  text-align: center;
}

.incharge-container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  gap: 20px;
  flex-wrap: wrap;
}

.incharge-item {
  background-color: #ffffff;
  border: 1px solid #ddd;
  border-radius: 10px;
  padding: 15px 20px;
  text-align: center;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
  max-width: 250px;
}

.incharge-name {
  font-size: 18px;
  font-weight: 600;
  margin: 5px 0;
  color: #1a1a1a;
}

.incharge-title {
  font-size: 14px;
  color: #555;
}

    @media (max-width: 768px) {
      .image-gallery {
        flex-direction: column;
        align-items: center;
      }
    }
</style>
<!-- custom js -->
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include('../resources/navbar.php');?>


  <div class="Medical_Facility">
    <h2 class="text-center text-uppercase">Health & Medical Facility</h2>

    <p>
      NSCET ensures comprehensive medical support for all students and staff through a well-equipped first aid center and dedicated medical room within the campus. Each department and lab is stocked with essential medicines and first aid kits. A qualified medical doctor and trained nurse/paramedic are available during working hours. The college regularly conducts health camps, including eye/dental check-ups and blood donation drives, alongside health and hygiene awareness programs. In case of emergencies, NSCET has a tie-up with TMHNU Trust Hospital. Emergency contact numbers are clearly displayed across campus, and all medical incidents are properly documented for timely follow-up and care.
    </p>

      <div class="health">
        <h2 class="section-heading">Incharge</h2>

        <div class="incharge-container">

            <div class="incharge-item">
                                        <img src="../assets/img/sports/Malaini.jpg" alt="Health Facility" class="health-img" width="180px">

                <p class="incharge-name">Mrs. R. Malini</p>
                <p class="incharge-title">Physical Directress,Health Incharge</p>
            </div>
            <!-- Add more incharge members if needed -->
        </div>
    </div>
    <!-- Image Section -->
    <div class="image-gallery">
      <img src="./files/img1.png" alt="Medical Room at NSCET">
      <img src="./files/img2.png" alt="Health Camp at NSCET">
    </div>
    
    <!-- Detailed Breakdown -->
    <div class="container">
      <div class="section">
        <h3>First Aid & Emergency Care:</h3>
        <ul>
          <li>Well-equipped first aid center within the campus.</li>
          <li>Availability of essential medicines and first aid kits in each department/lab.</li>
        </ul>
      </div>

      <div class="section">
        <h3>Medical Room/Infirmary:</h3>
        <ul>
          <li>A dedicated medical room with a bed, privacy screens, and basic monitoring equipment.</li>
          <li>Clean and hygienic environment with proper ventilation.</li>
        </ul>
      </div>

      <div class="section">
        <h3>Qualified Medical Personnel:</h3>
        <ul>
          <li>A visiting or full-time qualified medical doctor (MBBS).</li>
          <li>A trained nurse/paramedic available during working hours.</li>
        </ul>
      </div>

      <div class="section">
        <h3>Health Camps & Awareness:</h3>
        <ul>
          <li>Periodic health check-ups, eye/dental camps, blood donation drives.</li>
          <li>Health and hygiene awareness programs for students.</li>
        </ul>
      </div>

      <div class="section">
        <h3>Hospital Tie-Up:</h3>
        <ul>
          <li>TMHNU Trust hospital for emergency and inpatient care.</li>
          <li>Display emergency contact numbers clearly in hostels and academic blocks.</li>
        </ul>
      </div>

      <div class="section">
        <h3>Record Maintenance:</h3>
        <ul>
          <li>Proper logbook for health incidents, doctor visits, and medical leaves.</li>
        </ul>
      </div>

    </div>
    <div class="main-pdf">
      <iframe src="./files/bon.pdf" frameborder="0" width="980" height="980"></iframe>
    </div>
  </div>



<?php include('../resources/footer.php'); ?>

<!-- custom js -->
<script src="./assets/js/resources/script.js"></script>
</body>
</html>