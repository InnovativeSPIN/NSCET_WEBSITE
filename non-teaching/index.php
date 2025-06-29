<?php

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Non-Teaching Faculty | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  <!-- custom css -->
  <link rel="stylesheet" href="../assets/css/resources/style.css">
  <link rel="stylesheet" href="../assets/css/teaching/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



  <!-- custom js -->
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>

  <style>
    
  </style>
</head>

<body>

  <?php

  include('../resources/navbar.php');


  ?>
<section class="tablesoffac non_teaching">
        <h2 class="dept_text text-uppercase mb-5">Non-Teaching Faculty</h2>

        <?php

        $staff_query = "SELECT * FROM non_teaching WHERE 1";
        $stmt_for_staff = $conn->prepare($staff_query);
        $stmt_for_staff->execute();
        $staff = $stmt_for_staff->get_result();

        if ($staff->num_rows > 0) {
            $staff_list = [];
            while ($row = $staff->fetch_assoc()) {
                $staff_list[] = $row;
            }
        ?>
<div class="main_container">
            <table>
                <thead>
                    <th>No</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Department</th>
                </thead>
                <tbody>
                    <?php foreach ($staff_list as $index => $staff_member) { ?>
                        <tr>
                            <td><?= htmlspecialchars($index + 1); ?></td>
                            <td> <?= htmlspecialchars($staff_member['name']); ?></td>
                            <td> <?= htmlspecialchars($staff_member['position']); ?></td>
                            <td> <?= htmlspecialchars($staff_member['dept']); ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
        <?php
        } else {
            echo "<p>No staff found for the $dept_name department.</p>";
        }

        $stmt_for_staff->close();
        ?>
    </section>







  <?php

  include('../resources/footer.php');


  ?>




  <!-- custom js -->
  <script src="../assets/js/resources/script.js"></script>
  <!-- swiper -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      autoplay: {
        delay: 2000,
      },
    });
  </script>
</body>

</html>