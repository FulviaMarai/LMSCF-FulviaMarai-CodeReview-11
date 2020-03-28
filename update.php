<?php 
require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM pet WHERE id = {$id}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();}
?>

<!DOCTYPE html>
<html>
<head>
   <title >Edit pet</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
 <body>
<div class="container-fluid">
    <br>
  <div class="card schermo">
    <h2> Weird Pet´s Adoption Center <br> Update the pet card</h1>
  </div>

  <div class="card schermo">
   <form  class="form-group" action="actions/a_update.php" method= "get">
      
         <div class="row">
        <div class="col">
            <label for="name"> What's the name of the pet? </label> <br>
              <input  type="text" name="name"  placeholder="name of the pet" value="<?php echo $data['name'] ?>"/> <br>
            <label for="photo"> Can you link a photo of the pet? </label> <br>
              <input  type="text" name="photo"  placeholder="link to the photo of the pet" value="<?php echo $data['photo'] ?>"/> <br>
            <label for="breed"> What's the breed of the pet? </label> <br>
              <input  type="text" name="breed"  placeholder="breed of the pet" value="<?php echo $data['breed'] ?>" /> <br>  
            <label for="age"> What's the age of the pet? </label> <br>
              <input  type="text" name="age"  placeholder="age of the pet" value="<?php echo $data['age'] ?>" /> <br>
            <label for="adoptable"> Since the pet is adoptable? </label> <br>
              <input  type="text" name="adoptable"  placeholder="YYYY/MM/DD"  value="<?php echo $data['adoptable'] ?>" /> <br>
            <label for="description"> Can you describe the pet in 200 charachters? </label> <br>
              <input  type="text" name="description"  placeholder="a brief description" value="<?php echo $data['description'] ?>" /> <br>
            <label for="hobbies"> What are the hobbies of the pet? </label> <br>
              <input  type="text" name="hobbies" placeholder="hobbies of the pet" value="<?php echo $data['hobbies'] ?>" /> <br>
            <label for="web"> Has the pet a webpage or other social media? </label> <br>
              <input  type="text" name="web"  placeholder="link to the webpage of the pet" value="<?php echo $data['web'] ?>" /> <br>

             </div>
        <div class="col">

            <label for="location"> Where you can find the pet? </label> <br>
              <input  type="text" name="location"  placeholder="name of the pet location" value="<?php echo $data['location'] ?>" /> <br>
            <label for="image"> Can you link a photo of the location? </label> <br>
              <input  type="text" name="image"  placeholder="link to the location of the pet" value="<?php echo $data['image'] ?>"/> <br>
            <label for="address"> What's the address? </label> <br>
              <input  type="text" name="address"  placeholder="street & number" value="<?php echo $data['address'] ?>" /> <br>  
            <label for="ZIP"> ZIP code? </label> <br>
              <input  type="text" name="ZIP"  placeholder="zip code of the city" value="<?php echo $data['ZIP'] ?>" /> <br>
            <label for="city"> What's the city? </label> <br>
              <input  type="text" name="city"  placeholder="city" value="<?php echo $data['city'] ?>" /> <br> 
            <label for="country"> What's the country? </label> <br>
              <input  type="text" name="country"  placeholder="country" value="<?php echo $data['country'] ?>" /> <br> 
             
            <label for="coordLat"> Can you write the coordinates? (this is for googleMap API)  </label> <br>
              <input  type="text" name="coordLat"  placeholder="Write here the latitude" value="<?php echo $data['coordLat'] ?>" /> <br>
            <label for="coordLon">  </label> <br>
              <input  type="text" name="coordLon"  placeholder="Write here the longitude" value="<?php echo $data['coordLon'] ?>" /> <br>
        </div>
      </div>

    <hr>
    <br>

               <input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />

               <button type="submit" class='btn-lg'>Save Changes</button >
               <a  href= "admin.php"><button type="button" class='btn-lg'> Back to the main page</button ></a>


</form >
</div>
</div>
</body >
</html >
