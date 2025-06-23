  <?php
  include('../resources/conn.php');
  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Acadamics - NSCET </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

    <!-- custom css -->
    <link rel="stylesheet" href="../assets/css/resources/style.css">


    <style>
.main-container {
  padding: 40px 20px;
  background-color: #e9f2ff;
  font-family: 'Segoe UI', sans-serif;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 2rem;
  max-width: 1200px;
  margin: 0 auto;
  border-radius: 12px;
}

.regulations,
.academics {
  background-color: #ffffff;
  padding: 30px 20px;
  border-radius: 10px;
  flex: 1 1 48%;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

.main-container h2 {
  text-align: center;
  font-size: 24px;
  font-weight: 700;
  color: #222;
  margin-bottom: 20px;
  text-transform: uppercase;
}

.academics h3 {
  text-align: center;
  font-size: 18px;
  margin: 20px 0 10px;
  color: #0077cc;
}
.ug-regulation{
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.ug-regulation,
.courses {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 16px;
  margin-bottom: 20px;
}

.ug-regulation a,
.courses a {
  text-decoration: none;
}

.ug-regulation button,
.courses button {
  padding: 12px 28px;
  font-size: 15px;
  font-weight: 600;
  color: #fff;
  background-color: #0077cc;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  text-transform: uppercase;
  transition: background-color 0.3s ease;
}

.ug-regulation button:hover,
.courses button:hover {
  background-color: #005fa3;
}
.section-title{
  color: #005fa3;
  font-size: clamp(18px,2rem,28px);
  font-weight: bold;
}

@media (max-width: 768px) {
  .regulations,
  .academics {
    flex: 1 1 100%;
  }
}


    </style>
    <!-- custom js -->
    <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
  </head>

  <body>


    <?php
    include('../resources/navbar.php');
    ?>


    <div id="main-box-container">


      <div class="dept-page-content">
        <!-- faculty section   -->

        <div class="section-content" style='display:flex;justify-content:center;'>
          <div id="faculties">
            <h1 class="section-title mb-2 text-center text-uppercase" style="margin-top:5%;">COURSES</h1>
            <div class="border-line" style="margin-bottom:5%;"></div>

            <div class="faculties-container">
              <section class="">
                <main class="office_bearers_details">
                  <img alt="" class="card__image" src="/files/acadamics.jpg">
                </main>
              </section>
            </div>
          </div>
        </div>


        <div class="main-container" id="Statutes">

        
       
        <div class="regulations">

          <h2>
            Regulations
          </h2>

          <div class="ug-regulation">
            <a href="./files/Undergraduate Programme - Academic Regulations 2021.pdf">
              <button>
                undergraduate
              </button>
            </a>
            <a href="./files/Postgraduate Programme - Academic Regulations 2021.pdf">
              <button>
                postgradute
              </button>
            </a>
          </div>

        

        <!-- Acadamecis -->
         
        </div>
        <div class="academics ">
          <div class="main-dept">

          <h2>
            Syllabus
          </h2>

            <h2>UG Courses</h2>
            <div class="courses ug-courses">
              <a href="./files/B.Tech.AIDS.pdf"><button>AI & DS</button></a>
              <a href="./files/B.E.CSE.pdf"><button>CSE</button></a>
              <a href="./files/BE.Civil.pdf"><button>CIVIL</button></a>
              <a href="./files/B.E. EEE.pdf"><button>EEE</button></a>
              <a href="./files/B.E.ECE.pdf"><button>ECE</button></a>
              <a href="./files/B.E.Mech.pdf"><button>MECH</button></a>
              <a href="./files/B.Tech.IT.pdf"><button>IT</button></a>
            </div>

            <h2>PG Courses</h2>
            <div class="courses pg-courses">
              <a href="./files/01.M.E. Structural.pdf"><button>Structural Engineering</button></a>
              <a href="./files/6. M.E Mfg.pdf"><button>Manufacturing Engineering</button></a>
            </div>

          </div>
        </div>



      </div>

    </div>





    <?php
    include('../resources/footer.php');
    ?>
    <!-- custom js -->
    <script src="./assets/js/resources/script.js"></script>

  </body>

  </html>