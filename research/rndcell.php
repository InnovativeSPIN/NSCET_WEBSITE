<?php 

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research and development cell | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="../assets/css/resources/style.css">

<style>
     .rd-section {
      max-width: 1000px;
      margin: auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .rd-section h2 {
      color: var(--primary-color);
      font-size: 28px;
      margin-bottom: 20px;
      border-bottom: 2px solid var(--light_primary);
      padding-bottom: 6px;
      font-weight: bold;
      text-transform: uppercase;
    }

    .rd-section p {
      line-height: 1.7;
      font-size: 16px;
      margin-bottom: 25px;
    }

    .objectives ul, .members ul {
      padding-left: 20px;
      margin-top: 10px;
    }

    .objectives ul li, .members ul li {
      margin-bottom: 8px;
    }

    .objectives h3, .members h3, .incharge h3 {
      font-size: 20px;
      margin-top: 30px;
      color: var(--dark-color);
      border-bottom: 2px solid var(--light_primary);
      padding-bottom: 6px;
    }

    .incharge {
      margin-top: 20px;
      padding: 15px;
      background-color: var(--light_primary);
      border-left: 5px solid var(--primary-color);
      border-radius: 6px;
    }

    .incharge p {
      margin: 8px 0;
    }

    @media (max-width: 768px) {
      body {
        padding: 20px 10px;
      }
    }
</style>
<!-- custom js -->
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include('../resources/navbar.php');?>


 <div class="rd-section">
    <h2>About the R&amp;D Cell</h2>
    <p>
      The Research and Development Cell at Nadar Saraswathi College of Engineering and Technology (NSCET) is dedicated to fostering a culture of innovation and research excellence. Strategically positioned within the vibrant academic environment of NSCET, the R&amp;D Cell aims to bridge the gap between theoretical knowledge and practical application, thereby contributing to the advancement of technology and industry.
    </p>

    <div class="objectives">
      <h3>Objectives</h3>
      <ul>
        <li>Promote Research Culture: Encourage faculty and students to engage in innovative research activities.</li>
        <li>Collaborate with Industry: Establish partnerships with industries to facilitate applied research and development.</li>
        <li>Secure Funding: Assist in obtaining research grants from government and private agencies.</li>
        <li>Enhance Publication Output: Support the publication of research findings in reputed journals and conferences.</li>
        <li>Develop Patents: Encourage the development of new technologies and processes leading to patent filings.</li>
      </ul>
    </div>

    <div class="members">
      <h3>Cell Members</h3>
      <ul>
        <li>Dr. B. Radha Krishnan – Professor &amp; Head, Department of Mechanical Engineering</li>
        <li>Dr. C. Mathalai Sundaram – Principal &amp; Professor, Department of Mechanical Engineering</li>
        <li>Dr. Athilingam R – Associate Professor, Department of Electrical and Electronics Engineering</li>
        <li>Dr. T. Venish Kumar A – Professor &amp; Head, Department of Electronics and Communication Engineering</li>
        <li>Dr. M. Sathya – Associate Professor, Department of Computer Science and Engineering</li>
        <li>Dr. N. David Mathan – Professor, Department of Chemistry</li>
        <li>Dr. Ananthakrishnan – Professor &amp; Head, Department of Civil Engineering</li>
        <li>Dr. N. Mathavan – Assistant Professor, Department of Electronics and Communication Engineering</li>
        <li>Dr. Mathalai Raj – Assistant Professor, Department of Computer Science and Engineering</li>
      </ul>
    </div>

    <div class="incharge">
      <h3>Cell In-Charge</h3>
      <p><strong>Dr. B. Radha Krishnan</strong><br>
        Professor &amp; Head, Department of Mechanical Engineering</p>
      <p>Email: <a href="mailto:research@nscet.org">research@nscet.org</a></p>
      <p>Phone: +91 9159989767</p>
    </div>
  </div>


<?php include('../resources/footer.php'); ?>

<!-- custom js -->
<script src="./assets/js/resources/script.js"></script>
</body>
</html>