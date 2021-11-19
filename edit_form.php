<?php
require ('database_connection_test.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Forms</title>
</head>
<body>

<form method="post" action="#">
	<input type="text" name="update_content" value="
    <?php
         $editID=null;
         if (isset($_POST['Edit'])){
             $editID=$_POST['assignID'];
             // Selecting from the database
             $sql_SELECT="SELECT `Search_term` FROM `practical_lab_table` WHERE Lab_id=$editID";
             $resultSELECT=$conn->query($sql_SELECT);
             if ($resultSELECT->num_rows > 0) {
             while($row = $resultSELECT->fetch_assoc()) {
             echo "SearchItem: " . $row['Search_term'];
             } 
            } 
          }
    ?>
      ">
      <button name="Update">Update</button>
</form>

</body>
</html>

<?php
if (isset($_POST['Update'])){
    $update_new=$_POST['update_content'];
    $sqlUpdate="UPDATE `practical_lab_table` SET `Search_term`='$update_new' WHERE `Lab_id`= '$editID'";
    $resultUpdate=$conn->query($sqlUpdate);
    if($resultUpdate === True ){
        echo "Update was successfull";
    }
    else{
        echo "Update was not successful".$conn->error;
        
    }
}
?>