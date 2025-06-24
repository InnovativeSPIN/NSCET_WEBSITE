<?php 

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alumni | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="../assets/css/resources/style.css">
<link rel="stylesheet" href="../assets/css/alumni/style.css">


<!-- Swiper CSS -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<style>
    #gallerry {
  padding: 60px 20px;
  background-color: #f9fafb;
  width:768px;

}

.alumni-swiper-section {
  max-width: 1200px;
  margin: 0 auto;
}

.swiper {
  width: 100%;
  padding: 20px 0;
}

.swiper-wrapper {
  display: flex;
  align-items: center;
}

.swiper-slide {
  background-color: #fff;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.swiper-slide:hover {
  transform: scale(1.03);
}

.swiper-slide img { 
  object-fit: cover;
  display: block;
  border-radius: 10px;
}

/* Navigation Buttons */
.swiper-button-next,
.swiper-button-prev {
  color: #1e3a8a;
  font-size: 20px;
}

/* Pagination Dots */
.swiper-pagination {
  text-align: center;
  margin-top: 10px;
}

.swiper-pagination-bullet {
  background: #1e3a8a;
  opacity: 0.6;
}

.swiper-pagination-bullet-active {
  opacity: 1;
}
.swiper-slide img{
width: 880px;
height: 880px;
}



</style>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js -->
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include('../resources/navbar.php');?>


<section class="hero-section" style="background: url('../assets/img/alumni/main.png') no-repeat center/cover;">
  <h1 class="dept-heading">Alumni</h1>
</section>

<!-- main section -->
 <div id="main-section">
  <!-- navigation -->
  <div class="navigation_section">
  <ul class="alumni-list">
            <li><a href="#Overview" onclick="showSection('Overview')"><i class="fas fa-user-graduate"></i>Overview</a></li>
            <li><a href="#office_bearers" onclick="showSection('office_bearers')"><i class="fas fa-user-graduate"></i>OFFICE BEARERS</a></li>
            <li><a href="#alumni_meets" onclick="showSection('alumni_meets')"><i class="fas fa-users"></i>Alumni Meets</a></li>
            <li><a href="#distinguished" onclick="showSection('distinguished')"><i class="fas fa-star"></i>Distinguished Alumni</a></li>
            <li><a href="#distinguished" onclick="showSection('gallerry')"><i class="fas fa-star"></i>Gallery</a></li>
        </ul>
  </div>
<!-- side contents -->

<div class="main_content_section">

<div class="overview_content main_shadows content-section" id="Overview" >
<h2 class="main_head_text text-center p-1">
Overview
</h2>
<section class="alumni-container">
  
        <h2>Alumni Association of AANSCET</h2>
        <p>The AANSCET Alumni Association, founded in 2014  and formally established in 2023, strengthens the bond between the institution and its graduates. It fosters connections, offers career guidance, and provides professional networking opportunities.</p>
        <div class="vision_mission_content mt-5">
       <div class="vision_content ">
       <h3 class="text_main_content">Vision</h3>
          <ul>
            <li>
            To build a lifelong connection among students and alumni, fostering personal and <br> professional growth.
            </li>
          </ul>

       </div>
       <div class="mission_content">
       <h3 class="text_main_content">Mission</h3>
        <ul>
            <li>Strengthen alumni relationships and create career development opportunities.</li>
            <li>Provide mentorship, networking, and industry collaboration.</li>
            <li>Support students through guidance, training, and internships.</li>
            <li>Facilitate alumni contributions to curriculum, research, and placements.</li>
            <li>Enhance institutional growth through active alumni engagement.</li>
        </ul>
       </div>
        </div>
        <h3 class="text_main_content mt-5">Key Alumni Activities</h3>
        <ul class="alumni_activites">
            <li><strong>Mentorship & Placements:</strong> Alumni guide students in career and higher education opportunities.</li>
            <li><strong>Industry Collaboration:</strong> Alumni help in MoUs, internships, and entrepreneurship support.</li>
            <li><strong>Research & Consultancy:</strong> Alumni contribute expertise to research projects and industrial partnerships.</li>
            <li><strong>Financial & Administrative Support:</strong> Alumni aid in funding scholarships and institutional development.</li>
        </ul>

        <section class="alumni-incharge">
    <h3>Alumni Cell Incharges</h3>
    <div class="incharge-list">
        <div class="incharge-card">
            <h4>Mr. A. Vennimalai Rajan</h4>
            <p>Assistant Professor, Mechanical Engineering</p>
        </div>
        <div class="incharge-card">
            <h4>Ms. M. Kanimozhi</h4>
            <p>Assistant Professor, Civil Engineering</p>
        </div>
    </div>
</section>
    </section>
    

</div>

