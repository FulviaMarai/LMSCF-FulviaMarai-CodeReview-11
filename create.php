
<!DOCTYPE html>
<html>
<head>
   <title> Pet´s Adoption Center  |  Add pet card </title>

<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</head>
<body>
  <div class="container-fluid">
    <br>
  <div class="card schermo">
    <h3> Create-a-card! Add a pet to the  <br><span class="rainbow-text">Weird Pet´s Adoption Center</span> !</h3>
  </div>

  <div class="card foglio">
   <form  class="form-group" action="actions/a_create.php" method= "get">
      
         <div class="row">
        <div class="col">
            <label for="name"> What's the name of the pet? </label> <br>
              <input  type="text" name="name"  placeholder="name of the pet" /> <br>
            <label for="photo"> Can you link a photo of the pet? </label> <br>
              <input  type="text" name="photo"  placeholder="link to the photo of the pet" /> <br>
            <label for="breed"> What's the breed of the pet? </label> <br>
              <input  type="text" name="breed"  placeholder="breed of the pet" /> <br>  
            <label for="age"> What's the age of the pet? </label> <br>
              <input  type="text" name="age"  placeholder="age of the pet" /> <br>
            <label for="adoptable"> Since the pet is adoptable? </label> <br>
              <input  type="text" name="adoptable"  placeholder="YYYY/MM/DD" /> <br>
            <label for="description"> Can you describe the pet in 200 charachters? </label> <br>
              <input  type="text" name="description"  placeholder="a brief description" /> <br>
            <label for="hobbies"> What are the hobbies of the pet? </label> <br>
              <input  type="text" name="hobbies" placeholder="hobbies of the pet" /> <br>
            <label for="web"> Has the pet a webpage or other social media? </label> <br>
              <input  type="text" name="web"  placeholder="link to the webpage of the pet" /> <br>

             </div>
        <div class="col">


            <label for="location"> Where you can find the pet? </label> <br>
              <input  type="text" name="location"  placeholder="name of the pet location" /> <br>
            <label for="image"> Can you link a photo of the location? </label> <br>
              <input  type="text" name="image"  placeholder="link to the location of the pet" /> <br>
            <label for="address"> What's the address? </label> <br>
              <input  type="text" name="address"  placeholder="street & number" /> <br>  
            <label for="ZIP"> ZIP code? </label> <br>
              <input  type="text" name="ZIP"  placeholder="zip code of the city" /> <br>
            <label for="city"> What's the city? </label> <br>
              <input  type="text" name="city"  placeholder="city" /> <br> 
            <label for="country"> What's the country? </label> <br>
              <input  type="text" name="country"  placeholder="country" /> <br> 
             
            <label for="coordLat"> Can you write the coordinates? (this is for googleMap API)  </label> <br>
              <input  type="text" name="coordlat"  placeholder="Write here the latitude" /> <br>
            <label for="coordLon">  </label> <br>
              <input  type="text" name="coordLOn"  placeholder="Write here the longitude" /> <br>
        </div>
      </div>

    <hr>
    <br>
        
        <button type ="submit" class='btn-lg'>Insert new card</button>
        <a href= "admin.php"><button  type="button" class='btn-lg' >Back to the main page</button></a>


   </form>
  </div>
</div>
</body>
</html>