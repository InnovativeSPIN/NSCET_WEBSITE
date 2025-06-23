<?php
include('../resources/conn.php');
include('../resources/66.php');
include('../resources/99a.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Announcements Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/css/resources/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
  <style>
    .content-section { 
      padding: 20px; 
      min-height: calc(100vh - 200px); /* Adjust for header/footer height */
      display: flex;
      align-items: center; /* Vertical centering */
      justify-content: center; /* Horizontal centering */
    }
    .info-h2 { 
      font-size: 2rem; 
      font-weight: bold; 
      margin-bottom: 10px; 
      text-align: center; 
    }
    .info-p { 
      font-size: 1rem; 
      color: #555; 
      margin-bottom: 20px; 
      text-align: center; 
    }
    .announcement-container {
      max-width: 600px;
      padding: 30px;
      border: 1px solid #ddd;
      border-radius: 8px;
      background-color: #fff;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      text-align: center;
    }
    .announcement-message {
      font-size: 1.2rem;
      color: #666;
    }
  </style>
</head>
<body>
  <?php
  include('../resources/navbar.php');
  ?>

  <div id="main-section">
    <div id="announcements" class="content-section">
      <div class="announcement-container">
        <h2 class="info-h2">Announcements</h2>
        <p class="announcement-message">There are no current announcements at this time.</p>
      </div>
    </div>
  </div>

  <?php
  include('../resources/footer.php');
  ?>

</body>
</html>