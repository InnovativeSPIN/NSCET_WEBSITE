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
  <!-- <link rel="stylesheet" href="../assets/css/administration/style.css"> -->

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
      <h2 class="title_text text-center" style="font-size: 2rem; color: #333; margin-bottom: 2rem;">Administrative Leadership</h2>
      <div class="card-grid" style="display: flex; flex-direction: column; gap: 20px; align-items: center;">
        <!-- Principal at the top -->
        <div class="card" style="width: 350px; min-height: 450px; background: #fff; border: 1px solid #dee2e6; border-radius: 12px; padding: 30px; box-shadow: 0 6px 15px rgba(0,0,0,0.2); text-align: center; box-sizing: border-box;">
          <div class="card-container">
            <div style="width: 300px; height: 300px; overflow: hidden; margin: 0 auto 20px;">
              <img src="../assets/img/administration/prinicipal.jpg" alt="Dr. C. Mathalai Sundaram" style="width: 100%; height: 100%; object-fit: contain; border-radius: 8px; background: transparent;">
            </div>
            <p class="name" style="font-size: 1.5rem; color: #343a40; margin: 15px 0;">Dr. C. Mathalai Sundaram</p>
            <div class="card-content">
              <h3 style="font-size: 1.3rem; color: #005cbf; margin: 10px 0;">Principal</h3>
              <p style="font-size: 1.1rem; color: #6c757d;">M.E., M.B.A., Ph.D., MISTE</p>
            </div>
          </div>
        </div>
        <!-- VP and Placement Officer in a 3-column grid -->
        <div class="card-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 4rem; max-width: 900px; margin: 0 auto; justify-content: center; align-items: center;">
          <div class="card" style="width: 350px; min-height: 450px; background: #fff; border: 1px solid #dee2e6; border-radius: 12px; padding: 30px; box-shadow: 0 6px 15px rgba(0,0,0,0.2); text-align: center; box-sizing: border-box;">
            <div class="card-container">
              <div style="width: 300px; height: 300px; overflow: hidden; margin: 0 auto 20px;">
                <img src="../assets/img/department/staff/ece/Mathavan.jpg" alt="Mr. N. Mathavan" style="width: 100%; height: 100%; object-fit: contain; border-radius: 8px; background: transparent;">
              </div>
              <p class="name" style="font-size: 1.5rem; color: #343a40; margin: 15px 0;">Mr. N. Mathavan</p>
              <div class="card-content">
                <h3 style="font-size: 1.3rem; color: #005cbf; margin: 10px 0;">Vice Principal & Admin</h3>
                <p style="font-size: 1.1rem; color: #6c757d;">M.E., M.B.A., (Ph.D)</p>
              </div>
            </div>
          </div>
          <div class="card" style="width: 350px; min-height: 450px; background: #fff; border: 1px solid #dee2e6; border-radius: 12px; padding: 30px; box-shadow: 0 6px 15px rgba(0,0,0,0.2); text-align: center; box-sizing: border-box;">
            <div class="card-container">
              <div style="width: 300px; height: 300px; overflow: hidden; margin: 0 auto 20px;">
                <img src="../assets/img/department/staff/it/sathya.jpg" alt="Dr. M. Sathya" style="width: 100%; height: 100%; object-fit: contain; border-radius: 8px; background: transparent;">
              </div>
              <p class="name" style="font-size: 1.5rem; color: #343a40; margin: 15px 0;">Dr. M. Sathya</p>
              <div class="card-content">
                <h3 style="font-size: 1.3rem; color: #005cbf; margin: 10px 0;">Vice Principal & Academic</h3>
                <p style="font-size: 1.1rem; color: #6c757d;">M.Tech., M.B.A., Ph.D</p>
              </div>
            </div>
          </div>
          <div class="card" style="width: 350px; min-height: 450px; background: #fff; border: 1px solid #dee2e6; border-radius: 12px; padding: 30px; box-shadow: 0 6px 15px rgba(0,0,0,0.2); text-align: center; box-sizing: border-box;">
            <div class="card-container">
              <div style="width: 300px; height: 300px; overflow: hidden; margin: 0 auto 20px;">
                <img src="../assets/img/administration/dr karthikeyan .jpg" alt="Dr. C. Karthikeyan" style="width: 100%; height: 100%; object-fit: contain; border-radius: 8px; background: transparent;">
              </div>
              <p class="name" style="font-size: 1.5rem; color: #343a40; margin: 15px 0;">Dr. C. Karthikeyan</p>
              <div class="card-content">
                <h3 style="font-size: 1.3rem; color: #005cbf; margin: 10px 0;">Training and Placement Officer</h3>
                <p style="font-size: 1.1rem; color: #6c757d;">M.A., B.Ed., CELTA., Ph.D</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Heads of Department -->
    <section id="departments" class="prominent-personalities mt-5">
      <h2 class="title_text text-center" style="font-size: 2rem; color: #333; margin-bottom: 2rem;">Heads of Department</h2>
      <div class="card-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 4rem; max-width: 900px; margin: 0 auto; justify-content: center; align-items: center;">
        <div class="card" style="width: 350px; min-height: 450px; background: #fff; border: 1px solid #dee2e6; border-radius: 12px; padding: 30px; box-shadow: 0 6px 15px rgba(0,0,0,0.2); text-align: center; box-sizing: border-box;">
          <div class="card-container">
            <div style="width: 300px; height: 300px; overflow: hidden; margin: 0 auto 20px;">
              <img src="../assets/img/administration/leadership/nagarathinam S&H.jpg" alt="Mr. N. Nagarathinam" style="width: 100%; height: 100%; object-fit: contain; border-radius: 8px; background: transparent;">
            </div>
            <p class="name" style="font-size: 1.5rem; color: #343a40; margin: 15px 0;">Mr. N. Nagarathinam</p>
            <div class="card-content">
              <h3 style="font-size: 1.3rem; color: #005cbf; margin: 10px 0;">Head [I/C], Structural Engineering</h3>
              <p style="font-size: 1.1rem; color: #6c757d;">M.E., (Ph.D)</p>
            </div>
          </div>
        </div>
        <div class="card" style="width: 350px; min-height: 450px; background: #fff; border: 1px solid #dee2e6; border-radius: 12px; padding: 30px; box-shadow: 0 6px 15px rgba(0,0,0,0.2); text-align: center; box-sizing: border-box;">
          <div class="card-container">
            <div style="width: 300px; height: 300px; overflow: hidden; margin: 0 auto 20px;">
              <img src="../assets/img/administration/leadership/mathalairaj cse.jpg" alt="Dr. J. Mathalai Raj" style="width: 100%; height: 100%; object-fit: contain; border-radius: 8px; background: transparent;">
            </div>
            <p class="name" style="font-size: 1.5rem; color: #343a40; margin: 15px 0;">Dr. J. Mathalai Raj</p>
            <div class="card-content">
              <h3 style="font-size: 1.3rem; color: #005cbf; margin: 10px 0;">Head [I/C], Computer Science & Engineering</h3>
              <p style="font-size: 1.1rem; color: #6c757d;">M.E. (CSE), Ph.D</p>
            </div>
          </div>
        </div>
        <div class="card" style="width: 350px; min-height: 450px; background: #fff; border: 1px solid #dee2e6; border-radius: 12px; padding: 30px; box-shadow: 0 6px 15px rgba(0,0,0,0.2); text-align: center; box-sizing: border-box;">
          <div class="card-container">
            <div style="width: 300px; height: 300px; overflow: hidden; margin: 0 auto 20px;">
              <img src="../assets/img/administration/leadership/venishkumar ece.jpg" alt="Dr. T. Venishkumar" style="width: 100%; height: 100%; object-fit: contain; border-radius: 8px; background: transparent;">
            </div>
            <p class="name" style="font-size: 1.5rem; color: #343a40; margin: 15px 0;">Dr. T. Venishkumar</p>
            <div class="card-content">
              <h3 style="font-size: 1.3rem; color: #005cbf; margin: 10px 0;">Head [I/C], Electronics & Communication Engineering</h3>
              <p style="font-size: 1.1rem; color: #6c757d;">M.E., Ph.D</p>
            </div>
          </div>
        </div>
        <div class="card" style="width: 350px; min-height: 450px; background: #fff; border: 1px solid #dee2e6; border-radius: 12px; padding: 30px; box-shadow: 0 6px 15px rgba(0,0,0,0.2); text-align: center; box-sizing: border-box;">
          <div class="card-container">
            <div style="width: 300px; height: 300px; overflow: hidden; margin: 0 auto 20px;">
              <img src="../assets/img/administration/leadership/radhakrishnan mech.jpg" alt="Dr. B. Radha Krishnan" style="width: 100%; height: 100%; object-fit: contain; border-radius: 8px; background: transparent;">
            </div>
            <p class="name" style="font-size: 1.5rem; color: #343a40; margin: 15px 0;">Dr. B. Radha Krishnan</p>
            <div class="card-content">
              <h3 style="font-size: 1.3rem; color: #005cbf; margin: 10px 0;">Head [I/C], Mechanical & Manufacturing Engineering</h3>
              <p style="font-size: 1.1rem; color: #6c757d;">M.E., Ph.D., MIE</p>
            </div>
          </div>
        </div>
        <div class="card" style="width: 350px; min-height: 450px; background: #fff; border: 1px solid #dee2e6; border-radius: 12px; padding: 30px; box-shadow: 0 6px 15px rgba(0,0,0,0.2); text-align: center; box-sizing: border-box;">
          <div class="card-container">
            <div style="width: 300px; height: 300px; overflow: hidden; margin: 0 auto 20px;">
              <img src="../assets/img/administration/leadership/Dr_athilingam eee.jpg" alt="Dr. R. Athilingam" style="width: 100%; height: 100%; object-fit: contain; border-radius: 8px; background: transparent;">
            </div>
            <p class="name" style="font-size: 1.5rem; color: #343a40; margin: 15px 0;">Dr. R. Athilingam</p>
            <div class="card-content">
              <h3 style="font-size: 1.3rem; color: #005cbf; margin: 10px 0;">Head [I/C], Electrical and Electronics Engineering</h3>
              <p style="font-size: 1.1rem; color: #6c757d;">M.E., Ph.D</p>
            </div>
          </div>
        </div>
        <div class="card" style="width: 350px; min-height: 450px; background: #fff; border: 1px solid #dee2e6; border-radius: 12px; padding: 30px; box-shadow: 0 6px 15px rgba(0,0,0,0.2); text-align: center; box-sizing: border-box;">
          <div class="card-container">
            <div style="width: 300px; height: 300px; overflow: hidden; margin: 0 auto 20px;">
              <img src="../assets/img/administration/leadership/ananthakrishnan civil.jpg" alt="Dr. E. Ananthakrishnan" style="width: 100%; height: 100%; object-fit: contain; border-radius: 8px; background: transparent;">
            </div>
            <p class="name" style="font-size: 1.5rem; color: #343a40; margin: 15px 0;">Dr. E. Ananthakrishnan</p>
            <div class="card-content">
              <h3 style="font-size: 1.3rem; color: #005cbf; margin: 10px 0;">Head [I/C], Civil Engineering</h3>
              <p style="font-size: 1.1rem; color: #6c757d;">M.E., Ph.D</p>
            </div>
          </div>
        </div>
        <div class="card" style="width: 350px; min-height: 450px; background: #fff; border: 1px solid #dee2e6; border-radius: 12px; padding: 30px; box-shadow: 0 6px 15px rgba(0,0,0,0.2); text-align: center; box-sizing: border-box;">
          <div class="card-container">
            <div style="width: 300px; height: 300px; overflow: hidden; margin: 0 auto 20px;">
              <img src="../assets/img/administration/leadership/vembathurajesh.png" alt="Mr. A. Vembathurajesh" style="width: 100%; height: 100%; object-fit: contain; border-radius: 8px; background: transparent;">
            </div>
            <p class="name" style="font-size: 1.5rem; color: #343a40; margin: 15px 0;">Mr. A. Vembathurajesh</p>
            <div class="card-content">
              <h3 style="font-size: 1.3rem; color: #005cbf; margin: 10px 0;">Head [I/C], Science & Humanities</h3>
              <p style="font-size: 1.1rem; color: #6c757d;">M.E., MISTE</p>
            </div>
          </div>
        </div>
        <div class="card" style="width: 350px; min-height: 450px; background: #fff; border: 1px solid #dee2e6; border-radius: 12px; padding: 30px; box-shadow: 0 6px 15px rgba(0,0,0,0.2); text-align: center; box-sizing: border-box;">
          <div class="card-container">
            <div style="width: 300px; height: 300px; overflow: hidden; margin: 0 auto 20px;">
              <img src="../assets/img/administration/leadership/l.s.vignesh AI Ds.jpg" alt="Mr. L.S. Vignesh" style="width: 100%; height: 100%; object-fit: contain; border-radius: 8px; background: transparent;">
            </div>
            <p class="name" style="font-size: 1.5rem; color: #343a40; margin: 15px 0;">Mr. L.S. Vignesh</p>
            <div class="card-content">
              <h3 style="font-size: 1.3rem; color: #005cbf; margin: 10px 0;">Head [I/C], Artificial Intelligence & Data Science</h3>
              <p style="font-size: 1.1rem; color: #6c757d;">M.E., (Ph.D)</p>
            </div>
          </div>
        </div>
        <div class="card" style="width: 350px; min-height: 450px; background: #fff; border: 1px solid #dee2e6; border-radius: 12px; padding: 30px; box-shadow: 0 6px 15px rgba(0,0,0,0.2); text-align: center; box-sizing: border-box;">
          <div class="card-container">
            <div style="width: 300px; height: 300px; overflow: hidden; margin: 0 auto 20px;">
              <img src="../assets/img/administration/leadership/sundararajan.jpg" alt="Mr. K. Sundararajan" style="width: 100%; height: 100%; object-fit: contain; border-radius: 8px; background: transparent;">
            </div>
            <p class="name" style="font-size: 1.5rem; color: #343a40; margin: 15px 0;">Mr. K. Sundararajan</p>
            <div class="card-content">
              <h3 style="font-size: 1.3rem; color: #005cbf; margin: 10px 0;">HOD & Physical Director</h3>
              <p style="font-size: 1.1rem; color: #6c757d;">M.A., M.P.Ed., M.Phil., PG.YED., (Ph.D)</p>
            </div>
          </div>
        </div>
        <div class="card" style="width: 350px; min-height: 450px; background: #fff; border: 1px solid #dee2e6; border-radius: 12px; padding: 30px; box-shadow: 0 6px 15px rgba(0,0,0,0.2); text-align: center; box-sizing: border-box;">
          <div class="card-container">
            <div style="width: 300px; height: 300px; overflow: hidden; margin: 0 auto 20px;">
              <img src="../assets/img/administration/leadership/aruljothi it.jpg" alt="Mrs. S. Arul Jothi" style="width: 100%; height: 100%; object-fit: contain; border-radius: 8px; background: transparent;">
            </div>
            <p class="name" style="font-size: 1.5rem; color: #343a40; margin: 15px 0;">Mrs. S. Arul Jothi</p>
            <div class="card-content">
              <h3 style="font-size: 1.3rem; color: #005cbf; margin: 10px 0;">Head [I/C], Information Technology</h3>
              <p style="font-size: 1.1rem; color: #6c757d;">M.E., (Ph.D)</p>
            </div>
          </div>
        </div>
        <div class="card" style="width: 350px; min-height: 450px; background: #fff; border: 1px solid #dee2e6; border-radius: 12px; padding: 30px; box-shadow: 0 6px 15px rgba(0,0,0,0.2); text-align: center; box-sizing: border-box;">
          <div class="card-container">
            <div style="width: 300px; height: 300px; overflow: hidden; margin: 0 auto 20px;">
              <img src="../assets/img/administration/leadership/drchitra M.Sc., M.Phil., B.Ed., P.G.D.C.A., Ph.D..jpg" alt="Dr. C. Chithra" style="width: 100%; height: 100%; object-fit: contain; border-radius: 8px; background: transparent;">
            </div>
            <p class="name" style="font-size: 1.5rem; color: #343a40; margin: 15px 0;">Dr. C. Chithra</p>
            <div class="card-content">
              <h3 style="font-size: 1.3rem; color: #005cbf; margin: 10px 0;">Department Coordinator</h3>
              <p style="font-size: 1.1rem; color: #6c757d;">M.Sc., M.Phil., B.Ed., P.G.D.C.A., Ph.D</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Library and Administration -->
    <section id="library-admin" class="mt-5">
      <h2 class="title_text text-center" style="font-size: 2rem; color: #333; margin-bottom: 2rem;">Library and Administration</h2>
      <div class="card-grid" style="display: flex; flex-wrap: wrap; gap: 2rem; justify-content: center;">
        <div class="card" style="width: 350px; min-height: 450px; background: #fff; border: 1px solid #dee2e6; border-radius: 12px; padding: 30px; box-shadow: 0 6px 15px rgba(0,0,0,0.2); text-align: center; box-sizing: border-box;">
          <div class="card-container">
            <div style="width: 300px; height: 300px; overflow: hidden; margin: 0 auto 20px;">
              <img src="../assets/img/administration/leadership/Sinthan.jpg" alt="Dr. S. Sinthan" style="width: 100%; height: 100%; object-fit: contain; border-radius: 8px; background: transparent;">
            </div>
            <p class="name" style="font-size: 1.5rem; color: #343a40; margin: 15px 0;">Dr. S. Sinthan</p>
            <div class="card-content">
              <h3 style="font-size: 1.3rem; color: #005cbf; margin: 10px 0;">Librarian</h3>
              <p style="font-size: 1.1rem; color: #6c757d;">MLISc., M.Phil., Ph.D</p>
            </div>
          </div>
        </div>
        <div class="card" style="width: 350px; min-height: 450px; background: #fff; border: 1px solid #dee2e6; border-radius: 12px; padding: 30px; box-shadow: 0 6px 15px rgba(0,0,0,0.2); text-align: center; box-sizing: border-box;">
          <div class="card-container">
            <div style="width: 300px; height: 300px; overflow: hidden; margin: 0 auto 20px;">
              <img src="../assets/img/administration/vasanth.jpg" alt="Mr. D. Vasanthakumar" style="width: 100%; height: 100%; object-fit: contain; border-radius: 8px; background: transparent;">
            </div>
            <p class="name" style="font-size: 1.5rem; color: #343a40; margin: 15px 0;">Mr. D. Vasanthakumar</p>
            <div class="card-content">
              <h3 style="font-size: 1.3rem; color: #005cbf; margin: 10px 0;">Admin Manager</h3>
              <p style="font-size: 1.1rem; color: #6c757d;">MCA</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <?php include('../resources/footer.php');?>

  <!-- custom js -->
  <script src="./assets/js/resources/script.js"></script>
</body>
</html>