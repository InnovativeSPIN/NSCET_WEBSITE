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
  <link rel="stylesheet" href="../assets/css/library/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



  <!-- custom js -->
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php

  include('../resources/navbar.php');


  ?>


<div class="header_lib">
  <h1 class="h1">Library</h1>
</div>
<div class="container mt-5">

</div>
<button class="e-button">
  <a href="https://access.auerc.com/nscoet">E-Library</a>
</button>

<div class="row justify-content-center mt-4">
    <div class="col-md-5 content-container">
      <h2 class="h2">About NSCET Library</h2>
      <p class="para">The Library, in today’s context, is a modern Learning Resource Centre with a dynamic learning space where students undertake a journey of knowledge acquisition and intellectual enrichment. Our Library is a well-equipped Learning Resource Centre. We have a strong collection of about 21810 books and 120 Indian and foreign journals. The NSCET library is a storehouse of knowledge and it comprises books, journals, e-resources, other learning materials, and technology-aided learning mechanisms which enable students to acquire information, knowledge, and skills required for their study programmes.</p>
    </div>

    <div class="col-md-5 image-container">
      <div id="libraryCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner slides">
          <div class="carousel-item active slide">
            <img src="../../assets/img/library/3.jpeg" alt="Library Image 1">
          </div>
          <div class="carousel-item slide">
            <img src="../../assets/img/library/2.jpeg" alt="Library Image 2">
          </div>
          <div class="carousel-item slide">
            <img src="../../assets/img/library/1.jpeg" alt="Library Image 3">
          </div>
          <div class="carousel-item slide">
            <img src="../../assets/img/library/4.jpeg" alt="Library Image 5">
          </div>

          <div class="carousel-item slide">
            <img src="../../assets/img/library/5.jpeg" alt="Library Image 5">
          </div>

        </div>
     
      </div>
    </div>
  </div>
</div>
<!-- E-library -->


<div class="row justify-content-center mt-4 flex-column-reverse flex-md-row">
    <div class="col-md-5 image-container order-md-first mb-4 mb-md-0">
        <div id="libraryCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner slides">
                <div class="carousel-item active slide">
                    <img src="../../assets/img/library/background.jpeg" alt="Library Image 1">
                </div>
                <div class="carousel-item slide">
                    <img src="../../assets/img/library/2.jpeg" alt="Library Image 2">
                </div>
                <div class="carousel-item slide">
                    <img src="../../assets/img/library/3.jpeg" alt="Library Image 3">
                </div>
                <div class="carousel-item slide">
                    <img src="../../assets/img/library/5.jpeg" alt="Library Image 4">
                </div>
                <div class="carousel-item slide">
                    <img src="../../assets/img/library/4.jpeg" alt="Library Image 5">
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-5 content-container order-md-last">
        <h2 class="h2">About NSCET  E-Library</h2>
        <p class="para">
        Our E-Library includes 30 high-speed systems with uninterrupted internet access, enabling students and faculty to explore a wide range of e-resources, including e-books, online journals, and digital learning materials. The integration of technology-aided learning tools ensures that users can conveniently access information and develop the knowledge and skills required for their academic journey. The NSCET E-Library is truly a modern hub for intellectual enrichment and knowledge acquisition.
        </p>
        
    </div>
</div>


<!-- E-library -->

  <div class="container mt-5">
    <div class="text-center collections">
      <h3>Library Collections</h3>
    </div>

    <div class="row justify-content-center mt-4">
      <div class="col-md-3 mb-4">
        <div class="box">
          <div class="big-number" data-target="21810">21810</div>
          <div class="small-text">VOLUMES</div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="box">
          <div class="big-number" data-target="5016">5016</div>
          <div class="small-text">TITLES</div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="box">
          <div class="big-number" data-target="124">124</div>
          <div class="small-text">PERIODICALS</div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="box">
          <div class="big-number" data-target="3544">3544</div>
          <div class="small-text">CIVIL</div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="box">
          <div class="big-number" data-target="3820">3820</div>
          <div class="small-text">MECH </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="box">
          <div class="big-number" data-target="3720">3720</div>
          <div class="small-text">CSE</div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="box">
          <div class="big-number" data-target="3831">3831</div>
          <div class="small-text">ECE</div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="box">
          <div class="big-number" data-target="2471">2471</div>
          <div class="small-text">EEE</div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="box">
          <div class="big-number" data-target="250">250</div>
          <div class="small-text">IT</div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="box"> 
          <div class="big-number" data-target="250">250</div>
          <div class="small-text">AI & DS</div>
        </div>
      </div>
    </div>
  </div>
  <div class="info-sections">
    <div class="objectives">
      <h2>OBJECTIVES</h2>
      <ul>
        <li>To acquire, organize and update the library collection to support the teaching learning process.</li>
        <li>To encourage students to read beyond the requirements of the curriculum.</li>
        <li>To work with faculty in integrating information skills, knowledge of information resources and the use of technology in accessing information need for learning and teaching.</li>
        <li>Providing students centered learning environment that meet the informational, educational and recreational need of the students.</li>
         
      </ul>
    </div>

    <div class="facilities">
      <h2>FACILITIES</h2>
      <ul>
        <li>Open Access System</li>
        <li>Online Public Access Catalogue</li>
        <li>Well-Stocked Reference Section</li>
        <li>Separate Study Space for Staff and Students</li>
        <li>Well-Equipped Reading Hall</li>
        <li>Free Internet Access to Students and Faculty</li>
        <li>Access to NPTEL Video Lectures</li>
        <li>Access to Online Journals and E-Books</li>
        
        <li>Reprographic Services</li>
        <li>Membership in NDLI (National Digital Library of India)</li>
        <li>Membership in DELNET (Developing Library Network)</li>

        
      </ul>
    </div>

    <div class="rules_and_regulation">
      <h2>RULES AND REGULATIONS</h2>
      <ul>
        <li>Every student must possess his/her Library Card while making use of the Library facility and produce the same to the Library Staff on entering the Library.</li>
        <li>Strict discipline must be maintained in the Library. Indiscipline may lead to disciplinary action and the withdrawal of library facility.</li>
        <li>Reference material should not be taken outside the Library.</li>
        <li>Using Mobile phones and audio instruments with or without speaker or headphone is strictly prohibited in the library premises.</li>
        <li>Enter your name and Sign in the register kept at the entrance counter before entering library.</li>
        <li>Books removed from the shelves, if not required further, should be kept on the book trolley or on the table nearest to them. Please do not try to shelve them yourself. Please remember that a book misplaced is a book lost.</li>
        <li>The newspaper(s) should be folded properly after reading and kept back in the designated place.</li>
        <li>Refreshment of any kind shall not be taken anywhere in the library premises.</li>
        <li>The librarian may recall any book from any member at any time and the member shall return the same immediately.</li>
        <li>No Due Certificate will be issued only on the return of all the books and surrendering the borrower’s cards.</li>
      </ul>
    </div>
