<?php require_once("../../resources/connection.php")?>

<!-- marquee Section Delete button-->
<?php

if(isset($_GET["marqueeDeleteButton"])){

    $jsondata = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='marquee'"));
    $originaldata = json_decode($jsondata['content'],true);

    $key = "content";

    if (array_key_exists($key, $originaldata )) {
        unset($originaldata [$key]);
        $originaldata = array_values($originaldata ); // Re-index the array
        print_r($originaldata);
    } else {
        echo "Index not found in the array.";
    }

    if(empty($originaldata)){
        $jsonString = str_replace("[", "{", str_replace("]", "}", json_encode($originaldata)));
    }
    else
    {
        $jsonString = json_encode($originaldata);
    }

    // Prepare the update query with a parameter for content
    $sql = "UPDATE home_page SET content = ? WHERE id = 1"; 

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $jsonString);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    header("Location: " . "../home.php");
    exit;
}

// marquee Section Update button

    if(isset($_POST["marqueeButton"]) && $_POST["content"]){

    $jsondata = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='marquee'"));
    $originaldata = json_decode($jsondata['content'],true);

    $content = $_POST["content"];

    $originaldata = [
        "content" => $content,
    ];

    $jsonString = json_encode($originaldata);
    
    // Prepare the update query with a parameter for content
    $sql = "UPDATE home_page SET content = ? WHERE id = 1"; 

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $jsonString);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    header("Location: " . "../home.php");
    exit;

    }
?>

<!-- Hero Section Add button-->
<?php
if (isset($_POST['heroButton'])) {

    $subHeading = $_POST['subHeading'];
    $heading = $_POST['heading'];
    $paragraph = $_POST['paragraph'];
    $url = $_POST['url'];
    $btn = $_POST['btn'];
    
    if ($_FILES["image"]) {

    $path = dirname(__DIR__);
    $targetDirectory = $path. "\\media\\heroSection\\";

    if (!is_dir($targetDirectory)) {
        mkdir($targetDirectory, 0755, true);
    }

    $file = $_FILES["image"]; 
    $targetPath = $targetDirectory . basename($file["name"]); 

    // Check if the file was uploaded successfully

    if (move_uploaded_file($file["tmp_name"], $targetPath)) {
        echo "File uploaded successfully.";
    } else {
        echo "Error: File upload failed.";
    }
    }

    $image = "./media/heroSection/".basename($file["name"]);

    $jsondata = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='heroSection'"));
    $originaldata = json_decode($jsondata['content'],true);

    $data = [
        "subHeading" => $subHeading,
        "heading" => $heading,
        "paragraph" => $paragraph,
        "btn" => $btn,
        "image" => $image,
        "url" => $url
    ];

    array_push($originaldata, $data);

    $jsonString = json_encode($originaldata);

    // Prepare the update query with a parameter for content
    $sql = "UPDATE home_page SET content = ? WHERE id = 2"; // ID = 2

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $jsonString);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    header("Location: " . "../home.php");
    
    exit;
}

// Hero Section Delete button

if(isset($_GET["heroDeleteButton"])){

    echo $_GET["key"];
    $jsondata = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='heroSection'"));
    $originaldata = json_decode($jsondata['content'],true);

    $key = (int)$_GET["key"];

    if (array_key_exists($key, $originaldata )) {
        unset($originaldata [$key]);
        $originaldata = array_values($originaldata ); // Re-index the array
        print_r($originaldata);
    } else {
        echo "Index not found in the array.";
    }

    $jsonString = json_encode($originaldata);

    // Prepare the update query with a parameter for content
    $sql = "UPDATE home_page SET content = ? WHERE id = 2"; // ID = 2

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $jsonString);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    header("Location: " . "../home.php");
    exit;
}
?>

<!-- Timmer Section Add button-->

