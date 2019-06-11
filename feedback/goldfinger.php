<?php
// declare variables
/*errors*/ $businessNameErr = $phoneNumErr = $firstNameErr = $nameErr = $emailErr = "";
/*fields*/ $businessName = $email = $gender = $comment = $interested = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	// Business Name
		if (empty($_POST["edition"])) {
		$EditionErr = "edition is required";
	} else {
		//$businessName =  formOutput($_POST["businessName"]);
		$Edition = $_POST["edition"];
	}
	
	if (empty($_POST["Name"])) {
		$NameErr = "Name is required";
	} else {
		//$businessName =  formOutput($_POST["businessName"]);
		$Name = $_POST["Name"];
	}
	
		if (empty($_POST["Email"])) {
		$EmailErr = "Email is required";
	} else {
		//$businessName =  formOutput($_POST["businessName"]);
		$Email = $_POST["Email"];
	}
	
			if (empty($_POST["Rating"])) {
		$RatingErr = "Email is required";
	} else {
		//$businessName =  formOutput($_POST["businessName"]);
		$Rating = $_POST["Rating"];
	}
	
	if (empty($_POST["comments"])) {
		$commentsErr = "Email is required";
	} else {
		//$businessName =  formOutput($_POST["businessName"]);
		$comments = $_POST["comments"];
	}
	
	// Redirect the user after the form is submitted
	header("Location: thankyou.php");
	
}

// Writes results to CSV File
//$fs = fopen("callTypeData.csv","a");
//fwrite($fs,$businessName . ", " . $phoneNumber . ", " . $firstName . ", " . $lastName . ", " . $email . ", " . $city . ", " . $state . ", " . $callTypesList . "\n");
//fclose($fs);

function  formOutput($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>