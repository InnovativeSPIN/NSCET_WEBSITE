<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Helpdesk | NSCET</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/css/resources/style.css">
  <link rel="stylesheet" href="../assets/css/helpdesk/index.css">
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>

</head>
<body>
<!-- header -->
<?php include("../resources/navbar.php") ?>

<button class="raise-ticket-btn">
  <a href="/helpdesk/submit_ticket.php" class="raise-ticket-link">Raise Ticket</a>
</button>
<button class=" login-btn">
  <a href="/helpdesk/login.php" class="raise-ticket-link">login</a>
</button>
<button class="ticket_status">
  <a href="/helpdesk/check_ticket_status.php" class="raise-ticket-link">Check Ticket Status</a>
</button>
<div class="container mt-5">
  <h2 class="text-center text-uppercase" >Helpdesk உதவி மையம்</h2>
  <h2 class="text-center text-uppercase">Escalation Procedure</h2>
  <p class="text-center">மேல்முறைப்படி வழிமுறைகள்</p>
  <table class="table table-bordered text-center">
    <thead class="thead-dark">
      <tr>
        <th>Section & Level</th>
        <th>Admission</th>
        <th>Hostel</th>
        <th>Department</th>
        <th>Controller of Examinations</th>
        <th>Scholarship</th>
      </tr>
    </thead>
    <tbody>
  <tr>
    <td>Level 1</td>
    <td colspan="5">
      <h5>Nodal Officer - Help Desk</h5>
      <p><strong>Dr. C. Mathalai Sundaram</strong> (9443488999)</p>
      <p>Email ID: <a href="mailto:helpdesk@nscet.org">helpdesk@nscet.org</a></p>
      <p>Online Help Desk: <a href="http://nscet.org/helpdesk" target="_blank">nscet.org/helpdesk</a></p>
    </td>
  </tr>
  <tr>
    <td>Level 2</td>
    <td>PA to Principal</td>
    <td>Deputy Warden 1</td>
    <td>HoD</td>
    <td>Exam Cell Co-ordinator 1</td>
    <td>PA to Principal</td>
  </tr>
  <tr>
    <td>Level 3</td>
    <td>Admission Incharge</td>
    <td>Deputy Warden 2</td>
    <td>Programme Coordinator</td>
    <td>Exam Cell Co-ordinator 2,3 </td>
    <td>Manager</td>
  </tr>
  <tr>
    <td>Level 4</td>
    <td>Student Section-Incharge</td>
    <td>Junior Assistant</td>
    <td>Faculty Advisor</td>
    <td>Junior Assistant</td>
    <td>Student Section-Incharge</td>
    
  </tr>
</tbody>

  </table>
</div>




<!-- footer -->
<?php include("../resources/footer.php") ?>



<!-- scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.map"></script>
</body>
</html>