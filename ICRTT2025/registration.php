<?php

include('../resources/conn.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $main_author_name = $_POST['main_author_name'];
    $paper_id = $_POST['paper_Id'];
    $paper_title = $_POST['paper_title'];
    $transaction_id = $_POST['transaction_id'];
    $phone_no= $_POST['phone_no'];
    $college_Name=$_POST['college_Name'];
   $department=$_POST['department'];
   if (isset($_POST['department']) && $_POST['department'] === "Other" && !empty($_POST['other_department'])) {
    $department = $_POST['other_department'];
}

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


$stmt = $conn->prepare("INSERT INTO papers_list (main_author_name, paper_id, paper_title, paper_pdf, transaction_id, receipt, paper_authors, phone_no, college_Name, department) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $main_author_name, $paper_id, $paper_title, $paper_pdf_path, $transaction_id, $receipt_path, $authors,$phone_no,$college_Name,$department);

    if ($stmt->execute()) {
        echo "<script>alert('Research paper submitted successfully.')</script>";
        header("Location:./ICRTT2025/");
    } else {
             echo "<script>alert('Document Upload Error.Try Again')</script>";
        echo header("Location: ./registration.php");
    }

    $stmt->close();
}

$conn->close();
?>


<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Conference Paper Submission</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
       nav{
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #fefefe;
        width: 100%;
        position: fixed;
        top: 0;
       }
       nav img{
        width: 120px;

       }
       .head_text{
        color:#074067;
        font-weight: bold;
        font-size: clamp(18px,2vw,25px);
       }
       .main_content{
        margin-top: 7rem;
       }
       .fee-table {
      max-width: 500px;
      border-collapse: collapse;
      width: 100%;
      margin-top: 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .fee-table th, .fee-table td {
      border: 1px solid #ccc;
      padding: 10px 15px;
      text-align: left;
    }
    .fee-table th {
      background-color: #f4f4f4;
    }
    .note {
      margin-top: 15px;
      font-style: italic;
      color: #555;
    }
       @media screen and (max-width:768px) {
        
       }
    </style>
</head>

<body class="body  " style="background: url('https://nscet.org/assets/img/main/college_intro.png');">
 <nav>
 <div class="fixed-top-left">
        <img src="https://nscet.org/main_images/College_logo.webp" alt="Left Icon" width="120px">
    </div>
<div>
<h2 class="text-center head_text" >ICRTT 2025 - Conference Paper Submission</h2>
</div>
    <div class="fixed-top-right">
        <img src="https://nscet.org/main_images/kamarajar_logo.webp" alt="Right Icon" width="120px">
    </div>
 </nav>
    <div style="display: flex;justify-content:center;" class="container main_content">
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
               
           <label for="department">Department</label>
<select name="department" id="department" class="form-control" onchange="toggleOtherInput(this)">
  <option value="" selected disabled>Select Department</option>
  <option value="Computer Science and Engineering">Computer Science and Engineering</option>
  <option value="Information Technology">Information Technology</option>
  <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
  <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
  <option value="Mechanical Engineering">Mechanical Engineering</option>
  <option value="Civil Engineering">Civil Engineering</option>
  <option value="Mechatronics Engineering">Mechatronics Engineering</option>
  <option value="Automobile Engineering">Automobile Engineering</option>
  <option value="Biomedical Engineering">Biomedical Engineering</option>
  <option value="Chemical Engineering">Chemical Engineering</option>
  <option value="Aeronautical Engineering">Aeronautical Engineering</option>
  <option value="Aerospace Engineering">Aerospace Engineering</option>
  <option value="Agricultural Engineering">Agricultural Engineering</option>
  <option value="Marine Engineering">Marine Engineering</option>
  <option value="Robotics and Automation">Robotics and Automation</option>
  <option value="Artificial Intelligence and Data Science">Artificial Intelligence and Data Science</option>
  <option value="Electronics and Instrumentation Engineering">Electronics and Instrumentation Engineering</option>
  <option value="Environmental Engineering">Environmental Engineering</option>
  <option value="Industrial Engineering">Industrial Engineering</option>
  <option value="Structural Engineering">Structural Engineering</option>
  <option value="Other">Other</option>
</select>


<div id="other-dept-div" style="display: none; margin-top: 10px;">
  <input type="text" name="other_department" id="other_department" class="form-control" placeholder="Please specify your department">
</div>
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

            <div class="mb-3">
                <label class="form-label">Receipt:</label>
                <input type="file" name="receipt" class="form-control" required>
            </div>

            
  <h2>Registration Fee</h2>
  <table class="fee-table">
    <tr>
      <th>Category</th>
      <th>Fee</th>
    </tr>
    <tr>
      <td>UG Students</td>
      <td>Rs. 1000/-</td>
    </tr>
    <tr>
      <td>PG / Research Scholars / Faculty</td>
      <td>Rs. 1500/-</td>
    </tr>
  </table>

  <p class="note">* Maximum 5 participants allowed</p>
            <div class="qr-code mb-5">
                <img src="./qr_Code.jpg" alt="" width="380px">
            </div>
            <div class="qr-code mb-5">
                <img src="./image_1.jpg" alt="" width="380px">
            </div>
            <div class="qr-code mb-5">
                <img src=".//image_2.jpg" alt="" width="380px">
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
          function toggleOtherInput(select) {
    const otherDiv = document.getElementById("other-dept-div");
    if (select.value === "Other") {
      otherDiv.style.display = "block";
    } else {
      otherDiv.style.display = "none";
      document.getElementById("other_department").value = "";
    }
  }

    </script>
</body>

</html>