<!-- 
    <div class="ndli">
      <h2>NATIONAL DIGITAL LIBRARY OF INDIA CLUB ACTIVITIES</h2>
      <ul>
        <li>Awareness Programme on National Digital Library of India was held on 30.09.2021</li>
        <li>Film Screening Competition was held on 17.02.2022.</li>
        <li>Book Review Competition was held on 29.11.2021</li>
        <li>Quiz competition was held on 16.12.2021</li>
      </ul>
    </div> -->

    <div class="working-hours">
      <h2>WORKING HOURS</h2>
      <ul>
        <li>Monday to Friday: 8.30 AM to 5.30 PM</li>
        <li>Saturday: 9.00 AM to 4.00 PM</li>
        
      </ul>
    </div>
  </div>

<div class="container mt-5">
    <div class="row align-items-center">
      <div class="col-md-5">
        <div class="librarian-container">
          <img src="../../assets/img/library/Sinthan.jpg" alt="Dr. Sinthan" width="90px">
          <div class="name">
            Dr.S.Sinthan<br>Librarian<br>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="librarian-description">
          "OUR LIBRARY VOWS TO SHAPE YOU<br>
          FOR AN ENLIVENED PRESENT<br>
          AND ENLIGHTENED FUTURE TOO"
        </div>
      </div>
    </div>
  </div>
<!-- Carousel wrapper -->
 <!-- Page Content -->
 <div class="container page-top">


 <div class="row">
    <h3 class="library-gallery-header">LIBRARY GALLERY</h3>

    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="../../assets/img/library/1.jpeg" data-lightbox="library" data-title="Image 1">
            <img src="../../assets/img/library/1.jpeg" class="zoom img-fluid" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="../../assets/img/library/2.jpeg" data-lightbox="library" data-title="Image 2">
            <img src="../../assets/img/library/2.jpeg" class="zoom img-fluid" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="../../assets/img/library/3.jpeg" data-lightbox="library" data-title="Image 3">
            <img src="../../assets/img/library/3.jpeg" class="zoom img-fluid" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="../../assets/img/library/4.jpeg" data-lightbox="library" data-title="Image 4">
            <img src="../../assets/img/library/4.jpeg" class="zoom img-fluid" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="../../assets/img/library/5.jpeg" data-lightbox="library" data-title="Image 5">
            <img src="../../assets/img/library/5.jpeg" class="zoom img-fluid" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="../../assets/img/library/6.jpeg" data-lightbox="library" data-title="Image 6">
            <img src="../../assets/img/library/6.jpeg" class="zoom img-fluid" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="../../assets/img/library/7.jpeg" data-lightbox="library" data-title="Image 7">
            <img src="../../assets/img/library/7.jpeg" class="zoom img-fluid" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="../../assets/img/library/background.jpeg" data-lightbox="library" data-title="Background Image">
            <img src="../../assets/img/library/background.jpeg" class="zoom img-fluid" alt="">
        </a>
    </div>
</div>





</div>






  <?php

  include('../resources/footer.php');


  ?>




  <!-- custom js -->
  <script src="../assets/js/resources/script.js"></script>
  
  <script>
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".big-number");

  counters.forEach(counter => {
    
    counter.innerText = "0";

    const target = +counter.getAttribute("data-target"); 
    const speed = 150;

    const updateCounter = () => {
      const current = +counter.innerText;
      const increment = Math.ceil(target / speed);

      if (current < target) {
        counter.innerText = current + increment > target ? target : current + increment;
        setTimeout(updateCounter, 10);
      } else {
        counter.innerText = target; 
      }
    };

    updateCounter();
  });
});
</script>
</body>

</html>