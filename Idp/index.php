<?php
include('../resources/conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IDP | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/css/resources/style.css">
  <link rel="stylesheet" href="../assets/css/non-teaching/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
  <style>
    .main {
      padding: 20px;
    }
    h1 {
      margin-bottom: 30px;
      margin-top: 30px;
      font-size: 36px;
      color: #333;
      text-align: center;
    }
    .viewplan{
      margin: 10px;
      display: flex;
     justify-content: center;
     align-items: center;
    }
    .viewplan button{
      border: 1px solid black;
      padding: 10px;
      border-radius: 2px;
    }
    img {
      width: 95%;
      height: auto;
      object-fit: cover;
      margin-left: auto;
      margin-right: auto;
      display: block;
    }
    @media (max-width: 768px) {
      h1 {
        font-size: 24px;
        
        margin-top: 80px;
      }
      img {
        width: 100%;
        height: auto;
        margin-left: 0;
      }
    }
  </style>
</head>

<body>

  <?php
  include('../resources/navbar.php');
  ?>

  <div class="main">
    <h1>Institutional Development Plan</h1>
    <div class="viewplan">
      <a href="./IDP.pdf" target="_blank"><button class="">View Plan</button></a>
    </div>
    <img src="/assets/img/idp/idp.jpg" alt="idp">
  </div>

  <?php
  include('../resources/footer.php');
  ?>

  <script src="../assets/js/resources/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>
