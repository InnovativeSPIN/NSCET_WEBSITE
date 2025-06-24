<?php 

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Research Activities | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="../assets/css/resources/style.css">
<link rel="stylesheet" href="../assets/css/research/style.css">

<style>
      .research-statistics {
      font-family: Arial, sans-serif;
      background-color: #fff;
      color: var(--text-color);
      padding: 20px;
    }

    .research-statistics h2 {
      color: var(--dark-color);
      text-align: center;
      margin-top: 40px;
    }

    .research-statistics .section {
      margin-bottom: 60px;
    }

    .research-statistics .section img {
      display: block;
      margin: 0 auto;
      max-width: 480px;
      border: 2px solid var(--light-primary);
      border-radius: 8px;
    }

    .research-statistics table {
      width: 90%;
      margin: 20px auto;
      border-collapse: collapse;
      background-color: var(--light-primary);
    }

    .research-statistics th,
    .research-statistics td {
      padding: 10px 15px;
      border: 1px solid #ccc;
      text-align: center;
    }

    .research-statistics th {
      background-color: var(--primary-color);
      color: white;
    }

    .research-statistics td {
 color: #121212;
    }

    .research-statistics {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
                justify-content: space-between;
                margin-top: 20px;
            }

            .section {
                flex: 1 1 30%;
                text-align: center;
                padding: 15px;
                background: #f9f9f9;
                border-radius: 5px;
            }

            .section img {
                max-width: 100%;
                height: auto;
                margin-top: 10px;
            }

            .section figcaption {
                font-size: 0.9em;
                color: #555;
                margin-top: 5px;
            }
.main-columns{
    max-width: 1200px;
    margin: 0 auto;
    width: 100%;
}
            @media screen  and (max-width:768px){
                .section img{
                    width: 280px;
                }
            }
</style>
<!-- custom js -->
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include('../resources/navbar.php');?>

<main>
       

        <section class="research-statistics">
            <div class="section">
                <h2>Journal Publications</h2>
                <figure>
                    <img src="/research/files/journal.jpg" alt="Journal Publications">
                    <figcaption>Total: 232</figcaption>
                </figure>
            </div>

            <div class="section">
                <h2>Patent Count</h2>
                <figure>
                    <img src="/research/files/patent.jpg" alt="Patent Count">
                    <figcaption>Total: 28</figcaption>
                </figure>
            </div>

            <div class="section">
                <h2>Ph.D. Statistics - Teaching Staff</h2>
                <figure>
                    <img src="/research/files/phd.jpg" alt="Ph.D. Statistics">
                    <figcaption>Ph.D. Statistics for Teaching Staff</figcaption>
                </figure>
            </div>
        </section>
        <!-- <section class="faculty">
            <h2>Faculty and Specializations</h2>
            <ul>
                <li>Highly qualified faculty specializing in areas like thermal engineering, industrial engineering, material science, design, and manufacturing.</li>
                <li>Active engagement in research with consistent publications in both International and National Journals.</li>
            </ul>
        </section>

        <section class="student-development">
            <h2>Student Development and Learning</h2>
            <ul>
                <li>A dynamic learning environment encouraging students to tackle real-world challenges and develop practical skills.</li>
                <li>Regular technical workshops to expose students to emerging areas and industry trends.</li>
                <li>Guest lectures and industrial visits are periodically organized to provide practical exposure and enhance learning.</li>
            </ul>
        </section>

        <section class="facilities">
            <h2>Facilities and Learning Environment</h2>
            <ul>
                <li>The SMART CLASS room supports interactive learning with frequent, direct interactions.</li>
                <li>Laboratories offer hands-on experience in experiment/data design, measurement, and analysis.</li>
                <li>A state-of-the-art CAD/CAM lab fosters creativity and technical skills.</li>
            </ul>
        </section>

        <section class="supervisors">
            <h2>Approved Supervisors</h2>
            <div class="supervisor">
                <h3>Dr. C. Mathalai Sundaram</h3>
                <p>Professor & Principal</p>
                <p>AU Supervisor Ref. Number: 3520044</p>
            </div>
            <div class="supervisor">
                <h3>Dr. B. Radha Krishnan</h3>
                <p>Associate Professor</p>
                <p>AU Supervisor Ref. Number: 3620003</p>
            </div>
            <div class="supervisor">
                <h3>Dr. C. Sivakandhan</h3>
                <p>Professor</p>
                <p>AU Supervisor Ref. Number: 3720001</p>
            </div>
        </section> -->

    </main>
   
</div>
</div>

<?php include('../resources/footer.php'); ?>

<!-- custom js -->
<script src="./assets/js/resources/script.js"></script>
</body>
</html>