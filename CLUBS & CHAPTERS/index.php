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
  <link rel="stylesheet" href="../assets/css/clbs/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



  <!-- custom js -->
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php

  include('../resources/navbar.php');


  ?>

<h2 class="head" >CLUBS & CHAPTERS</h2>
 
<div class="card-container">
    <!-- Card 1 -->
    <div class="card" onclick="openPopup('nssPopup')">
      <h2>National Service Scheme</h2>
      <img  src="/assets/img/clubs/National_Service_Scheme_Logo.svg.png" alt="">
    </div>

    <!-- Card 2 -->
    <div class="card" onclick="openPopup('yrcPopup')">
      <h2>Youth Red Cross</h2>
      <img  style="margin-top:20px;" src="/assets/img/clubs/yrc.png" alt="">
    </div>

    <!-- Card 3 -->
    <div class="card" onclick="openPopup('greenEnvPopup')">
      <h2>Green Environment</h2>
      <img  src="/assets/img/clubs/images.jpeg" alt="">
    </div>

    <!-- Card 4 -->
    <div class="card" onclick="openPopup('edPopup')">
      <h2>Entrepreneurship Development</h2>
      <img  src="/assets/img/clubs/entreprener.png" alt="">
    </div>

    <div class="card" onclick="openPopup('iipPopup')">
      <h2>Industry Institute Partnership Cell</h2>
      <img  src="/assets/img/clubs/IIPC.png" alt="">
    </div>

    <div class="card" onclick="openPopup('aluPopup')">
      <h2>Alumni Association</h2>
      <img  src="/assets/img/clubs/AlumniAssociation.gif_display_image.png" alt="">
    </div>

    <div class="card" onclick="openPopup('rdpopup')">
      <h2>R & D Cell</h2>
      <img  src="/assets/img/clubs/r &d.png" alt="">
    </div>

    <div class="card" onclick="openPopup('examPopup')">
      <h2>Exam Cell</h2>
      <img style="margin-top: 35px;" src="/assets/img/clubs/Exam.jpg" alt="">
    </div>

    <div class="card" onclick="openPopup('placePopup')">
      <h2>Placement Cell</h2>
      <img style="margin-top: 30px;" src="/assets/img/clubs/placement_logo.png" alt="">
    </div>

    <div class="card" onclick="openPopup('womenPopup')">
      <h2>Women Empowerment Cell</h2>
      <img  src="/assets/img/clubs/women.jpeg" alt="">
    </div>

    <div class="card" onclick="openPopup('paPopup')">
      <h2>Parent Teacher Meeting Association</h2>
      <img  src="/assets/img/clubs/P & a.jpeg" alt="">
    </div>


    <!-- Add more cards as needed -->
  </div>

  <!-- Popup Modals -->
  <div class="popup" id="nssPopup">
    <div class="popup-content">
        <h3>Parent Teacher Meeting Association</h3>
        <p><strong>Coordinators:</strong></p>
        <ul>
            <li>Mr. M. Idhaya Chandran (AP/ECE)</li>
            <li>Mr. P. Surulimani (AP/Mech)</li>
        </ul>

        <p><strong>Members:</strong></p>
        <ul>
            <li>Ms. S. Arul Jothi (AP/CSE)</li>
            <li>Mrs. Kanimozhi (AP/Civil)</li>
            <li>Ms. I. Limsha Deborah (AP/EEE)</li>
            <li>Mr. R. Dhandayuthapani (AP/PHY)</li>
            <li>Mrs. R. Archana (AP/AI)</li>
            <li>Mrs. A. Sangeetha (AP/IT)</li>
        </ul>

        <p><strong>Duties & Responsibilities:</strong></p>
        <ul>
            <li>Conduct PTA meetings</li>
            <li>Gather parent feedback & convey it to the Principal (Copy to HODs) for improving the curriculum (e.g., Value Added courses)</li>
        </ul>

        <button class="btn1" onclick="closePopup('nssPopup')">Close</button>
    </div>  
