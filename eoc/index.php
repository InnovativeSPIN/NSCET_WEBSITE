<?php 
include('../resources/conn.php');

function safe_htmlspecialchars($value) {
  return htmlspecialchars($value !== NULL ? $value : '-', ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Equal Opportunity Cell | <?php echo isset($colle_Name) ? $colle_Name : 'NSCET'; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/resources/style.css">
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
  <style>
    /* Hero Section */
    .hero-section {
      background: linear-gradient(to bottom, #f8f9fa, #e9ecef);
      padding: 80px 20px;
      text-align: center;
    }
    .hero-title {
      color: #333;
      font-size: clamp(32px, 3.5vw, 40px);
      font-weight: 700;
      margin-bottom: 15px;
      text-transform: uppercase;
    }
    .hero-subtitle {
      color: #6c757d;
      font-size: clamp(16px, 1.8vw, 20px);
      max-width: 600px;
      margin: 0 auto;
    }
    /* Content Sections */
    .content-section {
      padding: 50px 20px;
      background: #fff;
    }
    .content-card {
      max-width: 1000px;
      margin: 0 auto 80px;
      background: #fff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .content-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    }
    .section-title {
      color: #333;
      font-size: clamp(24px, 2.8vw, 28px);
      font-weight: 600;
      text-transform: uppercase;
      margin-bottom: 20px;
      text-align: center;
    }
    .divider {
      height: 4px;
      width: 100px;
      background: #dc3545;
      margin: 20px auto;
      border-radius: 2px;
    }
    /* Animated Bullet Points */
    ul.animated-list {
      list-style: none;
      padding-left: 30px;
    }
    ul.animated-list li {
      position: relative;
      padding-left: 35px;
      margin-bottom: 15px;
      animation: fadeInUp 0.6s ease forwards;
      animation-delay: calc(0.1s * var(--i));
      opacity: 0;
      text-align: justify;
      color: #343a40;
      font-size: clamp(16px, 1.6vw, 18px);
      line-height: 1.8;
    }
    ul.animated-list li::before {
      content: '\f058'; /* Font Awesome check-circle */
      font-family: 'Font Awesome 5 Free';
      font-weight: 900;
      position: absolute;
      left: 0;
      color: #007bff;
      font-size: clamp(18px, 1.8vw, 20px);
      top: 3px;
      transition: transform 0.3s ease, color 0.3s ease;
    }
    ul.animated-list li:hover::before {
      transform: scale(1.2);
      color: #0056b3;
    }
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(15px); }
      to { opacity: 1; transform: translateY(0); }
    }
    /* Text Styling */
    .content-card p {
      text-align: justify;
      color: #343a40;
      font-size: clamp(16px, 1.6vw, 18px);
      line-height: 1.8;
      margin-bottom: 20px;
    }
    /* Members Table */
    .members-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    .members-table th,
    .members-table td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #dee2e6;
      font-size: clamp(16px, 1.6vw, 18px);
      color: #343a40;
    }
    .members-table th {
      background-color: #f8f9fa;
      font-weight: 600;
    }
    .members-table tr:hover {
      background-color: #f1f3f5;
    }
    /* Responsive Adjustments */
    @media (max-width: 767px) {
      .hero-section {
        padding: 50px 15px;
      }
      .hero-title {
        font-size: clamp(28px, 3vw, 32px);
      }
      .hero-subtitle {
        font-size: clamp(14px, 1.6vw, 16px);
      }
      .content-section {
        padding: 30px 15px;
      }
      .content-card {
        padding: 25px;
        margin-bottom: 50px;
      }
      .section-title {
        font-size: clamp(20px, 2.5vw, 24px);
      }
      ul.animated-list li {
        font-size: clamp(14px, 1.4vw, 16px);
        padding-left: 30px;
      }
      ul.animated-list li::before {
        font-size: clamp(16px, 1.6vw, 18px);
        top: 2px;
      }
      .content-card p {
        font-size: clamp(14px, 1.4vw, 16px);
      }
      .divider {
        width: 80px;
      }
      .members-table th,
      .members-table td {
        padding: 10px;
        font-size: clamp(14px, 1.4vw, 16px);
      }
    }
    @media (prefers-reduced-motion: reduce) {
      ul.animated-list li {
        animation: none;
        opacity: 1;
      }
      .content-card {
        transition: none;
      }
    }
  </style>
</head>
<body style="display: flex; flex-direction: column; min-height: 100vh; margin: 0;">

<?php include('../resources/navbar.php'); ?>

<!-- Hero Section -->
<section class="hero-section">
  <h1 class="hero-title">Equal Opportunity Cell</h1>
  <p class="hero-subtitle">Promoting Equity and Inclusion at Nadar Saraswathi College of Engineering & Technology</p>
</section>

<!-- Content Sections -->
<section class="content-section">
  <!-- Introduction -->
  <div class="content-card" id="section-1" aria-label="Introduction">
    <h2 class="section-title">Introduction</h2>
    <div class="divider"></div>
    <p><?php echo safe_htmlspecialchars("The Equal Opportunity Cell (EOC) at Nadar Saraswathi College of Engineering & Technology (NSCET) has been established to ensure that all students, regardless of caste, gender, religion, region, language, disability, or socio-economic background, have equal access to academic, co-curricular, and support opportunities. The cell proactively works towards creating an inclusive, safe, and motivating environment that nurtures student potential and promotes equity across all aspects of campus life."); ?></p>
        <div class="button-section  d-flex justify-content-start ">
   <a href="../assets/pdf/Equal Opportunity Cell (EOC).pdf"><button class="btn btn-primary">Minutes of Meeting</button></a>
  </div>

  <!-- Objectives -->
  <div class="content-card" id="section-2" aria-label="Objectives">
    <h2 class="section-title">Objectives</h2>
    <div class="divider"></div>
    <ul class="animated-list">
      <li style="--i: 1;">To uphold the principles of equal access and equal opportunity to education and resources for all students.</li>
      <li style="--i: 2;">To sensitize students and staff about the importance of inclusivity and diversity.</li>
      <li style="--i: 3;">To promote personality development, soft skills, and employability among students from underrepresented backgrounds.</li>
      <li style="--i: 4;">To support students in preparing for competitive exams such as GATE, UPSC, TNPSC, and bank exams.</li>
      <li style="--i: 5;">To conduct awareness programs on overseas education opportunities and scholarships.</li>
      <li style="--i: 6;">To organize common interdepartmental competitions that promote unity and healthy competition.</li>
      <li style="--i: 7;">To spread awareness about government schemes for SC/ST/OBC students including financial, academic, and career support.</li>
      <li style="--i: 8;">To establish a transparent and confidential grievance redressal system to address discrimination or inequality.</li>
      <li style="--i: 9;">To assist in the preparation of students for career development through guidance and training programs.</li>
    </ul>
  </div>

  <!-- Roles and Responsibilities -->
  <div class="content-card" id="section-3" aria-label="Roles and Responsibilities">
    <h2 class="section-title">Roles and Responsibilities</h2>
    <div class="divider"></div>
    <ul class="animated-list">
      <li style="--i: 1;">Policy Implementation: Implement policies and guidelines that promote equal opportunity and eliminate discrimination.</li>
      <li style="--i: 2;">Workshops & Seminars: Organize sessions on soft skills, personality development, and competitive exam readiness.</li>
      <li style="--i: 3;">Student Support: Provide special attention and mentoring for SC/ST/OBC and economically weaker students.</li>
      <li style="--i: 4;">Career Guidance: Facilitate career counseling, mock interviews, resume building, and employability training.</li>
      <li style="--i: 5;">International Awareness: Conduct sessions on abroad studies, scholarships, and guidance from alumni.</li>
      <li style="--i: 6;">Competitions: Organize competitions like debates, essay writing, coding, and quizzes for inclusive learning.</li>
      <li style="--i: 7;">Grievance Redressal: Address grievances related to bias or discrimination confidentially and effectively.</li>
      <li style="--i: 8;">Government Schemes: Inform and assist eligible students to avail central/state welfare schemes.</li>
      <li style="--i: 9;">Annual Reporting: Maintain reports of all programs, student outcomes, and submit to the IQAC.</li>
    </ul>
  </div>

  <!-- Focus Areas -->
  <div class="content-card" id="section-4" aria-label="Focus Areas">
    <h2 class="section-title">Focus Areas</h2>
    <div class="divider"></div>
    <ul class="animated-list">
      <li style="--i: 1;">Personality Development</li>
      <li style="--i: 2;">Soft Skills & Communication</li>
      <li style="--i: 3;">Competitive Exams: GATE, UPSC, TNPSC, etc.</li>
      <li style="--i: 4;">Common College Competitions</li>
      <li style="--i: 5;">Abroad Education & Scholarship Awareness</li>
      <li style="--i: 6;">Career Guidance & Employability</li>
      <li style="--i: 7;">SC/ST/OBC & Minority Student Support</li>
      <li style="--i: 8;">Government Schemes & Welfare Programs</li>
      <li style="--i: 9;">Gender Sensitization & Disability Inclusion</li>
      <li style="--i: 10;">Grievance Redressal & Feedback Mechanism</li>
    </ul>
  </div>

  <!-- Members -->
  <div class="content-card" id="section-5" aria-label="Members">
    <h2 class="section-title">Members</h2>
    <div class="divider"></div>
    <table class="members-table">
      <tr>
        <th>Role</th>
        <th>Name</th>
      </tr>
      <tr>
        <td>Chairperson</td>
        <td>Dr. C. Mathalaisundaram, Principal</td>
      </tr>
      <tr>
        <td>Members</td>
        <td>
          Dr. M. Sathya – Vice Principal, Academic - Coordinator / EOC,<br>
          Dr. C. Karthikeyan – Placement and Training Officer,<br>
          Dr. V. Ananthi – Assistant Professor / Mathematics,<br>
          Mr. N. Keesamoorthy – Assistant Professor / CSE,<br>
          Mr. A. MuniKumar – Junior Assistant / Admin
        </td>
      </tr>
    </table>
  </div>
</section>

<?php include('../resources/footer.php'); ?>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="../assets/js/resources/script.js"></script>
</body>
</html>