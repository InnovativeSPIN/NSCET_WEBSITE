<?php

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administration | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  <!-- custom css -->
  <link rel="stylesheet" href="../assets/css/resources/style.css">
  <link rel="stylesheet" href="../assets/css/administration/style.css">


  <!-- custom js -->
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php include('../resources/navbar.php'); ?>

  <section class="hero-section" style="background: url('../assets/img/main/college_main.jpg') no-repeat center/cover;">
    <h1 class="dept-heading text-uppercase">Administration</h1>
  </section>
  <div class="container intro_section">
    <section class="about-tmhnu">
      <h2 class="title_text">About TMHNU</h2>
      <p class="mb-3">"Genesis of Theni Melapettai Hindu Nadargal Uravinmurai Since 1898"</p>
      <p>Theni Melapettai Hindu Nadargal Uravinmurai (TMHNU) proclaims to society its tremendous service in providing quality education. The pioneers of TMHNU (1898) started the primary school in 1919, named Nadar Saraswathi Vidhyasala, with 38 students and 2 teachers. Now, that small seed has flourished into a large tree. With the blessings of Annai Sri Bathrakaliamman, 17 educational institutions now function under this bower, providing quality education. Over 22,000 students study here, with more than 1,000 teaching and 1,000 supportive staff members.</p>
    </section>

    <section class="about-journey mt-4">
      <h2 class="title_text">About Our Journey</h2>
      <p>Nadar Saraswathi College of Engineering and Technology was established in 2010 to uplift rural students and nurture them with excellence. Located on a 21-acre eco-friendly campus near Theni, the institution focuses on molding outstanding engineers as responsible citizens and professionals.</p>
      <p>In today’s world, there is a genuine need for an institute that provides quality academic and career education in a personalized atmosphere. NSCET offers programs that prepare students for successful employment through quality teaching, learning, and research. Our goal is to equip students with lifelong knowledge, skills, and credentials for professional advancement at any point in their careers.</p>
      <p>Excellence in teaching remains our most important criterion for faculty recruitment. Our faculty are also engaged in continuous research, scholarly work, and service to the region and state. The college offers comprehensive support services to ensure student success.</p>
    </section>
  </div>

<!-- governing cell -->
  <section class="governing-cell mt-5 container">
      <h2 class='governing-cell-heading title_text text-center'>Governing Cell</h2>
      <div class="container">
        <div class="card-grid">
          <div class="card">
            <div class="card-container">
              <img src="../assets/img/administration/Dharmarajan.jpeg" alt="A. S. G. Dharmarajan, B.A">
                 <div class="card-content">
                 <h3>President</h3>
              <p class='name'>Mr. A. S. G. Dharmarajan, B.A</p>
                 </div>
            </div>
          </div>
          <div class="card">
            <div class="card-container">
              <img src="../assets/img/administration/AS Jeevagan sir - Vice President.jpg" alt="Mr. P.P. Ganesh">
             <div class="card-content">
             <h3>Vice President</h3>
              <p class='name'>Mr. A. S. Jeevagan</p>
            
             </div>
            </div>
          </div>
          <div class="card">
            <div class="card-container">
              <img src="../assets/img/administration/General Secretary-M.M.Anandhavel.jpg" alt="Mr. M.M. Anandhavel">
              <div class="card-content">
              <h3>General Secretary</h3>
              <p class='name'>Mr. M.M. Anandhavel,M.B.A</p>
           
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-container">
              <img src="../assets/img/administration/Ramachandran - Treasurer.jpg" alt="Mr. Palaniappan">
            <div class="card-content">
            <h3>Treasurer</h3>
              <p class='name'>Mr. B. Ramachandran,M.B.A</p>

              <p class='name'></p>
          
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- commiteee -->

    
    <!-- <section class="committee-members">
    <h2 class="section-title text-center">Executive Committee Members of TMHNU</h2>
    <div class="committee-container">
        <ul>
            <li>Mr. P.M.P. Arul Prakasam</li>
            <li>Mr. K.K. Jeyaram Nadar</li>
            <li>Mr. A.S.G. Dharma Rajan, B.A.</li>
            <li>Mr. P. Kannaiyiram, Ex.Mc.</li>
            <li>Mr. K. Gnanaprakasam</li>
            <li>Mr. K.K. Sekar</li>
        </ul>
        <ul>
            <li>Mr. G.N. Jawahar</li>
            <li>Mr. B. Ramachandran, M.B.A.</li>
            <li>Er. R.T. Jawahar, B.E.</li>
            <li>Mr. G.K. Vijayakumar, B.Com.</li>
            <li>Mr. A.S. Jeevagan</li>
        </ul>
    </div>
