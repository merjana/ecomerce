<?php
    $NoNavBar=1;
    include'init.php';

?>
	<form class="login" action="dashboard.php" method="POST">
			<h4 class="text-center">Admin Login</h4>
			<input class = "form-control" type="text" name="user" placeholder="Username" autocomplete="off" />
			<input class = "form-control"type="password" name="pass" placeholder="Password" autocomplete="new-password" />
			<input class = "btn btn-primary btn-block" type="submit" value="Login" />
	</form>
      
<?php 
     include $tp.'footer.php';
?>