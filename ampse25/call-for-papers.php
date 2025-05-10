
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>call-for-papers</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <!-- style -->
   <link rel="stylesheet" href="./static/style.css">
   <link rel="stylesheet" href="./static/resource.css">

   <style>
    /* General Structure */
.g-wrapper {
  padding: 20px;
  font-family: Arial, sans-serif;
  color: #333;
}

.page-header h2 {
  color: #339966;
  font-size: 26px;
  text-align: center;
  margin-bottom: 20px;
}

.content-body {
  max-width: 800px;
  margin: 0 auto;
}

.content-body p {
  text-align: justify;
  line-height: 1.6;
}

.intro {
  font-size: 18px;
  color: #000;
  margin-bottom: 20px;
}

.instruction {
  font-size: 18px;
  font-family: Tahoma, Arial, sans-serif;
  margin-bottom: 10px;
}

.instruction a {
  color: #993300;
  font-weight: bold;
  text-decoration: none;
}

.instruction a:hover {
  text-decoration: underline;
}

.topics-list {
  list-style-type: circle;
  padding-left: 20px;
}

.topics-list li {
  font-size: 18px;
  color: #993300;
  font-weight: bold;
  margin: 5px 0;
}

.contact {
  text-align: center;
  font-size: 20px;
  color: #0cb1ff;
  font-weight: bold;
  margin-top: 30px;
}

.contact a {
  color: #0cb1ff;
  text-decoration: none;
}

.contact a:hover {
  text-decoration: underline;
}

   </style>
</head>
<body>

<div id="topbar">
    <?php include("./resources/header.php") ?>
</div>

<div class="callpapers-content">
<section id="g-container-main" class="g-wrapper">
  <div class="g-container">
    <div class="g-grid">
      <div class="g-block size-100">
        <main id="g-main">
          <div class="g-content">
            <div class="platform-content">
              <div class="item-page" itemscope itemtype="https://schema.org/Article">
                <meta itemprop="inLanguage" content="en-GB"/>

                <div class="page-header">
                  <h2 itemprop="headline">Call for Papers</h2>
                </div>

                <div itemprop="articleBody" class="content-body">
                  <p class="intro">
                    Full paper submissions are invited for the International Conference on Multidisciplinary Technology Research to be held at Nadar Saraswathi College of Engineering and Technology, Theni, on 29th September 2024.
                  </p>

                  <p class="instruction">
                    Please click on <a href="./author-guidance.html" target="_blank" rel="noopener noreferrer">Author Guidelines</a> to see detailed instructions and paper template.
                  </p>

                  <h3>Prospective Themes / Areas</h3>
                  <p>Conference topics include, but are not limited to:</p>

                  <ul class="topics-list">
                    <li>Smart and Energy Efficient Systems</li>
                    <li>Composite Material</li>
                    <li>Advanced Welding</li>
                    <li>Material Processing</li>
                    <li>Smart Material</li>
                    <li>Nano Material</li>
                    <li>Material Testing</li>
                    <li>Refrigeration and Air Conditioning</li>
                    <li>Renewable Energy</li>
                    <li>Advanced Materials Processing</li>
                    <li>CFD and Simulation</li>
                    <li>Coating Technology</li>
                  </ul>

                  <p class="contact">
                    <strong>Author send the papers to:</strong> <a href="mailto:ampse@nscet.org">ampse@nscet.org</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </div>
</section>


</div>



<div class="footer">
<?php include("./resources/footer.php") ?>

</div>



</body>
</html>