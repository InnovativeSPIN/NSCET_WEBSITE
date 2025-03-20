<?php
include('../resources/conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICC | <?php echo $colle_Name; ?></title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" 
          integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" 
          crossorigin="anonymous">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/resources/style.css">
    <link rel="stylesheet" href="../assets/css/icc/style.css">
    <link rel="stylesheet" href="icc-styles.css"> <!-- Separate CSS file -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include('../resources/navbar.php'); ?>

    <div class="main">
        <div class="icc">
            <h1 class="h1">INTERNAL COMPLAINT COMMITTEE</h1>
            <p class="p">
                The ICC is responsible for addressing complaints related to sexual harassment and ensuring a safe 
                and respectful environment for all students and staff. It works to prevent harassment by organizing 
                awareness programs and ensuring that college policies comply with legal guidelines. The committee 
                investigates complaints fairly and takes appropriate action based on evidence. It safeguards the 
                rights of complainants while promoting a zero-tolerance policy. The ICC also plays a crucial role 
                in creating a gender-sensitive campus.
            </p>

            <h1 class="h1">INTERNAL COMPLAINT COMMITTEE MEMBERS</h1>
            
            <table class="table">
                <tr>
                    <th>SL.NO</th>
                    <th>Name of the Member</th>
                    <th>Designation</th>
                    <th>Position</th>
                    <th>Contact</th>
                    <th>Mail ID</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Dr. M. Sathya</td>
                    <td>Vice Principal, HOD/IT</td>
                    <td>Presiding Officer & Convenor</td>
                    <td>9884854043</td>
                    <td>msathyal5@gmail.com</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Dr. C. Chithra</td>
                    <td>Co-ordinator S&H</td>
                    <td>Member</td>
                    <td>9790148325</td>
                    <td>Chithra.c@nscet.org</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Mrs. M. Mahalakshmi</td>
                    <td>AP/Mathematics</td>
                    <td>Member</td>
                    <td>9942089298</td>
                    <td>mahalakshmi.m@nscet.org</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Mr. C. Pandian</td>
                    <td>LA/Mechanical</td>
                    <td>Member</td>
                    <td>7305972306</td>
                    <td>hodmech@nscet.org</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Mr. K. M. Senthil Kumar</td>
                    <td>LA/EEE</td>
                    <td>Member</td>
                    <td>7867004898</td>
                    <td>hodeee@nscet.org</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Ms. N. Vishnu Priya</td>
                    <td>Student</td>
                    <td>Member</td>
                    <td>9384370050</td>
                    <td>Vishnupriyanagarajan520@gmail.com</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Ms. S. Swetha</td>
                    <td>III/Civil</td>
                    <td>Student</td>
                    <td>7845057060</td>
                    <td>swethasugumars2003@gmail.com</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Mr. S. Mukilan</td>
                    <td>III/CSE</td>
                    <td>Student</td>
                    <td>9080399842</td>
                    <td>mukilan.coder@gmail.com</td>
                </tr>
            </table>
        </div>
    </div>

    <?php include('../resources/footer.php'); ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" 
            integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" 
            crossorigin="anonymous"></script>
    <script src="../assets/js/resources/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>