<?php 
include('../resources/conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Academic Leadership | <?php echo $colle_Name; ?></title>
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
  <?php include('../resources/navbar.php');?>

  <section class="hero-section" style="background: url('../assets/img/main/college_main.jpg') no-repeat center/cover; padding: 100px 20px; text-align: center; color: #fff;">
    <h1 class="dept-heading text-uppercase" style="font-size: 3rem; font-weight: bold; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Academic Leadership</h1>
    <p style="font-size: 1.2rem; max-width: 800px; margin: 0 auto; text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">Our distinguished academic leaders drive excellence in education, research, and innovation, fostering a transformative learning environment for students and faculty alike.</p>
  </section>

  <div class="container" style="padding: 40px 20px; background: #f8f9fa;">
    <!-- Introductory Content -->
    <section id="intro" class="intro_section mb-5">
      <h2 class="title_text text-center" style="font-size: 2rem; color: #333;">About Our Leadership</h2>
      <p style="font-size: 1rem; color: #333; line-height: 1.6; text-align: justify;">At <?php echo $colle_Name; ?>, our academic leadership team comprises experienced educators and administrators dedicated to shaping the future of technical education. Led by our Principal, Vice Principals, and Training and Placement Officer, the team ensures a holistic educational experience. Our Heads of Departments and specialized coordinators bring expertise to their respective fields, guiding students toward academic and professional success.</p>
    </section>

    <!-- Administrative Leadership -->
    <section id="leadership" class="governing-cell mt-5">
      <h2 class="title_text text-center" style="font-size: 2rem; color: #333;">Administrative Leadership</h2>
      <div class="card-grid" style="display: flex; flex-direction: column; gap: 20px; align-items: center;">
        <!-- Principal at the top -->
        <div class="card" style="width: 100%; max-width: 250px;">
          <div class="card-container" style="text-align: center;">
            <img src="../assets/img/faculty/image2.jpeg" alt="Dr. C. Mathalai Sundaram" style="width: 100%; max-width: 200px; height: 200px; object-fit: cover; border-radius: 8px;">
            <p class="name" style="font-size: 1.2rem; color: #1a1a1a; margin: 10px 0;">Dr. C. Mathalai Sundaram</p>
            <div class="card-content">
              <h3 style="font-size: 1.25rem; color: #0d6efd; margin: 10px 0;">Principal</h3>
              <p style="font-size: 0.9rem; color: #333;">M.E., M.B.A., Ph.D., MISTE</p>
            </div>
          </div>
        </div>
        <!-- VP and Placement Officer in a 3-column grid -->
        <div class="card-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; width: 100%; max-width: 660px; margin: 0 auto;">
          <div class="card">
            <div class="card-container" style="text-align: center;">
              <img src="../assets/img/faculty/image3.png" alt="Mr. N. Mathavan" style="width: 100%; max-width: 200px; height: 200px; object-fit: cover; border-radius: 8px;">
              <p class="name" style="font-size: 1.2rem; color: #1a1a1a; margin: 10px 0;">Mr. N. Mathavan</p>
              <div class="card-content">
                <h3 style="font-size: 1.25rem; color: #0d6efd; margin: 10px 0;">Vice Principal & Admin</h3>
                <p style="font-size: 0.9rem; color: #333;">M.E., M.B.A., (Ph.D)</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-container" style="text-align: center;">
              <img src="../assets/img/faculty/image4.jpeg" alt="Dr. M. Sathya" style="width: 100%; max-width: 200px; height: 200px; object-fit: cover; border-radius: 8px;">
              <p class="name" style="font-size: 1.2rem; color: #1a1a1a; margin: 10px 0;">Dr. M. Sathya</p>
              <div class="card-content">
                <h3 style="font-size: 1.25rem; color: #0d6efd; margin: 10px 0;">Vice Principal & Academic</h3>
                <p style="font-size: 0.9rem; color: #333;">M.Tech., M.B.A., Ph.D</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-container" style="text-align: center;">
              <img src="../assets/img/faculty/image5.jpeg" alt="Dr. C. Karthikeyan" style="width: 100%; max-width: 200px; height: 200px; object-fit: cover; border-radius: 8px;">
              <p class="name" style="font-size: 1.2rem; color: #1a1a1a; margin: 10px 0;">Dr. C. Karthikeyan</p>
              <div class="card-content">
                <h3 style="font-size: 1.25rem; color: #0d6efd; margin: 10px 0;">Training and Placement Officer</h3>
                <p style="font-size: 0.9rem; color: #333;">M.A., B.Ed., CELTA., Ph.D</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Heads of Department -->
    <section id="departments" class="prominent-personalities mt-5">
      <h2 class="title_text text-center" style="font-size: 2rem; color: #333;">Heads of Department</h2>
      <div class="card-grid" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
        <div class="card">
          <div class="card-container" style="text-align: center;">
            <img src="../assets/img/faculty/image6.jpeg" alt="Mr. N. Nagarathinam" style="width: 100%; max-width: 200px; height: 200px; object-fit: cover; border-radius: 8px;">
            <p class="name" style="font-size: 1.2rem; color: #1a1a1a; margin: 10px 0;">Mr. N. Nagarathinam</p>
            <div class="card-content">
              <h3 style="font-size: 1.25rem; color: #0d6efd; margin: 10px 0;">Head [I/C], Structural Engineering</h3>
              <p style="font-size: 0.9rem; color: #333;">M.E., (Ph.D)</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-container" style="text-align: center;">
            <img src="../assets/img/faculty/image7.jpeg" alt="Dr. J. Mathalai Raj" style="width: 100%; max-width: 200px; height: 200px; object-fit: cover; border-radius: 8px;">
            <p class="name" style="font-size: 1.2rem; color: #1a1a1a; margin: 10px 0;">Dr. J. Mathalai Raj</p>
            <div class="card-content">
              <h3 style="font-size: 1.25rem; color: #0d6efd; margin: 10px 0;">Head [I/C], Computer Science & Engineering</h3>
              <p style="font-size: 0.9rem; color: #333;">M.E. (CSE), Ph.D</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-container" style="text-align: center;">
            <img src="../assets/img/faculty/image8.jpeg" alt="Dr. T. Venishkumar" style="width: 100%; max-width: 200px; height: 200px; object-fit: cover; border-radius: 8px;">
            <p class="name" style="font-size: 1.2rem; color: #1a1a1a; margin: 10px 0;">Dr. T. Venishkumar</p>
            <div class="card-content">
              <h3 style="font-size: 1.25rem; color: #0d6efd; margin: 10px 0;">Head [I/C], Electronics & Communication Engineering</h3>
              <p style="font-size: 0.9rem; color: #333;">M.E., Ph.D</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-container" style="text-align: center;">
            <img src="../assets/img/faculty/image9.jpeg" alt="Dr. B. Radha Krishnan" style="width: 100%; max-width: 200px; height: 200px; object-fit: cover; border-radius: 8px;">
            <p class="name" style="font-size: 1.2rem; color: #1a1a1a; margin: 10px 0;">Dr. B. Radha Krishnan</p>
            <div class="card-content">
              <h3 style="font-size: 1.25rem; color: #0d6efd; margin: 10px 0;">Head [I/C], Mechanical & Manufacturing Engineering</h3>
              <p style="font-size: 0.9rem; color: #333;">M.E., Ph.D., MIE</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-container" style="text-align: center;">
            <img src="../assets/img/faculty/image10.jpeg" alt="Dr. R. Athilingam" style="width: 100%; max-width: 200px; height: 200px; object-fit: cover; border-radius: 8px;">
            <p class="name" style="font-size: 1.2rem; color: #1a1a1a; margin: 10px 0;">Dr. R. Athilingam</p>
            <div class="card-content">
              <h3 style="font-size: 1.25rem; color: #0d6efd; margin: 10px 0;">Head [I/C], Electrical and Electronics Engineering</h3>
              <p style="font-size: 0.9rem; color: #333;">M.E., Ph.D</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-container" style="text-align: center;">
            <img src="../assets/img/faculty/image11.jpeg" alt="Dr. E. Ananthakrishnan" style="width: 100%; max-width: 200px; height: 200px; object-fit: cover; border-radius: 8px;">
            <p class="name" style="font-size: 1.2rem; color: #1a1a1a; margin: 10px 0;">Dr. E. Ananthakrishnan</p>
            <div class="card-content">
              <h3 style="font-size: 1.25rem; color: #0d6efd; margin: 10px 0;">Head [I/C], Civil Engineering</h3>
              <p style="font-size: 0.9rem; color: #333;">M.E., Ph.D</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-container" style="text-align: center;">
            <img src="../assets/img/faculty/image12.jpeg" alt="Mr. A. Vembathurajesh" style="width: 100%; max-width: 200px; height: 200px; object-fit: cover; border-radius: 8px;">
            <p class="name" style="font-size: 1.2rem; color: #1a1a1a; margin: 10px 0;">Mr. A. Vembathurajesh</p>
            <div class="card-content">
              <h3 style="font-size: 1.25rem; color: #0d6efd; margin: 10px 0;">Head [I/C], Science & Humanities</h3>
              <p style="font-size: 0.9rem; color: #333;">M.E., MISTE</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-container" style="text-align: center;">
            <img src="../assets/img/faculty/image13.jpeg" alt="Mr. L.S. Vignesh" style="width: 100%; max-width: 200px; height: 200px; object-fit: cover; border-radius: 8px;">
            <p class="name" style="font-size: 1.2rem; color: #1a1a1a; margin: 10px 0;">Mr. L.S. Vignesh</p>
            <div class="card-content">
              <h3 style="font-size: 1.25rem; color: #0d6efd; margin: 10px 0;">Head [I/C], Artificial Intelligence & Data Science</h3>
              <p style="font-size: 0.9rem; color: #333;">M.E., (Ph.D)</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-container" style="text-align: center;">
            <img src="../assets/img/faculty/image14.png" alt="Mr. K. Sundararajan" style="width: 100%; max-width: 200px; height: 200px; object-fit: cover; border-radius: 8px;">
            <p class="name" style="font-size: 1.2rem; color: #1a1a1a; margin: 10px 0;">Mr. K. Sundararajan</p>
            <div class="card-content">
              <h3 style="font-size: 1.25rem; color: #0d6efd; margin: 10px 0;">HOD & Physical Director</h3>
              <p style="font-size: 0.9rem; color: #333;">M.A., M.P.Ed., M.Phil., PG.YED., (Ph.D)</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-container" style="text-align: center;">
            <img src="../assets/img/faculty/image15.jpeg" alt="Mrs. S. Arul Jothi" style="width: 100%; max-width: 200px; height: 200px; object-fit: cover; border-radius: 8px;">
            <p class="name" style="font-size: 1.2rem; color: #1a1a1a; margin: 10px 0;">Mrs. S. Arul Jothi</p>
            <div class="card-content">
              <h3 style="font-size: 1.25rem; color: #0d6efd; margin: 10px 0;">Head [I/C], Information Technology</h3>
              <p style="font-size: 0.9rem; color: #333;">M.E., (Ph.D)</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-container" style="text-align: center;">
            <img src="../assets/img/faculty/image16.jpeg" alt="Dr. C. Chithra" style="width: 100%; max-width: 200px; height: 200px; object-fit: cover; border-radius: 8px;">
            <p class="name" style="font-size: 1.2rm; color: #1a1a1a; margin: 10px 0;">Dr. C. Chithra</p>
            <div class="card-content">
              <h3 style="font-size: 1.25rem; color: #0d6efd; margin: 10px 0;">Department Coordinator</h3>
              <p style="font-size: 0.9rem; color: #333;">M.Sc., M.Phil., B.Ed., P.G.D.C.A., Ph.D</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Library -->
    <section id="library" class="mt-5">
      <h2 class="title_text text-center" style="font-size: 2rm; color: #333;">Library</h2>
      <div class="card-grid" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
        <div class="card">
          <div class="card-container" style="text-align: center;">
            <img src="../assets/img/faculty/image17.jpeg" alt="Dr. S. Sinthan" style="width: 100%; max-width: 200px; height: 200px; object-fit: cover; border-radius: 8px;">
            <p class="name" style="font-size: 1.2rem; color: #1a1a1a; margin: 10px 0;">Dr. S. Sinthan</p>
            <div class="card-content">
              <h3 style="font-size: 1.25rem; color: #0d6efd; margin: 10px 0;">Librarian</h3>
              <p style="font-size: 0.9rem; color: #333;">MLISc., M.Phil., Ph.D</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Admin Manager -->
    <section id="admin" class="mt-5">
      <h2 class="title_text text-center" style="font-size: 2rem; color: #333;">Administration</h2>
      <div class="card-grid" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
        <div class="card">
          <div class="card-container" style="text-align: center;">
            <img src="../assets/img/faculty/image18.jpeg" alt="Mr. D. Vasanthakumar" style="width: 100%; max-width: 200px; height: 200px; object-fit: cover; border-radius: 8px;">
            <p class="name" style="font-size: 1.2rem; color: #1a1a1a; margin: 10px 0;">Mr. D. Vasanthakumar</p>
            <div class="card-content">
              <h3 style="font-size: 1.25rem; color: #0d6efd; margin: 10px 0;">Admin Manager</h3>
              <p style="font-size: 0.9rem; color: #333;">MCA</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <?php include('../resources/footer.php');?>

  <!-- custom js -->
  <script src="./assets/js/resources/script.js"></script>
  <script>
    // Add hover effect for cards
    document.querySelectorAll('.card').forEach(card => {
      card.addEventListener('mouseenter', () => {
        card.style.transform = 'scale(1.05)';
      });
      card.addEventListener('mouseleave', () => {
        card.style.transform = 'scale(1)';
      });
    });
  </script>
</body>
</html>