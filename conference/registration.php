<?php
$host = "localhost";  
$user = "nscet_conference"; 
$pass = "conference_nscet";  
$dbname = "nscet_conference"; 

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $author_name = $_POST['author_name'];
    $author_college = $_POST['author_college'];
    $department = $_POST['department'];
    $email = $_POST['email'];
    $author_mobile = $_POST['author_mobile'];
    $paper_title = $_POST['paper_title'];
    
    $upload_dir = "uploads/";
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    $file_name = basename($_FILES["paper_pdf"]["name"]);
    $file_path = $upload_dir . time() . "_" . $file_name;

    if (move_uploaded_file($_FILES["paper_pdf"]["tmp_name"], $file_path)) {
        $stmt = $conn->prepare("INSERT INTO research_papers (author_name, author_college, department, email, author_mobile, paper_title, pdf_link) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $author_name, $author_college, $department, $email, $author_mobile, $paper_title, $file_path);
        $stmt->execute();
        $stmt->close();
        echo "Research paper submitted successfully.";
    } else {
        echo "Error uploading file.";
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Submit Conference Paper</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .fixed-top-left {
            position: fixed;
            top: 10px;
            left: 10px;
        }
        .fixed-top-right {
            position: fixed;
            top: 10px;
            right: 10px;
        }
    </style>
</head>
<body class="body container mt-5" style="background: url('https://nscet.org/assets/img/main/college.jpg');">
    <div class="fixed-top-left">
        <img src="https://nscet.org/assets/img/main/College_logo.png" alt="Left Icon" width="190px">
    </div>
    <div class="fixed-top-right">
        <img src="https://nscet.org/assets/img/main/kamarajar-logo.webp" alt="Right Icon" width="190px">
    </div>
    <h2 class="text-center">ICRTT 2025 - Conference Paper Submission</h2>
    <form method="POST" enctype="multipart/form-data" class="p-4 border rounded shadow" style="background-color:#ffffffc9">
        <div class="mb-3">
            <label class="form-label">Main Author Name:</label>
            <input type="text" name="author_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Author College:</label>
            <input type="text" name="author_college" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Department:</label>
            <select name="department" class="form-control" required>
                <option value="AI&DS">AI&DS</option>
                <option value="CSE">CSE</option>
                <option value="ECE">ECE</option>
                <option value="EEE">EEE</option>
                <option value="IT">IT</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Mobile:</label>
            <input type="text" name="author_mobile" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Paper Title:</label>
            <input type="text" name="paper_title" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Upload Abstract (PDF only):</label>
            <input type="file" name="paper_pdf" class="form-control" accept="application/pdf" required>
        </div>
        
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
</body>
</html>