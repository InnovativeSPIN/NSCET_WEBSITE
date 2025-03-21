<?php
include('../resources/conn.php');
if (!isset($_SESSION['username'])) {
  header("Location: ./login.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<?php require_once('./resources/header_link.php'); ?>
<link rel="stylesheet" href="./assets/css/faculties.css">

<body>

  <?php require_once('./resources/header.php'); ?>
  <?php require_once('./resources/sidebar.php'); ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Home Page</h1>
     
    </div><!-- End Page Title -->

    <section class="section ">

    <?php
     $departments_query = "SELECT * FROM departments";
     $stmt = $conn->prepare($departments_query);
     $stmt->execute();
     $result = $stmt->get_result();
     
     $departments = [];
     while ($row = $result->fetch_assoc()) {
         $departments[$row['dept_short']] = $row['name'];
     }
     $stmt->close();


// ----------------
    
$staff_query = "SELECT * FROM staff";
$stmt_for_staff = $conn->prepare($staff_query);
$stmt_for_staff->execute();
$staff_result = $stmt_for_staff->get_result();


$staff_by_department = [];
while ($row = $staff_result->fetch_assoc()) {
    $staff_by_department[$row['dept_short']][] = $row;
}
$stmt_for_staff->close();


  function safe_htmlspecialchars($value) {
    return htmlspecialchars($value !== NULL ? $value : '-', ENT_QUOTES, 'UTF-8');
  }
  
?>

<div class="card-main">
    <div class="card-con">
        <?php

        foreach ($departments as $dept_short => $dept_name) { ?>
            <h2 class="title_dept"><?= safe_htmlspecialchars($dept_name); ?></h2> 

            <?php if (!empty($staff_by_department[$dept_short])) { ?>
                <?php foreach ($staff_by_department[$dept_short] as $staff_member) { ?>    
                    <div class="faculties-details">
                        <div class="faculties-img">
                            <img alt="<?= safe_htmlspecialchars($staff_member['name']); ?>" class="card__image" src="../assets/img/department/staff/<?= safe_htmlspecialchars($staff_member['image']); ?>" />
                            <form action="./routes/faculiteHandler.php" method="post" enctype="multipart/form-data">
                              <input type="hidden" value="staff_Image" name="formName">
                              <input type="file" name="staff_Image" id="">
                            <input type="hidden" value="<?= safe_htmlspecialchars($staff_member['dept_short']); ?>" name="dept_short">
                              <input type="hidden" value="<?= safe_htmlspecialchars($staff_member['id']); ?>" name="staff_Id">
                              <button type="submit" class="update_btn"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </form>
                        </div>
                        <div class="faculties-content">
                        <form action="./routes/faculiteHandler.php" method="post" enctype="multipart/form-data">
                          <input type="hidden" name="formName"  value="staff_detail">
                          <input type="text" value="<?= safe_htmlspecialchars($staff_member['id']); ?>" name="staff_Id">
                            <p><b>Name:</b> </p><input type="text" name="name" value="<?= safe_htmlspecialchars($staff_member['name']); ?>">
                            <p><b>Designation:</b> </p>
                            <input type="text" name="position" value="<?= safe_htmlspecialchars($staff_member['position']); ?>">
                            <p><b>Qualificatizon:</b>  </p>
                            <input type="" name="qualification" value="<?= safe_htmlspecialchars($staff_member['qualification']); ?>">
                            <p><b>Email:</b> </p>
                            <input type="text" name="email" value="<?= safe_htmlspecialchars($staff_member['email']); ?>">
                            <p><b>Phone:</b> </p>
                            <input type="" name="phone"  value="<?= safe_htmlspecialchars($staff_member['phone']); ?> ">
                            <p><b>Department Short:</b>  </p>
                            <input type="text" name='dept_short' value="<?= safe_htmlspecialchars($staff_member['dept_short']); ?>">
                            
                            <button type="submit" class="update_btn"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </form>
                        </div>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <p>No staff found for <?= safe_htmlspecialchars($dept_name); ?>.</p>
            <?php } ?>
        <?php } ?>
    </div>
</div>
    </section>

  </main><!-- End #main -->

  <?php require_once('./resources/footer_link.php'); ?>

</body>

</html>