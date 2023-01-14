<?php
header('Access-Control-Allow-Origin: *');

include_once("conexao.php");

if($_POST["acao"] == "carregaToken"){
	$userid = $_POST['userid'];
	$tokenkey = $_POST['tokenkey'];
			
	if (!$strcon) {
 		die('Log5001');
	}

	$sql = "SELECT * FROM tokens WHERE userid = '$userid' AND tokenkey = '$tokenkey'";

	$result = mysqli_query($strcon, $sql);
 
    $row = mysqli_num_rows($result);
 
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
                echo $row["userid"] . "|" . $row["tokenkey"] . "|" . $row["tokenused"];
        }
    }

    else {
        echo "Log5005";
    }
}

if($_POST["acao"] == "cadastraToken"){
	$userid = $_POST['userid'];
//	$username = $_POST['username'];
	$tokenkey = $_POST['tokenkey'];
	$to = $_POST['to'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = 'From: gtjunior13@gmail.com' . "\r\n" . 'Reply-To: gtjunior13@gmail.com' . "\r\n" . 'X-Mailer: PHP/'.phpversion();

	if (!$strcon) {
 		die('Log5001');
	}

	$sql = "INSERT INTO tokens (userid, tokenkey) VALUES ('$userid', '$tokenkey')"; 

	mysqli_query($strcon,$sql) or die("Log5003");
	mysqli_close($strcon);
	echo ("Log5006");

	mail($to, $subject, $message, $headers);

}

if($_POST["acao"] == "atualizaToken"){

	$userid=$_POST["userid"];
	$tokenkey=$_POST["tokenkey"];

	if (!$strcon) {
 		die('Log5001');
	}

	$sql = "UPDATE tokens SET tokenkey='$tokenkey' WHERE userid=$userid";
 
	if(mysqli_query($strcon, $sql)){
  		echo "Log5002";
	}
	else{
  		echo "Log5007";
	}
 
}

?>