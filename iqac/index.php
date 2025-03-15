

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IQAC | NSCET</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  <!-- custom css -->
  <link rel="stylesheet" href="../assets/css/resources/style.css">
  <link rel="stylesheet" href="../assets/css/iqac/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



  <!-- custom js -->
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php

  include('../resources/navbar.php');


  ?>




<div class="main">
    <h2 class="main_head">Internal Quality Assurance Cell (IQAC)</h2>

    <h3>About IQAC</h3>
    <p>
      The IQAC of the college was established on 2nd July 2017 after a year’s time of inspection of the college. 
      The prime task of the IQAC is to develop a system for conscious, consistent and catalytic improvement in 
      the overall performance of the Institution. The cell precisely plans the quality initiatives of the institution 
      by ensuring the quality culture, institutionalizing and internalizing quality parameters in adherence to the 
      norms of the National Assessment and Accreditation Council of India. The IQAC reviews the academic and administrative 
      quality processes of the institution periodically and takes necessary action for the continual improvement of 
      the services offered by the institution.
    </p>

    <h3>IQAC Committee Members</h3>
<table class="table iqac-table">
  <tr>
    <th>Position</th>
    <th>Name</th>
  </tr>
  <tr>
    <td>Chairperson</td>
    <td>Dr. C. Mathalai Sundaram, Principal</td>
  </tr>
  <tr>
    <td>Coordinator of IQAC</td>
    <td>Mr. R. Udhaya Kumar, AP /CSE/ Convenor</td>
  </tr>
  <tr>
    <td></td>
    <td>Dr.N.David Mathan, ASP /CHE/ Convenor</td>
  </tr>
  <tr>
    <td>Teachers to represent all levels</td>
    <td>
      Mr. N. Nagarathinam, HoD /SE <br>
      Dr. J. Mathalairaj, HoD /CSE <br>
      Dr. B. Radha Krishnan, HOD/MECH <br>
      Mr. A. VembathuRajesh, HOD /MFE <br>
      Dr. E. Anantha Krishnan, HOD/CIVIL <br>
      Dr. R. Athilingam, HOD /EEE <br>
      Dr. T. Venishkumar, HOD / ECE <br>
      Mr. L.S. Vignesh, HOD/AD <br>
      Dr. M. Sathya, VP, HOD/IT <br>
      Mr. C. Prathap, HoD /S&H <br>
      Dr. C. Chithra, Prof - Coordinator/ S&H
    </td>
  </tr>
  <tr>
    <td>One member from the Management</td>
    <td>
      Mr. A. Rajkumar, Secretary <br>
      Mr. A.S.R. Maheshwaran, Secretary <br>
      Er. S. Naveen Ram, Joint Secretary
    </td>
  </tr>
  <tr>
    <td>Senior Administrative Officer</td>
    <td>Dr. N. Mathavan, VP, HOD/Admin</td>
  </tr>
  <tr>
    <td>Nominee from local society</td>
    <td>Mr. T. Rajmohan, President</td>
  </tr>
  <tr>
    <td>Nominee from student</td>
    <td>
      Mr. N. Sivabalan - ECE <br>
      Ms. R. Prathiksha - Civil
    </td>
  </tr>
  <tr>
    <td>Nominee from Alumni</td>
    <td>
      Mr. A. Vennimalai Rajan, AP/Mech <br>
      Ms. M. Kanimozhi, AP/Civil
    </td>
  </tr>
  <tr>
    <td>Nominee from Industrialists</td>
    <td>Dr. S. Karthikeyan, Divisional Manager, Ashok Leyland Technical Centre, Chennai</td>
  </tr>
  <tr>
    <td>Nominee from Employer</td>
    <td>Mr. T. Lakshmi Chandrakanth, Founder Systima NX</td>
  </tr>
</table>


    <h2>IQAC Meeting Records</h2>
    <div class="meeting-links">
      <a href="/assets/pdf/iqac/18.pdf">2018</a>
      <a href="/assets/pdf/iqac/19.pdf">2019</a>
      <a href="/assets/pdf/iqac/20.pdf">2020</a>
      <a href="/assets/pdf/iqac/21.pdf">2021</a>
      <a href="/assets/pdf/iqac/22.pdf">2022</a>
    </div>
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