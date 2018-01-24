<?php
session_start();

$pageTitle = '';
if(isset($_SESSION['Username'])){

include 'init.php'; 
$do='';
	$do = isset($_GET['do']) ? $_GET['do']:'Manage';

	if($do=='Manage'){// Manage page

		
	}elseif($do=='Edit'){// Edit page

		
	}elseif($do=='Update'){//Update page

		
	}elseif($do=='Add'){//Add page

		
	}elseif($do=='Insert'){// Insert page

		

	}elseif ($do=='Delete') {// Delete page

		

	}else{
		header('Location:index.php');
		exit();
	}

include $tp.'footer.php';
}else{

	header('Location:index.php');
	exit();
}


?>