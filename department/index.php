<?php
include('../resources/conn.php');

$departments_list = ['ai-and-ds', 'civil', 'cse', 'it', 'mech', 'mfe', 's-and-h', 'se', 'eee', 'ece'];

if (isset($_GET['dept']) && in_array($_GET['dept'], $departments_list)) {

  $dept_short = $_GET['dept'];


  $query = "SELECT * FROM departments WHERE dept_short = ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("s", $dept_short);

  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $department = $result->fetch_assoc();
  } else {
    $department = null;
  }
  $stmt->close();

  $staff_query = "SELECT * FROM staff WHERE dept_short = ?";
  $stmt_for_staff = $conn->prepare($staff_query);
  $stmt_for_staff->bind_param("s", $dept_short);

  $stmt_for_staff->execute();
  $staff = $stmt_for_staff->get_result();

  if ($staff->num_rows > 0) {
    $staff_list = [];
    while ($row = $staff->fetch_assoc()) {
      $staff_list[] = $row;
    }
  } else {
    $staff_list = null;
  }
  $stmt_for_staff->close();
} else {
  header("Location: ../");
}


function safe_htmlspecialchars($value) {
  return htmlspecialchars($value !== NULL ? $value : '-', ENT_QUOTES, 'UTF-8');
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?php echo safe_htmlspecialchars($department['name'])."|".$colle_Name; ?> </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="../assets/css/resources/style.css">
<link rel="stylesheet" href="../assets/css/department/style.css">


<!-- custom js -->
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>


  <?php
  include('../resources/navbar.php');
  ?>




<section class="hero-section" style="background: url('../assets/img/department/banner/<?php echo safe_htmlspecialchars($department['dept_banner']); ?>') no-repeat center/cover;">
  <h1 class="dept-heading"><strong>Department of <?php echo safe_htmlspecialchars($department['name']); ?> </strong></h1>
</section>

<div id="main-box-container">

  <section class="navigation-bar">
    <nav class="page__menu menu">
      <ul class="menu__list r-list">
        <li class="menu__group"><a href="#section-1" class="menu__link r-link " >ABOUT</a></li>
        <li class="menu__group"><a href="#section-2" class="menu__link r-link " >HOD's DESK</a></li>
        <li class="menu__group"><a href="#section-3" class="menu__link r-link " >FACILITIES</a></li>
        <li class="menu__group"><a href="#section-4" class="menu__link r-link text-uppercase " >Association</a></li>
        <!-- <li class="menu__group"><a href="#section-5" class="menu__link r-link " >PURSUITS</a></li> -->
        <li class="menu__group"><a href="#section-5" class="menu__link r-link " >FACULTIES</a></li>
      </ul>
    </nav>
  </section>
  <!-- reposive icon -->



  <div class="dept-page-content">

    <!-- our dept section -->
    <div id="section-1" class="section-content">
      <section class="our-dept" id="about">
        <div class="section111">
          <h1 class="dept-title text-center mb-2">OUR DEPARTMENT</h1>
          <div class="border-line text-center"></div>
          <div class="text-sec mt-5">

            <h4 class="dept-sub-title"> The Department of <?php echo safe_htmlspecialchars($department['name']); ?> aims to produce the engineers with the abilities:</h4>
            <ul class="dept-sub-con mt-3 p-2">
              <?php $department_data = json_decode($department['short_description'], true);
              if (isset($department_data['points']) && is_array($department_data['points'])) {
                foreach ($department_data['points'] as $point) {
                  echo "<li>" . nl2br(safe_htmlspecialchars($point)) . "</li>";
                }
              } else {
                echo "<p>No points available.</p>";
              } ?>

            </ul>
          </div>

          <h1 class="dept-title text-center text-uppercase mb-2 mt-3" style="margin-top:2% ;">Vision and Mission</h1>
          <div class="border-line "></div>
          <div class=" custom-card-container ">

            <div class="custom-card-wrapper" style="background-image: url('../assets/img/department/cse/vision.png');">
              <div class="custom-card-overlay"></div>
              <div class="custom-card-content " >
                <h4 class="custom-card-title text-center"><strong>VISION</strong></h4>
                <p class="custom-card-text vision-content"><?php echo safe_htmlspecialchars($department['vision']); ?></p>
              </div>
            </div>
            <br><br>
            <div class="custom-card-wrapper" style="background-image: url('../assets/img/department/cse/our-mission.png');">
              <div class="custom-card-overlay"></div>
              <div class=" custom-card-content custom-card-content2 " >
                <h4 class="custom-card-title text-center"><strong>MISSION</strong></h4>
                <ul style="text-align: left;" class="custom-card-text">

                  <?php $department_mission = json_decode($department['mission'], true);
                  if (isset($department_mission['points']) && is_array($department_mission['points'])) {
                    foreach ($department_mission['points'] as $point) {
                      echo "<li>" . nl2br(safe_htmlspecialchars($point)) . "</li>";
                    }
                  } else {
                    echo "<p>No points available.</p>";
                  } ?>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </section>

    </div>
   
    <!-- hod section -->
    <?php if("mfe"==$department['dept_short']): ?>
   <h2 class="text-center">-</h2>
<?php else: ?>
<div id="section-2" class="section-content">
      <div id="hod_desk">
        <div class="container">
          <div class="hod-section">
            <h1 class="section-title mb-2 mt-5  text-center" >HEAD OF THE  DEPARTMENT</h1>
            <div class="border-line "></div>
            <div class="">
              <div class="main-hod-content">
                <?php 
                if ($staff_list !== null) {

                  $staff_list_hod = array_slice($staff_list, 0, 1);

                  foreach ($staff_list_hod as $staff_member) { ?>
                    <div class="hod-main">
                      <div class="hod-main-img">
                      <img src="../assets/img/department/staff/<?= safe_htmlspecialchars($staff_member['image']); ?>" alt="<?= safe_htmlspecialchars($staff_member['name']); ?>" class="" width="380px">
                      </div>
                      <div class="hod-position text-center ">
                        <span class="  text-uppercase "><?= safe_htmlspecialchars($staff_member['name']); ?></span> <br>
                        <span class="mt-1"><?= safe_htmlspecialchars($staff_member['qualification']); ?></span><br>
                        <span class="text-uppercase mt-1"><?= safe_htmlspecialchars($staff_member['position']); ?></span>
                      </div>
                    </div>
                  <?php }
                } else { ?>
                <?php } ?>


                <div class="hod-description">
                  <p class="">
                    <?php echo safe_htmlspecialchars($department['dept_content']); ?>
                  </p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>



    <!-- FACILITIES section -->
    <!-- <div id="section-3" class="section-content">
      <div id="facilities " style="margin-bottom: 3%; margin-top:3%;">

        <h1 class="section-title mb-4 text-center">FACILITIES</h1>
        <div class="border-line" style="margin-bottom:5%;"></div>

        <div class="container">
          <main class="grid facilities-section">
            <article>
              <img src="../assets/img/library/1.jpeg" alt="Dennis lab" width="180px" height="180px">
              <div class="text">
                <h3 class="facility-heading"><strong>Dennis Laboratory</strong></h3>
                <p>Programming Lab which uses C and C++ Languages for Basic Programming.</p>
              </div>
            </article>

          </main>
        </div>
      </div>
    </div> -->
    <!-- ORGANIZATION section -->
    <div id="section-4" class="section-content mt-5 m-5">
      <div id="organization">
        <h1 class="section-title mb-2 text-center text-uppercase">Association</h1>
        <div class="border-line  mt-2" style="margin-bottom:2%;"></div>
        <div class="org-content">
          <div class="org-con-section">
            <?php
              $association_query = "SELECT * FROM association WHERE dept_short = ?";
              $stmt_for_assoc=$conn->prepare($association_query);
              $stmt_for_assoc->bind_param("s",$dept_short);
              $stmt_for_assoc->execute();
              $association=$stmt_for_assoc->get_result();
              if($association->num_rows >0){
                $association_list=[];
                while($row=$association->fetch_assoc()){
                         $association_list[]=$row;
                }
              }else{
                $association_list=null;
              }$stmt_for_assoc->close();
            ?>
            <div class="org-con-section-content">
            <?php 
if ($association_list !== null) {
  foreach ($association_list as $association) { ?>
      <h1 class="org-con-side-head text-center "><?= safe_htmlspecialchars($association['name']) ?></h1>
      <div class="department-content-main ">
          <div class="img-ass">
              <a href="">
                  <img src="../assets/img/department/association/<?= safe_htmlspecialchars($association['image'] ) ?>" alt="" width="280px">
              </a>
          </div>
          <div class="content-asso">
              <p>
              <?php if (!empty($association['description'])): ?>
  <?= safe_htmlspecialchars($association['description']); ?>
<?php endif; ?>
              </p>
          </div>           
      </div>
<div class="team-meet p-5">
<!-- <button class="btn btn-primary w-50 p-2">Meet our Team</button> -->

</div>
  <?php }
} ?>

          </div>
          </div>
        </div>
      </div>

    </div>

    <!-- faculty section   -->

    <div id="section-5" class="section-content">
      <div id="faculties">
        <h1 class="section-title mb-2 text-center text-uppercase" style="margin-top:5%;">Faculties</h1>
        <div class="border-line" style="margin-bottom:5%;"></div>

        <div class="faculties-container">
          <section class="">
            <main class="office_bearers_details">
              <div class="faculties-list">
                <?php
                if ($staff_list !== null) {
                  foreach ($staff_list as $staff_member) { ?>
                    <div class="faculties-details">
                      <div class="faculties-img">
                        <img alt="<?= safe_htmlspecialchars($staff_member['name']); ?>" class="card__image" src="../assets/img/department/staff/<?= safe_htmlspecialchars($staff_member['image']); ?>" />
                      </div>
                      <div class="faculties-content">
                        <p class=""><b>Name:</b> <?= safe_htmlspecialchars($staff_member['name']); ?></p>
                        <p><b>Designation:</b> <?= safe_htmlspecialchars($staff_member['position']); ?></p>
                        <p><b>Qualification:</b> <?= safe_htmlspecialchars($staff_member['qualification']); ?> </p>
                        <p><b>Email:</b> <?= safe_htmlspecialchars($staff_member['email']); ?> </p>
                        <p><b>Phone:</b> <?= safe_htmlspecialchars($staff_member['phone']); ?> </p>
                      </div>
                    </div>
                  <?php }
                } else { ?>
                  <li class="card__item">
                    <p>No staff found for the department.</p>
                  </li>
                <?php } ?>
              </div>
            </main>
          </section>

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