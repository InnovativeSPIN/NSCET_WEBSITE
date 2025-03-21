<?php

include('../../resources/conn.php');

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $formName = $_POST['formName'];
        if ($formName == 'staff_Image') {
            $dept_short=$_POST['dept_short'];
            $staff_Id=$_POST['staff_Id'];
            if (isset($_FILES['staff_Image']) && $_FILES['staff_Image']['error'] == 0) {
                $staff_Image = $_FILES['staff_Image'];
                $unique_filename = $dept_short.'/'.uniqid() . "_" . basename($staff_Image["name"]);
                $target_dir = "../../assets/img/department/staff/$dept_short/";
                $target_file = $target_dir .basename($unique_filename);
                if (!is_dir($target_dir)) {
                    mkdir($target_dir, 0755, true);
                }
                if (move_uploaded_file($staff_Image["tmp_name"], $target_file)) {
                    $stmt = $conn->prepare("UPDATE staff SET image = ? WHERE id = ?");
                    $stmt->bind_param("ss", $unique_filename, $staff_Id);
                    $stmt->execute();
                    $stmt->close();

                    header("Location: ../faculties.php");
                    exit();
                } else {
                    echo "Failed to upload the image.";
                }
            }
        } elseif($formName == 'staff_detail'){
            $staff_Id=$_POST['staff_Id'];
            $Name=$_POST['name'];
            $position=$_POST['position'];
            $qualification=$_POST['qualification'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $dept_short=$_POST['dept_short'];
            $stmt=$conn->prepare("UPDATE staff SET id=?,name=?,position=?,qualification=?,email=?,phone=?,dept_short=? WHERE id =? ");
          $stmt->bind_param('ssssssss',$staff_Id,$Name,$position,$qualification,$email,$phone,$dept_short,$staff_Id);
          $stmt->execute();
          $stmt->close();
          header("Location: ../faculties.php");
          exit();
            
        }
    }

?>