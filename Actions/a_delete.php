<?php 

require_once 'db_connect.php';

if ($_GET) {
   $id = $_GET['id'];

   $sql = "DELETE FROM pet WHERE id = {$id}";
    if($connect->query($sql) === TRUE) {
       echo "<p>Successfully deleted!!</p>" ;
       echo "<a href='../admin.php'><button type='button'>Back to the HomePage</button></a>";
   } else {
       echo "Error updating record : " . $connect->error;
   }

   $connect->close();
}

?>