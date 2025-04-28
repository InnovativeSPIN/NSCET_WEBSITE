
<?php
include('../resources/conn.php');
if (!isset($_SESSION['username'])) {
  header("Location: ./login.php");
  exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<style>
    .box-section{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 2rem;
    }
    .main_Form{

        background:rgb(1, 88, 120);
        height: 120px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
       
        margin-top: 3rem;
border-radius: 5px;
box-shadow: 2px 2px 2px rgba(0,0,0,0.4);
flex-direction: column;
    }
    a{
        color: white;
text-decoration: none;
transition: 0.4s;
    }
    form{
        display: flex;
        justify-content: center;
        margin-top: 3rem;
    }
    a:hover{
color: white;
transform: scale(1.03);
    }
</style>
</head>
<body>
    <div class="main_section text-center mt-5 ">
       <h2>
       ICRTT CONFERENCE
       </h2>

       <div class="box-section">
       <a href="./form_1.php">
       <div class="form_1 main_Form">
        <h5>
        CONFERENCE REGISTRATION 
        </h5> 
        <h6>
            Note: Form 1
        </h6>
        </div>
       </a>
       <a href="./form_2.php">
       <div class="form_2 main_Form">
        <h5>
        CONFERENCE AMOUNT PAID
        </h5>
        <h6>
            Note: Form 2
        </h6>
        </div>
       </a>
       </div>
    </div>

<form action="./logout.php" method="post">
                <button class="btn btn-outline-info"> Logout</button>
            </form>
</body>
</html>