<?php
header('Access-Control-Allow-Origin: *');

include_once("conexao.php");

if($_POST["acao"] == "loginUsuario"){
	$useremail = $_POST['useremail'];
	$userpass = $_POST['userpass'];
			
	if (!$strcon) {
 		die('Log1001');
	}

	$sql = "SELECT * FROM usuarios WHERE useremail = '$useremail' AND userpass = '$userpass'";

	$result = mysqli_query($strcon, $sql);
 
    $row = mysqli_num_rows($result);
 
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
                echo $row["userid"] . "|" . $row["userbanned"] . "|" . $row["username"] . "|" . $row["useremail"] . "|" . $row["userverificated"];
        }
    }

    else {
        echo "Log1003";
    }
}

if($_POST["acao"] == "cadastroUsuario"){
	$username = $_POST['username'];
	$useremail = $_POST['useremail'];
	$userpass = $_POST['userpass'];
	$lojaid = $_POST['lojaid'];
	$to = $_POST['to'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = 'From: gtjunior13@gmail.com' . "\r\n" . 'Reply-To: gtjunior13@gmail.com' . "\r\n" . 'X-Mailer: PHP/'.phpversion();

	if (!$strcon) {
 		die('Log1001');
	}

	$sql = "INSERT INTO usuarios (username, useremail, userpass, lojaid) VALUES ('$username', '$useremail', '$userpass', '$lojaid')"; 

	mysqli_query($strcon,$sql) or die("Log1002");
	mysqli_close($strcon);
	echo ("Log1004");

	mail($to, $subject, $message, $headers);

}

?>