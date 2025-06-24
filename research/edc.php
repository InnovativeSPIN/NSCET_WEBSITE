<?php 
include('../resources/conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ENTREPRENEURSHIP DEVELOPMENT CELL | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  <!-- custom css -->
  <link rel="stylesheet" href="../assets/css/resources/style.css">

  <style>
    .edc-main {
      width: 80%;
      margin: auto;
      overflow: hidden;
      padding: 20px;
      background: #fff;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      margin-top: 20px;
      border-radius: 8px;

      header {
          background: #1292e2;
          color: #fff;
          padding: 20px 0;
          text-align: center;
          border-radius: 8px 8px 0 8px;
      }

      .edc-main h1,.edc-main h2,.edc-main h3 {
          color: #333;
      }

      .edc-main h2 {
          border-bottom: 2px solid #1292e2;
          padding-bottom: 10px;
          margin-top: 20px;
      }

      .edc-main p {
          margin: 15px 0;
          color: #444;
      }

      .edc-main ul {
          list-style-type: disc;
          padding-left: 20px;
      }

      .edc-main .highlight {
          background: #e7f3ff;
          padding: 15px;
          border-left: 5px solid #007bff;
          margin: 15px 0;
          border-radius: 5px;
      }
      #documents ul{
          display: grid;
          grid-template-columns: repeat(3,1fr);
          gap: 2rem;
          justify-content: center;
      }

      /* Added Table Styling */
      .edc-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
      }
      .edc-table th,
      .edc-table td {
        padding: 12px;
        text-align: center !important;
        border-bottom: 1px solid #ddd;
      }
      .edc-table th {
        background-color: #1292e2;
        color: #fff;
        font-weight: bold;
      }
      .edc-table tr:nth-child(even) {
        background-color: #f9f9f9;
      }
      .edc-table tr:hover {
        background-color: #f1f1f1;
        transition: background-color 0.3s ease;
      }
    }
  </style>
  <!-- custom js -->
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include('../resources/navbar.php');?>
<div class="edc-main">
  <header>
    <h3>Entrepreneurship Development Cell (EDC) <br> Institution’s Innovation Council (IIC)</h3>
  </header>
  <div class="container mt-5 ">
    <section id="about">
      <h2>About EDC & IIC</h2>
      <p>
        At Nadar Saraswathi College of Engineering and Technology (NSCET), the <strong>Entrepreneurship Development Cell (EDC)</strong> and the <strong>Institution’s Innovation Council (IIC)</strong> function collaboratively to promote innovation, creativity, and entrepreneurial thinking among students and faculty.
      </p>
      <p>
        These initiatives are aligned with the Government of India’s national missions such as <em>Startup India</em>, <em>Make in India</em>, <em>Digital India</em>, and <em>Atal Innovation Mission</em>. Together, they aim to build a robust ecosystem that encourages ideation, product development, business planning, and startup incubation within the institution.
      </p>
      <p>
        While the EDC focuses on nurturing entrepreneurial qualities and converting ideas into viable businesses, the IIC is dedicated to cultivating a structured innovation culture through activities like hackathons, design thinking workshops, IPR sessions, and prototype development.
      </p>
      <p>
        NSCET’s commitment to entrepreneurship and innovation is further strengthened through collaborations with industries, startups, incubators, and government agencies, ensuring our students are well-equipped to be future-ready leaders and change-makers.
      </p>
    </section>

    <section id="vision">
      <h2>🌟 Vision</h2>
      <div class="highlight">
        <p>
          To build a sustainable and inclusive ecosystem of innovation and entrepreneurship by nurturing future-ready innovators, leaders, and job creators through ethical and impactful practices.
        </p>
      </div>
    </section>

    <section id="mission">
      <h2>🎯 Mission</h2>
      <ul>
        <li>To foster a culture of innovation, entrepreneurship, and creativity across all disciplines.</li>
        <li>To enable hands-on learning and experiential projects that address real-world challenges.</li>
        <li>To provide mentorship, technical support, and infrastructure for idea validation and startup growth.</li>
        <li>To facilitate collaboration with industry, academia, and government bodies to support entrepreneurial initiatives.</li>
        <li>To empower all sections of society, including women and rural youth, through inclusive programs.</li>
      </ul>
    </section>

    <section id="objectives">
      <h2>🎯 Objectives</h2>
      <ul>
        <li>Build an entrepreneurial mindset among students through training, events, and experiential learning.</li>
        <li>Promote startup development by supporting ideation, prototype building, and business model creation.</li>
        <li>Conduct regular activities such as innovation challenges, bootcamps, guest lectures, and My Story sessions.</li>
        <li>Facilitate access to funding, incubation, and government startup schemes (e.g., DST, MSME, NIDHI, YUKTI).</li>
        <li>Encourage students and faculty to file Intellectual Property Rights (IPR) such as patents and trademarks.</li>
        <li>Create strong linkages with industries, NGOs, R&D institutions, and startup mentors.</li>
        <li>Celebrate national events like Innovation Day, Startup Week, and Entrepreneurship Awareness Programs.</li>
      </ul>
    </section>

    <section id="documents">    
      <h2>Document Archives</h2>
      <p>Click on a year below to view the corresponding IIC Ranking document:</p>
      <ul>
        <li><a href="/research/documents/IIC_Appreciation_Letter_AY_2023_24.pdf" target="_blank">2023-24</a></li>
        <li><a href="/research/documents/RatingCertificate_2019-20.pdf" target="_blank">2019-20</a></li>
        <li><a href="/research/documents/RatingCertificate_2022-23.pdf" target="_blank">2022-23</a></li>
        <li><a href="/research/documents/EstablismentCertificate_2018-19.pdf" target="_blank">2018-19</a></li>
        <li><a href="/research/documents/RatingCertificate_2021-22.pdf" target="_blank">2021-22</a></li>
        <li><a href="/research/documents/RatingCertificate_2020-21.pdf" target="_blank">2020-21</a></li>
      </ul>
    </section>

    <!-- Members Table -->
    <section id="members">
      <h2>EDC & IIC Team</h2>
      <div class="table-responsive">
        <table class="edc-table">
          <thead>
            <tr>
              <th>Role</th>
              <th>Name</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Coordinator</td>
              <td>Mr. P. Surulimani, AP/Mech</td>
            </tr>
            <tr>
              <td>Coordinator</td>
              <td>Dr. S. R. Krishnamoorthi, ASP/Phy</td>
            </tr>
            <tr>
              <td>Coordinator</td>
              <td>Mr. V. Sivaganesan, AP/Mech</td>
            </tr>
            <tr>
              <td>Member</td>
              <td>Mr. C. Shiva, AP/EEE</td>
            </tr>
            <tr>
              <td>Member</td>
              <td>Mrs. P. Niranjana, AP/CSE</td>
            </tr>
            <tr>
              <td>Member</td>
              <td>Mrs. P. Shantha Devi, AP/ECE</td>
            </tr>
            <tr>
              <td>Member</td>
              <td>Mr. J. Vinoth Kumar, AP/AI&DS</td>
            </tr>
            <tr>
              <td>Member</td>
              <td>Mr. K. Rajaguru, AP/Phy</td>
            </tr>
            <tr>
              <td>Member</td>
              <td>Mrs. G. Keerthana, AP/IT</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </div>
</div>

<?php include('../resources/footer.php');?>

<!-- custom js -->
<script src="./assets/js/resources/script.js"></script>
</body>
</html>