<?php
if (isset($_POST['timmerButton'])) {

    $title = $_POST['title'];
    $time = $_POST['time'];
    $countdown = $_POST['countdown'];
    $countdown = date("Y/m/d", strtotime($countdown));
    
    $jsondata = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='timerSection'"));
    $originaldata = json_decode($jsondata['content'],true);

    $data = [
        "title" => $title,
        "time" => $time,
        "countdown" => $countdown
    ];

    array_push($originaldata, $data);

    $jsonString = json_encode($originaldata);

    // Prepare the update query with a parameter for content
    $sql = "UPDATE home_page SET content = ? WHERE id = 3"; 

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $jsonString);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    header("Location: " . "../home.php");
    
    exit;
}

// Timmer Section Delete button

if(isset($_GET["timmerDeleteButton"])){

    echo $_GET["key"];
    $jsondata = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='timerSection'"));
    $originaldata = json_decode($jsondata['content'],true);

    $key = (int)$_GET["key"];

    if (array_key_exists($key, $originaldata )) {
        unset($originaldata [$key]);
        $originaldata = array_values($originaldata ); // Re-index the array
        print_r($originaldata);
    } else {
        echo "Index not found in the array.";
    }

    $jsonString = json_encode($originaldata);

    // Prepare the update query with a parameter for content
    $sql = "UPDATE home_page SET content = ? WHERE id = 3"; 

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $jsonString);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    header("Location: " . "../home.php");
    exit;
}
?>

<!-- News Section Add button-->

<?php
if (isset($_POST['newsButton'])) {

    $title = $_POST['title'];
    $url = $_POST['url'];
    $tags = $_POST['tags'];
    $inputDate = $_POST['date'];
    $date = new DateTime($inputDate);
    $formattedDate = $date->format("F j, Y");
    
    if ($_FILES["imgUrl"]) {

    $path = dirname(__DIR__);
    $targetDirectory = $path. "\\media\\newsSection\\";

    if (!is_dir($targetDirectory)) {
        mkdir($targetDirectory, 0755, true);
    }

    $file = $_FILES["imgUrl"]; 
    $targetPath = $targetDirectory . basename($file["name"]); 

    // Check if the file was uploaded successfully

    if (move_uploaded_file($file["tmp_name"], $targetPath)) {
        echo "File uploaded successfully.";
    } else {
        echo "Error: File upload failed.";
    }
    }

    $image = "./media/newsSection/".basename($file["name"]);

    $jsondata = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='newsSection'"));
    $originaldata = json_decode($jsondata['content'],true);

    $data = [
        "title" => $title,
        "date" => $formattedDate,
        "tags" => $tags,
        "imgUrl" => $image,
        "url" => $url
    ];

    array_push($originaldata, $data);

    $jsonString = json_encode($originaldata);

    // Prepare the update query with a parameter for content
    $sql = "UPDATE home_page SET content = ? WHERE id = 4"; 

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $jsonString);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    header("Location: " . "../home.php");
    
    exit;
}

//News Section Delete button

if(isset($_GET["newsDeleteButton"])){

    $jsondata = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='newsSection'"));
    $originaldata = json_decode($jsondata['content'],true);

    $key = (int)$_GET["key"];

    if (array_key_exists($key, $originaldata )) {
        unset($originaldata [$key]);
        $originaldata = array_values($originaldata ); // Re-index the array
        print_r($originaldata);
    } else {
        echo "Index not found in the array.";
    }

    $jsonString = json_encode($originaldata);

    // Prepare the update query with a parameter for content
    $sql = "UPDATE home_page SET content = ? WHERE id = 4"; 

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $jsonString);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    header("Location: " . "../home.php");
    exit;
}
?>

<!-- Video Section Add button-->

<?php
if (isset($_POST['videoButton'])) {

    $url = $_POST['url'];
    
    $jsondata = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='videoSection'"));
    $originaldata = json_decode($jsondata['content'],true);

    array_push($originaldata, $url);

    $jsonString = json_encode($originaldata);

    // Prepare the update query with a parameter for content
    $sql = "UPDATE home_page SET content = ? WHERE id = 5"; 

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $jsonString);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    header("Location: " . "../home.php");
    
    exit;
}

// Video Section Delete button

