<?php 

if (isset($_POST['btn'])) {
	
	extract($_POST);
	echo $name;
	echo ' '. $pword;
}


 ?>

 <form action="" method="post">
 	<input type="text" name="name">
 	<input type="password" name="pword">
 	<button name="btn">submit</button>
 </form>