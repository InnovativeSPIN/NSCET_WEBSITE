<?php 

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="../assets/css/resources/style.css">


<style>
    .iiqa-declaration {
  max-width: 900px;
  margin: 40px auto;
  padding: 35px 30px;
  background-color: #f8fafc;
  border-left: 5px solid #1e40af;
  border-radius: 8px;
  font-family: 'Segoe UI', sans-serif;
  box-shadow: 0 3px 8px rgba(0, 0, 0, 0.08);
  color: #1f2937;
  line-height: 1.7;
}

.iiqa-declaration h2 {
  font-size: 28px;
  margin-bottom: 20px;
  color: #1e3a8a;
  text-align: center;
}

.iiqa-declaration p {
  margin-bottom: 16px;
  font-size: 16px;
  text-align: justify;
}

.iiqa-declaration strong {
  color: #0f172a;
  font-weight: 600;
}

.iiqa-declaration code {
  background-color: #e2e8f0;
  padding: 2px 6px;
  border-radius: 4px;
  font-family: monospace;
  color: #334155;
}

</style>

<!-- custom js -->
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include('../resources/navbar.php');?>







<?php include('../resources/footer.php'); ?>

<!-- custom js -->
<script src="./assets/js/resources/script.js"></script>
</body>
</html>