</div>


  <div class="popup" id="yrcPopup">
    <div class="popup-content">
      <h3>Youth Red Cross</h3>
      <p><strong>Coordinator:</strong> Mr. J. Ayyanarprabu, AP/CSE</p>
      <p><strong>Members:</strong> Mrs. S. Kalaivani, Mrs. S. Arthy</p>
      <p><strong>Duties & Responsibilities:</strong></p>
      <ul>
        <li>Select adequate students (both boys & girls) from first, second, and third year</li>
        <li>Inaugurate the Club</li>
        <li>Conduct Awareness programs</li>
      </ul>
      <button class="btn1" onclick="closePopup('yrcPopup')">Close</button>
    </div>
  </div>


  <div class="popup" id="greenEnvPopup">
    <div class="popup-content">
      <h3>Green Environment</h3>
      <p><strong>Coordinator:</strong>Mr. N. Nagarathinam HOD/CIVIL</p>
      <p><strong>Members:</strong> Mr. R. Shanmugapriyan, AP/Civil ,Mrs. B. Sowmiya, AP/Civil ,Mr. S. Manimaran, AP/Civil</p>
      <p><strong>Duties & Responsibilities:</strong></p>
      <ul>
        <li>Select adequate students (both boys & girls) from first, second, and third year</li>
        <li>Inaugurate the Club</li>
        <li>Conduct Awareness programs</li>
        <li>Conduct a Blood Donation Camp</li>
      </ul>
      <button class="btn1" onclick="closePopup('greenEnvPopup')">Close</button>
    </div>
  </div>

  <div class="popup" id="edPopup">
    <div class="popup-content">
        <h3>Entrepreneurship Development</h3>
        <p><strong>Coordinator:</strong> Dr. B. Radha Krishnan, HOD/MECH</p>
        <p><strong>Members:</strong></p>
        <ul>
            <li>Mrs. S. Gayathri, AP/Civil</li>
            <li>Mr. R. Shanmugapriyan, AP/Civil</li>
            <li>Mr. K. Velkumar, AP/IT</li>
            <li>Mrs. R. Archana, AP/AI&DS</li>
            <li>Dr. T. Venishkumar, Asso.Prof/ECE</li>
            <li>Mrs. Kalaivani, AP/ECE</li>
            <li>Mr. R. Rajakarthick AP/EEE</li>
            <li>Mrs. A. Nishetha Jeflin Nixon, AP/EEE</li>
            <li>Mr. P. Surulimani AP/Mech</li>
            <li>Mr. K. Rajaguru, AP/Phy</li>
        </ul>
        <p><strong>Duties & Responsibilities:</strong></p>
        <ul>
            <li>Select the student members</li>
            <li>Create awareness about Entrepreneurship by conducting workshops, seminars, etc.</li>
            <li>Arrange Industrial Visits to Small-Scale Industries</li>
            <li>Motivate students to become Entrepreneurs</li>
            <li>Maintain records of student Entrepreneurs and related documents</li>
            <li>Create awareness for innovative research</li>
            <li>Establish a start-up culture</li>
            <li>Secure funds for innovative projects and conferences</li>
        </ul>
        <button class="btn1" onclick="closePopup('edPopup')">Close</button>
    </div>
</div>

<div class="popup" id="iipPopup">
  <div class="popup-content">
    <h3>Industry Institute Partnership Cell</h3>

    <div class="members-container">
      <div class="coordinator-card">
        
        <h3>Coordinator</h3>
        <p>Mrs. B. Sowmiya, AP/ Civil</p>
        <p>Ms. A. Nishetha Jeflin Nixon, AP/ EEE</p>
      </div>

      <div class="members-card">
        
        <h3>Members</h3>
        <ul>
          <li>Mrs. Alageswari, AP/EEE</li>
          <li>Mrs. J. Priya, AP/CSE</li>
          <li>Mr. R. Nagaraja, AP /Mech</li>
        </ul>
      </div>
    </div>

    <div class="duties">
      <h3>Duties & Responsibilities</h3>
      <ul style="text-align: left" class="a">
        <li>Create MOUs with industries</li>
        <li>Establish the sponsored lab</li>
        <li>Get projects (may be funded) from Industries</li>
        <li>Arrange Industrial Training & Visits for both faculty and students</li>
        <li>Arrange Guest Lectures from Industry</li>
        <li>Maintain a good relationship with industry representatives</li>
        <li>Get feedback from industry and convey it to department heads for curriculum improvement (e.g., Value Added courses)</li>
        <li>Collaborate with Training and Placement Cell, Entrepreneurship and Innovation Cell, and R&D Cell</li>
      </ul>
    </div>

    

    <button class="btn1" onclick="closePopup('iipPopup')">Close</button>
  </div>
</div>

