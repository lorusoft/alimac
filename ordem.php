<?php
header('Access-Control-Allow-Origin: *');

include_once("conexao.php");

if($_POST["acao"] == "cadastroOS"){
	$userid = $_POST['userid'];
	$ostipo = $_POST['ostipo'];
	$osdata = $_POST['osdata'];
	$osfiscal = $_POST['osfiscal'];
	$osgarantia = $_POST['osgarantia'];
	$osaparelho = $_POST['osaparelho'];
	$osimei1 = $_POST['osimei1'];
	$osimei2 = $_POST['osimei2'];
	$osproblema = $_POST['osproblema'];
	$ossenha = $_POST['ossenha'];
	$pin1 = $_POST['pin1'];
	$pin2 = $_POST['pin2'];
	$pin3 = $_POST['pin3'];
	$pin4 = $_POST['pin4'];
	$pin5 = $_POST['pin5'];
	$pin6 = $_POST['pin6'];
	$pin7 = $_POST['pin7'];
	$pin8 = $_POST['pin8'];
	$pin9 = $_POST['pin9'];
	/*$to = $_POST['to'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = 'From: gtjunior13@gmail.com' . "\r\n" . 'Reply-To: gtjunior13@gmail.com' . "\r\n" . 'X-Mailer: PHP/'.phpversion();*/

	if (!$strcon) {
 		die('Log6001');
	}

	$sql = "INSERT INTO ordem (userid, ostipo, osdata, osfiscal, osgarantia, osaparelho, osimei1, osimei2, osproblema, ossenha, pin1, pin2, pin3, pin4, pin5, pin6, pin7, pin8, pin9) VALUES ('$userid', '$ostipo', '$osdata', '$osfiscal', '$osgarantia', '$osaparelho', '$osimei1', '$osimei2', '$osproblema', '$ossenha', '$pin1', '$pin2', '$pin3', '$pin4', '$pin5', '$pin6', '$pin7', '$pin8', '$pin9')"; 

	mysqli_query($strcon,$sql) or die("Log6002");
	mysqli_close($strcon);
	echo ("Log6004");

	//mail($to, $subject, $message, $headers);

}

if($_POST["acao"] == "listaOS"){
	$userid=$_POST['userid'];
    $sql = "SELECT * FROM ordem WHERE userid=$userid ORDER BY osid DESC limit 10";
    $result = $strcon->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row['osid'] . "|" . $row['osdata'] . "|" . $row['osaparelho'] . "#";
        }
    }

    else {
        echo "Log6003";
    }
}

?>