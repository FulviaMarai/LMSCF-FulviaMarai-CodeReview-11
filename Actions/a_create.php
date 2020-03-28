<?php 

require_once 'db_connect.php';


if ($_GET) {
  $name = $_GET['name'];
  $photo = $_GET['photo'];
  $breed = $_GET['breed'];
  $age = $_GET['age'];
  $adoptable = $_GET['adoptable'];
  $description = $_GET['description'];
  $hobbies = $_GET['hobbies'];
  $web = $_GET['web'];
  $location = $_GET['location'];
  $image = $_GET['image'];
  $address = $_GET['address'];
  $city = $_GET['city'];
  $ZIP = $_GET['ZIP'];
  $coordLat = $_GET['coordLat'];
  $coordLon= $_GET['coordLon'];
  $country = $_GET['country'];
  

   $sql = "INSERT INTO pet (name, photo, breed, age, adoptable, description, hobbies, web, location, image, address, city, ZIP, coordLat, coordLon, country) VALUES ('$name','$photo','$breed','$age','$adoptable','$description','$hobbies','$web', '$location','$image','$address','$city','$ZIP','$coordLat','$coordLon','$country')";
    if($connect->query($sql) === TRUE) {
      echo "<br><p>You have successfully created a new record! <br> What do you want to do now?</p><br>" ;
      echo "<a href='../create.php'><button type='button'class='btn btn-outline-succcess btn-lg'>Add another pets´s card </button></a>";
      echo "<a href='../admin.php'><button type='button'class='btn btn-outline-success btn-lg'>Back to the main page</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>
