<?php 

include('../../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SSR | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="../../assets/css/resources/style.css">
<link rel="stylesheet" href="../../assets/css/naac/ssr/style.css">


<!-- custom js -->
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include('../../resources/navbar.php'); ?>


<div class="sidebar">
    <ul class="nav-list" style="overflow:scroll">
      <li class="nav-item">
        <a href="https://nscet.org/ssr/ep.php">
          <span class="nav-item__icon">
            <ion-icon name="arrow-forward"></ion-icon>

          </span>
          <span class="nav-item__text">
            Extended Profile
          </span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#criterion1">
          <span class="nav-item__icon">
            C1
          </span>
          <span class="nav-item__text">
            Criteria 1
          </span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#criterion2">
          <span class="nav-item__icon">
            C2
          </span>
          <span class="nav-item__text">
            Criteria 2
          </span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#criterion3">
          <span class="nav-item__icon">
            C3
          </span>
          <span class="nav-item__text">
            Criteria 3
          </span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#criterion4">
          <span class="nav-item__icon">
            C4
          </span>
          <span class="nav-item__text">
            Criteria 4
          </span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#criterion5">
          <span class="nav-item__icon">
            C5
          </span>
          <span class="nav-item__text">
            Criteria 5
          </span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#criterion6">
          <span class="nav-item__icon">
            C6
          </span>
          <span class="nav-item__text">
            Criteria 6
          </span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#criterion7">
          <span class="nav-item__icon">
            C7
          </span>
          <span class="nav-item__text">
            Criteria 7
          </span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#">
          <span class="nav-item__icon">
            <ion-icon name="arrow-forward"></ion-icon>
          </span>
          <span class="nav-item__text">
            SSR
          </span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#">
          <span class="nav-item__icon">
            <ion-icon name="arrow-forward"></ion-icon>

          </span>
          <span class="nav-item__text">
            DVV Clarifiation
          </span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#">
          <span class="nav-item__icon">
            <ion-icon name="arrow-forward"></ion-icon>

          </span>
          <span class="nav-item__text">
            Best Practices
          </span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#">
          <span class="nav-item__icon">
            <ion-icon name="arrow-forward"></ion-icon>

          </span>
          <span class="nav-item__text">
            Institutional Distinctiveness
          </span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#">
          <span class="nav-item__icon">
            <ion-icon name="arrow-forward"></ion-icon>

          </span>
          <span class="nav-item__text">
            Code of Conduct
          </span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#">
          <span class="nav-item__icon">
            <ion-icon name="arrow-forward"></ion-icon>

          </span>
          <span class="nav-item__text">
            HR Policy
          </span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#">
          <span class="nav-item__icon">
            <ion-icon name="arrow-forward"></ion-icon>

          </span>
          <span class="nav-item__text">
            Capacity Building and Skill Enhancement
          </span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#">
          <span class="nav-item__icon">
            <ion-icon name="arrow-forward"></ion-icon>

          </span>
          <span class="nav-item__text">
            Stakeholders Feedback
          </span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#">
          <span class="nav-item__icon">
            <ion-icon name="arrow-forward"></ion-icon>

          </span>
          <span class="nav-item__text">
            Annual Report
          </span>
        </a>
      </li>
    </ul>

  </div>
  <section class="container">
    <!-- CRITERAION 1 -->
    <!-- Table 1 -->
    <div class="container-fluid mt-5" id="criterion1">
      <div class="row">
        <h3 class="blue">CRITERIA 1 - <h3 class="orange">Curricular Aspects (100)</h3>
        </h3>
      </div>
      <hr>
    </div>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5" style="display: inline;">Key Indicator - <h5 class="orange">1.1 Curricular Planning and
            Implementation (20)</h5>
        </h5>
      </div>

      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1.1.1 QIM</th>
            <td>The Institution ensures effective curriculum planning and delivery through a well – planned and
              documented process including Academic calendar and conduct of continuous internal Assessment. Write
              description in a maximum of 500 words</td>
            <td class="col3-view"><a href="https://nscet.org/naac/c1/c1.1.1/1.pdf"><u>View</u></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- table 2 -->
    <hr>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">1.2 Academic Flexibility (30)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1.2.1 QIM</th>
            <td>Number of Certificate/Value added courses offered and online courses of MOOCs, SWAYAM, NPTEL etc. where
              the students of the institution have enrolled and successfully completed during the last five years
              <hr>

              1.2.1.1: Number of Certificate/Value added courses offered and online courses of MOOCs, SWAYAM, NPTEL etc.
              where the students of the institution have enrolled and successfully completed during the last five years:
              _____
            </td>
            <td class="col3-view"><a href=""><u>View</u></a></td>
          </tr>
          <tr>
            <th scope="row">1.2.2</th>
            <td>Percentage of students enrolled in Certificate/ Value added courses and also completed online courses of
              MOOCs, SWAYAM, NPTEL etc.
              as against the total number of students during the last five years
              <hr>
              1.2.2.1. Number of students enrolled in Certificate/ Value added courses and also completed online courses
              of MOOCs, SWAYAM, NPTEL etc. as against the total number of students during the last five years
            </td>
            <td class="col3-view"><a href=""><u>View</u></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- Table 3 -->
    <hr>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">1.3 Curriculum Enrichment (30)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col1">Metric NO.</th>
            <th class="col2" scope="col2">Description</th>
            <th class="col3" scope="col3">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1.3.1 QIM</th>
            <td>Institution integrates crosscutting issues relevant to Professional Ethics, Gender, Human Values,
              Environment and Sustainability in transacting the Curriculum Write description in a maximum of 500 words
            </td>
            <td class="col3-view"><a href=""><u>View</u></a></td>
          </tr>
          <tr>
            <th scope="row">1.3.2 QIM</th>
            <td>Percentage of students undertaking projects work / field work / internships (Data for the latest
              completed academic year)
              <hr>

              1.3.2.1. Number of students undertaking Project work/ field work/ internships
            </td>
            <td class="col3-view"><a href=""><u>View</u></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- Table 4 -->
    <hr>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">1.4 Feedback System (20)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1.4.1</th>
            <td>Institution obtains feedback on the academic performance and ambience of the institution from various
              stakeholders, such as Students, Teachers, Employers, Alumni etc. and action taken report on the feedback
              is made available on institutional website</td>
            <td class="col3-view"><a href=""><u>View</u></a></td>
          </tr>
          <!-- <tr>
                        <th scope="row">1.2.2</th>
                        <td>Jacob</td>
                        <td class="col3-view"><a href=""><u>View</u></a></td>
                      </tr>-->
        </tbody>
      </table>
    </div>

    <!-- CRITERAION 2 -->
    <!-- Table 1 -->
    <div class="container-fluid mt-5" id="criterion2">
      <div class="row">
        <h3 class="blue">CRITERIA 2 - <h3 class="orange">Teaching, Learning and Evaluation (350)</h3>
        </h3>
      </div>
      <hr>
    </div>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">2.1 Student Enrolment and Profile (40)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">2.1.1 </th>
            <td>Enrolment Percentage</td>
            <td class="col3-view"><a
                href="https://nscet.org/naac/c2/2.1.1/2.1.1.pdf"><u>View</u></a></td>
          </tr>
          <tr>
            <th scope="row">2.1.2</th>
            <td>Percentage of seats filled against seats reserved for various categories (SC, ST, OBC, Divyangjan, etc.
              as per applicable reservation policy during the last five years (Exclusive of supernumerary seats)</td>
            <td class="col3-view"><a href="https://nscet.org/naac/c2/2.1.2/2.1.2.pdf"><u>View</u></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- table 2 -->
    <hr>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">2.2 Student Teacher Ratio (40)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">2.2.1</th>
            <td>Student – Full time Teacher Ratio (Data for the latest completed academic year)</td>
            <td class="col3-view"><a href="https://nscet.org/naac/c2/2.2.1/2.2.1.pdf"><u>View</u></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- Table 3 -->
    <hr>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">2.3 Teaching – Learning Process (40)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">2.3.1 QIM</th>
            <td>Student centric methods, such as experiential learning, participative learning and problem solving
              methodologies are used for enhancing learning experiences and teachers use ICT- enabled tools including
              online resources for effective teaching and learning process. Write description in a maximum of 500 words
            </td>
            <td class="col3-view"><a href="#"><u>View</u></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- Table 4 -->
    <hr>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">2.4 Teacher Profile and Quality (40)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">2.4.1 QIM</th>
            <td>Percentage of full-time teachers against sanctioned posts during the last five years
              <hr>
              2.4.1.1 Number of Sanctioned post / required positions for teaching staff/ full time teachers year wise
              during last five years
            </td>
            <td class="col3-view"><a href="https://nscet.org/naac/c2/2.4.1/2.4.1.pdf"><u>View</u></a>
            </td>
          </tr>
          <tr>
            <th scope="row">2.4.2</th>
            <td>Percentage of full time teachers with NET/SET/SLET/ Ph. D. / D.M. / M.Ch. / D.N.B Superspeciality /
              D.Sc. / D.Litt. during the last five years (consider only highest degree for count)
              <hr>
              2.4.2.1 Number of full time teachers with NET/SET/SLET/ Ph. D. / D.M. / M.Ch. / D.N.B Superspeciality /
              D.Sc. / D.Litt. year wise during the last five years
            </td>
            <td class="col3-view"><a target='__blank'
                href="https://nscet.org/naac/c2/2.4.2/2.4.2.pdf"><u>View</u></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- Table 5 -->
    <hr>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">2.5 Evaluation Process and Reforms (40)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">2.5.1 QIM</th>
            <td>Mechanism of Internal / External assessment is transparent and the grievance redressal system is time –
              bound and efficient. Write description in a maximum of 500 words</td>
            <td class="col3-view"><a href="#"><u>View</u></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- Table 6 -->
    <hr>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">2.6 Student Performance and Learning Outcome (90)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">2.6.1 QIM</th>
            <td>Programme Outcomes(POs) and Course Outcomes(COs) for all programmes offered by the institution are
              stated and displayed on website and attainment of POs and COs are evaluated Write description in the
              maximum of 500</td>
            <td class="col3-view"><a
                href="#"><u>View</u></a></td>
          </tr>
          <tr>
            <th scope="row">2.6.2</th>
            <td>Attainment of POs and COs are evaluated. Explain with evidence in a maximum of 500 words</td>
            <td class="col3-view"><a href="#"><u>View</u></a></td>
          </tr>
          <tr>
            <th scope="row">2.6.3</th>
            <td>Pass percentage of students during last five years.
              <hr>

              2.6.3.1 Number of final year students who passed the university examination year wise during the last five
              years
              <hr>

              2.6.3.2. Number of final year students who appeared for the university examination year wise during the
              last five years
            </td>
            <td class="col3-view"><a href="https://nscet.org/naac/c2/2.6.3/2.6.3.pdf"><u>View</u></a></td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- CRITERAION 3 -->
    <!-- Table 1 -->
    <div class="container-fluid mt-5" id="criterion3">
      <div class="row">
        <h3 class="blue">CRITERIA 3</h3>
      </div>
      <hr>
    </div>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange"> 3.1 Grants</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">3.1.1 </th>
            <td>Grants received from Government and Non-governmental agencies for research projects/ endowments in the
              institution during the last five years (INR in Lakhs)</td>
            <td class="col3-view"><a href="https://nscet.org/naac/c3/3.1.1/3.1.1.pdf"><u>View</u></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- table 2 -->
    <hr>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">3.2 Innovation Ecosystem (15)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">3.2.1 QIM</th>
            <td>Institution has created an Ecosystem for Innovations and has initiatives for creation and transfer of
              knowledge (patents filed, published, incubation center facilities in HEI to be considered) Write
              description in a maximum of 500 words</td>
            <td class="col3-view"><a href="#"><u>View</u></a>
            </td>
          </tr>
          <tr>
            <th scope="row">3.2.2</th>
            <td>Number of Workshops/Seminars/Conferences including on Research Methodology, Intellectual Property Rights
              (IPR) and Entrepreneurship conducted during the last five years</td>
            <td class="col3-view"><a href="https://nscet.org/naac/c3/3.2.2/3.2.pdf"><u>View</u></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- Table 3 -->
    <hr>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">3.3 Research Publication and Awards (25)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">3.3.1</th>
            <td>Number of research papers published per teacher in the journals notified on UGC care list during the
              last five years.</td>
            <td class="col3-view"><a
                href="https://nscet.org/naac/c3/3.3.1/3.3.1.pdf"><u>View</u></a></td>
          </tr>
          <tr>
            <th scope="row">3.3.2</th>
            <td>Number of books and chapters in edited volumes/ books published and papers published in national and
              International conference proceedings per teacher during the last five years</td>
            <td class="col3-view"><a href="https://nscet.org/naac/c3/3.3.2/3.3.2.pdf"><u>View</u></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- Table 4 -->
    <hr>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">3.4 Extension Activities (40)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">3.4.1 QIM</th>
            <td>Extension Activities are carried out in the neighbourhood community, sensitizing students to social
              issues, for their holistic development, and impact thereof during the last five years. Write description
              in a maximum of 500 words</td>
            <td class="col3-view"><a href="#"><u>View</u></a></td>
          </tr>
          <tr>
            <th scope="row">3.4.2 QIM</th>
            <td>Awards and recognitions received for extension activities from government/ government recognized bodies
              Write description in a maximum of 500 words</td>
            <td class="col3-view"><a href="#"><u>View</u></a></td>
          </tr>
          <tr>
            <th scope="row">3.4.3</th>
            <td>Number of extension and outreach programs conducted by the Institution through NSS/NCC/ Red cross/ YRC
              etc, (including the programmes such as Swachh Bharat, AIDS awareness, Gender issues etc and/or those
              organized in collaboration with industry, community and NGOs) during the last five years.</td>
            <td class="col3-view"><a href="https://nscet.org/naac/c3/3.4.3/3.4.3.pdf"><u>View</u></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- Table 5 -->
    <hr>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">3.5 Collaboration (20)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">3.5.1</th>
            <td>The number of MoUs, Collaborations/ Linkages for faculty exchange, Internship, Field trip, On-the-job
              training, research and other academic activities during the last five years</td>
            <td class="col3-view"><a href="https://nscet.org/naac/c3/3.5.1/3.5.1.pdf"><u>View</u></a></td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- CRITERAION 4 -->
    <!-- Table 1 -->
    <div class="container-fluid mt-5" id="criterion4">
      <div class="row">
        <h3 class="blue">CRITERIA 4 - <h3 class="orange">Infrastructure and learning Resources (100)</h3>
        </h3>
      </div>
      <hr>
    </div>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">4.1 Physical Facilities (30)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">4.1.1 QIM</th>
            <td>The Institution has adequate infrastructure and other facilities
              for
              a. teaching – learning, viz., classrooms, laboratories, computing
              equipment etc
              b. ICT – enabled facilities such as smart class, LMS etc.
              Facilities for Cultural and sports activities, yoga centre, games (indoor and outdoor), Gymnasium,
              auditorium etc
              Describe the adequacy of facilities in maximum of 500 words</td>
            <td class="col3-view"><a href="#"><u>View</u></a>
            </td>
          </tr>
          <tr>
            <th scope="row">4.1.2 QnM</th>
            <td>Percentage of expenditure for infrastructure development and augmentation excluding salary during the
              last five years
              <hr>
              4.1.2.1: Expenditure for infrastructure development and augmentation, excluding salary year wise during
              last five years (INR in lakhs)
            </td>
            <td class="col3-view"><a href="https://nscet.org/naac/c4/4.1.2/4.1.2.pdf"><u>View</u></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- table 2 -->
    <hr>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">4.2 Library as a learning Resources (20)
          </h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">4.2.1 QIM</th>
            <td>Library is automated with digital facilities using Integrated Library Management System (ILMS), adequate
              subscriptions to e-resources and journals are made. The library is optimally used by the faculty and
              students. Write description in a maximum of 500 words</td>
            <td class="col3-view"><a href="#"><u>View</u></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- Table 3 -->
    <hr>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">4.3 IT Infrastructure (30)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">4.3.1 QIM</th>
            <td>Institution frequently updates its IT facilities and provides sufficient bandwidth for internet
              connection
              Describe IT facilities including Wi-Fi with date and nature of updation, available internet bandwidth
              within a maximum of 500 words</td>
            <td class="col3-view"><a href="#"><u>View</u></a></td>
          </tr>
          <tr>
            <th scope="row">4.3.2</th>
            <td>Student – Computer Ratio ( Data for the latest completed academic year)
              <hr>
              4.3.2.1 Number of Computers available for students usage during the latest completed academic year
            </td>
            <td class="col3-view"><a href="https://nscet.org/naac/c4/4.3.2/4.3.2.pdf"><u>View</u></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- Table 4 -->
    <hr>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">4.4 Maintenance of Campus Infrastructure (20)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">4.4.1 QIM</th>
            <td>Percentage expenditure incurred on maintenance of physical facilities and academic support facilities
              excluding salary component, during the last five years
              <hr>4.4.1.1 Expenditure incurred on maintenance of physical facilities and academic support facilities
              excluding salary component year wise during last five years (INR in lakhs)
            </td>
            <td class="col3-view"><a href="https://nscet.org/naac/c4/4.4.1/1.pdf"><u>View</u></a></td>
          </tr>
          <!-- <tr>
                        <th scope="row">1.2.2</th>
                        <td>Jacob</td>
                        <td class="col3-view"><a href=""><u>View</u></a></td>
                      </tr>-->
        </tbody>
      </table>
    </div>

    <!-- CRITERAION 5 -->
    <!-- Table 1 -->
    <div class="container-fluid mt-5" id="criterion5">
      <div class="row">
        <h3 class="blue">CRITERIA 5 - <h3 class="orange">Student Support and Progression (140)</h3>
        </h3>
      </div>
      <hr>
    </div>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">5.1 Student Support (50)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">5.1.1 QnM</th>
            <td>Percentage of students benefited by scholarships and freeships provided by
              the institution, government and non-government bodies, industries, individuals, philanthropists during the
              last five years.
              <hr>
              5.1.1.1. Number of students benefited by scholarships and freeships provided by the institution,
              Government and non-government bodies, industries, individuals, philanthropists
              during the last five years.
            </td>
            <td class="col3-view"><a href=""><u>View</u></a></td>
          </tr>
          <tr>
            <th scope="row">5.1.2 QnM</th>
            <td>Following capacity development and skills enhancement activities are organized for improving students’
              capability<br>
              1. Soft skills<br>
              2. Language and communication skills<br>
              3. Life skills (Yoga, physical fitness, health and hygiene)<br>
              4. ICT / Computing Skills<br></td>
            <td class="col3-view"><a href="https://nscet.org/naac/c5/5.1.2/MainIndex.pdf"><u>View</u></a></td>
          </tr>
          <tr>
            <th scope="row">5.1.3 QnM</th>
            <td> Percentage of students benefitted by guidance for competitive examinations and career counseling
              offered by the Institution during the last five years.
              <hr>
              5.1.3.1 Number of students benefitted by guidance for competitive examinations and career counseling
              offered by the institution year wise during last five years
            </td>
            <td class="col3-view"><a href=""><u>View</u></a></td>
          </tr>
          <tr>
            <th scope="row">5.1.4 QnM</th>
            <td>The institution adopts the following for redressal of student grievances including sexual harassment and
              ragging cases<br>
              1. Implementation of guidelines of statutory/regulatory bodies<br>
              2. Organisation wide awareness and undertakings on policies with zero tolerance<br>
              3. Mechanisms for submission of online/offline students’ grievances<br>
              4. Timely redressal of the grievances through appropriate committees></td>
            <td class="col3-view"><a href="https://nscet.org/naac/c5/5.1.4/5.1.4.HOME PAGE.pdf"><u>View</u></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- table 2 -->
    <hr>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">5.2 Student Progression (30)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">5.2.1 QnM</th>
            <td>Percentage of placement of outgoing students and students progressing to
              higher education during the last five years.
              <hr>
              5.2.1.1 Number of outgoing students placed and / or progressed to higher education year wise during the
              last five years.
              <hr>
              5.2.1.2. Number of outgoing students year wise during the last five years.
              <hr>
            </td>
            <td class="col3-view"><a href=""><u>View</u></a></td>
          </tr>
          <tr>
            <th scope="row">5.2.2 QnM</th>
            <td>Percentage of students qualifying in state/national/ international
              level examinations during the last five years. (eg: IIT/JAM/NET/SLET/GATE/GMAT/GPAT/CLAT/CAT/GRE/TOEFL/
              IELTS/Civil Services/State government examinations etc.)</td>
            <td class="col3-view"><a href=""><u>View</u></a></td>
          </tr>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- Table 3 -->
    <hr>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">5.3 Student Participation and Activities (50)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">5.3.1 QIM</th>
            <td>Number of awards / medals for outstanding performance in sports / cultural actives at University / State
              / National / International level (award for a team event should be counted as one ) during the last five
              years.</td>
            <td class="col3-view"><a href=""><u>View</u></a></td>
          </tr>
          <tr>
            <th scope="row">5.3.2</th>
            <td>Average number of sports and cultural programs in which students of the Institution participated during
              last five years. (organised by the institution/other institutions)</td>
            <td class="col3-view"><a href=""><u>View</u></a></td>
          </tr>
          <tr>
            <!-- <th scope="row"> </th> -->
            <!-- <td colspan="2">Larry the Bird</td> -->
          </tr>
        </tbody>
      </table>
    </div>
    <!-- Table 4 -->
    <hr>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">5.4 Alumni Engagement (10)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">5.4.1 QIM</th>
            <td>
              There is a registered Alumni Association that contributes significantly to the development of the
              institution through financial and / or other support services
            </td>
            <td class="col3-view"><a href="https://nscet.org/naac/c5/5.4.1/5.4.1.pdf"><u>View</u></a></td>
          </tr>
          <!-- <tr>
                        <th scope="row">1.2.2</th>
                        <td>Jacob</td>
                        <td class="col3-view"><a href=""><u>View</u></a></td>
                      </tr>-->
        </tbody>
      </table>
    </div>

    <!-- CRITERAION 6 -->
    <!-- Table 1 -->
    <div class="container-fluid mt-5" id="criterion6">
      <div class="row">
        <h3 class="blue">CRITERIA 6 - <h3 class="orange">Governance, Leadership and Management (100)</h3>
        </h3>
      </div>
      <hr>
    </div>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">6.1 Institutional Vision and Leadership (10)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">6.1.1 </th>
            <td>The governance and leadership is in accordance with vision and mission of the institution and it is
              visible in various institutional practices such as decentralization and participation in the institutional
              governance</td>
            <td class="col3-view"><a href="https://nscet.org/naac/c6/6.1/6.1.pdf"><u>View</u></a></td>
          </tr>
          <!-- <tr>
                        <th scope="row">2.1.2</th>
                        <td>Jacob</td>
                        <td class="col3-view"><a href=""><u>View</u></a></td>
                      </tr> -->
        </tbody>
      </table>
    </div>
    <!-- table 2 -->
    <hr>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">6.2 Strategy Development and Deployment (10)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">6.2.1 QIM</th>
            <td>The functioning of the institutional bodies is effective and efficient as visible from policies,
              administrative setup, appointment and service rules, procedures, deployment of institutional Strategic/
              perspective/development plan etc</td>
            <td class="col3-view"><a href="https://nscet.org/naac/c6/6.2.1/6.2.1.pdf"><u>View</u></a></td>
          </tr>
          <tr>
            <th scope="row">6.2.2</th>
            <td> Implementation of e-governance in areas of operation 1. Administration 2. Finance and Accounts 3.
              Student Admission and Support 4. Examination</td>
            <td class="col3-view"><a href="https://nscet.org/naac/c6/6.2.2/6.2.2 main.pdf"><u>View</u></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- Table 3 -->
    <hr>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">1.1 Curricular Planning and Implementation (20)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">6.3.1 QIM</th>
            <td>The institution has effective welfare measures and Performance Appraisal System for teaching and
              non-teaching staff</td>
            <td class="col3-view"><a href="https://nscet.org/naac/c6/6.3.1/Index.pdf"><u>View</u></a></td>
          </tr>
          <tr>
            <th scope="row">6.3.2</th>
            <td>Percentage of teachers provided with financial support to attend conferences/workshops and towards
              membership fee of professional bodies during the last five years.
              <hr>
              6.3.2.1. Number of teachers provided with financial support to attend conferences/workshops and towards
              membership fee of professional bodies year wise during the last five years
            </td>
            <td class="col3-view"><a href=""><u>View</u></a></td>
          </tr>
          <tr>
            <th scope="row">6.3.2</th>
            <td>Percentage of teaching and non-teaching staff participating in Faculty development Programmes (FDP),
              professional development /administrative training programs during the last five years.
              <hr>
              6.3.3.1.Total number of teaching and non-teaching staff participating in Faculty development Programmes
              (FDP), professional development /administrative training programs during the last five years.
              <hr>
              6.3.3.2 Number of non-teaching staff year wise during the last five years
            </td>
            <td class="col3-view"><a href=""><u>View</u></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- Table 4 -->
    <hr>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">6.4 Financial Management and Resource Mobilization (15)
          </h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">6.4.1 QIM</th>
            <td>Institution has strategies for mobilization and optimal utilization of resources and funds from various
              sources (government/ nongovernment organizations) and it conducts financial audits regularly (internal and
              external)Institution has strategies for mobilization and optimal utilization of resources and funds from
              various sources (government/ nongovernment organizations) and it conducts financial audits regularly
              (internal and external)</td>
            <td class="col3-view"><a href=""><u>View</u></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- Table 5 -->
    <hr>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">6.5 Internal Quality Assurance System (30)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">6.5.1 QIM</th>
            <td>Internal Quality Assurance Cell (IQAC) has contributed significantly for institutionalizing the quality
              assurance strategies and processes. It reviews teaching learning process, structures & methodologies of
              operations and learning outcomes at periodic intervals and records the incremental improvement in various
              activities</td>
            <td class="col3-view"><a href=""><u>View</u></a></td>
          </tr>
          <tr>
            <th scope="row">6.5.2 QIM</th>
            <td>Quality assurance initiatives of the institution include:<br> 1. Regular meeting of Internal Quality
              Assurance Cell (IQAC); Feedback collected, analyzed and used for Improvements<br> 2. Collaborative quality
              initiatives with other institution(s)/membership of international networks <br>3. Participation in
              NIRF<br> 4. any other quality audit/accreditation recognized by state, national or international agencies
              such as NAAC, NBA,ISO Certification etc</td>
            <td class="col3-view"><a href=""><u>View</u></a></td>
          </tr>
          <!-- <tr>
                        <th scope="row">1.2.2</th>
                        <td>Jacob</td>
                        <td class="col3-view"><a href=""><u>View</u></a></td>
                      </tr> -->
        </tbody>
      </table>
    </div>

    <!-- CRITERAION 7 -->
    <!-- Table 1 -->
    <div class="container-fluid mt-5" id="criterion7">
      <div class="row">
        <h3 class="blue">CRITERIA 7 - <h3 class="orange">Institutional Values and Best Practices (100)
          </h3>
        </h3>
      </div>
      <hr>
    </div>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">7.1 Institutional Values and Social Responsibilities
            (50)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">7.1.1 QIM</th>
            <td>Institution has initiated the Gender Audit and measures for the promotion of gender equity during the
              last five years.
              Describe the gender equity & sensitization in curricular and co-curricular activities, facilities for
              women on campus etc.,</td>
            <td class="col3-view"><a href="https://nscet.org/naac/c7/7.1.1/7.1.1-Main-Index.pdf"><u>View</u></a></td>
          </tr>
          <tr>
            <th scope="row">7.1.2 QnM</th>
            <td>The Institution has facilities and initiatives for<br>
              1. Alternate sources of energy and energy conservation measures<br>
              2. Management of the various types of degradable and non degradable waste<br>
              3. Water Conservation<br>
              4. Green campus initiatives<br>
              5. Disabled – friendly, barrier free environment</td>
            <td class="col3-view"><a href="https://nscet.org/naac/c7/7.1.2/"><u>View</u></a></td>
          </tr>
          <tr>
            <th scope="row">7.1.3 QnM</th>
            <td>Quality audits on environment and energy regularly undertaken by the Institution<br>
              The institutional environment and energy initiatives are confirmed through the following<br>
              1. Green audit / Environment audit<br>
              2. Energy audit<br>
              3. Clean and green campus initiatives<br>
              4. Beyond the campus environmental promotion sustainability activities</td>
            <td class="col3-view"><a
                href="https://nscet.org/naac/c7/7.1.3/7.1.3 Quality Audits/7.1.3-Main-Index.pdf"><u>View</u></a></td>
          </tr>
          <tr>
            <th scope="row">7.1.4 QIM</th>
            <td>Describe the Institutional efforts/initiatives in providing an inclusive environment i.e., tolerance and
              harmony towards cultural, regional, linguistic, communal socioeconomic diversity and Sensitization of
              students and employees to the constitutional obligations: values, rights, duties and responsibilities of
              citizens.</td>
            <td class="col3-view"><a href="https://nscet.org/naac/c7/7.1.4/7.1.4-Main-Index.pdf"><u>View</u></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- table 2 -->
    <hr>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">7.2 Best Practices (30)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">7.2.1 QIM</th>
            <td>Describe two best practices successfully implemented by the Institution as per NAAC format provided in
              the Manual</td>
            <td class="col3-view"><a href="https://nscet.org/naac/c7/7.2.1/7.2.1-Main-Index.pdf"><u>View</u></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- Table 3 -->
    <hr>
    <div class="mx-5">
      <div class="row">
        <h5 class="blue pt5">Key Indicator - <h5 class="orange">7.3 Institutional Distinctiveness (20)</h5>
        </h5>
      </div>
      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th class="col1" scope="col">Metric NO.</th>
            <th class="col2" scope="col">Description</th>
            <th class="col3" scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">7.3.1 QIM</th>
            <td>Portray the performance of the Institution in one area distinctive to its priority and thrust within
              1000 words</td>
            <td class="col3-view"><a
                href="https://nscet.org/naac/c7/7.3.1/7.3.1 Institutional Distinctiveness/7.3.1-Main-Index.pdf"><u>View</u></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

  </section>



<?php include('../../resources/footer.php'); ?>

<!-- custom js -->
<script src="./assets/js/resources/script.js"></script>
</body>
</html>