<?php 

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>infosys springboard | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="../assets/css/resources/style.css">

<style>

.edc-main {
    max-width: 1200px;
    margin: 40px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08);
}

/* Header Section */
.edc-main header {
    text-align: center;
    margin-bottom: 30px;
}

.edc-main header h1 {
    font-size: 32px;
    color: #1292e2;
    margin: 10px 0;
}

.edc-main header h2 {
    font-size: 20px;
    color: #1292e2;
}

/* Figure Section */
.partnership-image {
    width: 100%;
    max-width: 800px;
    display: block;
    margin: 0 auto;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

figure {
    text-align: center;
    margin-bottom: 30px;
}

figcaption {
    margin-top: 10px;
    font-style: italic;
    color: #1292e2;
}

/* Overview Section */
.overview h2,
.bottom-images h2 {
    font-size: 24px;
    color: #1292e2;
    margin-bottom: 10px;
    border-left: 5px solid #1292e2;
    padding-left: 10px;
}

.overview p {
    font-size: 16px;
    line-height: 1.6;
    color: #444;
    text-align: justify;
    margin-bottom: 30px;
}

.bottom-images {
    margin-top: 20px;
}

.image-gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.bottom-image {
    width: 100%;
    max-width: 350px;
    border-radius: 10px;
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
    object-fit: cover;
    transition: transform 0.3s ease;
}

.bottom-image:hover {
    transform: scale(1.03);
}
.main-image{
    width: 280px;
}

@media (max-width: 768px) {
    .edc-main {
        margin: 20px;
        padding: 15px;
    }

    .image-gallery {
        flex-direction: column;
        align-items: center;
    }

    .bottom-image {
        max-width: 90%;
    }
}
</style>
<!-- custom js -->
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include('../resources/navbar.php');?>

<div class="edc-main">
    <header>
        <h1>NSCET × Infosys Springboard Partnership</h1>
        <h2>Nadar Saraswathi College of Engineering and Technology</h2>
    </header>

    <figure>
        <a href="https://infyspringboard.onwingspan.com/"><img src="/e-learning/files/info.png" alt="NSCET and Infosys Springboard Partnership" class="partnership-image main-image"> </a>
        <figcaption>NSCET collaborates with Infosys Springboard to enhance digital skills</figcaption>
    </figure>

    <section class="overview">
        <h2>Partnership Overview</h2>
        <p>
            To implement the education vision of the Government of India, Nadar Saraswathi College of Engineering and Technology (NSCET) aims to integrate state-of-the-art skill development subjects into its engineering curriculum in collaboration with Infosys Springboard. It is essential for NSCET’s faculty to be proficient in the latest technologies to effectively train students in industry-relevant skills. Infosys has launched Infosys Springboard, which offers a rich repository of over 12,000 courses. In this context, NSCET leverages the Memorandum of Understanding (MoU) between Anna University and Infosys Springboard to utilize the Infosys Springboard program for developing the digital skills of its faculty and students.
        </p>
    </section>

    <!-- Bottom images section -->
    <section class="bottom-images">
        <h2>Glimpses of the Partnership Activities</h2>
        <div class="image-gallery">
            <img src="/e-learning/files/IMG1.jpg" alt="Workshop session with Infosys" class="bottom-image">
            <img src="/e-learning/files/IMG2.jpeg" alt="Student training event" class="bottom-image">
        </div>
    </section>
</div>




<?php include('../resources/footer.php'); ?>

<!-- custom js -->
<script src="./assets/js/resources/script.js"></script>
</body>
</html>