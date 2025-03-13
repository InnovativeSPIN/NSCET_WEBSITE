<?php 

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="../assets/css/resources/style.css">
<link rel="stylesheet" href="../assets/css/gallery/style.css">


<!-- custom js -->
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include('../resources/navbar.php');  ?>


<section class="hero-section" style="background: url('images/events/pongal25/pongal3.webp') no-repeat center/cover;">
  <h1 class="dept-heading text-uppercase">Gallery </h1>
</section>

<div class="grid-container">
<div class="card" onclick="openModal('card0')">
        <img src="images/events/pongal25/pongal2.webp" alt="Card 1">
        <div class="card-name">Pongal 2025</div>
    </div>
    <div class="card" onclick="openModal('card1')">
        <img src="images/events/waves24/waves2.JPG" alt="Card 1">
        <div class="card-name">waves'24</div>
    </div>
    <div class="card" onclick="openModal('card2')">
        <img src="images/events/annualday24/annual2.JPG" alt="Card 2">
        <div class="card-name">Annual-day '24</div>
    </div>
    <div class="card" onclick="openModal('card3')">
        <img src="images/events/sportsday24/sports1.JPG" alt="Card 3">
        <div class="card-name">Sports Day</div>
    </div>
    <div class="card" onclick="openModal('card4')">
        <img src="images/events/sports-achievement/sports1.jpg" alt="Card 4">
        <div class="card-name">Sports-Achievements</div>
    </div>
    <div class="card" onclick="openModal('card5')">
        <img src="images/events/aitassociation/ait association (1).jpeg" alt="Card 5">
        <div class="card-name">Nexus & AIM Association</div>
    </div>
    <div class="card" onclick="openModal('card6')">
        <img src="images/events/diwalicelebration/diwali (2).JPG" alt="Card 6">
        <div class="card-name">Diwali celebration</div>
    </div>
    <div class="card" onclick="openModal('card7')">
        <img src="images/events/freshersday/fresher (4).JPG" alt="Card 7">
        <div class="card-name">Fresher's Day</div>
    </div>
    <div class="card" onclick="openModal('card8')">
        <img src="images/events/graduationday24/graduationday (10).webp" alt="Card 8">
        <div class="card-name">Graduation Day</div>
    </div>
    <div class="card" onclick="openModal('card9')">
        <img src="images/events/kalamawards/kalam (2).jpg" alt="Card 9">
        <div class="card-name">Kalam Awards</div>
    </div>
    <div class="card" onclick="openModal('card10')">
        <img src="images/events/onamcelebration/onam (2).JPG" alt="Card 10">
        <div class="card-name">Onam Celebration</div>
    </div>
    <div class="card" onclick="openModal('card11')">
        <img src="images/events/signoutday/signout (5).JPG" alt="Card 11">
        <div class="card-name">Signout Day</div>
    </div>
    <div class="card" onclick="openModal('card12')">
        <img src="images/events/nss/nss (2).jpeg" alt="Card 12">
        <div class="card-name">NSS Tree Plantation</div>
    </div>
    <div class="card" onclick="openModal('card13')">
        <img src="images/events/civilassociation/civilass.jpeg" alt="Card 13">
        <div class="card-name">Civil Association</div>
    </div>
    <div class="card" onclick="openModal('card14')">
        <img src="images/events/ieee/ieee (2).jpeg" alt="Card 14">
        <div class="card-name">IEEE Program</div>
    </div>
</div>


<div class="modal" id="imageModal">
    <div class="slider">
        <button class="close-btn" onclick="closeModal()">Close</button>


        <div id="slider-images">
            <!-- Content will be loaded dynamically here -->
        </div>

        <div class="navigation">
            <button class="nav-btn" onclick="prevImage()">&#10094;</button>
            <button class="nav-btn" onclick="nextImage()">&#10095;</button>
        </div>
    </div>
</div>

<?php include('../resources/footer.php');?>

<!-- custom js -->
<script src="./assets/js/resources/script.js"></script>



