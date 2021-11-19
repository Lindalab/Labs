
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8">
		<title>MyPHP</title>
	</head>
  <body>
    <h2>Form 1</h2>

  	<?php
  	    session_start()
    ?>

    <?php
        $user_input="";
        if(isset($_POST['submit'])){
          $input = $_POST['search1'];
          $pattern = '/^[1-9]$ /';
          if(preg_match($pattern,$input)){
            $user_input=$_POST['search1'];
          } 
          
          else {
             echo "input is not strong enough";
          }
        
          }
        $_SESSION['input']=$user_input;


    ?>



	

     <form action="my_form.php" method="post">

          Search <input type="text" name="search1" value="<?php
          if(isset($_POST['submit'])){
          echo $_SESSION['input'];
           }
          ?>
          
          ">
          <br>
          <br>
          Submit<input type="submit" name="submit"><br><br>

         <?php
          echo $user_input;
         ?>
      </form>

        <br>
        <br>
    
      <h2> Form 2</h2>

      <form action="result_page.php" method="post">
        Search <input type="text" name="search2">
        <br>
        <br>
        Submit<input type="submit" name="submit2">
        <br>
      </form>
       <br>
       <br>

       <form action="result_page.php" method="post">
        Search <input type="file" name="file_image">
        <br>
        <br>
        Submit<input type="submit" name="submit3">
        <br>
      </form>

    



</body>
</html>


