<?php
header('Access-Control-Allow-Origin: *');

include_once("conexao.php");

if($_POST["acao"] == "cadastroCliente"){
	$username = $_POST['username'];
	$userlastname = $_POST['userlastname'];
	$usertype = $_POST['usertype'];
	$usercpf = $_POST['usercpf'];
	$usercelular = $_POST['usercelular'];
	$usertelefone = $_POST['usertelefone'];
	$useremail = $_POST['useremail'];
	$userpass = $_POST['userpass'];
	$userendereco = $_POST['userendereco'];
	$userendnumber = $_POST['userendnumber'];
	$userbairro = $_POST['userbairro'];
	$useruf = $_POST['useruf'];
	$usercidade = $_POST['usercidade'];
	$userobs = $_POST['userobs'];
	$lojaid = $_POST['lojaid'];
	$to = $_POST['to'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = 'From: gtjunior13@gmail.com' . "\r\n" . 'Reply-To: gtjunior13@gmail.com' . "\r\n" . 'X-Mailer: PHP/'.phpversion();

	if (!$strcon) {
 		die('Log1001');
	}

	$sql = "INSERT INTO usuarios (username, userlastname, usertype, usercpf, usercelular, usertelefone, useremail, userpass, userendereco, userendnumber, userbairro, useruf, usercidade, userobs, lojaid) VALUES ('$username', '$userlastname', '$usertype', '$usercpf', '$usercelular', '$usertelefone', '$useremail', '$userpass', '$userendereco', '$userendnumber', '$userbairro', '$useruf', '$usercidade', '$userobs', '$lojaid')"; 

	mysqli_query($strcon,$sql) or die("Log1002");
	mysqli_close($strcon);
	echo ("Log1004");

	mail($to, $subject, $message, $headers);

}

if($_POST["acao"] == "carregaCliente"){
	$usercpf = $_POST['usercpf'];
			
	if (!$strcon) {
 		die('Log1001');
	}

	$sql = "SELECT * FROM usuarios WHERE usercpf = '$usercpf'";

	$result = mysqli_query($strcon, $sql);
 
    $row = mysqli_num_rows($result);
 
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
                echo $row["userid"] . "|" . $row["userbanned"] . "|" . $row["userverificated"] . "|" . $row["lojaid"] . "|" . $row["userperfil"] . "|" . $row["username"] . "|" . $row["userlastname"] . "|" . $row["usertype"] . "|" . $row["usercpf"] . "|" . $row["usercelular"] . "|" . $row["usertelefone"] . "|" . $row["useremail"] . "|" . $row["userendereco"] . "|" . $row["userendnumber"] . "|" . $row["userbairro"] . "|" . $row["useruf"] . "|" . $row["usercidade"] . "|" . $row["userobs"];
        }
    }

    else {
        echo "Log1003";
    }
}

if($_POST["acao"] == "deletaCliente"){
	$lojaid = $_POST['lojaid'];
	$usercpf = $_POST['usercpf'];
		
	if (!$strcon) {
 		die('Log1001');
	}

	$sql = "DELETE FROM usuarios WHERE lojaid = '$lojaid' AND usercpf = '$usercpf'";

	mysqli_query($strcon,$sql) or die("Log7012");
	mysqli_close($strcon);
	echo ("Log7013");

}

if($_POST["acao"] == "listaClientes"){
	$lojaid = $_POST['lojaid'];
			
	if (!$strcon) {
 		die('Log1001');
	}

	$sql = "SELECT * FROM usuarios WHERE lojaid = '$lojaid' AND userperfil = '0' ORDER BY username ASC";

	$result = mysqli_query($strcon, $sql);
 
    $row = mysqli_num_rows($result);
 
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
                echo $row["userid"] . "|" . $row["userbanned"] . "|" . $row["userverificated"] . "|" . $row["username"] . " " . $row["userlastname"] . " - " . $row["usercpf"] . " - " . $row["usercelular"] . " - " . $row["useremail"] . " - " . $row["userendereco"] . ", " . $row["userendnumber"] . " - " . $row["userbairro"] . ", " . $row["usercidade"] . " - " . $row["useruf"] . " - Obs.: " . $row["userobs"] . "#";
        }
    }

    else {
        echo "Log1003";
    }
}

?>