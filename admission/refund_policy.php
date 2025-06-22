<?php 

include('../resources/conn.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Refund Policy | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="../assets/css/resources/style.css">


<!-- custom js -->
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include('../resources/navbar.php');?>

<!--content-->

<div class="flex-col  main-content mt-10" style='display:flex;justify-content:center;align-items:center;flex-direction:column'>
    <h2 class='main-heading font-weight-bold' style="font-size:28px;text-transform:uppercase;margin-bottom:20px;">Refund Policy</h2>
    <div class="sub-content">
       <iframe src='Refund_fees.pdf' width='1000' height='678'>
  <p>Your browser does not support viewing PDF files. <a href="Refund_fees.pdf" target="_blank">Download PDF</a>.</p>
</iframe>
    </div>
</div>



<?php include('../resources/footer.php'); ?>

<!-- custom js -->
<script src="../assets/js/resources/script.js"></script>
</body>
</html>