<?php 
    include 'inc/header.php'
?>	

			<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	

	<section>
		<div class="content">
			<h1>Create an account so you can explore art every moment, as you please.</h1>



			<form action="">


	     <style>
		    label {
            color: #232A80;
			display: block;
			margin-top: 22px;
		    }
	      </style>
     </head>
     <body>
	
	<form action="validate.php" method="POST">
		<label>Username (it has to be longer that 5 characters)</label>
		<input type="text" name="user">
		<label>Password</label>
		<input type="password" name="password">
        <label> Retype Password (if it is different from the Password from the previous block it won't work)</label>
		<input type="password" name="password">
		<br><br>
		<input type="submit" value="Create account">
	</form>

</body>
</html>
		</div>
	</section>


<?php 
    include 'inc/footer.php'
?>	