<div id="office_bearers" class="main_shadows content-section">
<h2 class="main_head_text text-center p-1">
Office Bearers
</h2>
<section class="alumni-office-bearers">
    <h3 class="content_text">Alumni Association Office Bearers</h3>
    <div class="office-table">
        <table>
            <thead>
                <tr>
                    <th>Position</th>
                    <th>Responsibilities</th>
                    <th>Name & Details</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>President</td>
                    <td>
                        <ul>
                            <li>Shall preside over all Association activities and meetings.</li>
                            <li>Distribute responsibilities among members.</li>
                        </ul>
                    </td>
                    <td>Mr. M. Rajaganesh, Mech</td>
                </tr>
                <tr>
                    <td>Vice President</td>
                    <td>
                        <ul>
                            <li>Preside over committee meetings in the absence of the President.</li>
                        </ul>
                    </td>
                    <td>Ms. N. Priyadharshan, EEE</td>
                </tr>
                <tr>
                    <td>Secretary</td>
                    <td>
                        <ul>
                            <li>Coordinate all the Association activities.</li>
                        </ul>
                    </td>
                    <td>Ms. M. Kanimozhi, AP / Civil</td>
                </tr>
                <tr>
                    <td>Treasurer</td>
                    <td>
                        <ul>
                            <li>Maintain an account of the association's general funds.</li>
                        </ul>
                    </td>
                    <td>Mr. A. Vennimalai Rajan, AP / Mech</td>
                </tr>
                <tr>
                    <td>Executive Committee Members</td>
                    <td>
                        <ul>
                            <li>Monitor daily operations of the association.</li>
                            <li>Establish guidelines, rules, and regulations for activities.</li>
                            <li>Maintain frequent communication between members.</li>
                            <li>Manage financial records and arrange audits.</li>
                            <li>Inform members about upcoming activities.</li>
                            <li>Serve as association mentors.</li>
                        </ul>
                    </td>
                    <td>
                        <ul class="committee-list">
                            <li>Mr. S. Harikishore, AP / Mech</li>
                            <li>Ms. M. Sindhu, AP / Civil</li>
                            <li>Mr. G. Arun Kumar, AP / Mech</li>
                            <li>Ms. Shantha Devi, AP / ECE</li>
                            <li>Mr. R. Shanmugapriyan, AP / Civil</li>
                            <li>Mr. Prakash - Civil</li>
                            <li>Mr. N. Balamurugan - Mech</li>
                            <li>Ms. R. Nivethitha Muthupandi - EEE</li>
                            <li>Ms. A. Priyadharshini - ECE</li>
                            <li>Ms. M. Kasi Vishalatchi - CSE</li>
                            <li>Mr. M. Arunprakash - Mech</li>
                            <li>Mr. K. Anand Raj - CSE</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>


</div>


<div id="alumni_meets" class="main_shadows content-section">
<h2 class="main_head_text text-center p-1">
Alumni Meets
</h2>

<section class="alumni_meets_container">
        <h1 class="content_text" >AANSCET Alumni Meet – 2K22 & 2K24</h1>

        <div class="alumni-meet">
            <h2>Alumni Meet 2K22</h2>
            <p><strong>Date:</strong> 12.11.2022</p>
            <p><strong>Pass-out Batches:</strong> 2014 – 2022</p>
            <p><strong>Venue:</strong> Sir C.V. Raman Auditorium</p>
            <p class="mb-2">
                The event brought together graduates from Civil, CSE, EEE, ECE, and Mechanical Engineering. 
                Students shared their experiences and reconnected with faculty members.
            </p>
            <h3>Distinguished Guests:</h3>
            <ul>
                <li>Mr. A. Rajkumar, Secretary</li>
                <li>Mr. A. S.R. Maheswaran, Secretary</li>
                <li>Mr. E. Naveen Ram, Joint Secretary</li>
                <li>Dr. C. Mathalai Sundaram, Principal</li>
            </ul>
            <h3>Faculty Members:</h3>
            <ul>
                <li>Mr. S. Harikishore</li>
                <li>Mrs. P. Shantha Devi</li>
                <li>Mr. A. Vennimalai Rajan</li>
                <li>Mr. G. Arunkumar</li>
                <li>Mr. R. Shanmugapriyan</li>
                <li>Mrs. M. Kanimozhi</li>
                <li>Mrs. M. Sindhu</li>
            </ul>
            <div class="images">
                <img src="../assets/img/alumni/main_2.jpg" alt="Alumni Meet 2K22">
            </div>
        </div>

        <div class="alumni-meet">
            <h2>Alumni Meet 2K24</h2>
            <p><strong>Date:</strong> 20.04.2024</p>
            <p><strong>Venue:</strong> Sir C.V. Raman Auditorium</p>
            <p>This year's meet continued the tradition, bringing alumni together to share success stories and strengthen connections with the institution.</p>
            <div class="images">
                <img src="../assets/img/alumni/main_1.jpg" alt="Alumni Meet 2K24">
            </div>
        </div>

    </section>


</div>



<div id="distinguished" class="content-section" >
  <img src="../assets/img/alumni/Distinguished_Alumni.jpg" alt="">
</div>



<div id="gallerry" class="main_shadows content-section">


<section class="alumni-swiper-section">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide"><img src="/alumni/img/img1.jpg" alt="Alumni 1" /></div>
      <div class="swiper-slide"><img src="/alumni/img/img2.png" alt="Alumni 2" /></div>
      <div class="swiper-slide"><img src="/alumni/img/img3.jpg" alt="Alumni 3" /></div>
      <div class="swiper-slide"><img src="/alumni/img/img4.png" alt="Alumni 4" /></div>
      <!-- Add more images as needed -->
    </div>

    <!-- Optional Navigation Buttons -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- Optional Pagination -->
    <div class="swiper-pagination"></div>
  </div>
</section>


</div>



</div>




 </div>



<?php include('../resources/footer.php'); ?>

<!-- custom js -->
<script src="../assets/js/resources/script.js"></script>

<script>
    function showSection(sectionId) {
      document.querySelectorAll('.content-section').forEach(section => {
        section.style.display = 'none';
      });
      document.getElementById(sectionId).style.display = 'block';
    }
  </script>
  <script>
 
  const swiper = new Swiper(".mySwiper", {
    loop: true,
    spaceBetween: 20,
    slidesPerView: 1,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      768: {
        slidesPerView: 1,
      },
      1024: {
        slidesPerView: 1,
      },
    },
  });
</script>

</body>
</html>