if(isset($_GET["videoDeleteButton"])){

    $jsondata = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='videoSection'"));
    $originaldata = json_decode($jsondata['content'],true);

    $key = (int)$_GET["key"];

    if (array_key_exists($key, $originaldata )) {
        unset($originaldata [$key]);
        $originaldata = array_values($originaldata ); // Re-index the array
        print_r($originaldata);
    } else {
        echo "Index not found in the array.";
    }

    $jsonString = json_encode($originaldata);

    // Prepare the update query with a parameter for content
    $sql = "UPDATE home_page SET content = ? WHERE id = 5"; 

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $jsonString);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    header("Location: " . "../home.php");
    exit;
}
?>

<!-- Image Section Add button-->

<?php
if (isset($_POST['imageButton'])) {

    if ($_FILES["image"]) {

        $path = dirname(__DIR__);
        $targetDirectory = $path. "\\media\\imageSection\\";
    
        if (!is_dir($targetDirectory)) {
            mkdir($targetDirectory, 0755, true);
        }
    
        $file = $_FILES["image"]; 
        $targetPath = $targetDirectory . basename($file["name"]); 
    
        // Check if the file was uploaded successfully
    
        if (move_uploaded_file($file["tmp_name"], $targetPath)) {
            echo "File uploaded successfully.";
        } else {
            echo "Error: File upload failed.";
        }
        }
    
        $image = "./media/imageSection/".basename($file["name"]);
    
    $jsondata = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='imgSection'"));
    $originaldata = json_decode($jsondata['content'],true);

    array_push($originaldata, $image);

    $jsonString = json_encode($originaldata);

    // Prepare the update query with a parameter for content
    $sql = "UPDATE home_page SET content = ? WHERE id = 6"; 

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $jsonString);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    header("Location: " . "../home.php");
    
    exit;
}

// Image Section Delete button

if(isset($_GET["imageDeleteButton"])){

    $jsondata = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='imgSection'"));
    $originaldata = json_decode($jsondata['content'],true);

    $key = (int)$_GET["key"];

    if (array_key_exists($key, $originaldata )) {
        unset($originaldata [$key]);
        $originaldata = array_values($originaldata ); // Re-index the array
        print_r($originaldata);
    } else {
        echo "Index not found in the array.";
    }

    $jsonString = json_encode($originaldata);

    // Prepare the update query with a parameter for content
    $sql = "UPDATE home_page SET content = ? WHERE id = 6"; 

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $jsonString);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    header("Location: " . "../home.php");
    exit;
}
?>

<!-- Recruiter Section Add button-->

<?php
if (isset($_POST['recruiterButton'])) {

    if ($_FILES["image"]) {

        $path = dirname(__DIR__);
        $targetDirectory = $path. "\\media\\requiterSection\\";
    
        if (!is_dir($targetDirectory)) {
            mkdir($targetDirectory, 0755, true);
        }
    
        $file = $_FILES["image"]; 
        $targetPath = $targetDirectory . basename($file["name"]); 
    
        // Check if the file was uploaded successfully
    
        if (move_uploaded_file($file["tmp_name"], $targetPath)) {
            echo "File uploaded successfully.";
        } else {
            echo "Error: File upload failed.";
        }
        }
    
        $image = "./media/requiterSection/".basename($file["name"]);
    
    $jsondata = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='requiterSection'"));
    $originaldata = json_decode($jsondata['content'],true);

    array_push($originaldata, $image);

    $jsonString = json_encode($originaldata);

    // Prepare the update query with a parameter for content
    $sql = "UPDATE home_page SET content = ? WHERE id = 11"; 

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $jsonString);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    header("Location: " . "../home.php");
    
    exit;
}

// Recruiter Section Delete button

if(isset($_GET["recruiterDeleteButton"])){

    $jsondata = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='requiterSection'"));
    $originaldata = json_decode($jsondata['content'],true);

    $key = (int)$_GET["key"];

    if (array_key_exists($key, $originaldata )) {
        unset($originaldata [$key]);
        $originaldata = array_values($originaldata ); // Re-index the array
        print_r($originaldata);
    } else {
        echo "Index not found in the array.";
    }

    $jsonString = json_encode($originaldata);

    // Prepare the update query with a parameter for content
    $sql = "UPDATE home_page SET content = ? WHERE id = 11"; 

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $jsonString);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    header("Location: " . "../home.php");
    exit;
}
?>

