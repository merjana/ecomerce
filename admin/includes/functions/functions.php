<?php


/* make the title of each page dynamic*/
function getTitle(){

	global $pageTitle;
	
	if (isset($pageTitle)) {
		echo $pageTitle;
	}else{
		echo 'Default';
	}
	
}


/* redirect the page to another page atfer a given seconds */

function redirectPage($url,$msg='',$second=3){

	if(!empty($msg)){
					echo "<div class='alert alert-danger'>$msg </div>";
	}
	

	header("refresh:$second;url=$url");
	exit();

}

/* check if theitem is lready in database */

function checkItem($select,$table,$value){

	global $con;

	$statment = $con->prepare("SELECT $select FROM $table WHERE $select= ?");
	$statment->execute(array($value));

	return $statment->rowCount();
}

/* Count number of items with condition */

function countItem($item,$table,$cond){

	global $con;
     
    $stmt=$con->prepare("SELECT COUNT($item) FROM $table WHERE $item=?");
     
	$stmt->execute(array($cond));

	return $stmt->fetchColumn();
}

/* Count number of items with no condition */
function countItems($item,$table){

	global $con;
     
    $stmt=$con->prepare("SELECT COUNT($item) FROM $table");
     
	$stmt->execute();

	return $stmt->fetchColumn();
}

/* get time function */

function timeNow(){

    return date("Y-m-d");

}

/* Get latest items */ 

function getLatest($select,$table,$order,$limit=5){

	global $con;

	$stmt = $con->prepare("SELECT $select FROM $table ORDER BY $order DESC LIMIT $limit");
	$stmt->execute();
	return $stmt->fetchAll();
}

/* yes or no function */

function NoYes($select){
		if ($select == 0){
			return 'Yes';
	}elseif ($select == 1){
		return 'No';
	}

}



?>