<div class="popup" id="aluPopup">
  <div class="popup-content">
    <h3>Alumni Association</h3>

    <div class="members-container">
      <div class="coordinator-card">
        
        <h3>Coordinator</h3>
        <p>Mr. A. Vennimalai Rajan, AP/ Mech</p>
        <p>Ms. M. Kanimozhi, AP /CIVIL</p>
      </div>

      <div class="members-card">
        
        <h3>Members</h3>
        <ul>
          <li>Mr. R. Shanmugapriyan, AP/ Civil</li>
          <li>Mr. R. Raja Karthick, AP/ EEE</li>
          <li>Ms. S. Arul Jothi, AP/CSE</li>
        </ul>
      </div>
    </div>

    <div class="duties">
      <h3>Duties & Responsibilities</h3>
      <ul style="text-align: left" class="a">
        <li>Register the final year UG/PG students (after the final semester examination) as Alumni</li>
        <li>Issuing the ID Card & Certificate.</li>
        <li>Conduct the Alumni Meeting every year</li>
        <li>Maintaining the alumni's details</li>
        <li>Get the Alumni Feedback & convey the same to the department Heads for the betterment of curriculum (Value Added courses, etc.)</li>
      </ul>
    </div>

    <button class="btn1" onclick="closePopup('aluPopup')">Close</button>
  </div>
</div>

<div class="popup" id="rdpopup">
  <div class="popup-content">
    <h3>R & D Cell</h3>

    <div class="members-container">
      <div class="coordinator-card">
        
        <h3>Coordinator</h3>
        <p>Dr. T. Venishkumar, ASP/ECE</p>
        <p>Dr. E. Anantha Krishnan, HOD/Civil</p>
      </div>

      <div class="members-card">
        
        <h3>Members</h3>
        <ul>
          <li>Dr. B. Radha Krishnan, HOD/MECH</li>
          <li>Dr. M. Pandi Maharasan, HOD/EEE</li>
          <li>Dr. C. Chithra, Prof - Coordinator/S&H</li>
          <li>Dr. E. Anantha Krishnan, HOD/Civil</li>
          <li>Dr. M. Sathya, VP/HOD/IT</li>
          <li>Dr. A. Solai Raj, ASP/CSE</li>
          <li>Dr. B. Mallaiyasamy, ASP/MATHS</li>
          <li>Dr. N. David Mathan, ASP/CHE</li>
          <li>Dr. R. Athilingam, ASP/EEE</li>
        </ul>
      </div>
    </div>

    <div class="duties">
      <h3>Duties & Responsibilities</h3>
      <ul style="text-align: left" class="a">
        <li>Encourage student projects for publication in journals and conferences</li>
        <li>Coordinate production and testing activities in all departments</li>
        <li>Establish consultancy work</li>
        <li>Organize guest lectures, workshops, and conferences</li>
        <li>Maintain campus cleanliness</li>
        <li>Establish and maintain a model room for innovative projects</li>
      </ul>
    </div>

    <button class="btn1" onclick="closePopup('rdpopup')">Close</button>
  </div>
</div>

<div class="popup" id="examPopup">
  <div class="popup-content">
    <h3>Exam Cell</h3>

    <div class="members-container">
      <div class="coordinator-card">
        
        <h3>Coordinator</h3>
        <p>Mr. K. Ganesh, AP/EEE</p>
        <p>Ms. M. Mahalakshmi, AP/MATHS</p>
      </div>

      <div class="members-card">
        
        <h3>Members</h3>
        <ul>
          <li>Mrs. B. Sowmiya, AP/Civil</li>
          <li>Mr. S. Harikishore, AP/Mech</li>
          <li>Ms. I. Limsha Deborah, AP/EEE</li>
          <li>Mr. S. Prathap, AP/ECE</li>
          <li>Mr. K. Velkumar, AP/IT</li>
          <li>Mr. Arunjunai Karthik, AP/CSE</li>
          <li>Mr. J. Vinoth Kumar, AP/AI</li>
          <li>Mr. R. Dhandayuthapani, AP/PHY</li>
          <li>Mr. Nagaraja, MFE</li>
          <li>Mr. Manimaran, SE</li>
        </ul>
      </div>
    </div>

    <div class="duties">
      <h3>Duties & Responsibilities</h3>
      <ul style="text-align: left" class="a">
        <li>Conduct both internal & university examinations</li>
        <li>Maintain the record of issuing semester grade statements, consolidated grade statements, provisional certificates, and degree certificates</li>
        <li>Issue provisional mark statements for bank loan purposes</li>
        <li>Follow the COE web portal's instructions</li>
        <li>Graduation day follow-ups</li>
        <li>Follow instructions from the office of Zonal and Centre for examination, Anna University, Chennai</li>
      </ul>
    </div>

    <button class="btn1" onclick="closePopup('examPopup')">Close</button>
  </div>
</div>