<!-- Principal Section Update button-->
<?php

    if(isset($_POST["principalButton"])){

    $jsondata = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='principalDesk'"));
    $originaldata = json_decode($jsondata['content'],true);

    print_r($_FILES);
    
    $name = $_POST["name"];
    $content = $_POST["content"];
    
    if ($_FILES["image"]["name"]) 
    {
        $path = dirname(__DIR__);
        $targetDirectory = $path. "\\media\\principalSection\\";
    
        if (!is_dir($targetDirectory)) {
            mkdir($targetDirectory, 0755, true);
        }
    
        $file = $_FILES["image"]; 
        $targetPath = $targetDirectory . basename($file["name"]); 
    
        // Check if the file was uploaded successfully
    
        if (move_uploaded_file($file["tmp_name"], $targetPath)) {
            echo "File uploaded successfully.";
            $image = "./media/principalSection/".basename($file["name"]);
        } else {
            echo "Error: File upload failed.";
        }
        
    }
    else
    {
        $image = $originaldata["image"];
        echo $image;
    }
    
    if ($_FILES["bgUrl"]["name"])
    {

        $path = dirname(__DIR__);
        $targetDirectory = $path. "\\media\\principalSection\\";
    
        if (!is_dir($targetDirectory)) {
            mkdir($targetDirectory, 0755, true);
        }
    
        $file = $_FILES["bgUrl"]; 
        $targetPath = $targetDirectory . basename($file["name"]); 
    
        // Check if the file was uploaded successfully
    
        if (move_uploaded_file($file["tmp_name"], $targetPath)) {
            echo "File uploaded successfully.";
            $bgUrl = "./media/principalSection/".basename($file["name"]);
        } else {
            echo "Error: File upload failed.";
        }
        
    }
    else
    {
        $bgUrl = $originaldata["bgUrl"];
    }
    
    $originaldata = [
        "name" => $name,
        "content" => $content,
        "image" => $image,
        "bgUrl" => $bgUrl
    ];

    // print_r($originaldata);

    $jsonString = json_encode($originaldata);
    
    // Prepare the update query with a parameter for content
    $sql = "UPDATE home_page SET content = ? WHERE id = 7"; 

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $jsonString);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    header("Location: " . "../home.php");
    exit;

    }
?>

<!-- UG Section Add button-->
<?php

if (isset($_POST['ugButton'])) {

    $subHeading = $_POST['subHeading'];
    $name = $_POST['name'];
    $inputDate = $_POST['date'];
    $date = new DateTime($inputDate);
    $formattedDate = $date->format("F j, Y");
    
    
    if ($_FILES["imgUrl"]) {

    $path = dirname(__DIR__);
    $targetDirectory = $path. "\\media\\ugCoursesSection\\";

    if (!is_dir($targetDirectory)) {
        mkdir($targetDirectory, 0755, true);
    }

    $file = $_FILES["imgUrl"]; 
    $targetPath = $targetDirectory . basename($file["name"]); 

    // Check if the file was uploaded successfully

    if (move_uploaded_file($file["tmp_name"], $targetPath)) {
        echo "File uploaded successfully.";
    } else {
        echo "Error: File upload failed.";
    }
    }

    $image = "./media/ugCoursesSection/".basename($file["name"]);

    $jsondata = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='ugCourses'"));
    $originaldata = json_decode($jsondata['content'],true);

    $data = [
        "subHeading" => $subHeading,
        "name" => $name,
        "imgUrl" => $image,
        "date" => $formattedDate,
    ];

    array_push($originaldata, $data);

    $jsonString = json_encode($originaldata);

    // Prepare the update query with a parameter for content
    $sql = "UPDATE home_page SET content = ? WHERE id = 8"; 

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $jsonString);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    header("Location: " . "../home.php");
    
    exit;
}

//  UG Section Delete button

