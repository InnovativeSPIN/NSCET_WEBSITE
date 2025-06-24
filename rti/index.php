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


<style>
    .iiqa-declaration {
  max-width: 900px;
  margin: 40px auto;
  padding: 35px 30px;
  background-color: #f8fafc;
  border-left: 5px solid #1e40af;
  border-radius: 8px;
  font-family: 'Segoe UI', sans-serif;
  box-shadow: 0 3px 8px rgba(0, 0, 0, 0.08);
  color: #1f2937;
  line-height: 1.7;
}

.main-cotainer h2 {
  font-size: 28px;
  margin-bottom: 20px;
  color: #1e3a8a;
  text-align: center;
  font-weight: bold;
  text-align: center;
  text-transform: uppercase;
}

.iiqa-declaration p {
  margin-bottom: 16px;
  font-size: 16px;
  text-align: justify;
}

.iiqa-declaration strong {
  color: #0f172a;
  font-weight: 600;
}

.iiqa-declaration code {
  background-color: #e2e8f0;
  padding: 2px 6px;
  border-radius: 4px;
  font-family: monospace;
  color: #334155;
}
.main-cotainer{
  max-width: 1200px ;
  margin: 0 auto;
  width: 100%;

}

</style>

<!-- custom js -->
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include('../resources/navbar.php');?>

<div class="main-cotainer">
<h2>
  Right to Information Act
</h2>
<div style="font-family: Arial, sans-serif; font-size: 16px; line-height: 1.8; color: #333;">
  Nadar Saraswathi College of Engineering and Technology, Vadapudupatti, Theni - 625531, Tamilnadu, is registered under the Tamilnadu Societies Act XXI of 1860. Affiliated to Anna University, Chennai, and approved by AICTE, New Delhi, the college operates per the rules and regulations of the Directorate of Higher Education, Government of Tamilnadu, and Statutory Regulatory Authorities (SRAs). As a government-aided institution, it is included under sections 2(f) and 12(B) of the UGC since 31.3.2006. The Principal, contactable at <strong>04546-263900/263901</strong> or <a href="mailto:principal@nscet.org">principal@nscet.org</a>, heads the institution. The college office operates from <strong>9:00 AM to 4:40 PM</strong>, with class timings from <strong>9:15 AM to 4:40 PM</strong>, and is closed on Sundays and public holidays. The library is open from <strong>8:30 AM to 6:00 PM</strong> on working days. Financial transactions are audited by the Joint Directorate of Collegiate Education and UGC. All cells/committees comply with section 4(1)(b) of the RTI Act, 2005. RTI applications, accompanied by a <strong>Rs. 100</strong> demand draft favoring the Principal, are promptly addressed. All college information under the RTI Act is publicly accessible to Indian citizens via <a href="https://www.nscet.org" target="_blank">www.nscet.org</a>.
</div>

</div>


<?php include('../resources/footer.php'); ?>

<!-- custom js -->
<script src="./assets/js/resources/script.js"></script>
</body>
</html>