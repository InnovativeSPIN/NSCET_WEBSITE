<?php

$host = "localhost";  
$user = "nscet_conference"; 
$pass = "conference_nscet";  
$dbname = "nscet_conference"; 

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ./login.php");
    exit();
}

$sql = "SELECT `author_name`, `author_college`, `department`, `email`, `author_mobile`, `paper_title`, `pdf_link`, `submitted_at` FROM `research_papers`  ORDER BY `submitted_at` DESC";
$result = $conn->query($sql);

function safe_htmlspecialchars($value)
{
    echo htmlspecialchars($value !== null ? $value : "-", ENT_QUOTES, 'UTF-8');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference List - Form 1 </title>
    <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        .container {
            width: 100%;
            max-width: 1100px;
            margin: 0 auto;
            margin-right: 5rem;
            margin-top: 5rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: scroll;
            height: 80vh;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: #fff;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .logout-btn {
            position: absolute;
            left: 0;
            bottom: 10;
        }
    </style>
</head>

<body>

   
    <div class="container">
    <h2>Research Papers</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Main Author</th>
                <th>College</th>
                <th>Department</th>
                <th>E-Mail</th>
                <th>Mobile</th>
                <th>Paper Title</th>
                <th>PDF</th>
               <th>Submit Date</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result && $result->num_rows > 0): ?>
              <?php $index = 1; ?>
                <?php while ($row =$result->fetch_assoc()): ?>
                    <tr>
                        <td><?= safe_htmlspecialchars($index++) ?></td>
                        <td><?= safe_htmlspecialchars($row['author_name']) ?></td>
                        <td><?= safe_htmlspecialchars($row['author_college']) ?></td>
                        <td><?= safe_htmlspecialchars($row['department']) ?></td>
                        <td><?= safe_htmlspecialchars($row['email']) ?></td>
                           <td><?= safe_htmlspecialchars($row['author_mobile']) ?></td>
                            <td><?= safe_htmlspecialchars($row['paper_title']) ?></td>
                        <td><a href="../conference/<?= safe_htmlspecialchars($row['pdf_link']) ?>" target="_blank">Download</a></td>
                            <td><?= safe_htmlspecialchars($row['submitted_at']) ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="11">No papers found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

    <!-- End Logo -->

</body>

</html>

<?php
$conn->close();

?>





</body>

</html>