if(isset($_GET["ugDeleteButton"])){

    echo $_GET["key"];
    $jsondata = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='ugCourses'"));
    $originaldata = json_decode($jsondata['content'],true);

    $key = (int)$_GET["key"];

    if (array_key_exists($key, $originaldata )) {
        unset($originaldata [$key]);
        $originaldata = array_values($originaldata ); // Re-index the array
        print_r($originaldata);
    } else {
        echo "Index not found in the array.";
    }

    $jsonString = json_encode($originaldata);

    // Prepare the update query with a parameter for content
    $sql = "UPDATE home_page SET content = ? WHERE id = 8"; 

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $jsonString);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    header("Location: " . "../home.php");
    exit;
}
?>

<!-- PG Section Add button-->
<?php

if (isset($_POST['pgButton'])) {

    $subHeading = $_POST['subHeading'];
    $name = $_POST['name'];
    $inputDate = $_POST['date'];
    $date = new DateTime($inputDate);
    $formattedDate = $date->format("F j, Y");
    
    
    if ($_FILES["imgUrl"]) {

    $path = dirname(__DIR__);
    $targetDirectory = $path. "\\media\\pgCoursesSection\\";

    if (!is_dir($targetDirectory)) {
        mkdir($targetDirectory, 0755, true);
    }

    $file = $_FILES["imgUrl"]; 
    $targetPath = $targetDirectory . basename($file["name"]); 

    // Check if the file was uploaded successfully

    if (move_uploaded_file($file["tmp_name"], $targetPath)) {
        echo "File uploaded successfully.";
    } else {
        echo "Error: File upload failed.";
    }
    }

    $image = "./media/pgCoursesSection/".basename($file["name"]);

    $jsondata = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='pgCourses'"));
    $originaldata = json_decode($jsondata['content'],true);

    $data = [
        "subHeading" => $subHeading,
        "name" => $name,
        "imgUrl" => $image,
        "date" => $formattedDate,
    ];

    array_push($originaldata, $data);

    $jsonString = json_encode($originaldata);

    // Prepare the update query with a parameter for content
    $sql = "UPDATE home_page SET content = ? WHERE id = 9"; 

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $jsonString);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    header("Location: " . "../home.php");
    
    exit;
}

// PG Section Delete button

if(isset($_GET["pgDeleteButton"])){

    echo $_GET["key"];
    $jsondata = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='pgCourses'"));
    $originaldata = json_decode($jsondata['content'],true);

    $key = (int)$_GET["key"];

    if (array_key_exists($key, $originaldata )) {
        unset($originaldata [$key]);
        $originaldata = array_values($originaldata ); // Re-index the array
        print_r($originaldata);
    } else {
        echo "Index not found in the array.";
    }

    $jsonString = json_encode($originaldata);

    // Prepare the update query with a parameter for content
    $sql = "UPDATE home_page SET content = ? WHERE id = 9"; 

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $jsonString);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    header("Location: " . "../home.php");
    exit;
}
?>


<!-- Counter Section Add button-->

<?php
if (isset($_POST['counterButton'])) {

    $name = $_POST['name'];
    $count = $_POST['count'];
    
    $jsondata = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='counterSection'"));
    $originaldata = json_decode($jsondata['content'],true);

    $data = [
        "name" => $name,
        "count" => $count
    ];

    array_push($originaldata, $data);

    $jsonString = json_encode($originaldata);

    // Prepare the update query with a parameter for content
    $sql = "UPDATE home_page SET content = ? WHERE id = 10"; 

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $jsonString);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    header("Location: " . "../home.php");
    
    exit;
}

// Counter Section Delete button

if(isset($_GET["counterDeleteButton"])){

    echo $_GET["key"];
    $jsondata = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='counterSection'"));
    $originaldata = json_decode($jsondata['content'],true);

    $key = (int)$_GET["key"];

    if (array_key_exists($key, $originaldata )) {
        unset($originaldata [$key]);
        $originaldata = array_values($originaldata ); // Re-index the array
        print_r($originaldata);
    } else {
        echo "Index not found in the array.";
    }

    $jsonString = json_encode($originaldata);

    // Prepare the update query with a parameter for content
    $sql = "UPDATE home_page SET content = ? WHERE id = 10"; 

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $jsonString);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    header("Location: " . "../home.php");
    exit;
}
?>
