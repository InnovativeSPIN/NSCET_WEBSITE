<?php

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  <!-- custom css -->
  <link rel="stylesheet" href="../assets/css/resources/style.css">
  <link rel="stylesheet" href="../assets/css/sports/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



  <!-- custom js -->
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php

  include('../resources/navbar.php');


  ?>



<h1 class="s-h1" > About Our Sports Program</h1>
    <div class="s-about">
        <p>
            The College is committed to promote sports activities towards the all-round growth of its students. The campus has 6000 sq.ft. indoor facilities for Chess, Carom, Table Tennis, Volley Ball and Badminton and out-Door facilities for Volley Ball, Foot Ball, Tennis, Ball Badminton. We have two qualified Physical Education staff to train the students.
            Students sent for participating in the Inter-Collegiate Sports and games have won many trophies in various events. Our Volley ball team is an unbeaten State Champion and has won many tournaments in national level inter-collegiate matches.
        </p>
    </div>

    <h1 class="s-h1"     >Sports Achievements – 2023-24</h1>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>S.No</th>
                    <th class="name-column">Name of Student</th>
                    <th class="date-column">Date</th>
                    <th class="title-column">Title</th>
                    <th class="organizer-column">Program Organizer & Venue</th>
                    <th class="event-column">Type of Event</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>V. Atchayakamali - I ECE<br>K. Devadharshini - I ECE<br>S. Subitchanasri - I CIVIL</td>
                    <td>21.09.2023</td>
                    <td>Theni District-Team Marathon</td>
                    <td>Theni Solider Academy, World Peace Organization, New Bus-Stand, Theni</td>
                    <td>Marathon (Men & Women) 6th Position- Rs. 1000/-</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>L.S. Vini Subicksha - IV CSE<br>B. Aishwarya - IV CSE<br>S. Dharshini - IV CSE<br>P. Vinothini - IV CSE<br>G. Roobini - III CSE<br>K. Uva Sri - III CSE<br>M. Vinisha - III CSE<br>S. Reshma - II EEE<br>V. Atchayakamali - I ECE<br>K. Devadharshini - I ECE<br>G. Santhiya - I ECE<br>S. Subitchanasri - I CIVIL</td>
                    <td>26.09.2023 & 27.09.2023</td>
                    <td>Anna University Zone-17 Basketball (Women) Tournament</td>
                    <td>Nadar Saraswathi College of Engineering & Technology, Theni</td>
                    <td>Basketball (Women) II- Position</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>R.M.R. Rajamani - IV CSE<br>A.R.Mohammed Javid - IV CSE<br>M. ParveenKumar - IV CSE</td>
                    <td>08.10.2023</td>
                    <td>Periyakulam Happy Sunday Marathon (Men & Women)</td>
                    <td>Police Team, Municipality, Sports Association and Volunteers</td>
                    <td>Marathon & Reels Contest- 1 Minute Video III- Position</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>P. Jayashree - IV ECE<br>H. Jenifar Fathima - IV CSE<br>M. Lakshmi Priya - II ECE<br>S. Bhuvanashree - IV CSE<br>C. Loga Priya - III EEE<br>S. Sindhu - I IT</td>
                    <td>11.10.2023 & 12.10.2023</td>
                    <td>Anna University Zone-17 Chess (Women) Tournament</td>
                    <td>University College of Engineering, Dindigul</td>
                    <td>Chess (Women) III- Position</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>G. K. Phiramoth - I CSE</td>
                    <td>16.10.2023 to 24.10.2023</td>
                    <td>TCL Event- Tamil Nadu (Cycling League)</td>
                    <td>F3 Track, Kari Motors, Coimbatore</td>
                    <td>Cycling- II</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>G. K. Phiramoth - I CSE</td>
                    <td>06.11.2023</td>
                    <td>District Cycling Road Race</td>
                    <td>Melure, Madurai</td>
                    <td>Cycling- I</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>G. K. Phiramoth - I CSE</td>
                    <td>19.11.2023</td>
                    <td>State Level- Road Cycling</td>
                    <td>Rajapalayam</td>
                    <td>Cycling- I</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>V. Ragavi - IV ECE<br>A. Devishree - IV CSE<br>M. Dheiva Shri - II AI&DS</td>
                    <td>10.12.2023 & 11.12.2023</td>
                    <td>Anna University Inter Zone Boxing (Women) Tournament</td>
                    <td>Paavai College of Engineering, Namakkal</td>
                    <td>Boxing (Women) III- Position</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>K. Bala Dinesh - I CSE</td>
                    <td>16.12.2023 & 17.12.2023</td>
                    <td>Anna University Inter Zone Judo (Men) Tournament</td>
                    <td>Paavai College of Engineering, Namakkal</td>
                    <td>Judo (Men) III- Position</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>L.S. Vini Subicksha - IV CSE</td>
                    <td>07.12.2023 & 08.12.2023</td>
                    <td>Anna University Zone-17 Athletic Meet (Men & Women)</td>
                    <td>PSNA College of Engineering & Technology, Dindigul</td>
                    <td>Pole Vault- I</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>L.S. Vini Subicksha - IV CSE</td>
                    <td>07.12.2023 & 08.12.2023</td>
                    <td>Anna University Zone-17 Athletic Meet (Men & Women)</td>
                    <td>PSNA College of Engineering & Technology, Dindigul</td>
                    <td>Heptathlon- III</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>S. Reshma - II EEE</td>
                    <td>07.12.2023 & 08.12.2023</td>
                    <td>Anna University Zone-17 Athletic Meet (Men & Women)</td>
                    <td>PSNA College of Engineering & Technology, Dindigul</td>
                    <td>Hammer Throw- I</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>S. Reshma - II EEE</td>
                    <td>07.12.2023 & 08.12.2023</td>
                    <td>Anna University Zone-17 Athletic Meet (Men & Women)</td>
                    <td>PSNA College of Engineering & Technology, Dindigul</td>
                    <td>Shot-put- II</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>S. Bala Mahalakshmi - II AI&DS</td>
                    <td>07.12.2023 & 08.12.2023</td>
                    <td>Anna University Zone-17 Athletic Meet (Men & Women)</td>
                    <td>PSNA College of Engineering & Technology, Dindigul</td>
                    <td>5000 mts Walk- I</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>S. Bala Mahalakshmi - II AI&DS</td>
                    <td>07.12.2023 & 08.12.2023</td>
                    <td>Anna University Zone-17 Athletic Meet (Men & Women)</td>
                    <td>PSNA College of Engineering & Technology, Dindigul</td>
                    <td>400 mts Hurdles- I</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>K. Devdharshini - I ECE</td>
                    <td>07.12.2023 & 08.12.2023</td>
                    <td>Anna University Zone-17 Athletic Meet (Men & Women)</td>
                    <td>PSNA College of Engineering & Technology, Dindigul</td>
                    <td>5000 mts Run- I</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>D. Christina - II ECE</td>
                    <td>07.12.2023 & 08.12.2023</td>
                    <td>Anna University Zone-17 Athletic Meet (Men & Women)</td>
                    <td>PSNA College of Engineering & Technology, Dindigul</td>
                    <td>10000 mts Run- II</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>C. Srinidhi - I ECE</td>
                    <td>07.12.2023 & 08.12.2023</td>
                    <td>Anna University Zone-17 Athletic Meet (Men & Women)</td>
                    <td>PSNA College of Engineering & Technology, Dindigul</td>
                    <td>Hammer Throw- II</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>G. Roobini - III CSE</td>
                    <td>07.12.2023 & 08.12.2023</td>
                    <td>Anna University Zone-17 Athletic Meet (Men & Women)</td>
                    <td>PSNA College of Engineering & Technology, Dindigul</td>
                    <td>Long Jump- II</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>G. Roobini - III CSE</td>
                    <td>07.12.2023 & 08.12.2023</td>
                    <td>Anna University Zone-17 Athletic Meet (Men & Women)</td>
                    <td>PSNA College of Engineering & Technology, Dindigul</td>
                    <td>Triple Jump- II</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>S. Nithiya Shree - I CIVIL</td>
                    <td>07.12.2023 & 08.12.2023</td>
                    <td>Anna University Zone-17 Athletic Meet (Men & Women)</td>
                    <td>PSNA College of Engineering & Technology, Dindigul</td>
                    <td>Javelin Throw- III</td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>V. Atchaya Kamali - I ECE</td>
                    <td>07.12.2023 & 08.12.2023</td>
                    <td>Anna University Zone-17 Athletic Meet (Men & Women)</td>
                    <td>PSNA College of Engineering & Technology, Dindigul</td>
                    <td>Heptathlon- IV</td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>N. Shafana Irfath - II AI&DS</td>
                    <td>07.12.2023 & 08.12.2023</td>
                    <td>Anna University Zone-17 Athletic Meet (Men & Women)</td>
                    <td>PSNA College of Engineering & Technology, Dindigul</td>
                    <td>100 mts Hurdles- III</td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>N. Shafana Irfath - II AI&DS</td>
                    <td>07.12.2023 & 08.12.2023</td>
                    <td>Anna University Zone-17 Athletic Meet (Men & Women)</td>
                    <td>PSNA College of Engineering & Technology, Dindigul</td>
                    <td>400 mts Hurdles- III</td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>A. Mohamed Nowfil - I EEE</td>
                    <td>07.12.2023 & 08.12.2023</td>
                    <td>Anna University Zone-17 Athletic Meet (Men & Women)</td>
                    <td>PSNA College of Engineering & Technology, Dindigul</td>
                    <td>Half Marathon- I</td>
                </tr>
                <tr>
                    <td>26</td>
                    <td>P. Devendra Kumar - I AI&DS</td>
                    <td>07.12.2023 & 08.12.2023</td>
                    <td>Anna University Zone-17 Athletic Meet (Men & Women)</td>
                    <td>PSNA College of Engineering & Technology, Dindigul</td>
                    <td>Shot-put- III</td>
                </tr>
                <tr>
                    <td>27</td>
                    <td>D. Dhanush - II CSE</td>
                    <td>07.12.2023 & 08.12.2023</td>
                    <td>Anna University Zone-17 Athletic Meet (Men & Women)</td>
                    <td>PSNA College of Engineering & Technology, Dindigul</td>
                    <td>Decathlon- II</td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>M. Hari Muthu Krishnan - III MECH</td>
                    <td>07.12.2023 & 08.12.2023</td>
                    <td>Anna University Zone-17 Athletic Meet (Men & Women)</td>
                    <td>PSNA College of Engineering & Technology, Dindigul</td>
                    <td>Decathlon- III</td>
                </tr>
                <tr>
                    <td>29</td>
                    <td>M. Rajesh Kumar - I MECH</td>
                    <td>07.12.2023 & 08.12.2023</td>
                    <td>Anna University Zone-17 Athletic Meet (Men & Women)</td>
                    <td>PSNA College of Engineering & Technology, Dindigul</td>
                    <td>Javelin Throw- III</td>
                </tr>
                <tr>
                    <td>30</td>
                    <td>S. Reshma - II EEE<br>V. Atchaya Kamali - I ECE</td>
                    <td>06.01.2024 to 15.01.2024</td>
                    <td>South Zone Inter University Handball (Women) Tournament</td>
                    <td>Periyar University, Salem</td>
                    <td>Handball (Women) Participated</td>
                </tr>
                <tr>
                    <td>31</td>
                    <td>G. K. Phiramoth - I CSE</td>
                    <td>09.01.2024 to 13.01.2024</td>
                    <td>National- Road Cycling (Selection)</td>
                    <td>Bijapur</td>
                    <td>Cycling- Participated</td>
                </tr>
                <tr>
                    <td>32</td>
                    <td>S. Reshma - II EEE<br>V. Atchaya Kamali - I ECE<br>K. Devadharshini - I ECE<br>G. Santhiya - I ECE<br>S. Subitchana Sri - I CIVIL<br>L. M. Jeya Priya - I ECE<br>Pooja - I ECE<br>K. Uva Sri - III CSE<br>Punitha - III CSE<br>P. Vinothini - IV CSE<br>G. Roobini - III CSE<br>S. Bala Mahalakshmi - II AI&DS</td>
                    <td>20.01.2024 & 21.01.2024</td>
                    <td>District Level- Basketball (Women) Tournament</td>
                    <td>Silver Jubilee Sports Club, Periyakulam</td>
                    <td>Basketball (Women) II- Position</td>
                </tr>
                <tr>
                    <td>33</td>
                    <td>G. K. Phiramoth - I CSE</td>
                    <td>27.01.2024 & 28.01.2024</td>
                    <td>Khelo India Youth Games Road Cycling (National)</td>
                    <td>ECR Mahabalipuram-Kovalam</td>
                    <td>Cycling- Participated</td>
                </tr>
                <tr>
                    <td>34</td>
                    <td>G. K. Phiramoth - I CSE</td>
                    <td>05.03.2024 to 08.03.2024</td>
                    <td>All India Inter University Cycling Track (M & W) Tournament</td>
                    <td>Guru Nanak Dev University, Amritsar</td>
                    <td>Cycling- Participated</td>
                </tr>
            </tbody>
        </table>
    </div>



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