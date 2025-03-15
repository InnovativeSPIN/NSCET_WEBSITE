<?php 

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NIRF | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="../assets/css/resources/style.css">
<link rel="stylesheet" href="../assets/css/nirf/style.css">


<!-- custom js -->
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include('../resources/navbar.php');?>

<div class="nirf-container">
        <h1>NIRF – National Institutional Ranking Framework</h1>
        <h2>Nadar Saraswathi College of Engineering and Technology</h2>

        <section class="nirf-intro">
            <p>The <strong>National Institutional Ranking Framework (NIRF)</strong>, launched by the <strong>Ministry of Education, Government of India</strong>, evaluates higher education institutions based on key performance indicators. Nadar Saraswathi College of Engineering and Technology is proud to participate in the NIRF rankings, showcasing our commitment to excellence in education, research, and innovation.</p>
        </section>

        <section class="nirf-ranking">
            <h2>Ranking & Performance</h2>
            <p>Our institution maintains high standards in academics, research, and placements. The ranking parameters include:</p>
            <ul>
                <li><strong>Teaching, Learning & Resources (TLR):</strong> Faculty quality, student-teacher ratio, and learning infrastructure.</li>
                <li><strong>Research & Professional Practice (RP):</strong> Research publications, patents, and collaborations.</li>
                <li><strong>Graduation Outcomes (GO):</strong> Placement records, entrepreneurship, and student success.</li>
                <li><strong>Outreach & Inclusivity (OI):</strong> Student diversity, social inclusivity, and scholarships.</li>
                <li><strong>Perception (PR):</strong> Employer and academic reputation.</li>
            </ul>
        </section>

        <section class="nirf-reports">
            <h2>Download NIRF Reports</h2>
            <div class="nirf-links">
                <a class="nirf-link" href="/assets/docs/NIRF/IR-B-C-56319.pdf" target="_blank">Download IR-B-C-56319 Report</a>
                <a class="nirf-link" href="/assets/docs/NIRF/IR-E-C-56319.pdf" target="_blank">Download IR-E-C-56319 Report</a>
                <a class="nirf-link" href="/assets/docs/NIRF/IR-I-C-56319.pdf" target="_blank">Download IR-I-C-56319 Report</a>
                <a class="nirf-link" href="/assets/docs/NIRF/IR-O-C-56319.pdf" target="_blank">Download IR-O-C-56319 Report</a>
            </div>
        </section>

     

    </div>


<?php include('../resources/footer.php'); ?>

<!-- custom js -->
<script src="./assets/js/resources/script.js"></script>
</body>
</html>