<div class="popup" id="placePopup">
  <div class="popup-content">
    <h3>Placement Cell</h3>

    <div class="members-container">
      <div class="coordinator-card">
        
        <h3>Coordinator</h3>
        <p>Dr. C. Karthikeyan, [Placement Officer]</p>
        <p>Mr. J. Chakaravarthysamydurai, AP / MECH</p>
        <p>Ms. M. SathyaPriya, Placement</p>
        <p>Mrs. J. Preetha, Placement</p>
        <p>Ms. P. Savishna Sri, Placement</p>
      </div>

      <div class="members-card">
       
        <h3>Members</h3>
        <ul>
          <li>Mrs. R. Chitra, AP/ECE</li>
          <li>Mr. J. Ayyanaprabu, AP/CSE</li>
          <li>Mrs. S. Gayathri, AP/CIVIL</li>
          <li>Mrs. A. Nishetha Jeflin, Nixon, AP/EEE</li>
          <li>Mr. A. Vennimalai Rajan, AP/MECH</li>
        </ul>
      </div>
    </div>

    <div class="duties">
      <h3>Duties & Responsibilities</h3>
      <ul style="text-align: left" class="a">
        <li>Maintain the record of placement needed students</li>
        <li>Conduct Personality development class</li>
        <li>Soft skill training, Aptitude training, Group Discussion, MOC Interview, etc.</li>
        <li>Organize Value added courses</li>
        <li>Maintain the relationship with industries</li>
        <li>Create MOUs with industries</li>
        <li>Organize Placement drives & Job fairs</li>
        <li>Associate both IIPC & Communication and Multi Linguistic club</li>
        <li>Prepare the policies and procedures of NSCET</li>
      </ul>
    </div>

    <button class="btn1" onclick="closePopup('placePopup')">Close</button>
  </div>
</div>

<div class="popup" id="womenPopup">
  <div class="popup-content">
    <h3>Women Empowerment Cell</h3>

    <div class="members-container">
      <div class="coordinator-card">
        
        <h3>Coordinator</h3>
        <p>Dr. M. Sathya, VP, HOD/IT, Coordinator</p>
      </div>

      <div class="members-card">
        
        <h3>Members</h3>
        <ul>
          <li>Ms. M. Mahalakshmi, AP/MAT</li>
          <li>Ms. T. Tamil Selvi, AP/ECE</li>
          <li>Dr. C. Chithra, AP - Coordinator/S&H</li>
          <li>Ms. A. Deepika, AP/CSE</li>
          <li>Mrs. S. Gayathri, AP/Civil</li>
        </ul>
      </div>
    </div>

    <div class="duties">
      <h3>Duties & Responsibilities</h3>
      <ul style="text-align: left" class="a">
        <li>Maintain the discipline of female students on college premises</li>
        <li>Conduct seminars, training programs, and guest lectures for female faculty and students</li>
      </ul>
    </div>

    <button class="btn1" onclick="closePopup('womenPopup')">Close</button>
  </div>
</div>

<div class="popup" id="paPopup">
  <div class="popup-content">
    <h3>Parent Teacher Meeting Association</h3>

    <div class="members-container">
      <div class="coordinator-card">
        
        <h3>Coordinator</h3>
        <p>Mr. M. Idhaya Chandran, AP/ECE</p>
        <p>Mr. P. Surulimani, AP/Mech</p>
      </div>

      <div class="members-card">
        
        <h3>Members</h3>
        <ul>
          <li>Ms. S. Arul Jothi, AP/CSE</li>
          <li>Mrs. Kanimozhi, AP/Civil</li>
          <li>Ms. I. Limsha Deborah, AP/EEE</li>
          <li>Mr. R. Dhandayuthapani, AP/PHY</li>
          <li>Mrs. R. Archana, AP/AI</li>
          <li>Mrs. A. Sangeetha, AP/IT</li>
        </ul>
      </div>
    </div>

    <div class="duties">
      <h3>Duties & Responsibilities</h3>
      <ul style="text-align: left" class="a">
        <li>Conduct a PTA meeting</li>
        <li>Gather parent feedback & convey it to the Principal (Copy to HODs) for improving the curriculum (e.g., Value Added courses)</li>
      </ul>
    </div>

    <button class="btn1" onclick="closePopup('paPopup')">Close</button>
  </div>
</div>







  <?php

  include('../resources/footer.php');


  ?>


<script>

function openPopup(popupId) {
  document.getElementById(popupId).style.display = "flex";
}

function closePopup(popupId) {
  document.getElementById(popupId).style.display = "none";
}


</script>



  <!-- custom js -->
  <script src="../assets/js/resources/script.js"></script>
  <!-- swiper -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>

</html>