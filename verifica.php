<?php
header('Access-Control-Allow-Origin: *');

include_once("conexao.php");

if($_POST["acao"] == "verificaEmail"){
	$useremail = $_POST['useremail'];
				
	if (!$strcon) {
 		die('Log1001');
	}

	$sql = "SELECT * FROM usuarios WHERE useremail = '$useremail'";

	$result = mysqli_query($strcon, $sql);
 
    $row = mysqli_num_rows($result);
 
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
                echo "Log1010";
        }
    }

    else {
        echo "Log1007";
    }
}

if($_POST["acao"] == "carregaUsuario"){
	$useremail = $_POST['useremail'];
				
	if (!$strcon) {
 		die('Log1001');
	}

	$sql = "SELECT * FROM usuarios WHERE useremail = '$useremail'";

	$result = mysqli_query($strcon, $sql);
 
    $row = mysqli_num_rows($result);
 
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
                echo "Log1010";
        }
    }

    else {
        echo "Log1007";
    }
}

if($_POST["acao"] == "verificaPerfil"){
	$userid = $_POST['userid'];
	$useremail = $_POST['useremail'];
				
	if (!$strcon) {
 		die('Log1001');
	}

	$sql = "SELECT * FROM perfil WHERE userid = '$userid' AND useremail = '$useremail'";


	$result = mysqli_query($strcon, $sql);
 
    $row = mysqli_num_rows($result);
 
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
                echo "Log1011";
        }
    }

    else {
        echo "Log1007";
    }
}

?>