<?php
    header("Access-Control-Allow-Origin: " . $_SERVER["HTTP_ORIGIN"]);
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Allow-Credentials: true");
    header("Access-Control-Allow-Headers: origin, referer, content-type");
    header("Access-Control-Max-Age: 1728000");

    if(strtoupper($_SERVER['REQUEST_METHOD']) == 'OPTIONS'){
        header("Content-Type: text/plain");
        header("Content-Length: 0");
        http_response_code(204);
        exit;
    }
include 'database.php';
$name = $_POST['username'];
echo"<pre>";
print_r($name);
exit();
$email = $_POST['useremail'];
$phone = $_POST['userphone'];
if(isset($_POST['student_form'])){
	$sql = "INSERT INTO `user`( `name`, `email`, `phone` ) 
	VALUES ('$name','$email', '$phone')";
	if (mysqli_query($conn, $sql)) {
		header('Location: login.html');
	} 
	else {
	    echo 201;
	}
	mysqli_close($conn);
}
?>