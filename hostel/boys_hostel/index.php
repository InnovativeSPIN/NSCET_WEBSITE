<?php

include('../../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boys Hostel | <?php echo $colle_Name; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

    <!-- custom css -->
    <link rel="stylesheet" href="../../assets/css/resources/style.css">
    <link rel="stylesheet" href="../../assets/css/hostel/hostel.css">


    <!-- custom js -->
    <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php include('../../resources/navbar.php'); ?>


    <section class="hero-section" style="background: url('../../assets/img/hostel/hostel_front.png') no-repeat center/cover;">
        <h1 class="dept-heading">Boys Hostel</h1>
    </section>
    <div class="container hostel_container">
        <div class="about-container">
            <h1>About Hostel</h1>
            <p>The Boys Hostel at our college provides a comfortable and secure environment for students. Equipped with modern facilities and 24/7 supervision, the hostel ensures a home-like atmosphere where students can focus on their academics while enjoying their stay. Spacious rooms, hygienic dining, and recreational areas make it an ideal place for holistic growth and development.</p>

            <div class="table-responsive ">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Warden</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Dr. C. Mathalai Sundaram (Principal)</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Deputy Warden</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Dr. J. Mathalai Raj</td>
                        </tr>
                        <tr>
                            <td>Mr. R. Santhaseelan</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="facilities">

            <div>
                <h3>Facilities</h3>
                <div>
                    <ul>
                        <li>Well-equipped gym with modern exercise machines and weights.</li>
                        <li>Common room with a TV, comfortable seating, and entertainment options.</li>
                        <li>Study area with quiet spaces, desks, and high-speed internet.</li>
                        <li>Mess with a variety of nutritious meals served at convenient timings.</li>
                        <li>Security with CCTV cameras and a hostel warden available 24/7.</li>
                    </ul>
                </div>
                <div>
                    <div class="container mt-5">
  <h3 class="mb-4">Strength</h3>
  <table class="table table-bordered table-striped">
    <thead class="thead-dark">
      <tr>
        <th>DESCRIPTION</th>
        <th>QUANTITY</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Total Rooms</td>
        <td>28</td>
      </tr>
      <tr>
        <td>Number of Blocks</td>
        <td>02</td>
      </tr>
      <tr>
        <td>Number of Students in a Room</td>
        <td>03</td>
      </tr>
      <tr>
        <td>Sick Rooms</td>
        <td>01</td>
      </tr>
      <tr>
        <td>Toilets in Hostel</td>
        <td>39</td>
      </tr>
      <tr>
        <td>Bathrooms in Hostel</td>
        <td>35</td>
      </tr>
      <tr>
        <td>Study Room</td>
        <td>01</td>
      </tr>
      <tr>
        <td>Total Number of Students</td>
        <td>22</td>
      </tr>
    </tbody>
  </table>
</div>

                </div>
            </div>
        </div>

        <div class="hostel-event">
            <h2 class="hostel-event-title">Hostel Events</h2>
            <div class="event-container">
                <div class="event-text">
                    <h3>Annual Hostel Day</h3>
                    <p class="lh-sm">The Annual Hostel Day is a celebration of the hostel community, featuring games, cultural performances, and a grand dinner. It brings together students and staff for a fun-filled day, promoting bonding and camaraderie.</p>
                </div>
                <div class="event-image">
                    <img src="../../assets/img/hostel/boys.png" alt="Hostel Event">
                </div>
            </div>
        </div>

        <div class="rules-section">
            <h2 class="rules-title">Hostel Rules and Regulations</h2>
            <ul class="rules-list">
                <li>Students must maintain discipline within the hostel premises.</li>
                <li>Late-night entry is strictly prohibited; the hostel gate closes at 10:00 PM.</li>
                <li>Visitors are not allowed in the hostel rooms without prior permission from the hostel warden.</li>
                <li>Hostellers are expected to adhere to the mess timings and not waste food.</li>
                <li>No smoking, drinking, or gambling is allowed inside the hostel premises.</li>
                <li>Keep the hostel environment clean and use dustbins properly.</li>
            </ul>
        </div>
    </div>
    <!-- footer -->

    <?php include("../../resources/footer.php") ?>

    <!-- custom js -->
    <script src="../../assets/js/resources/script.js"></script>
</body>

</html>