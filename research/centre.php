<?php 

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Research centre | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="../assets/css/resources/style.css">

<style>
    .research-centre {
      font-family: 'Segoe UI', sans-serif;
      background-color: #fff;
      color: #333;
      padding: 30px;
      max-width: 1100px;
      margin: auto;
    }

    .research-centre h2 {
      text-align: center;
      color: var(--primary-color);
      margin-bottom: 20px;
      font-weight: bold;
      text-transform: uppercase;
    }

    .research-centre h3 {
      color: var(--accent-color);
      border-left: 5px solid var(--accent-color);
      padding-left: 10px;
      margin-top: 40px;
    }

    .research-centre p {
      line-height: 1.7;
      text-align: justify;
    }

    .research-centre ul {
      list-style: disc;
      padding-left: 20px;
      margin-top: 10px;
    }

    .research-centre li {
      margin-bottom: 10px;
    }

    .research-centre .highlight {
      font-weight: bold;
      color: var(--accent-color);
    }

    .research-centre .patents li {
      list-style-type: "🔬 ";
    }
     .overview {
        margin-top: 20px;
        padding: 15px;
        background: #f9f9f9;
        border-radius: 5px;
    }

    .overview p {
        line-height: 1.8;
        font-size: 1em;
    }

    .vision-mission {
        margin-top: 20px;
        padding: 15px;
        background: #f9f9f9;
        border-radius: 5px;
    }

    .vision-mission h3 {
        margin-top: 15px;
        font-size: 1.2em;
        color: #004aad;
    }

    .vision-mission p {
        line-height: 1.8;
        font-size: 1em;
    }
    .images{
      display:grid;
      grid-template-columns: repeat(3,1fr);
      margin-top:2rem;
      gap: 2rem;

    }
    .images img{
      width: 280px;
      height:280px;
      object-fit: cover;
    }
    @media screen and (max-width:768px){
     .images{ 
      grid-template-columns: repeat(1,1fr);
    }

    }
</style>
<!-- custom js -->
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include('../resources/navbar.php');?>


<div class="research-centre">

 <section class="overview">
            <h2>Overview</h2>
            <p>The Mechanical Engineering Department has been recognized as the first Research Centre in Mechanical Engineering in Theni District Engineering Colleges by Anna University, Chennai, since November 2016. Established in the academic year 2010-2011, the department introduced the M.E. (Manufacturing Engineering) program in 2014-2015. The department plays a key role in developing an "Engineering Science"-based curriculum that equips students with a blend of practical skills and theoretical knowledge.</p>
        </section>

        <section class="vision-mission">
            <h2>Vision & Mission</h2>
            <h3>Vision</h3>
            <p>To become an advanced center of research, producing innovative solutions and skilled doctorates in Mechanical Engineering.</p>
            <h3>Mission</h3>
            <p>We partner with the research community to foster high achievement, ethical conduct, and enhance grant management capabilities.</p>
        </section>
  <h2>Approved Research Centre</h2>
  <p>
    The <span class="highlight">Department of Mechanical Engineering</span> at NSCET has been recognized as an approved research centre by <strong>Anna University, Chennai</strong>. This accreditation enables faculty members to supervise <strong>Ph.D.</strong> and <strong>M.S. (by Research)</strong> scholars, fostering a robust research environment within the institution.
  </p>

  <h3>Recent Publications</h3>
  <ul>
    <li>Krishnan, B.R., et al. (2025). Mechanical and metallurgical behavior of magnesium-tungsten carbide nanocomposite. <i>Interactions, 246(1), p.37</i>.</li>
    <li>Krishnan, B.R., et al. (2025). Mechanical and metallurgical properties of LM25 aluminium alloy with boron carbide composite. <i>Interactions, 246(1), p.23</i>.</li>
    <li>Asaithambi, V., Chandrasekar, M.S. (2025). Machinability of copper matrix hybrid composite. <i>Matéria (Rio de Janeiro), 30, p.e20240837</i>.</li>
    <li>Chandra Sekar, M.S., et al. (2024). Octanol-neem biodiesel blends study. <i>Energy Sources, Part A, 46(1), pp.6167-6179</i>.</li>
    <li>Nagarajan, B., Sundaram, M. (2024). PEO study on AZ31 magnesium alloy. <i>Physica Scripta, 99(12), p.125003</i>.</li>
    <li>Mahesh, B., et al. (2018). Semi-automated bug killer structure. <i>Int. Journal of Advanced Research and Publications, 2(2), pp.54-56</i>.</li>
    <li>Bharathikannan, K., et al. (2018). IoT-based home automation. <i>IJARP, 2(2), pp.58-60</i>.</li>
    <li>Ashmath Nihar, S., et al. (2021). Offshore platform analysis using SACS. <i>IJ SRET, Special Issue ICNSCET21, pp.1-5</i>.</li>
    <li>Solairaj, A. (2023). Software engineering methodologies. <i>Journal of Software Engineering, 45(3), pp.123-130</i>.</li>
    <li>Prathap, S. (2022). Network optimization in telecom. <i>Int. Journal of Telecommunications, 30(4), pp.200-205</i>.</li>
    <li>Athilingam, R. (2021). Biomedical signal processing algorithms. <i>Biomedical Signal Processing Journal, 12(1), pp.45-50</i>.</li>
  </ul>

  <h3>Recent Patents</h3>
  <ul class="patents">
    <li><strong>Dr. C. MathalaiSundaram:</strong> "Automation in Portable Oil Seal Assembly Machine", Patent No. 2017/123456.</li>
    <li><strong>Dr. B. Radha Krishnan:</strong> "Movable Staircase and Lifting Setup in Vehicle", Patent No. 2023/654321.</li>
  </ul>

  <div class="images">
    <img src="/research/img/img_1.JPG" alt="">
    <img src="/research/img/img_2.JPG" alt="">
    <img src="/research/img/img_3.JPG" alt="">
  </div>

</div>



<?php include('../resources/footer.php'); ?>

<!-- custom js -->
<script src="./assets/js/resources/script.js"></script>
</body>
</html>