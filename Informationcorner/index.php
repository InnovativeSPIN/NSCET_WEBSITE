<?php

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Information Corner</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  <!-- custom css -->
  <link rel="stylesheet" href="../assets/css/resources/style.css">
  <link rel="stylesheet" href="../assets/css/informationcorner/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



  <!-- custom js -->
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php

  include('../resources/navbar.php');


  ?>


<div class="main">


<div id="Circular" class="content-section">
    <h2 class="info-h2">Circular Page</h2>
    <p class="info-p">Recent updates and circulars from all departments</p>

    <div class="departments-container">
        <div class="department">
            <img src="../assets/img/information/annual.jpg" alt="CSE Department">
            <p>Computer Science & Engineering (CSE)</p>
        </div>
        <div class="department">
            <img src="../assets/img/information/bus.jpg" alt="ECE Department">
            <p>Electronics & Communication Engineering (ECE)</p>
        </div>
    </div>
</div>




<div id="Announcements" class="content-section">
    <h2 class="info-h2">Announcements Page</h2>
    <p class="info-p">Recent Announcements</p>

    <div class="departments-container">
        <div class="department">
            <img src="../assets/img/information/Announcements.jpg" alt="CSE Department">
            
        </div>  
        <div class="department">
            <img src="../assets/img/information/Anno.jpg" alt="ECE Department">
            
        </div>
    </div>
</div>

<div id="Newsletters" class="content-section">
    <h2 class="info-h2">Newsletters Page</h2>
    <p class="info-p">Recent Newsletters</p>

    <div class="departments-container">
        <div class="department">
            <img src="../assets/img/information/muhilan.jpg" alt="CSE Department">
            
        </div>  
        
    </div>
</div>




<div id="Reservation Roster" class="content-section" >
    <h2 class="info-h2">Reservation Roster </h2>
    <p class="info-p">Recent Reservation Roster</p>

    <div class="departments-container">
        <div class="department">
            <img src="../assets/img/information/muhilan.jpg" alt="CSE Department">
            
        </div>  
        
    </div>
</div>


<div id="Job Openings" class="content-section" >
    <h2 class="info-h2">Job Openings </h2>
    <p class="info-p">Recent Job Openings</p>

    <div class="departments-container">
        <div class="department">
            <img src="../assets/img/information/job.png" alt="CSE Department">
            
        </div>  
        
    </div>
</div>


    </div>







  <?php

  include('../resources/footer.php');


  ?>




  <!-- custom js -->
  <script src="../assets/js/resources/script.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
document.addEventListener("DOMContentLoaded", function () {
    
    document.querySelectorAll(".content-section").forEach(section => {
        section.style.display = "none";
    });

    function showSection(sectionId) {
        document.querySelectorAll(".content-section").forEach(section => {
            section.style.display = "none"; 
        });
        document.getElementById(sectionId).style.display = "block"; 
    }

    
    showSection("Circular");

  
    document.querySelectorAll(".dropdown-item").forEach(item => {
        item.addEventListener("click", function (event) {
            event.preventDefault();
            let target = this.textContent.trim();

            if (target === "Circular and Notices") {
                showSection("Circular");
            } else if (target === "Announcements") {
                showSection("Announcements");
            }else if (target === "Newsletters"){
                showSection("Newsletters");
            }else if (target ==="News & Recent events"){
                showSection("News & Recent events");
            }else if (target ==="Job Openings"){ 
                showSection("Job Openings");
            }else if (target ==="Reservation Roster"){
                showSection("Reservation Roster");
            }


        });
    });
});
</script>

</body>

</html>