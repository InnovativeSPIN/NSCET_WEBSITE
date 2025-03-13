<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "nscet_conference_2";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $main_author_name = $_POST['main_author_name'];
    $paper_id = $_POST['paper_Id'];
    $paper_title = $_POST['paper_title'];
    $transaction_id = $_POST['transaction_id'];
    $phone_no= $_POST['phone_no'];
    $college_Name=$_POST=['college_Name'];

    $upload_dir = "uploads/";
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }
   
    $check_stmt = $conn->prepare("SELECT paper_id FROM papers_list WHERE paper_id = ?");
    $check_stmt->bind_param("s", $paper_id);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        echo "<script>alert('Error: Paper ID already exists. Please use a unique Paper ID.'); window.history.back();</script>";
        exit();
    }
    $check_stmt->close();

    $paper_pdf_name = time() . "_" . uniqid() . "_" . basename($_FILES["paper_pdf"]["name"]);
    $receipt_name = time() . "_" . uniqid() . "_" . basename($_FILES["receipt"]["name"]);
    $paper_pdf_path = $upload_dir . $paper_pdf_name;
    $receipt_path = $upload_dir . $receipt_name;


    $paper_pdf_uploaded = move_uploaded_file($_FILES["paper_pdf"]["tmp_name"], $paper_pdf_path);
    $receipt_uploaded = move_uploaded_file($_FILES["receipt"]["tmp_name"], $receipt_path);


    if (!$paper_pdf_uploaded || !$receipt_uploaded) {
        echo "Error uploading files.";
        exit();
    }


    $authors = isset($_POST['authors_name']) ? json_encode($_POST['authors_name'], JSON_UNESCAPED_UNICODE) : json_encode([]);


    $stmt = $conn->prepare("INSERT INTO papers_list (main_author_name, paper_id, paper_title, paper_pdf, transaction_id, receipt, paper_authors,phone_no,college_Name) VALUES (?, ?, ?, ?, ?, ?, ?,?,?)");
    $stmt->bind_param("sssssssss", $main_author_name, $paper_id, $paper_title, $paper_pdf_path, $transaction_id, $receipt_path, $authors,$phone_no,$college_Name);

    if ($stmt->execute()) {
        echo "<script>alert('Research paper submitted successfully.')</script>";
    } else {
        header("Location: ./index.php");
    }

    $stmt->close();
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
    <div style="display: flex;justify-content:center;" class="mt-5">
        <form method="POST" enctype="multipart/form-data" class="p-4 border rounded shadow" style="background-color:#ffffffc9;">
            <div class="mb-3">
                <label class="form-label">Name Of Corresponding Author :</label>
                <input type="text" name="main_author_name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Phone No :</label>
                <input type="text" name="phone_no" class="form-control" required>
            </div>


            <div class="mb-3 " id="authors_list">
            </div>
            <div class="mb-3">
                <button type="button" id="add_author" class="btn btn-success btn-sm">Add Author</button>
            </div>


            <div class="mb-3">
                <label class="form-label">College Name (Main Author):</label>
                <input type="text" name="college_Name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Paper Id:</label>
                <input type="text" name="paper_Id" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Title of The Paper:</label>
                <input type="text" name="paper_title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Paper Upload:</label>
                <input type="file" name="paper_pdf" class="form-control" accept="application/pdf" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Transaction Id :</label>
                <input type="text" name="transaction_id" class="form-control" accept="application/pdf" required>
            </div>

            <div class="qr-code mb-5">
                <img src="./qr_Code.jpg" alt="" width="380px">
            </div>

            <div class="mb-3">
                <label class="form-label">Receipt:</label>
                <input type="file" name="receipt" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>


    <script>
        document.getElementById('add_author').addEventListener('click', function() {
            const authors_List = document.getElementById('authors_list');
            const authorsInputs = authors_List.getElementsByTagName('input');

            if (authorsInputs.length < 7) {
                const wrapper = document.createElement('div');
                wrapper.className = 'mt-2';
                const input = document.createElement('input');
                input.type = 'text';
                input.name = 'authors_name[]';
                input.className = 'full-width w-100 form-control';
                input.required = true;
                wrapper.appendChild(input);
                input.placeholder = `Authors ${authorsInputs.length+2}`
                authors_List.appendChild(wrapper);
            } else {
                alert('You can only add a maximum of 7 authors.');
            }
        });
    </script>
</body>

</html>