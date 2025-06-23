<?php
include('../resources/conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Circulars Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/css/resources/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
  <style>
    .content-section { padding: 20px; }
    .info-h2 { font-size: 2rem; font-weight: bold; margin-bottom: 10px; text-align: center; }
    .info-p { font-size: 1rem; color: #555; margin-bottom: 20px; text-align: center; }
    .departments-container { display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; }
    .department { 
      text-align: center; 
      max-width: 200px; 
      border: 1px solid #ddd; 
      border-radius: 8px; 
      background-color: #fff; 
      box-shadow: 0 2px 4px rgba(0,0,0,0.1); 
      padding: 15px;
      position: relative; /* For positioning the 'New' badge */
    }
    .month-header { 
      font-size: 1.2rem; 
      font-weight: bold; 
      color: #333; 
      cursor: pointer; 
      padding: 10px; 
      border-radius: 8px; 
      background-color: #f8f9fa; 
      margin-bottom: 10px; 
    }
    .month-header:hover { background-color: #e9ecef; }
    .newsletter-list { 
      margin-top: 10px; 
      text-align: left; 
      display: none; /* Hidden by default */
    }
    .newsletter-list.show { display: block; }
    .newsletter-list a { 
      display: block; 
      font-size: 0.85rem; 
      color: #007bff; 
      text-decoration: none; 
      margin-bottom: 5px; 
    }
    .newsletter-list a:hover { text-decoration: underline; }
    .modal-pdf { 
      width: 100%; 
      height: 90vh; /* Full viewport height minus margins */
      display: block; 
      margin: 0 auto; 
      border-radius: 8px; 
    }
    .modal-dialog { 
      max-width: 95vw; /* Almost full viewport width */
      height: 95vh; /* Almost full viewport height */
      margin: 1rem auto; /* Centered with minimal margin */
    }
    .modal-content { 
      height: 100%; /* Ensure modal content fills dialog */
    }
    .modal-body { 
      padding: 0; /* Remove padding to maximize PDF size */
      height: calc(100% - 56px); /* Account for header height */
    }
    .new-badge { 
      position: absolute; 
      top: -10px; 
      right: -10px; 
      background-color: #ff4444; 
      color: #fff; 
      font-size: 0.75rem; 
      padding: 5px 10px; 
      border-radius: 12px; 
      animation: pulse 1.5s infinite; 
    }
    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.1); }
      100% { transform: scale(1); }
    }
  </style>
</head>
<body>
  <?php
  include('../resources/navbar.php');
  ?>

  <div id="main_section">
    <div id="Circulars" class="content-section">
      <h2 class="info-h2">Circulars</h2>
      <p class="info-p">Recent Circulars for selected months</p>
      <div class="departments-container">
        <?php
        $months = ['January', 'February', 'March', 'May', 'June'];
        foreach ($months as $month):
        ?>
          <div class="department">
            <?php if ($month === 'June'): ?>
              <span class="new-badge">New</span>
            <?php endif; ?>
            <div class="month-header" data-month="<?php echo $month; ?>">
              <?php echo $month; ?> Circulars
            </div>
            <div class="newsletter-list" id="list-<?php echo $month; ?>">
              <?php
              $pdfDir = "../assets/pdf/circular/$month/";
              $pdfFiles = glob($pdfDir . "*.pdf");
              if (!empty($pdfFiles)):
                foreach ($pdfFiles as $pdf):
                  $pdfName = basename($pdf);
              ?>
                <a href="<?php echo htmlspecialchars($pdf); ?>" class="pdf-link" data-pdf-src="<?php echo htmlspecialchars($pdf); ?>"><?php echo htmlspecialchars($pdfName); ?></a>
              <?php
                endforeach;
              else:
              ?>
                <p class="info-p">No Circulars available</p>
              <?php
              endif;
              ?>
            </div>
          </div>
        <?php
        endforeach;
        ?>
      </div>
    </div>
  </div>

  <!-- Bootstrap Modal for PDF Preview -->
  <div class="modal fade" id="pdfPreviewModal" tabindex="-1" aria-labelledby="pdfPreviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="pdfPreviewModalLabel">Newsletter Preview</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <iframe id="previewPdf" src="" class="modal-pdf"></iframe>
        </div>
      </div>
    </div>
  </div>

  <?php
  include('../resources/footer.php');
  ?>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const monthHeaders = document.querySelectorAll('.month-header');
      const pdfLinks = document.querySelectorAll('.pdf-link');
      const previewPdf = document.getElementById('previewPdf');
      let modal;
      try {
        modal = new bootstrap.Modal(document.getElementById('pdfPreviewModal'));
        console.log('Modal initialized successfully');
      } catch (e) {
        console.error('Modal initialization failed:', e);
      }

      // Toggle newsletter list on month header click
      monthHeaders.forEach(header => {
        header.addEventListener('click', function () {
          const month = this.getAttribute('data-month');
          const list = document.getElementById(`list-${month}`);
          list.classList.toggle('show');
          console.log(`Toggled newsletter list for ${month}`);
        });
      });

      // Open PDF in modal on link click
      pdfLinks.forEach(link => {
        link.addEventListener('click', function (e) {
          e.preventDefault();
          const pdfSrc = this.getAttribute('data-pdf-src');
          console.log('PDF link clicked:', pdfSrc);
          previewPdf.setAttribute('src', pdfSrc);
          if (modal) {
            modal.show();
            console.log('Modal opened');
          } else {
            console.error('Modal not available');
          }
        });
      });

      // Debug close button click
      const closeButton = document.querySelector('.btn-close');
      closeButton.addEventListener('click', function () {
        console.log('Close button clicked');
        if (modal) {
          modal.hide();
          console.log('Modal closed');
        } else {
          console.error('Modal not available for closing');
        }
      });
    });
  </script>
</body>
</html>