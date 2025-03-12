<?php
require_once("../resources/connection.php");
if (!isset($_SESSION['username'])) {
  header("Location: ./login.php");
  exit();
}


?>


<!DOCTYPE html>
<html lang="en">
<?php require_once('./resources/header_link.php'); ?>

<body>

  <?php require_once('./resources/header.php'); ?>
  <?php require_once('./resources/sidebar.php'); ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Home Page</h1>
     
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">1. Marquee Section</h5> 

              <!-- Marquee Section -->
              <?php 
              $marqueeSection = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='marquee'"));
              $marqueeData = json_decode($marqueeSection['content'], true);
              ?>
              <form method="post" action="./routes/homePageHandler.php">
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Marquee Section</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="content" required><?php 
                    if(isset($marqueeData['content'])){
                    echo $marqueeData['content'];
                    }
                    else{
                      echo "";
                    }
                    ?></textarea>
                  </div>
                  <div class="col-sm-10">
                    <br>
                    <button type="submit" class="btn btn-primary" name="marqueeButton">Update</button>
                  </div>
                </div>
              </form>
              <form method="get" action="./routes/homePageHandler.php">
                  <input type="text" name="name" value="marquee" hidden>
                  <button type="submit" class="btn btn-danger" name="marqueeDeleteButton">&nbsp;Delete&nbsp;</button></a>
              </form>

              <!-- Hero Section -->
              <h5 class="card-title"> 2. Hero Section</h5>    <!-- Table with hoverable rows -->

              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Heading</th>
                    <th scope="col">subHeading</th>
                    <th scope="col">Paragraph</th>
                    <th scope="col">Button Name</th>
                    <th scope="col">Url</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  $data = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='heroSection'"));
                  $jsonData = json_decode($data['content'], true);
                  foreach($jsonData as $key => $data) { 
                ?>
                  <tr>
                    <td><?php echo $data['heading']?></td>
                    <td><?php echo $data['subHeading']?></td>
                    <td><?php echo $data['paragraph']?></td>
                    <td><?php echo $data['btn']?></td>
                    <td><?php echo $data['url']?></td>
                    <td><img src="<?php echo $data['image']?>" width="75px" height="75px" alt="Image"></td>
                    <td>
                      <form method="get" action="./routes/homePageHandler.php">
                      <input type="text" name="key" value="<?php echo $key ?>" hidden>
                      <button type="submit" class="btn btn-danger" name="heroDeleteButton">&nbsp;Delete&nbsp;</button></a>
                      </form>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table> <!-- End Table with hoverable rows -->

              <h5 class="card-title" style="color: blue;">Add Hero Section</h5> 
              <form method="post" action="./routes/homePageHandler.php" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Hero Section</label>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="heading" placeholder="Heading" required/>
                    <br>
                  </div>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="subHeading" placeholder="Sub-heading" required/>
                    <br>
                  </div>
                  <div class="col-sm-10 col-lg-4">
                    <textarea class="form-control" style="height: 100px" name="paragraph" placeholder="Hero Section Paragraph" required></textarea>
                    <br>
                  </div>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="url" placeholder="Url" required/>
                    <br>
                  </div>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="btn" placeholder="Button Name" required/>
                    <br>
                  </div>
                  <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Image Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="image" accept="image/*">
                    <br>
                  </div>
                </div>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="heroButton">Add</button>
                  </div>
                </div>
              </form>

          <!-- Timmer Section -->
          <h5 class="card-title">3. Timmer Section</h5>

              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Time</th>
                    <th scope="col">Countdown</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $data = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='timerSection'"));
                $jsonData = json_decode($data['content'], true);
                foreach($jsonData as $key => $data) {
                ?>
                  <tr>
                    <td><?php echo $data['title']?></td>
                    <td><?php echo $data['time']?></td>
                    <td><?php echo $data['countdown']?></td>
                    <td>
                      <form method="get" action="./routes/homePageHandler.php">
                      <input type="text" name="key" value="<?php echo $key?>" hidden>
                      <button type="submit" class="btn btn-danger" name="timmerDeleteButton">&nbsp;Delete&nbsp;</button></a>
                      </form>
                    </td>
                  </tr>
                <?php 
                }
                ?>
                </tbody>
              </table> <!-- End Table with hoverable rows -->

              <h5 class="card-title" style="color: blue;">Add Timmer Section</h5> 
              <form method="post" action="./routes/homePageHandler.php">
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Timmer Section</label>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="title" placeholder="title" required/>
                    <br>
                  </div>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="time" placeholder="time" required/>
                    <br>
                  </div>
                  <div class="col-sm-10 col-lg-4">
                    <input class="form-control" name="countdown" type="date" placeholder="countdown" required/>
                    <br>
                  </div>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="timmerButton">Add</button>
                  </div>
                </div>
              </form>


            <!-- News Section -->

            <h5 class="card-title">4. News Section</h5>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">News Url</th>
                    <th scope="col">Image Url</th>
                    <th scope="col">Date</th>
                    <th scope="col">Tags</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $data = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='newsSection'"));
                $jsonData = json_decode($data['content'], true);
                foreach($jsonData as $key => $data) {
                ?>
                  <tr>
                    <td><?php echo $data['title']?></td>
                    <td><?php echo $data['url']?></td>
                    <td><img src="<?php echo $data['imgUrl']?>" width="75px" height="75px" alt="Image"></td>
                    <td><?php echo $data['date']?></td>
                    <td><?php echo $data['tags']?></td>
                    <td>
                      <form method="get" action="./routes/homePageHandler.php">
                      <input type="text" name="key" value="<?php echo $key?>" hidden>
                      <button type="submit" class="btn btn-danger" name="newsDeleteButton">&nbsp;Delete&nbsp;</button></a>
                      </form>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table> <!-- End Table with hoverable rows -->

              <h5 class="card-title" style="color: blue;">Add News Section</h5> 
              <form method="post" action="./routes/homePageHandler.php" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">News Section</label>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="title" placeholder="Title" required/>
                    <br>
                  </div>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="url" placeholder="News URL" required/>
                    <br>
                  </div>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="tags" placeholder="Tags" required/>
                    <br>
                  </div>
                  <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Image Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="imgUrl" accept="image/*">
                    <br>
                  </div>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" type="date" name="date" placeholder="Date" required/>
                    <br>
                  </div>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="newsButton">Add</button>
                  </div>
                </div>
              </form>

          <!-- Video Section -->
          <h5 class="card-title">5. Video Section</h5>

              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Video Link</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $data = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='VideoSection'"));
                $jsonData = json_decode($data['content'], true);
                foreach($jsonData as $key => $data) {
                ?>
                  <tr>
                    <td><?php echo $data ?></td>
                    <td>
                      <form method="get" action="./routes/homePageHandler.php">
                      <input type="text" name="key" value="<?php echo $key?>" hidden>
                      <button type="submit" class="btn btn-danger" name="videoDeleteButton">&nbsp;Delete&nbsp;</button></a>
                      </form>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table> <!-- End Table with hoverable rows -->

              <h5 class="card-title" style="color: blue;">Add Video Section</h5> 
              <form method="post" action="./routes/homePageHandler.php">
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Video Section</label>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" type="url" name="url" placeholder="Url" required/>
                    <br>
                  </div>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="videoButton">Add</button>
                  </div>
                </div>
              </form>

          <!-- Image Section -->
          <h5 class="card-title">6. Image Section</h5>
          
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $data = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='imgSection'"));
                $jsonData = json_decode($data['content'], true);
                foreach($jsonData as $key => $data) {
                ?>
                  <tr>
                    <td><img src="<?php echo $data ?>" width="75px" height="75px" alt="Image"></td>
                    <td>
                      <form method="get" action="./routes/homePageHandler.php">
                      <input type="text" name="key" value="<?php echo $key?>" hidden>
                      <button type="submit" class="btn btn-danger" name="imageDeleteButton">&nbsp;Delete&nbsp;</button></a>
                      </form>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table> <!-- End Table with hoverable rows -->

              <h5 class="card-title" style="color: blue;">Add Image Section</h5>
              <form method="post" action="./routes/homePageHandler.php" enctype="multipart/form-data">
              <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Image Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="image" accept="image/*">
                    <br>
                </div>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name ="imageButton" >Add</button>
                  </div>
                </div>
              </form>

            <!--  Principal Section -->

            <h5 class="card-title">7. Principal Section</h5>
            <?php 
                $data = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='principalDesk'"));
                $jsonData = json_decode($data['content'], true);
                ?>
            <form method="post" action="./routes/homePageHandler.php" enctype="multipart/form-data">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Profile</th>
                    <th scope="col">Background Image</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input type="file" name="image" accept="image/*"><img src="<?php echo $jsonData['image']?>" width="75px" height="75px" alt="Image"></td>
                    <td><input type="file" name="bgUrl" accept="image/*"><img src="<?php echo $jsonData['bgUrl']?>" width="75px" height="75px" alt="Image"></td>
                  </tr>
                </tbody>
              </table> <!-- End Table with hoverable rows -->

              <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="name" placeholder="Name" value="<?php echo $jsonData['name']?>" required/>
                    <br>
                  </div>
                  <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Content</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="content"><?php echo $jsonData['content']?></textarea>
                  </div>
                </div>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="principalButton">Update</button>
                  </div>
                </div>
              </form>


            <!-- UG Course Section -->

            <h5 class="card-title">8. UG Course Section</h5>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Sub-Heading</th>
                    <th scope="col">Date</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $data = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='ugCourses'"));
                $jsonData = json_decode($data['content'], true);
                foreach($jsonData as $key => $data) {
                ?>
                  <tr>
                    <td><?php echo $data['name']?></td>
                    <td><?php echo $data['subHeading']?></td>
                    <td><?php echo $data['date']?></td>
                    <td><img src="<?php echo $data['imgUrl']?>" width="75px" height="75px" alt="Image"></td>
                    <td>
                      <form method="get" action="./routes/homePageHandler.php">
                      <input type="text" name="key" value="<?php echo $key?>" hidden>
                      <button type="submit" class="btn btn-danger" name="ugDeleteButton">&nbsp;Delete&nbsp;</button></a>
                      </form>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table> <!-- End Table with hoverable rows -->

              <h5 class="card-title" style="color: blue;">Add UG Course Section</h5> 
              <form method="post" action="./routes/homePageHandler.php" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">UG Course :</label>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="name" placeholder="Name" required/>
                    <br>
                  </div>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="subHeading" placeholder="Sub-heading" required/>
                    <br>
                  </div>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" type="date" name="date" placeholder="Date" required/>
                    <br>
                  </div>
                  <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Image Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="imgUrl" accept="image/*">
                    <br>
                  </div>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="ugButton">Add</button>
                  </div>
                </div>
              </form>


            <!-- PG Course Section -->

            <h5 class="card-title">9. PG Course Section</h5>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Sub-Heading</th>
                    <th scope="col">Date</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $data = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='pgCourses'"));
                $jsonData = json_decode($data['content'], true);
                foreach($jsonData as $key => $data) {
                ?>
                  <tr>
                    <td><?php echo $data['name']?></td>
                    <td><?php echo $data['subHeading']?></td>
                    <td><?php echo $data['date']?></td>
                    <td><img src="<?php echo $data['imgUrl']?>" width="75px" height="75px" alt="Image"></td>
                    <td>
                      <form method="get" action="./routes/homePageHandler.php">
                      <input type="text" name="key" value="<?php echo $key?>" hidden>
                      <button type="submit" class="btn btn-danger" name="pgDeleteButton">&nbsp;Delete&nbsp;</button></a>
                      </form>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table> <!-- End Table with hoverable rows -->

              <h5 class="card-title" style="color: blue;">Add PG Course Section</h5> 
              <form method="post" action="./routes/homePageHandler.php" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">PG Course :</label>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="name" placeholder="Name" required/>
                    <br>
                  </div>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="subHeading" placeholder="Sub-heading" required/>
                    <br>
                  </div>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" type="date" name="date" placeholder="Date" required/>
                    <br>
                  </div>
                  <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Image Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="imgUrl" accept="image/*">
                    <br>
                  </div>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="pgButton">Add</button>
                  </div>
                </div>
              </form>
           

          <!--Counter Section -->

          <h5 class="card-title">10. Counter Section</h5>

              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Count</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $data = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='counterSection'"));
                $jsonData = json_decode($data['content'], true);
                foreach($jsonData as $key => $data) {
                ?>
                  <tr>
                    <td><?php echo $data['name']?></td>
                    <td><?php echo $data['count']?></td>
                    <td>
                      <form method="get" action="./routes/homePageHandler.php">
                      <input type="text" name="key" value="<?php echo $key?>" hidden>
                      <button type="submit" class="btn btn-danger" name="counterDeleteButton">&nbsp;Delete&nbsp;</button></a>
                      </form>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table> <!-- End Table with hoverable rows -->

              <h5 class="card-title" style="color: blue;">Add Counter Section</h5> 
              <form method="post" action="./routes/homePageHandler.php">
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Counter Section</label>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="name" placeholder="Name" required/>
                    <br>
                  </div>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="count" type="number" placeholder="Count" required/>
                    <br>
                  </div>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="counterButton">Add</button>
                  </div>
                </div>
              </form>

          <!-- Recruiter Section -->
          <h5 class="card-title">11. Recruiter Section</h5>
          
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $data = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='requiterSection'"));
                $jsonData = json_decode($data['content'], true);
                foreach($jsonData as $key => $data) {
                ?>
                  <tr>
                  <td><img src="<?php echo $data?>" width="75px" height="75px" alt="Image"></td>
                  <td>
                      <form method="get" action="./routes/homePageHandler.php">
                      <input type="text" name="key" value="<?php echo $key?>" hidden>
                      <button type="submit" class="btn btn-danger" name="recruiterDeleteButton">&nbsp;Delete&nbsp;</button></a>
                      </form>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table> <!-- End Table with hoverable rows -->

              <h5 class="card-title" style="color: blue;">Add Recruiter Section</h5>
              <form method="post" action="./routes/homePageHandler.php" enctype="multipart/form-data">
              <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Image Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="image" accept="image/*">
                    <br>
                </div>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="recruiterButton">Add</button>
                  </div>
                </div>
              </form>     <!-- End General Form Elements -->          

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php require_once('./resources/footer_link.php'); ?>

</body>

</html>