<script>
    let currentImageIndex = 0;
    let images = [];


    function openModal(cardId) {
        document.getElementById('imageModal').classList.add('active');
        loadImages(cardId);
    }
    // Function to close the modal
    function closeModal() {
        document.getElementById('imageModal').classList.remove('active');
    }
    // Load images for the specific card
    function loadImages(cardId) {
        const sliderContainer = document.getElementById('slider-images');
        sliderContainer.innerHTML = '';
        // Define the image URLs for each card directly in the HTML
        const imageSets = {
               
            'card0': [
                "images/events/pongal25/pongal1.webp",
                "images/events/pongal25/pongal2.webp",
                "images/events/pongal25/pongal3.webp",
                "images/events/pongal25/pongal4.webp",
                "images/events/pongal25/pongal5.webp",
                "images/events/pongal25/pongal6.webp",
                "images/events/pongal25/pongal7.webp",
                "images/events/pongal25/pongal8.webp",
                "images/events/pongal25/pongal9.webp",
            ],
            'card1': [
                "images/events/waves24/waves1.JPG",
                "images/events/waves24/waves2.JPG",
                "images/events/waves24/waves3.JPG",
                "images/events/waves24/waves4.JPG",
                "images/events/waves24/waves5.JPG",
                "images/events/waves24/waves6.JPG"
            ],
            'card2': [
                "images/events/annualday24/annual1.JPG",
                "images/events/annualday24/annual2.JPG",
                "images/events/annualday24/annual3.JPG",
                "images/events/annualday24/annual4.JPG",
                "images/events/annualday24/annual5.JPG"
            ],
            'card3': [
                "images/events/sportsday24/sports1.JPG",
                "images/events/sportsday24/sports2.JPG",
                "images/events/sportsday24/sports3.JPG",
                "images/events/sportsday24/sports4.JPG",
                "images/events/sportsday24/sports5.JPG",
                "images/events/sportsday24/sports6.JPG",
                "images/events/sportsday24/sports7.JPG",
                "images/events/sportsday24/sports8.JPG"
            ],
            'card4': [
                "images/events/sports-achievement/sports1.jpg", 
                "images/events/sports-achievement/sports2.jpg",
                // "images/events/sports-achievement/sports3.jpg",
                "images/events/sports-achievement/sports4.JPG",
                "images/events/sports-achievement/sports5.JPG",
                "images/events/sports-achievement/sports6.jpg"
            ],
            'card5': [
                "images/events/aitassociation/ait association (1).jpeg",
                "images/events/aitassociation/ait association (2).jpeg",
                "images/events/aitassociation/ait association (3).jpeg",
                "images/events/aitassociation/ait association (4).jpeg",
                "images/events/aitassociation/ait association (5).jpeg",
                "images/events/aitassociation/ait association (6).jpeg"
            ],
            'card6': [
                "images/events/diwalicelebration/diwali (1).JPG",
                "images/events/diwalicelebration/diwali (2).JPG",
                "images/events/diwalicelebration/diwali (3).JPG",
                "images/events/diwalicelebration/diwali (4).JPG",
                "images/events/diwalicelebration/diwali (5).JPG",
                "images/events/diwalicelebration/diwali (6).JPG"
            ],
            'card7': [
                "images/events/freshersday/fresher (1).JPG",
                "images/events/freshersday/fresher (2).JPG",
                "images/events/freshersday/fresher (3).JPG",
                "images/events/freshersday/fresher (4).JPG"
            ],
            'card8': [
                "images/events/graduationday24/graduationday (1).webp",
                "images/events/graduationday24/graduationday (2).webp",
                "images/events/graduationday24/graduationday (4).webp",
                "images/events/graduationday24/graduationday (3).webp",
                "images/events/graduationday24/graduationday (5).webp",
                "images/events/graduationday24/graduationday (6).webp",
                "images/events/graduationday24/graduationday (7).webp",
                "images/events/graduationday24/graduationday (8).webp",
                "images/events/graduationday24/graduationday (9).webp",
                "images/events/graduationday24/graduationday (10).webp",
                "images/events/graduationday24/graduationday (11).webp",
                "images/events/graduationday24/graduationday (12).webp",
                "images/events/graduationday24/graduationday (13).webp",
                "images/events/graduationday24/graduationday (14).webp",
            ],
            'card9': [
                "images/events/kalamawards/kalam (1).jpg",
                "images/events/kalamawards/kalam (2).jpg",
                "images/events/kalamawards/kalam (3).jpg",
            ],
            'card10': [
                "images/events/onamcelebration/onam (1).JPG",
                "images/events/onamcelebration/onam (2).JPG",
                "images/events/onamcelebration/onam (3).JPG",
            ],
            'card11': [
                "images/events/signoutday/signout (1).JPG",
                "images/events/signoutday/signout (2).JPG",
                "images/events/signoutday/signout (3).JPG",
                "images/events/signoutday/signout (4).JPG",
                "images/events/signoutday/signout (5).JPG",
                "images/events/signoutday/signout (6).JPG",
                "images/events/signoutday/signout (7).JPG",
                "images/events/signoutday/signout (8).JPG",
                "images/events/signoutday/signout (9).JPG"
            ],
            'card12': [
                "images/events/nss/nss (1).jpeg",
                "images/events/nss/nss (2).jpeg",
                "images/events/nss/nss (3).jpeg",
                "images/events/nss/nss (4).jpeg",
                "images/events/nss/nss (5).jpeg",
                "images/events/nss/nss (6).jpeg"
            ],
            'card13': [
                "images/events/civilassociation/civilass.jpeg"
            ],
            'card14': [
                "images/events/ieee/ieee (1).jpeg",
                "images/events/ieee/ieee (2).jpeg",
                "images/events/ieee/ieee (3).jpeg",
                "images/events/ieee/ieee (4).jpeg",
                "images/events/ieee/ieee (5).jpeg",
                "images/events/ieee/ieee (6).jpeg",
                "images/events/ieee/ieee (7).jpeg",
                "images/events/ieee/ieee (8).jpeg",
                "images/events/ieee/ieee (9).jpeg"
            ]
        };


        images = imageSets[cardId] || [];
        images.forEach((src, index) => {
            const img = document.createElement('img');
            img.src = src;
            img.alt = `Slider Image ${index + 1}`;
            if (index === 0) img.classList.add('active');
            sliderContainer.appendChild(img);
        });

        currentImageIndex = 0;
    }

    function showImage(index) {
        const sliderImages = document.querySelectorAll('#slider-images img');
        

        sliderImages.forEach(img => img.classList.remove('active'));


        currentImageIndex = (index + images.length) % images.length;

   
        sliderImages[currentImageIndex].classList.add('active');
    }

    function prevImage() {
        showImage(currentImageIndex - 1);
    }


    function nextImage() {
        showImage(currentImageIndex + 1);
    }

    document.querySelector('.modal').addEventListener('click', (e) => {
        if (e.target === document.querySelector('.modal')) {
            closeModal();
        }
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeModal();
        }
    });
</script>

</body>
</html>