</section>

<section class="college-committee mt-4 text-underline">
    <h2 class="section-title text-center">College Committee Members of NSCET</h2>
    <div class="committee-container">
        <ul>
            <li>Mr. K. Anburaj, (DCT)</li>
            <li>Mr. A.R. Saravanakumar</li>
            <li>Er. K. Ganesapandian, B.E.</li>
            <li>Er. T.S. Saravanan, B.E.</li>
            <li>Mr. K. Jayamanikandan, ITI</li>
            <li>Er. N. Selvakumar, B.E.</li>
            <li>Mr. R. Madasamy, M.C.A.</li>
            <li>Mr. P.S.P.K.P. Sermaraja, B.A.</li>
        </ul>
        <ul>
            <li>Er. S.N. Mathalairajan, B.E., M.B.A.</li>
            <li>Er. K.A.S.T. Sivagaminathan, B.E.</li>
            <li>Mr. V.K.M. Manivannan, M.B.A.</li>
            <li>Er. A.S.S. Somasundaram, B.E.</li>
            <li>Er. J.N. Rajamurugan, B.E.</li>
            <li>Mr. T.A.T.M. Venkateswaran, B.Sc.</li>
            <li>Mr. K. Rajkumar, M.Sc. (CS & IT)</li>
        </ul>
    </div>
</section> -->

<section class="prominent-personalities mt-5">
    <h2 class="heading title_text text-center">Prominent Personalities of NSCET</h2>
    <div class="container">
        <div class="card-grid">
            <div class="card">
                <div class="card-container">
                    <img src="../assets/img/administration/SomaSundaram.jpeg" alt="Mr. A. Rajkumar">
                   <div class="card-content">
                   <h3>Secretary</h3>
                    <p class="name">A.S.S.S.Soma Sundaram B.E.</p>
               
                   </div>
                  </div>
            </div>
        <!--    <div class="card">-->
        <!--        <div class="card-container">-->
        <!--            <img src="../assets/img/administration/secretary-A.S.R. Maheswaran.jpg" alt="Mr. A.S.R. Maheswaran">-->
        <!--            <div class="card-content">-->
        <!--            <h3>Secretary</h3>-->
        <!--            <p class="name">Mr. A.S.R. Maheswaran, B.Sc.</p>-->
              
        <!--            </div>-->
        <!--          </div>-->
        <!--    </div>-->
        <!--    <div class="card">-->
        <!--        <div class="card-container">-->
        <!--            <img src="../assets/img/administration/jointsecretary-naveenram.jpg" alt="Er. S. Naveen Ram">-->
        <!--           <div class="card-content">-->
        <!--           <h3>Joint Secretary</h3>-->
        <!--            <p class="name">Er. S. Naveen Ram, B.E., MBA</p>-->
               
        <!--           </div>-->
        <!--          </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
</section>
<!-- <section class="mt-5 person_ombuds">
  <h2 class="title_text text-center">
  Ombudsperson   
  </h2>
  <div class="card " >
<div class="card-container">
  
<img src="../assets/img/administration/Rajadurai .png" alt="" width="180px">

<div class="card-content">  
               <h3>Ombudsperson</h3>
                <p class="name">Dr. A. Rajadurai - Professor</p>
           
               </div>
</div> 
  </div>
</section> -->


  <?php include('../resources/footer.php'); ?>

  <!-- custom js -->
  <script src="./assets/js/resources/script.js"></script>
</body>

</html>