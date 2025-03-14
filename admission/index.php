<?php

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admission | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  <!-- custom css -->
  <link rel="stylesheet" href="../assets/css/resources/style.css">
  <link rel="stylesheet" href="../assets/css/admission/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



  <!-- custom js -->
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php include('../resources/navbar.php'); ?>

  <section class="hero-section" style="background: url('../assets/img/main/college_intro.png') no-repeat center/cover;">
    <h1 class="name">Admissions</h1>
    <p>Start your journey toward excellence today.</p>

  </section>

  <!-- main-body -->
  <div class="main_body_section">
    <div class="sidebar_navigate">
      <ul>
        <li><a class="sidemenu_item" href="#overview" onclick="showSection('overview')">Admission details</a></li>
        <li><a class="sidemenu_item" href="#prospectus" onclick="showSection('prospectus')">Prospectus</a></li>
        <li><a class="sidemenu_item" href="#process" onclick="showSection('process')">Admission process</a></li>
        <li><a class="sidemenu_item" href="#form" onclick="showSection('form')">Enquiry Form</a></li>
        <!-- <li><a class="sidemenu_item" href="#">Fee Refund Policy</a></li> -->
      </ul>
    </div>
    <div class="main_contents">
      <div id="overview" class="content-section">
        <div class="about_content mb-4 ">
          <h1 class="main_head_text text-decoration-underline mb-3">
            Admission Overview
          </h1>
          <p class="text-justify lh-sm">
            Our admission process ensures a seamless experience for aspiring students. Eligibility criteria include academic performance, entrance exam scores, and relevant qualifications. We offer undergraduate and postgraduate programs with affordable tuition fees. Additional facilities like hostels, labs, and libraries enhance the learning environment. Apply today to embark on a rewarding educational journey!
          </p>
        </div>
        <div class="eligibility_container mt-1 mb-3" id="">
          <h1 class="main_head_text">Eligibility for Admission</h1>
          <section class="eligibility mt-3">
            <h2>Undergraduate (UG) Eligibility</h2>
            <ul>
              <li>Completion of 10+2 with a minimum of 60% in Physics, Chemistry, and Mathematics.</li>
              <li>Valid scores from recognized engineering entrance exams (such as JEE or state-level exams).</li>
              <li>Strong communication and analytical skills are preferred.</li>
            </ul>
          </section>
          <section class="eligibility">
            <h2>Postgraduate (PG) Eligibility</h2>
            <ul>
              <li>Completion of a BE/BTech degree with a minimum of 55% aggregate or equivalent CGPA.</li>
              <li>Valid GATE score or equivalent for admissions through government or state-level counseling.</li>
              <li>Strong background in the chosen field of specialization.</li>
            </ul>
          </section>
        </div>
      </div>
      <!-- prospectus -->
      <div id="prospectus" class="content-section">
        <div class="prospectus">
          <h1 class="main_head_text text-decoration-underline mb-3">Prospectus – Fee Structure </h1>

          <section class="fee-structure">
            <h2>Undergraduate Programs (B.E./B.Tech) – ₹50,000 per year</h2>
            <ul>
              <li>Computer Science & Engineering (CSE)</li>
              <li>Civil Engineering</li>
              <li>Electronics & Communication Engineering (ECE)</li>
              <li>Electrical and Electronics Engineering (EEE)</li>
              <li>Mechanical Engineering</li>
              <li>Artificial Intelligence & Data Science (AI & DS)</li>
              <li>Information Technology (IT)</li>
            </ul>
          </section>

          <section class="fee-structure">
            <h2>Postgraduate Programs (M.E./M.Tech) – ₹50,000 per year</h2>
            <ul>
              <li>Structural Engineering</li>
              <li>Manufacturing Engineering</li>
            </ul>
          </section>

          <section class="additional-info">
            <h2>Additional Information</h2>
            <ul>
              <li><strong>Hostel & Accommodation Fees:</strong> ₹30,000 – ₹50,000 per year (varies based on room type and facilities).</li>
              <li><strong>Exam Fees:</strong> ₹5,000 per semester (subject to change).</li>
              <li><strong>Library & Lab Fees:</strong> Included in the tuition fee, but additional charges may apply for specialized courses.</li>
            </ul>
          </section>
        </div>
      </div>

      <div id="form" class="content-section">
      <section id="enquiry-form" class="" >
    <h2 class="main_head_text text-decoration-underline mb-4">Enquiry Form for Academic 2025-26</h2>
    <p class="mb-5">If you have any questions or need further assistance, please fill out the form below, and our admissions team will get in touch with you.</p>

    <div id="admission-form mt-3 ">
        <form action="./form.php" method="post" class="admission-form">
            
            <div class="form-group">
                <label for="Name">Name *</label>
                <input type="text" id="Name" name="Name" required placeholder="Enter Your Name">
            </div>

            <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" required placeholder="Enter Your Email">
            </div>

            <div class="form-group">
                <label for="mobile">Mobile Number *</label>
                <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" required placeholder="Enter 10-digit Mobile Number">
            </div>

            <div class="form-group">
                <label for="city">City *</label>
                <input type="text" id="city" name="city" required placeholder="Enter Your City">
            </div>

            <div class="form-group">
                <label for="school">School *</label>
                <input type="text" id="school" name="school" required placeholder="Enter Your School Name">
            </div>

            <div class="form-group">
                <label for="major">Which Major are you interested in? *</label>
                <select id="major" name="major" required>
                    <option value="">Select Major</option>
                    <option value="cse">Computer Science & Engineering</option>
                    <option value="civil">Civil Engineering</option>
                    <option value="ece">Electronics & Communication Engineering</option>
                    <option value="eee">Electrical and Electronics Engineering</option>
                    <option value="mech">Mechanical Engineering</option>
                    <option value="ai-and-ds">Artificial Intelligence & Data Science</option>
                    <option value="it">Information Technology</option>
                    <option value="s-and-h">Science and Humanities</option>
                    <option value="se">Structural Engineering</option>
                    <option value="mfe">Manufacturing Engineering</option>
                </select>
            </div>

            <div class="form-group">
                <label for="tenthScore">10th Score *</label>
                <input type="text" id="tenthScore" name="tenthScore" required placeholder="Enter Your 10th Score">
            </div>

            <div class="form-group">
                <label for="twelthScore">12th Score *</label>
                <input type="text" id="twelthScore" name="twelthScore" required placeholder="Enter Your 12th Score">
            </div>

            <div class="form-group">
                <label for="hearAbout">Where did you hear about NSCET? *</label>
                <input type="text" id="hearAbout" name="hearAbout" required placeholder="e.g., Social Media, Friend, Website">
            </div>

            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</section>
      </div>

      <div id="process" class="content-section">
      <section class="admission-container">
        <h2 class="main_head_text">Admission Process</h2>
        
        <!-- Government Quota Admission -->
        <div class="admission-box mt-3">
            <h3>Government Quota Admission (Through Counseling)</h3>
            <p>The Government Quota admissions are conducted through a centralized counseling process based on merit and entrance exam scores.</p>
            
            <ol>
                <li><strong>Eligibility Criteria:</strong> Meet the academic qualifications set by the government.</li>
                <li><strong>Apply Through Government Portal:</strong> Register and submit documents online.</li>
                <li><strong>Merit-Based Seat Allotment:</strong> Seats are allotted based on rankings.</li>
                <li><strong>Counseling & Document Verification:</strong> Attend counseling and submit original documents.</li>
                <li><strong>Fee Payment & Admission Confirmation:</strong> Pay government-approved fees and complete enrollment.</li>
            </ol>
        </div>

        <!-- Management Quota Admission -->
        <div class="admission-box">
            <h3>Management Quota Admission (Direct Admission)</h3>
            <p>Management Quota admissions allow students to apply directly to the institution without participating in government counseling.</p>
            
            <ol>
                <li><strong>Eligibility Criteria:</strong> Meet the institution’s minimum academic requirements.</li>
                <li><strong>Direct Application to the College:</strong> Submit an application form with academic documents.</li>
                <li><strong>Screening & Interview (If Required):</strong> Some courses may have an interview or assessment.</li>
                <li><strong>Seat Confirmation & Fee Payment:</strong> Pay the management quota tuition fees.</li>
                <li><strong>Document Submission & Enrollment:</strong> Submit original documents for verification and receive an admission letter.</li>
            </ol>
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
</body>

</html>