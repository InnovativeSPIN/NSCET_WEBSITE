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
  <title>Controller Of Examination - NSCET</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/resources/style.css">
  <link rel="stylesheet" href="../assets/css/department/style.css">
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
  <style>
    .menu__list {
      list-style: none;
      padding: 0;
    }
    .menu__link {
      display: block;
      padding: 10px;
      color: #007bff;
      text-decoration: none;
      border-radius: 5px;
      transition: background 0.3s, color 0.3s;
    }

    /* PDF Content */
    #documents-container .section-content {
      display: none;
    }
    #documents-container .section-content.active {
      display: block;
    }
    /* Team Section Text Alignment */
    .faculties-content p {
      text-align: center;
      font-size: 1rem;
      color: #555;
      line-height: 1.6;
    }
    /* Responsive Adjustments */
    @media (max-width: 767px) {
      .navigation-bar {
        width: 100%;
        border-right: none;
        border-bottom: 1px solid #dee2e6;
      }
      .dept-page-content {
        padding: 15px;
      }
      .faculties-container {
        flex-direction: column;
        align-items: center;
      }
      .faculties-details {
        width: 100%;
        max-width: 300px;
        margin-bottom: 20px;
      }
    }
  </style>
</head>
<body style="display: flex; flex-direction: column; min-height: 100vh; margin: 0;">

<?php include('../resources/navbar.php'); ?>

<div id="main-box-container" style="display: flex; flex: 1;">
  <!-- Sidebar -->
  <section class="navigation-bar" role="navigation">
    <nav class="page__menu menu">
      <ul class="menu__list r-list">
        <li class="menu__group"><a class="menu__link r-link" data-section="section-13-1">ExamCell Constitution</a></li>
        <li class="menu__group"><a class="menu__link r-link" data-section="section-13-2">Internal Assessment Mechanism</a></li>
        <li class="menu__group"><a class="menu__link r-link" data-section="section-13-3">Internal Examination Grievance</a></li>
        <li class="menu__group"><a class="menu__link r-link" data-section="section-13-4">External Examination Grievances</a></li>
      </ul>
    </nav>
  </section>

  <!-- Main Content -->
  <div class="dept-page-content" style="flex: 1; padding: 20px;">
    <!-- PDF Documents Section -->
    <div id="documents-container">
      <?php
      $pdf_files = [
        ['name' => 'ExamCell Constitution', 'file' => 'examcell/1 ExamCell Constitution FC.pdf', 'section' => 'section-13-1'],
        ['name' => 'Internal Assessment Mechanism', 'file' => 'examcell/2 Internal Assessment Mechanism.pdf', 'section' => 'section-13-2'],
        ['name' => 'Internal Examination Grievance', 'file' => 'examcell/3 IE Grievance FC FINAL.pdf', 'section' => 'section-13-3'],
        ['name' => 'External Examination Grievances', 'file' => 'examcell/4 EE Grievances FC fINAL.pdf', 'section' => 'section-13-4']
      ];

      foreach ($pdf_files as $index => $pdf) {
        $pdf_path = "../assets/pdf/" . $pdf['file'];
        $is_active = $pdf['section'] === 'section-13-1' ? 'active' : '';
      ?>
        <div id="<?php echo $pdf['section']; ?>" class="section-content <?php echo $is_active; ?>">
          <div id="document-<?php echo $index + 1; ?>">
            <h1 class="section-title mb-2 text-center text-uppercase" style="margin-top:5%;"><?php echo safe_htmlspecialchars($pdf['name']); ?></h1>
            <div class="border-line" style="margin-bottom:5%;"></div>
            <div class="container">
              <?php if (file_exists($pdf_path)) { ?>
                <iframe src="<?php echo safe_htmlspecialchars($pdf_path); ?>" width="100%" height="600px" style="border:none;"></iframe>
              <?php } else { ?>
                <p class="text-center">File not found: <?php echo safe_htmlspecialchars($pdf['name']); ?></p>
              <?php } ?>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>

<!-- Controller of Examination (Team) Section -->
<div id="team-container" class="container-fluid" style="margin-top: 5%;">
  <div id="section-12">
    <div id="faculties">
      <h1 class="section-title mb-2 text-center text-uppercase">Controller Of Examination</h1>
      <div class="border-line" style="margin-bottom:5%;"></div>
      <div class="faculties-container">
        <section>
          <main class="office_bearers_details">
            <div class="faculties-list">
              <div style="width: 100%; text-align:center; display:flex; justify-content:center">
                <div class="faculties-details">
                  <div class="faculties-img">
                    <img alt="Mr. C. Prathap" class="card__image" src="../assets/img/department/staff/s-and-h/prathap.jpg">
                  </div>
                  <div class="faculties-content">
                    <p style="text-align:center;"><b>Mr. C. Prathap M.Tech.,(Ph.D)<br>Controller of Examination</b></p>
                  </div>
                </div>
              </div>
              <div class="faculties-details">
                <div class="faculties-img">
                  <img alt="Mr. K. Ganesh" class="card__image" src="../assets/img/department/staff/eee/ganesh.jpg">
                </div>
                <div class="faculties-content">
                  <p style="text-align:center;"><b>Mr. K. Ganesh M.E(Ph.D.)<br>Deputy Controller of Examination</b></p>
                </div>
              </div>
              <div class="faculties-details">
                <div class="faculties-img">
                  <img alt="Mr. V. Sivaganesan" class="card__image" src="../assets/img/department/staff/mech/sivaganesan.jpg">
                </div>
                <div class="faculties-content">
                  <p style="text-align:center;"><b>Mr. V. Sivaganesan M.E.,MISTE.<br>Deputy Controller of Examination</b></p>
                </div>
              </div>
              <div class="faculties-details">
                <div class="faculties-img">
                  <img alt="Mrs. M. Mahalakshmi" class="card__image" src="../assets/img/department/staff/s-and-h/mahalakshmi.jpg">
                </div>
                <div class="faculties-content">
                  <p style="text-align:center;"><b>Mrs. M. Mahalakshmi M.Sc.,M.Phil.,SET<br>Deputy Controller of Examination</b></p>
                </div>
              </div>
            </div>
          </main>
        </section>
      </div>
    </div>
  </div>
</div>

<!-- Exam Cell Process Chart Section -->
<div id="exam-cell-process-container" class="container-fluid" style="margin-top: 5%;">
  <div id="section-14">
    <h2 class="section-title mb-2 text-center text-uppercase">Exam Cell Process Chart</h2>
    <div class="border-line" style="margin-bottom:3%;"></div>
    <div class="text-center">
      <img src="../assets/pdf/examcell/Exam Cell Process.png" alt="Exam Cell Process Chart" style="width:100%; max-width:none; height:auto;">
    </div>
  </div>
</div>

<?php include('../resources/footer.php'); ?>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="../assets/js/resources/script.js"></script>
<script>
  // Show Section
  function showSection(sectionId) {
    document.querySelectorAll('#documents-container .section-content').forEach(section => {
      section.classList.remove('active');
    });
    document.getElementById(sectionId).classList.add('active');
  }

  // Initialize First Section
  document.addEventListener('DOMContentLoaded', () => {
    showSection('section-13-1'); // Default to ExamCell Constitution
  });

  // Sidebar Link Click Handler
  document.querySelectorAll('.menu__link').forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      const sectionId = this.getAttribute('data-section');
      showSection(sectionId);
    });
  });
</script>

</body>
</html>