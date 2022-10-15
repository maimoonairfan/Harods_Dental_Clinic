<?php
session_start();
 	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dentalsystem";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	} 


// login
   if( isset($_POST['btn_login']) ) {
      extract ($_POST);
         $password = md5($password);  
		$sql  = "SELECT * FROM tbl_patient_user where pat_email = '$pat_email' AND password = '$password'";
		// echo $sql;
		// die;
		$result = mysqli_query($conn, $sql);
		if ($result->num_rows > 0) {
			while($row = mysqli_fetch_assoc($result))
			{
			   $_SESSION['userid']= $row['pat_id'];
			}
			header('location: home.php');
			
		}
		else {
			
			header('location: index.php');
		}
   }


// signup
   if (isset($_POST['btn_signup'])) {
   	extract($_POST);
   	$password = md5($password);  
   	$sql = "SELECT * from tbl_patient_user where pat_name = '$pat_name' OR email= '$email' LIMIT 1 ";
   	$result = mysqli_query($conn, $sql);
   	if(mysqli_num_rows($result)) {
   		exit('already exists');
   	}
   	else{
   		$sql="INSERT INTO `tbl_patient_user`(pat_name, pat_email, pat_contactno, pat_city, password, pat_gender) VALUES ('$pat_name', '$pat_email','$pat_contactno','$pat_city','$password' ,'$pat_gender')";
   		// echo $sql;
   		// die;
   		$result = mysqli_query($conn, $sql);
   	}
	   $sql = "SELECT * from tbl_patient_user where pat_name = '$pat_name' OR pat_email= '$pat_email' OR pat_contactno = '$pat_contactno' OR pat_city = '$pat_city' OR password = '$password' OR pat_gender = '$pat_gender' LIMIT 1";
   	$result = mysqli_query($conn, $sql);
	   while($row = mysqli_fetch_array($result)){
	   	$_SESSION['userid'] = $pat_id;
	   	$_SESSION['pat_name'] = $pat_name;
	   	$_SESSION['pat_email'] = $pat_email;
	   	$_SESSION['pat_contactno'] = $pat_contactno;
	   	$_SESSION['pat_city'] = $pat_city;
	   	$_SESSION['password'] = $password;
	   	$_SESSION['pat_gender'] = $pat_gender;
	   }
	   header('location:home.php');
	}

	// confirm_appointment
	if (isset($_POST['appointment'])) {
   	extract($_POST);
 	 $pat_id =$_SESSION['userid'];
   	// var_dump($_POST);
   	// die;
   		$date= date('Y-m-d');
   
   	$sql= "INSERT INTO `tbl_appointments`( pat_id, appointment_date, appointment_time, category) VALUES ('$pat_id', '$appointment_date', '$appointment_time', '$category')";
   		   // echo $sql;
   		   // die;
   	
   	$result = mysqli_query($conn, $sql);
	   header('location:home.php #appointment');
	}
		mysqli_close($conn);
?>