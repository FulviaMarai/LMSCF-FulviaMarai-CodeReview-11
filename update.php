<?php 
require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM media WHERE id = {$id}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
   <title >Edit Media</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
 <body>
  <div class="container">
    <br>
  <div class="card ">
    <h1 class="display-5"> Update Media </h1>
  </div>

<div class="card">

   <form class="form-group" action="actions/a_update.php"  method="get">
      <div class="row">
        <div class="col">
          <label for="title"> Title </label> <br>
            <input type="text"  name="title" placeholder ="title" value="<?php echo $data['title'] ?>" /> <br>
          <label for="author"> Author </label> <br>
            <input type="text"  name="author" placeholder ="author" value="<?php echo $data['author'] ?>" /> <br>
          <label for="publisher"> Publisher </label> <br>
            <input type="text"  name="publisher" placeholder ="publisher" value="<?php echo $data['publisher'] ?>" /> <br>
        </div>
        <div class="col">
          <label for="publish_date"> Date of pubblication</label> <br>
             <input type="text"  name="publish_date" placeholder ="YYYY-MM-DD" value="<?php echo $data['publish_date'] ?>" /> <br>
          <label for="type"> Type of media </label> <br>
            <input type="text"  name="type" placeholder ="paperback,DVD,etc." value="<?php echo $data['type'] ?>" /> <br>
           <label for="ISBN"> ISBN</label> <br>
            <input type="text"  name="ISBN" placeholder ="ISBN code" value="<?php echo $data['ISBN'] ?>" /> <br>
        </div>
        <div class="col">
            <label for="description"> A short description </label> <br>
              <textarea  name="description" rows="4" cols="50"><?php echo $data['description'] ?></textarea> <br>
            <label for="cover"> Cover </label> <br>
              <input type="text"  name="cover" placeholder ="write here the link to the cover" value="<?php echo $data['cover'] ?>" /> <br>
          </div>

      </div>
<hr>
<br>
               <input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />

               <button type="submit" class='btn btn-outline-danger btn-lg'>Save Changes</button >
               <a  href= "index.php"><button  type="button" class='btn btn-outline-info btn-lg'> Back to the main page</button ></a>


   </form >
 </div>
</div>
</body >
</html >

<?php
}
?>