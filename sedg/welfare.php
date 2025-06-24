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
  .useful-links-section {
  padding: 40px 20px;
  background: #f9fafe;
  border-radius: 12px;
  max-width: 1200px;
  margin: auto;
  box-shadow: 0 4px 10px rgba(0,0,0,0.05);
}

.section-title {
  font-size: 26px;
  text-transform: uppercase;
  font-weight: 600;
  color: #007bff;
  text-align: center;
  margin-bottom: 30px;
}

.useful-links-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  justify-content: center;
}

.useful-column {
  flex: 1;
  min-width: 280px;
}

.useful-column ul {
  list-style: none;
  padding-left: 0;
}

.useful-column li {
  border-bottom: 1px solid #ddd;
  padding: 10px 0;
  font-size: 16px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.useful-column a {
  color: #2e3c92;
  text-decoration: none;
  font-weight: 500;
  display: flex;
  justify-content: space-between;
  width: 100%;
  transition: all 0.3s ease;
}

.useful-column a i {
  margin-left: 10px;
  color: #007bff;
}

.useful-column a:hover {
  color: #007bff;
  transform: translateX(4px);
}

/* Responsive */
@media (max-width: 768px) {
  .useful-links-grid {
    flex-direction: column;
  }
}

</style>
<!-- custom js -->
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include('../resources/navbar.php');?>



<!-- Font Awesome for the icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="useful-links-section">
  <h3 class="section-title">Useful Links</h3>
  <div class="useful-links-grid">
    
    <!-- Column 1 -->
    <div class="useful-column">
      <ul>
        <li><a href="https://www.ugc.gov.in/page/Educational-Loan.aspx" target="_blank">Educational Loan <i class="fas fa-arrow-right"></i></a></li>
        <li><a href="https://www.ugc.gov.in/page/Edu-Abroad-for-Indian-Students.aspx" target="_blank">Education Abroad for Indian Students <i class="fas fa-arrow-right"></i></a></li>
        <li><a href="https://www.aicte-india.org/bureaus/administration/scst-cell" target="_blank">AICTE <i class="fas fa-arrow-right"></i></a></li>
        <li><a href="https://www.ugc.gov.in/oldpdf/xplanpdf/special_cell.pdf" target="_blank">UGC <i class="fas fa-arrow-right"></i></a></li>
        <li><a href="https://www.education.gov.in/technical-education" target="_blank">Ministry of Education <i class="fas fa-arrow-right"></i></a></li>
        <li><a href="https://socialjustice.gov.in" target="_blank">Ministry of Social Justice and Empowerment <i class="fas fa-arrow-right"></i></a></li>
        <li><a href="https://www.scsthub.in" target="_blank">Ministry of Micro, Small and Medium Enterprises <i class="fas fa-arrow-right"></i></a></li>
        <li><a href="https://labour.gov.in" target="_blank">Ministry of Labor and Employment <i class="fas fa-arrow-right"></i></a></li>
        <li><a href="https://wcd.nic.in" target="_blank">Ministry of Women and Child Development <i class="fas fa-arrow-right"></i></a></li>
        <li><a href="https://persmin.gov.in" target="_blank">Ministry of Personnel, Public Grievances & Pensions <i class="fas fa-arrow-right"></i></a></li>
        <li><a href="https://lawmin.gov.in" target="_blank">Ministry of Law and Justice <i class="fas fa-arrow-right"></i></a></li>
      </ul>
    </div>

    <!-- Column 2 -->
    <div class="useful-column">
      <ul>
        <li><a href="https://www.msde.gov.in" target="_blank">Ministry of Skill Development and Entrepreneurship <i class="fas fa-arrow-right"></i></a></li>
        <li><a href="https://yas.gov.in" target="_blank">Ministry of Youth Affairs <i class="fas fa-arrow-right"></i></a></li>
        <li><a href="https://www.tnsocialwelfare.tn.gov.in/swd/tamil-nadu-state-commission-for-women/" target="_blank">TN State Commission for Women <i class="fas fa-arrow-right"></i></a></li>
        <li><a href="https://upsc.gov.in" target="_blank">UPSC <i class="fas fa-arrow-right"></i></a></li>
        <li><a href="https://www.tnpsc.gov.in/" target="_blank">TNPSC <i class="fas fa-arrow-right"></i></a></li>
        <li><a href="http://escholarship.tn.gov.in/scholarship.html" target="_blank">E-Scholarships <i class="fas fa-arrow-right"></i></a></li>
        <li><a href="https://www.tnsic.gov.in" target="_blank">TN Information Commission <i class="fas fa-arrow-right"></i></a></li>
        <li><a href="https://cic.gov.in" target="_blank">Central Information Commission <i class="fas fa-arrow-right"></i></a></li>
        <li><a href="https://nhrc.nic.in" target="_blank">National Human Rights Commission <i class="fas fa-arrow-right"></i></a></li>
        <li><a href="https://www.shrc.tn.gov.in" target="_blank">TN State Human Rights Commission <i class="fas fa-arrow-right"></i></a></li>
        <li><a href="https://ncst.nic.in" target="_blank">National Commission for Scheduled Tribes <i class="fas fa-arrow-right"></i></a></li>
      </ul>
    </div>

  </div>
</section>


<?php include('../resources/footer.php'); ?>

<!-- custom js -->
<script src="./assets/js/resources/script.js"></script>
</body>
</html>