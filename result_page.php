<?php
require ('database_connection_test.php');

if (isset($_POST['submit2'])){
  $message=$_POST['search2'];
  
  // Inserting into the Database
  $sql="INSERT INTO `practical_lab_table`(`Search_term`) VALUES ('$message')";
  $resultINSERT=$conn->query($sql);
  if($resultINSERT === True){
    echo "Record inserted successfully"."<br>";
  } else{
    echo "Insertion Failed ".$conn->error;
  }
 
  // Selecting from the database
  $sql_SELECT="SELECT `Lab_id`, `Search_term` FROM `practical_lab_table`";
  $resultSELECT=$conn->query($sql_SELECT);
  // Output data
 if ($resultSELECT->num_rows > 0) {
  // output data of each row
  while($row = $resultSELECT->fetch_assoc()) {
    $searchID = $row['Lab_id'];
    echo "SearchItem: " . $row['Search_term'];
  echo "
  <form action='result_page.php'>
  <input type ='hidden' name='DELETEId' value='$searchID'>
  <button name='Delete'>Delete</button>      
  </form> ";

  echo "
    <form action='edit_form.php'>
    <input type ='hidden' name='assignID' value='$searchID'>
      <button name='Edit'>Edit</button>
</form>
    <br> ";
}
          } 
  else {
  echo "0 results";
      }

    }
      ?>

<?php
if(isset($_GET['Delete'])){
  $Lab_id=$_GET['DELETEId'];
  // Query to delete from the Database
  $sql_delete="DELETE FROM `practical_lab_table` WHERE Lab_id=$Lab_id";
  $resultDELETE=$conn->query($sql_delete);
  if($resultDELETE === TRUE){
    echo "Successfully Deleted";

  }
  else{
    echo "Unsuccessfull Deletion";
  }

}
  


?>
  
