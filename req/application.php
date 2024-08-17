<?php  

if (isset($_POST['first_name']) &&
    isset($_POST['last_name']) &&
    isset($_POST['school_name']) &&
    isset($_POST['grade']) &&
    isset($_POST['address']) &&
    isset($_POST['phone']) &&
    isset($_POST['email'])) {

    include "../DB_connection.php";
	
	$first_name = $_POST['first_name'];
	$last_name  = $_POST['last_name'];
	$school_name = $_POST['school_name'];
    $grade = $_POST['grade'];
	$address    = $_POST['address'];
	$phone      = $_POST['phone'];
	$email      = $_POST['email'];

	if (empty($first_name)) {
		$em  = "First name is required";
		header("Location: ../application.php?error=$em#application");
		exit;
	} else if (empty($last_name)) {
		$em  = "Last name is required";
		header("Location: ../application.php?error=$em#application");
		exit;
	} else if (empty($school_name)) {
		$em  = "School name is required";
		header("Location: ../application.php?error=$em#application");
		exit;
    } else if (empty($grade)) {
		$em  = "Grade is required";
		header("Location: ../application.php?error=$em#application");
		exit;
	} else if (empty($address)) {
		$em  = "Address is required";
		header("Location: ../application.php?error=$em#application");
		exit;
	} else if (empty($phone)) {
		$em  = "Phone number is required";
		header("Location: ../application.php?error=$em#application");
		exit;
	} else if (empty($email)) {
		$em  = "Email is required";
		header("Location: ../application.php?error=$em#application");
		exit;
	} else {
       $sql  = "INSERT INTO
                 students_application (first_name, last_name, school_name, grade, address, phone, email)
                 VALUES(?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$first_name, $last_name, $school_name, $grade, $address, $phone, $email]);
        $sm = "success";
        header("Location: ../application.php?status=$sm#application");
        exit;
	}

} else {
	header("Location: ../application.php");
	exit;
}
