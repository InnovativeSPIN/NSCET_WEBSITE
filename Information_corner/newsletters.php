<?php
include('../resources/conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Newsletters Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/css/resources/style.css">
  <!-- <link rel="stylesheet" href="../assets/css/informationcorner/style.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
  <style>
    .content-section { padding: 20px; }
    .info-h2 { font-size: 2rem; font-weight: bold; margin-bottom: 10px; text-align: center; }
    .info-p { font-size: 1rem; color: #555; margin-bottom: 20px; text-align: center; }
    .year-card { 
      border: 1px solid #ddd; 
      border-radius: 8px; 
      margin-bottom: 20px; 
      background-color: #fff; 
      box-shadow: 0 2px 4px rgba(0,0,0,0.1); 
      max-width: 250px; /* Square card */
      width: 100%; /* Consistent sizing */
    }
    .year-card-header { 
      font-size: 1.5rem; 
      font-weight: bold; 
      padding: 15px; 
      text-align: center; 
      color: #333; 
      cursor: pointer; 
      background-color: #f8f9fa; 
      border-radius: 8px 8px 0 0; 
    }
    .year-card-header:hover { background-color: #e9ecef; }
    .newsletters-container { 
      padding: 20px; 
      text-align: center; 
    }
    .newsletter { margin-bottom: 10px; }
    .newsletter a { 
      display: block; 
      font-size: 0.9rem; 
      color: #007bff; 
      text-decoration: none; 
      cursor: pointer; 
    }
    .newsletter a:hover { text-decoration: underline; }
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
    .grid-container { 
      max-width: 1200px; 
      margin: 0 auto; 
      text-align: center; /* Fallback centering */
    }
    .row { justify-content: center; } /* Center columns in row */
  </style>
</head>
<body>
  <?php
  include('../resources/navbar.php');
  ?>

  <div id="main_section">
    <div id="Newsletters" class="content-section">
      <h2 class="info-h2">Newsletters</h2>
      
      <div class="grid-container">
        <?php
        $years = range(2024, 2014);
        $count = 0;
        foreach ($years as $year):
          if ($count % 5 == 0):
            echo $count > 0 ? '</div>' : ''; // Close previous row
            echo '<div class="row g-3">'; // Start new row with gutter
          endif;
        ?>
          <div class="col-12 col-md-2">
            <!-- Year Card -->
            <div class="year-card">
              <div class="year-card-header" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $year; ?>" aria-expanded="false" aria-controls="collapse<?php echo $year; ?>">
                <?php echo $year; ?> Newsletters
              </div>
              <div id="collapse<?php echo $year; ?>" class="collapse">
                <p class="info-p"><?php echo $year; ?> Newsletters</p>
                <div class="newsletters-container">
                  <?php
                  $pdfDir = "../assets/pdf/news/$year/";
                  $pdfFiles = glob($pdfDir . "*.pdf");
                  if (!empty($pdfFiles)):
                    foreach ($pdfFiles as $pdf):
                      $pdfName = basename($pdf);
                  ?>
                    <div class="newsletter">
                      <a href="<?php echo htmlspecialchars($pdf); ?>" class="pdf-link" data-pdf-src="<?php echo htmlspecialchars($pdf); ?>"><?php echo htmlspecialchars($pdfName); ?></a>
                    </div>
                  <?php
                    endforeach;
                  else:
                  ?>
                    <div class="newsletter">
                      <p class="info-p">No newsletters available</p>
                    </div>
                  <?php
                  endif;
                  ?>
                </div>
              </div>
            </div>
          </div>
        <?php
          $count++;
          if ($count == count($years)):
            echo '</div>'; // Close final row
          endif;
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
      console.log('DOM loaded, checking Bootstrap collapse availability'); // Debug DOM load
      if (typeof bootstrap === 'undefined') {
        console.error('Bootstrap JavaScript not loaded');
      } else {
        console.log('Bootstrap JavaScript loaded');
      }

      // Modal for PDF links
      const pdfLinks = document.querySelectorAll('.pdf-link');
      const previewPdf = document.getElementById('previewPdf');
      let modal;
      try {
        modal = new bootstrap.Modal(document.getElementById('pdfPreviewModal'));
        console.log('Modal initialized');
      } catch (e) {
        console.error('Modal initialization failed:', e);
      }

      pdfLinks.forEach(link => {
        link.addEventListener('click', function (e) {
          e.preventDefault(); // Prevent default link behavior
          console.log('PDF link clicked:', this.getAttribute('data-pdf-src')); // Debug click
          const pdfSrc = this.getAttribute('data-pdf-src');
          previewPdf.setAttribute('src', pdfSrc);
          if (modal) {
            modal.show();
            console.log('Modal should be open');
          } else {
            console.error('Modal not available');
          }
        });
      });
    });
  </script>
  <!-- Comment out external scripts to avoid conflicts -->
  <!-- <script src="../assets/js/resources/script.js"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> -->
</body>
</html>