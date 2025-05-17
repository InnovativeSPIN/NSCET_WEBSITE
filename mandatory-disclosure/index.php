<?php

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mandatory Disclosure | <?php echo $colle_Name; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

    <!-- custom css -->
    <link rel="stylesheet" href="../assets/css/resources/style.css">
    <link rel="stylesheet" href="../assets/css/mandatory-disclosure/style.css">


    <!-- custom js -->
    <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php include('../resources/navbar.php'); ?>


    <div class="main-container">
        <h2 class="text-center mt-5 head-text">
            Mandatory Disclosure
        </h2>

        <div class="disclosure_content mt-10">
            <p class="mt-5">
            The Mandatory Disclosure of NSCET (Nadar Saraswathi College of Engineering and Technology) serves as a comprehensive document that ensures transparency and accountability in all institutional practices. It is designed in accordance with the guidelines issued by AICTE and other regulatory bodies to provide clear and accessible information to students, parents, faculty members, and other stakeholders. This disclosure contains essential data including the college's vision and mission, approval details, affiliations, management structure, and the credentials of the governing body. Additionally, it outlines the programs offered by the institution, including undergraduate and postgraduate courses, along with faculty qualifications, teaching-learning processes, and facilities provided for academic enrichment.
        </p>

        <p>
            Moreover, the Mandatory Disclosure also covers critical aspects related to student support systems, infrastructure development, research activities, placement statistics, and financial resources. It includes information on laboratories, libraries, classrooms, and other facilities that contribute to a productive learning environment. Admission criteria, fee structures, grievance redressal mechanisms, anti-ragging policies, and internal quality assurance practices are also detailed within the disclosure. By making this information readily available, NSCET upholds its commitment to openness and integrity in higher education. This empowers prospective students and their guardians to make informed decisions while choosing the institution, and also allows continuous improvement through external feedback and regulatory compliance.
        </p>

        </div>

        <div class="pdf_content text-center mt-5">
<iframe src="./NSCET - Mandatory Disclosure-2024.pdf" frameborder="0" width="1000" height="500"></iframe>
    </div>
    </div>

    
    <?php include('../resources/footer.php'); ?>

    <!-- custom js -->
    <script src="../assets/js/resources/script.js"></script>
</body>

</html>