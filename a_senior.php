<?php
ob_start();
session_start();
require_once 'dbconnect.php';

if( !isset($_SESSION['admin']) && !isset($_SESSION['user']) ) {
 header("Location: index.php");
 exit;
}
if(isset($_SESSION["user"])){
  header("Location: home.php");
  exit;
}

$res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['admin']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);

$resPet = mysqli_query($conn, "SELECT * FROM pet");
?>

<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
   <title>Pet´s Adoption Center</title>

<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body style="background-color: olivedrab">
  <div class="container-fluid">
    <br>
    <br>
      <div class="card schermo" >
         <h3> Hi <?php echo $userRow['userName' ]; ?>, <br> Welcome to the Weird Pet´s Adoption Center! </h3>
          <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-around">
            
              <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
                     <ul class="navbar-nav">
                      <li class="nav-item active">
                       <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                       <a class="nav-link" href="a_general.php">Lil & Big</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="a_senior.php">Senior</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="logout.php?logout">Log out</a>
                      </li>
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                           <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                           <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                       </form>
                      </div>
                      </nav>

      </div>
      <br>

  <div class="card schermo" >
      <div class="card-columns">
  
 <?php 

      $sql = "SELECT * FROM pet WHERE age > 8 ";
      $result = $connect-> query($sql);

            if($result-> num_rows > 0) { 
                while($row = $result->fetch_assoc()) {
                  echo  "<div class='card scheda'>
                            <img class='card-img-top photo' src='".$row["photo"]. "'alt='click to see more.'></a>
                          <div class='card-body'>
                            <h5 class='card-title'>".$row["name"]. "</h5>
                            <p class='card-text'> A ".$row["breed"]. ", ".$row["age"]." years old.<br> ".$row["city"]. "</p>
                          </div>
                            <a href='display.php?id=" .$row['id']."'><button type='button' class='btn-sm'>Show</button></a>
                            <div class='d-flex justify-content-center'>
                              <a href='update.php?id=" .$row['id']."'><button type='button' class='bottverde'>Edit</button></a>
                              <a href='delete.php?id=" .$row['id']."'><button type='button' class='bottrosso'>Delete</button></a>
                          </div>
                        </div>";
              }
           } else  {
              echo  "<center>No Data Avaliable</center>";
           }
  ?>


      </div>

    <div class ="manageUser">
    <a href= "create.php"><button type="button" class="btn-lg" >Add pet´s card </button></a>
    </div>
  

  </div>
    
<br>

</div>
</div> 

  <footer>
    <h6 class="footer small">CodeReview11 - Fulvia Marai</h6>
  </footer>

</body>
</html>
<?php ob_end_flush(); ?>  