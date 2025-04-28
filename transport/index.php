<?php 

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transports | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="../assets/css/resources/style.css">
<style>
.main_section img{
    width:480px;
    border-radius:5px;
}
.main_section{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:2rem;
    margin-top:3rem;
    padding:1rem;
}
.main_section  p{
    line-height:1.4rem;
    font-size:clamp(20px,2vm,22px);
     text-align:justify;
}
 .app_btn{
     padding:5px 8px;
     border:none;
     border-radius:3px;
     background:var(--primary-color);
     color:var(--text-color);
     margin-top:2rem;
 }  
 .head_text{
     font-size:clamp(22px,2vw,30px);
     color:var(--primary-color);
     text-align:center;
     margin-top:3rem;
     margin-bottom:3rem;
     font-weight:bold;
 }
 @media screen and (max-width:768px){
     .main_section{
         flex-direction:column;
     }
 }
</style>

<!-- custom js -->
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include('../resources/navbar.php');?>

<h2 class='head_text'>About</h2>
<div class='about_main_content container main_section'>
    <div class='about_img'>
        <img src='../assets/img/infra/transportation.png' alt='' >
    </div>
<div>
    <p class='about_content'>
        
        Nadar Saraswathi College of Engineering and Technology (NSCET) offers safe and reliable transport facilities covering nearby towns and villages. Our fleet of well-maintained buses ensures timely pickup and drop-off for students and staff. We prioritize safety, comfort, and punctuality to provide a hassle-free commuting experience for everyone.
    </p>
</div>
</div>
<h2 class='head_text'>Bus Attendance Management Application</h2>
<div class='transport_application container main_section'>
    <div class='app_img'>
          <img src='../assets/img/transport/admin_img.png' alt='' >
    </div>
    <div>
        <p>
            NSCET Transport is a smart Bus Attendance System designed to ensure safe and efficient transportation for NSCET students and staff. It tracks real-time boarding and deboarding, minimizes errors, and provides instant updates. The app enhances safety, accountability, and convenience, ensuring a seamless commuting experience for all users.
        </p>
        <a href='../bus_attendance/app-release.apk' download >
        <button class='app_btn'>
        Update App
    </button>
     </a>
      <a href='https://nscet.org/bus_attendance/bus_attendance_admin/dashboard.html' target='_blank' >
        <button class='app_btn'>
        Admin Panel
    </button>
     </a>
    </div>
    
   
</div>






<?php include('../resources/footer.php'); ?>

<!-- custom js -->
<script src="./assets/js/resources/script.js"></script>
</body>
</html>