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

<!-- custom js -->
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include('../resources/navbar.php');?>

<section class="mt-5 person_ombuds" style="padding: 40px 0;">
  <h2 class="text-center" style="color: #343a40; font-size: clamp(22px, 2em, 28px); font-weight: 700; margin-bottom: 30px;">Ombudsperson</h2>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 text-center">
        <div class="card border-0 shadow-sm" style="background-color: #fff; padding: 20px;">
          <div class="card-container">
            <img src="../assets/img/administration/Rajadurai .png" alt="Dr. A. Rajadurai" width="180px" style="border-radius: 50%; margin-bottom: 15px;">
            <div class="card-content">
              <h3 style="color: #343a40; font-size: 1.5rem; font-weight: 600; margin-bottom: 10px;">Ombudsperson</h3>
              <p class="name" style="color: #6c757d; font-size: 1.1rem; font-weight: 500;">Dr. A. Rajadurai - Professor</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="ombuds-content" style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; text-align: justify;">
          <p style="color: #343a40; font-size: 1rem; line-height: 1.6;">
            The Ombudsperson serves as an impartial and independent resource for students, faculty, and staff at the institution. This role is dedicated to addressing concerns, grievances, and disputes in a fair and confidential manner. The Ombudsperson listens to all parties involved, provides guidance on institutional policies, and facilitates resolutions to promote a harmonious and equitable campus environment. By upholding principles of fairness and transparency, the Ombudsperson ensures that all members of the college community are heard and supported.
          </p>
          <div class="button-section  d-flex justify-content-start ">
   <a href="../assets/img/Ombudsperson.jpeg"><button class="btn btn-primary">Approval Mail</button></a>
  </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include('../resources/footer.php'); ?>

<!-- custom js -->
<script src="./assets/js/resources/script.js"></script>
</body>
</html>