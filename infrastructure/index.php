<?php 

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Infrastructure | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="../assets/css/resources/style.css">
<link rel="stylesheet" href="../assets/css/infrastruture/style.css">


<!-- custom js -->
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include('../resources/navbar.php');?>



<section class="hero-section" style="background: url('../assets/img/main/college_main.jpg') no-repeat center/cover;">
  <h1 class="dept-heading text-uppercase">Infrastructure</h1>
</section>

<!-- main section -->

<div id="infra_main_section">
<section class="features">
        <h2 class="section-heading">Features of Our Infrastructure</h2>
        <div class="container">
            <div class="card">
                <img src="../assets/img/infra/library.png" alt="Library">
                <h3>State-of-the-Art Library</h3>
                <p>A vast collection of books, journals, and digital resources to enhance student learning.</p>
            </div>
            <div class="card">
                <img src="../assets/img/Infra/lab.png" alt="Laboratories">
                <h3>Advanced Laboratories</h3>
                <p>Fully equipped labs with the latest technology for hands-on practical experience.</p>
            </div>
            <div class="card">
                <img src="../assets/img/Infra/sports.png" alt="Sports Facilities">
                <h3>Sports Facilities</h3>
                <p>Indoor and outdoor facilities promoting fitness and extracurricular activities.</p>
            </div>
        </div>
    </section>

    <section class="gallery mt-4 mb-5">
        <h2 class="section-heading">Image Gallery</h2>
        <div class="gallery-container">
            <img src="../assets/img/infra/canteen.png" alt="Canteen">
            <img src="../assets/img/Infra/college.png" alt="Campus">
            <img src="../assets/img/Infra/temp.png" alt="Auditorium">
        </div>
        <div class="d-flex justify-content-center mt-3">
        <a href="/gallery/">
        <button class="gallery_btn">
            More
        </button>
        </a>
        </div>
    </section>

    <section class="why-choose-us">
        <h2 class="section-heading">Why Choose Us?</h2>
        <ul>
            <li>Eco-friendly campus with a serene learning environment.</li>
            <li>World-class facilities for academics and research.</li>
            <li>Highly secure campus with 24/7 surveillance.</li>
            <li>Well-maintained hostels with all modern amenities.</li>
            <li>Ample parking space and excellent connectivity.</li>
        </ul>
    </section>
<div class="info_main_section mt-5">
    <section class="info-section">
        <h2 class="section-heading">Modern Classrooms</h2>
        <p>Our classrooms are equipped with smart boards, projectors, and comfortable seating arrangements to provide an interactive and engaging learning environment.</p>
        <img src="../assets/img/Infra/classroom.png" alt="Modern Classrooms">
    </section>

    <section class="info-section">
        <h2 class="section-heading">Digital Facilities</h2>
        <p>We provide high-speed Wi-Fi connectivity across the campus, along with dedicated computer labs featuring the latest software and hardware to support digital learning and research.</p>
        <img src="../assets/img/Infra/digital_facilities.png" alt="Digital Facilities">
    </section>

    <section class="info-section">
        <h2 class="section-heading">Transportation</h2>
        <p>Our institution offers a fleet of buses that connect students and staff to major locations in the city, ensuring convenient and safe travel.</p>
        <img src="../assets/img/Infra/transportation.png" alt="Transportation">
    </section>

    <section class="info-section">
        <h2 class="section-heading">Community Spaces</h2>
        <p>We believe in fostering community spirit. Our campus features dedicated spaces for cultural events, open-air theatres, and cafeterias for casual interactions.</p>
        <img src="../assets/img/Infra/community_spaces.png" alt="Community Spaces">
    </section>
    </div>














</div>



<?php include('../resources/footer.php'); ?>

<!-- custom js -->
<script src="../assets/js/resources/script.js"></script>
</body>
</html>