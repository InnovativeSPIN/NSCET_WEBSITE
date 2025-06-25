<?php
include('../resources/conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports | <?php echo $colle_Name; ?></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/resources/style.css">
    <link rel="stylesheet" href="../assets/css/sport/style.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>

    <style>
          
       .achievements h1, .achievements h2 {
            color: var(--dark-color);
            text-align: center;
        } .achievements {
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
        }

        .achievements table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .achievements th, .achievements td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .achievements th {
            background-color: var(--primary-color);
            color: var(--text-color);
        }

        .achievements tr:nth-child(even) {
            background-color: var(--light-primary);
        }

        .achievements tr:hover {
            background-color: rgba(18, 146, 226, 0.1);
        }

        .achievements .highlight {
            color: var(--secondary-color);
            font-weight: bold;
        }

        .achievements .multi-row {
            vertical-align: top;
        }
    </style>
</head>
<body>
    <?php include('../resources/navbar.php'); ?>

    <div class="main">
    <div class="sports">
        <!-- Hero Section -->
        <section class="hero-section" style="background: url('../assets/img/sports/sports.JPG') no-repeat center/cover;">
            <h1 class="dept-heading">Sports</h1>
        </section>

        <!-- Intro Paragraph -->
        <p class="sports-intro">
            The College is committed to promote sports activities towards the all-round growth of its students. The campus has 6000 sq.ft. indoor facilities for Chess, Carom, Table Tennis, Volley Ball and Badminton and out-Door facilities for Volley Ball, Foot Ball, Tennis, Ball Badminton. We have two qualified Physical Education staff to train the students. Students sent for participating in the Inter-Collegiate Sports and games have won many trophies in various events. Our Volley ball team is an unbeaten State Champion and has won many tournaments in national level inter-collegiate matches.
        </p>

      <!-- Sports Incharge Section -->
<h2 class="section-heading">Sports Incharge</h2>
<div class="incharge-container">
    <div class="incharge-item">
        <img src="../assets/img/sports/sundararajan.jpg" alt="Sundararajan" class="incharge-img">
        <h3 class="incharge-name">Mr. K. Sundararajan</h3>
        <p class="incharge-details">M.A., M.P.Ed., M.Phil., PG.YED., (Ph.D)., <br>HOD & Physical Director</p>
    </div>
    <div class="incharge-item">
        <img src="../assets/img/sports/Nethaji.jpg" alt="Selva Kumar" class="incharge-img">
        <h3 class="incharge-name">Mr.Nethaji</h3>
        <p class="incharge-details">B.Sc.,M.P.Ed.,<br>Physical Director</p>
    </div>
    <div class="incharge-item">
        <img src="../assets/img/sports/Malaini.jpg" alt="Malini" class="incharge-img">
        <h3 class="incharge-name">Mrs. R. Malini</h3>
        <p class="incharge-details">B.P.Ed., M.P.Ed., P.G.D.Y., <br>Physical Directress</p>
    </div>
</div>

        <!-- Sports List Section -->
        <h2 class="section-heading">Sports in Our College</h2>
        <div class="sports-container">
            <div class="sport-item">
                <h4 class="sport-title">Basketball</h4>
                <img src="../assets/img/sports/Basketball.png" alt="Basketball" class="sport-img">
            </div>
            <div class="sport-item">
                <h4 class="sport-title">Volleyball</h4>
                <img src="../assets/img/sports/vally.png" alt="Volleyball" class="sport-img">
            </div>
            <div class="sport-item">
                <h4 class="sport-title">Badminton</h4>
                <img src="../assets/img/sports/badmiton.png" alt="Badminton" class="sport-img">
            </div>
            <div class="sport-item">
                <h4 class="sport-title">Kabaddi</h4>
                <img src="../assets/img/sports/kabadi.png" alt="Kabaddi" class="sport-img">
            </div>
            <div class="sport-item">
                <h4 class="sport-title">Table Tennis</h4>
                <img src="../assets/img/sports/table.png" alt="Kho Kho" class="sport-img">
            </div>
            <div class="sport-item">
                <h4 class="sport-title">Kho Kho</h4>
                <img src="../assets/img/sports/khokho.png" alt="Kho Kho" class="sport-img">
            </div>
            <div class="sport-item">
                <h4 class="sport-title">Handball</h4>
                <img src="../assets/img/sports/handball.png" alt="Kho Kho" class="sport-img">
            </div>
        </div>
    </div>


    <div class="achievements mt-5">
        <h2 class="text-uppercase">
          Student achievements 2024-2025
        </h2>
<table>
        <tr>
            <th>S.No</th>
            <th>Date</th>
            <th>Name of Student</th>
            <th>Title</th>
            <th>Program Organizer & Venue</th>
        </tr>
        <tr>
            <td>1</td>
            <td>23.02.2025</td>
            <td>O. Dinesh Babu I – AI&DS</td>
            <td>OSCAR World Record – “The longest duration of performing silambam multiweapons event one hour”</td>
            <td>Velmurga Veerakalai Koedam</td>
        </tr>
        <tr>
            <td>2</td>
            <td>26.01.2025</td>
            <td>G. K. Phiramoth – II CSE</td>
            <td>Drug Awareness Cycle Rally 2025 – Participated</td>
            <td>JCI Theni Honey Bee</td>
        </tr>
        <tr>
            <td>3</td>
            <td>27.01.2025 & 28.01.2025</td>
            <td class="multi-row">
                K. Uvasri – IV CSE<br>
                S. Reshma – III EEE<br>
                V. Atchaya Kamali – II ECE<br>
                K. Devadharshini – II ECE<br>
                G. Santhiya – II ECE<br>
                S. Subitchana Sri – II CIVIL<br>
                V. Yuva Priya – II CSE<br>
                S. Devadharshini – I EEE
            </td>
            <td>Anna University Inter Zone Handball Women Tournament – Participated</td>
            <td>PSNA College of Engineering and Technology, Dindigul</td>
        </tr>
        <tr>
            <td>4</td>
            <td>07.12.2024 to 10.12.2024</td>
            <td>G. K. Phiramoth – II CSE</td>
            <td>Tamil Nadu Team – CFI Cycling National Championships – Participated</td>
            <td>Odisha Cycling Association, Odisha</td>
        </tr>
        <tr>
            <td>5</td>
            <td>20.12.2024 to 02.01.2025</td>
            <td>M. Guru Prasath – II EEE</td>
            <td>All India Inter University Boxing Men & Women Tournament – Participated</td>
            <td>Guru Kashi University, Bathinda, Punjab</td>
        </tr>
        <tr>
            <td>6</td>
            <td>21.12.2024 & 22.12.2024</td>
            <td class="multi-row">
                S. Bharathwaj – IV EEE<br>
                O. Dinesh Babu – I AI&DS
            </td>
            <td>Anna University Inter Zone Power Lifting Men & Women Tournament – Participated</td>
            <td>Paavai College of Engineering and Technology, Namakkal</td>
        </tr>
        <tr>
            <td>7</td>
            <td>06.11.2024 & 07.11.2024</td>
            <td class="multi-row">
                A. Mohammed Nowfil – II EEE<br>
                P. Yuvaraj – II EEE<br>
                K. Ganesh Kumar – II EEE<br>
                T. Aravind – III EEE<br>
                G. Yogesh – II MECH<br>
                M. Iyyanathan – II CIVIL
            </td>
            <td>Anna University Inter Zone Cross Country Men Tournament – Participated</td>
            <td>University College of Engineering, Trichy</td>
        </tr>
        <tr>
            <td>8</td>
            <td>06.11.2024 & 07.11.2024</td>
            <td class="multi-row">
                K. Devadharshini – II ECE<br>
                D. Christina – II ECE
            </td>
            <td>Anna University Inter Zone Cross Country Women Tournament – Participated</td>
            <td>University College of Engineering, Trichy</td>
        </tr>
        <tr>
            <td>9</td>
            <td>07.11.2024 & 08.11.2024</td>
            <td class="multi-row">
                B. Thiyagarajan – III EEE<br>
                O. Dinesh Babu – I AI&DS
            </td>
            <td>Anna University Inter Zone Weight Lifting Men Tournament – Participated</td>
            <td>Paavai College of Engineering, Namakkal</td>
        </tr>
        <tr>
            <td>10</td>
            <td>08.11.2024 & 09.11.2024</td>
            <td class="multi-row">
                S. Anjali – II AI&DS<br>
                K. Dharanisri – I EEE<br>
                G. Santhiya – II ECE<br>
                R. Mohanapriya – I CIVIL<br>
                S. Anusri – I EEE<br>
                V. Sri Vaishnavi – I CIVIL<br>
                P. Pooja – II ECE
            </td>
            <td>Anna University Zone-17 Ball Badminton Women Tournament – <span class="highlight">III Position</span></td>
            <td>Kamaraj College of Engineering & Technology, Virudhunagar</td>
        </tr>
        <tr>
            <td>11</td>
            <td>23.11.2024 & 24.11.2024</td>
            <td class="multi-row">
                <strong>MEN:</strong><br>
                1. A. Mohammed Nowfil – II EEE (<span class="highlight">Half Marathon – I Position, 5000m – I Position</span>)<br>
                2. K. Ajay Prasath – II AI&DS (<span class="highlight">High Jump – II Position</span>)<br>
                3. P. Yuvaraj – II EEE (<span class="highlight">10000m – III Position</span>)<br>
                4. P. Devendra Kumar – II AI&DS (<span class="highlight">Shot-Put – III Position</span>)<br>
                5. B. Sabareeshwaran – IV ECE (<span class="highlight">Pole Vault – III Position</span>)<br>
                <strong>WOMEN:</strong><br>
                1. K. Devadharshini – II ECE (<span class="highlight">5000m – I Position</span>)<br>
                2. S. Reshma – III EEE (<span class="highlight">Shot-Put – II Position, Hammer – III Position</span>)<br>
                3. S. Nithiya Shree – II Civil (<span class="highlight">Javelin – III Position</span>)
            </td>
            <td>Anna University Zone-17 Athletics Men & Women Tournament</td>
            <td>PSNA College of Engineering and Technology, Dindigul</td>
        </tr>
        <tr>
            <td>12</td>
            <td>23.11.2024 & 24.11.2024</td>
            <td>M. Guru Prasad – II EEE</td>
            <td>Anna University Inter Zone Boxing Men Tournament – <span class="highlight">I Position</span></td>
            <td>Govt. College of Engineering, Bargur</td>
        </tr>
        <tr>
            <td>13</td>
            <td>30.11.2024 to 02.12.2024</td>
            <td class="multi-row">
                1. A. Mohammed Nowfil – II EEE (<span class="highlight">Half Marathon – VIII Position</span>)<br>
                2. S. Reshma – III EEE (<span class="highlight">Shot-Put – VII Position</span>)<br>
                3. K. Devadharshini – II ECE (5000m – Participated)<br>
                4. S. Nithiya Shree – II Civil (Javelin – Participated)
            </td>
            <td>Anna University Inter Zone Athletic Men & Women Tournament – Participated</td>
            <td>KSR College of Technology, Thiruchengode</td>
        </tr>
        <tr>
            <td>14</td>
            <td>07.10.2024 & 08.10.2024</td>
            <td class="multi-row">
                M. Gobika – IV EEE<br>
                E. Abirami – IV CIVIL<br>
                S. Reshma – III EEE<br>
                S. Susmitha – III CSE<br>
                B. Uma Maheshwari – III CSE<br>
                L.M. Jeya Priya – II EEE<br>
                V. S. Shahana – I EEE<br>
                S. Devadharshini – I EEE<br>
                M. Vani Sri – II IT<br>
                M. Dheiva Shree – III AI&DS
            </td>
            <td>Anna University Zone-17 Volleyball Women Tournament – <span class="highlight">IV Position</span></td>
            <td>AAA College of Engineering & Technology, Sivakasi</td>
        </tr>
        <tr>
            <td>15</td>
            <td>08.10.2024 & 09.10.2024</td>
            <td class="multi-row">
                M. Logesh – IV CSE<br>
                M. Iyyanathan – II CIV CIVIL<br>
                K. Ajay Prasath – II AI&DS<br>
                J. Santhosh – II EEE<br>
                S. Naveen Prasath – III ECE<br>
                M. Sanjay Ram Kumar – I MECH<br>
                V. Siva Pandi – III CSE<br>
                M. Bharathi – I ECE<br>
                M. Ramachandran – I AI&DS<br>
                A. Surya Prakash – III IT<br>
                M. Gokul – II AI&DS<br>
                K. Ganesh Kumar – III EEE<br>
                R. Mouna Rahul – IV MECH
            </td>
            <td>Anna University Zone-17 Volleyball MenTournament – Participated</td>
            <td>Christian College of Engineering & Technology, Ottanchatram</td>
        </tr>
        <tr>
            <td>16</td>
            <td>09.10.2024 & 10.10.2024</td>
            <td class="multi-row">
                S. Ragul – II CSE<br>
                S. Vishal – I MECH
            </td>
            <td>Anna University Inter Zone Taekwondo Men Tournament – Participated</td>
            <td>Stella Mary’s College of Engineering, Nagecoil</td>
        </tr>
        <tr>
            <td>17</td>
            <td>15.10.2024 & 16.10.2024</td>
            <td class="multi-row">
                M. Mukesh Kanna – II CSE<br>
                A. Kavin Prashad – II CSE<br>
                B. Abisheck – IV CSE<br>
                J. Yokesh – II AI&DS<br>
                G. Bharathwaj – I MECH<br>
                S. Sudharsan – I MECH
            </td>
            <td>Anna University Zone-17 Chess Men Tournament – <span class="highlight">IV Position</span></td>
            <td>University College of Engineering, Dindigul</td>
        </tr>
        <tr>
            <td>18</td>
            <td>15.10.2024 & 16.10.2024</td>
            <td class="multi-row">
                V.S. Thirunika – I AI&DS<br>
                A. Abarna – III CSE<br>
                M. Priyadharshini – I IT<br>
                A. Irfana Begam – I CSE<br>
                R. Aswanthika – I ECE<br>
                Lakshmi Priya – III ECE
            </td>
            <td>Anna University Zone-17 Chess Women Tournament – Participated</td>
            <td>University College of Engineering, Dindigul</td>
        </tr>
        <tr>
            <td>19</td>
            <td>15.10.2024 & 16.10.2024</td>
            <td class="multi-row">
                K. Akshaya Shri – II CSE<br>
                S. Harina – II EEE<br>
                A. Praveena – I AI&DS<br>
                M. Dheiva Shri – III AI&DS
            </td>
            <td>Anna University Zone-17 Table Tennis Women Tournament – Participated</td>
            <td>University College of Engineering, Dindigul</td>
        </tr>
        <tr>
            <td>20</td>
            <td>19.10.2024 & 20.10.2024</td>
            <td class="multi-row">
                J. Vijay – IV MECH<br>
                M. Sriram – IV MECH<br>
                K. Harimuthu Krishnan – IV MECH<br>
                P. Yuvaraj – II EEE<br>
                C. Arun Pandi – IV ECE<br>
                V. Suryanarayanan – IVstru>IV MECH<br>
                P. Lokesh Kumar – IV ECE<br>
                S. Bala – II CIVIL<br>
                A. Yugesh Kumar – III CSE<br>
                K. Maruthupandi – I EEE<br>
                P. Siddharthan – I CIVIL<br>
                J. Ajay – II CIVIL
            </td>
            <td>Anna University Zone-17 Kabbadi Men Tournament – Participated</td>
            <td>Christian College of Engineering & Technology, Ottanchatram</td>
        </tr>
        <tr>
            <td>21</td>
            <td>08.09.2024</td>
            <td>G. K. Phiramoth – II CSE</td>
            <td>District Cycling Championship – <span class="highlight">II Position</span></td>
            <td>State Cycling Association, Madurai</td>
        </tr>
        <tr>
            <td>22</td>
            <td>18.09.2024 & 19.09.2024</td>
            <td class="multi-row">
                K. Uvasri – IV CSE<br>
                S. Punitha – IV CSE<br>
                G. Roobini – IV CSE<br>
                S. Reshma – III EEE<br>
                V. Atchaya Kamali – II ECE<br>
                K. Devadharshini – II ECE<br>
                G. Santhiya – II ECE<br>
                S. Subitchana Sri – II CIVIL<br>
                P. Pooja – II ECE<br>
                S. Nandhini – III IT
            </td>
            <td>Anna University Zone-17 Basketball Women Tournament – <span class="highlight">II Position</span></td>
            <td>Nadar Saraswathi College of Engineering & Technology, Theni</td>
        </tr>
       
    </table>

    <h2 class="text-uppercase">Staff Achievements 2024-25</h2>
    <table>
        <tr>
            <th>S.No</th>
            <th>Date</th>
            <th>Name of Staff</th>
            <th>Title</th>
            <th>Program Organizer & Venue</th>
        </tr>
        <tr>
            <td>1</td>
            <td>27.01.2025 & 28.01.2025</td>
            <td>Mrs. R. Malini</td>
            <td>Anna University Inter Zone Handball Women Tournament Selection Committee Member</td>
            <td>PSNA College of Engineering and Technology, Dindigul</td>
        </tr>
        <tr>
            <td>2</td>
            <td>20.12.2024 to 02.01.2025</td>
            <td>Mr. K. Sundararajan</td>
            <td>Team Manager – All India Inter University Boxing Men & Women Tournament</td>
            <td>Anna University</td>
        </tr>
        <tr>
            <td>3</td>
            <td>14.12.2024 & 15.12.2024</td>
            <td>Mrs. R. Malini</td>
            <td>Selection Committee Member – Inter Zone Kho-Kho Men & Women Tournament</td>
            <td>Anna University</td>
        </tr>
        <tr>
            <td>4</td>
            <td>06.11.2024</td>
            <td>Mr. K. Sundararajan</td>
            <td>Selection Committee Member – Inter Zone Cross Country Men & Women Tournament</td>
            <td>Anna University</td>
        </tr>
        <tr>
            <td>5</td>
            <td>30.11.2024 & 01.12.2024</td>
            <td>Mrs. R. Malini</td>
            <td>Zone-17 Team Manager – Inter Zone Athletic Men & Women Tournament</td>
            <td>Anna University</td>
        </tr>
        <tr>
            <td>6</td>
            <td>07.10.2024 & 08.10.2024</td>
            <td>Mr. K. Sundararajan</td>
            <td>Zone-17 Volleyball Women Tournament – Selection Committee Member</td>
            <td>Anna University, AAA College of Engineering & Technology, Sivakasi</td>
        </tr>
        <tr>
            <td>7</td>
            <td>15.10.2024 & 16.10.2024</td>
            <td>Mr. K. Sundararajan</td>
            <td>Zone-17 Chess Men & Women Tournament – Selection Committee Member</td>
            <td>Anna University, University College of Engineering, Dindigul</td>
        </tr>
        <tr>
            <td>8</td>
            <td>18.09.2024 & 19.09.2024</td>
            <td>Mr. K. Sundararajan</td>
            <td>Basketball Women Tournament – Selection Committee Member</td>
            <td>Anna University Zone-17, Nadar Saraswathi College of Engineering & Technology, Theni</td>
        </tr>
        <tr>
            <td>9</td>
            <td>26.09.2024 & 27.09.2024</td>
            <td>Mrs. R. Malini</td>
            <td>Badminton Women Tournament – Selection Committee Member</td>
            <td>Anna University Zone-17, Kamaraj College of Engineering & Technology, Virudhunagar</td>
        </tr>
        <tr>
            <td>10</td>
            <td>30.09.2024 & 01.10.2024</td>
            <td>Mr. K. Nethaji</td>
            <td>Basketball Men Tournament – Selection Committee Member</td>
            <td>Anna University Zone-17, Chettinad College of Engineering & Technology, Karur</td>
        </tr>
    </table>
    </div>
</div>

    <?php include('../resources/footer.php'); ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../assets/js/resources/script.js"></script>
</body>
</html>