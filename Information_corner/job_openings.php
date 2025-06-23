<?php
include('../resources/conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Openings Page</title>
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
      max-width: 800px; 
      margin-left: auto; 
      margin-right: auto; 
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
    .departments-container { 
      display: flex; 
      flex-wrap: wrap; 
      gap: 20px; 
      justify-content: center; 
      padding: 20px; 
    }
    .department { text-align: center; max-width: 200px; }
    .department img { width: 100%; height: auto; border-radius: 8px; cursor: pointer; }
    .department p { margin-top: 10px; font-size: 0.9rem; color: #333; }
    .modal-img { width: 100%; max-height: 90vh; display: block; margin: 0 auto; border-radius: 8px; object-fit: contain; }
    .modal-dialog { max-width: 90vw; }
  </style>
</head>
<body>
  <?php
  include('../resources/navbar.php');
  ?>

  <div id="main_section">
    <div id="Job_Openings" class="content-section">
      <h2 class="info-h2">Job Openings</h2>
      
      <!-- 2025 Year Card -->
      <div class="year-card">
        <div class="year-card-header" data-bs-toggle="collapse" data-bs-target="#collapse2025" aria-expanded="false" aria-controls="collapse2025">
          2025 Job Openings
        </div>
        <div id="collapse2025" class="collapse">
          <p class="info-p">2025 June Job Openings</p>
          <div class="departments-container">
            <div class="department">
              <img src="../assets/img/job/2025 Staff wanted 02.jpg" alt="2025 Job Opening" class="job-img" data-img-src="../assets/img/job/2025 Staff wanted 02.jpg">
            </div>
          </div>
          <p class="info-p">2025 Job Openings</p>
          <div class="departments-container">
            <div class="department">
              <img src="../assets/img/job/2025 Staff wanted 02.jpg" alt="2025 Job Opening" class="job-img" data-img-src="../assets/img/job/2025 Staff wanted 02.jpg">
            </div>  
          </div>
        </div>
      </div>

      <!-- 2024 Year Card -->
      <div class="year-card">
        <div class="year-card-header" data-bs-toggle="collapse" data-bs-target="#collapse2024" aria-expanded="false" aria-controls="collapse2024">
          2024 Job Openings
        </div>
        <div id="collapse2024" class="collapse">
          <p class="info-p">2024 Job Openings</p>
          <div class="departments-container">
            <div class="department">
              <img src="../assets/img/job/2024 Staff wanted Advertisement August.jpg" alt="2024 Job Opening" class="job-img" data-img-src="../assets/img/job/2024 Staff wanted Advertisement August.jpg">
            </div>
          </div>
          <p class="info-p">2024 Job Openings</p>
          <div class="departments-container">
            <div class="department">
              <img src="../assets/img/job/2024 Staff wanted Advertisement3.jpg" alt="2024 Job Opening" class="job-img" data-img-src="../assets/img/job/2024 Staff wanted Advertisement3.jpg">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap Modal for Image Preview -->
  <div class="modal fade" id="imagePreviewModal" tabindex="-1" aria-labelledby="imagePreviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="imagePreviewModalLabel">Job Opening Preview</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img id="previewImage" src="" alt="Job Opening Preview" class="modal-img">
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

      // Modal for job images
      const images = document.querySelectorAll('.job-img');
      const previewImage = document.getElementById('previewImage');
      let modal;
      try {
        modal = new bootstrap.Modal(document.getElementById('imagePreviewModal'));
        console.log('Modal initialized');
      } catch (e) {
        console.error('Modal initialization failed:', e);
      }

      images.forEach(image => {
        image.addEventListener('click', function () {
          console.log('Image clicked:', this.getAttribute('data-img-src')); // Debug click
          const imgSrc = this.getAttribute('data-img-src');
          previewImage.setAttribute('src', imgSrc);
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