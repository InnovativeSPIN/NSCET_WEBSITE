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
  <link rel="stylesheet" href="../assets/css/resources/style.css">
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
  <style>
    /* Animated Bullet Points */
    ol.animated-list {
      list-style: none;
      padding-left: 20px;
    }
    ol.animated-list li {
      position: relative;
      padding-left: 30px;
      margin-bottom: 10px;
      animation: fadeInUp 0.5s ease forwards;
      animation-delay: calc(0.1s * var(--i));
      opacity: 0;
      text-align: justify;
      color: #343a40;
      font-size: 1rem;
      line-height: 1.6;
    }
    ol.animated-list li::before {
      content: '\f058'; /* Font Awesome check-circle */
      font-family: 'Font Awesome 5 Free';
      font-weight: 900;
      position: absolute;
      left: 0;
      color: #007bff;
      font-size: 1.1rem;
      transition: transform 0.3s ease, color 0.3s ease;
    }
    ol.animated-list li:hover::before {
      transform: scale(1.2);
      color: #0056b3;
    }
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    /* Financial Content Text Alignment */
    .financial-content p {
      text-align: justify;
    }
    /* Responsive Adjustments */
    @media (max-width: 767px) {
      .financial-content {
        padding: 15px;
      }
      ol.animated-list li {
        font-size: 0.95rem;
      }
    }
  </style>
</head>
<body style="display: flex; flex-direction: column; min-height: 100vh; margin: 0;">

<?php include('../resources/navbar.php'); ?>

<section class="mt-5 financial_officer" style="padding: 40px 0;">
  <h2 class="text-center" style="color: #343a40; font-size: clamp(22px, 2em, 28px); font-weight: 700; margin-bottom: 30px;">Financial Officer</h2>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 text-center">
        <div class="card border-0 shadow-sm" style="background-color: #fff; padding: 20px;">
          <div class="card-container">
            <img src="../assets/img/administration/vasanth.jpg" alt="Mr. D. Vasanthakumar" width="180px" style="border-radius: 50%; margin-bottom: 15px;">
            <div class="card-content">
              <p class="name" style="color: #6c757d; font-size: 1.1rem; font-weight: 500;">Mr. D. Vasanthakumar</p>
              <h3 style="color: #343a40; font-size: 1.5rem; font-weight: 600; margin-bottom: 10px;">MCA</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="financial-content" style="background-color: #f8f9fa; padding: 20px; border-radius: 8px;">
          <h4 style="color: #343a40; font-size: 1.25rem; font-weight: 600; margin-bottom: 15px;">The Financial Officer shall be responsible for:</h4>
          <p style="color: #343a40; font-size: 1rem; line-height: 1.6; margin-bottom: 15px;">
            The Financial Officer shall be responsible for:
          </p>
          <ol class="animated-list">
            <li style="--i: 1;">Administering and supervising the institution’s financial assets in accordance with applicable regulations and internal policies.</li>
            <li style="--i: 2;">Creating and tracking yearly budgets, financial reports, and spending summaries.</li>
            <li style="--i: 3;">Promoting optimal use and distribution of financial resources to advance academic programs and infrastructure projects.</li>
            <li style="--i: 4;">Establishing and maintaining financial oversight systems and audit processes to uphold accountability and openness.</li>
            <li style="--i: 5;">Coordinating with governmental organizations, funding partners, and other stakeholders for financial reporting and planning.</li>
            <li style="--i: 6;">Managing payroll, procurement, and other monetary operations in line with institutional procedures.</li>
            <li style="--i: 7;">Providing guidance to leadership on financial planning, investment opportunities, and strategies for cost efficiency.</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include('../resources/footer.php'); ?>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="../assets/js/resources/script.js"></script>
</body>
</html>