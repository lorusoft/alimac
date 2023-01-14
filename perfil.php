<?php
header('Access-Control-Allow-Origin: *');

include_once("conexao.php");

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
                echo $row["perfilid"] . "|" . $row["userid"] . "|" . $row["username"] . "|" . $row["userlastname"] . "|" . $row["usermatricula"] . "|" . $row["perfiltype"] . "|" . $row["perfilnivel"] . "|" . $row["userrg"] . "|" . $row["usercpf"] . "|" . $row["userendereco"] . "|" . $row["userbairro"] . "|" . $row["usercomplemento"] . "|" . $row["usercidade"] . "|" . $row["useruf"] . "|" . $row["usertelefone"] . "|" . $row["userwhats"] . "|" . $row["useremail"] . "|" . $row["userobservacao"];
        }
    }

    else {
        echo "Log1007";
    }
}

if($_POST["acao"] == "criaPerfil"){
	$userid = $_POST['userid'];
	$username = $_POST['username'];
	$userlastname = $_POST['userlastname'];
	$usermatricula = $_POST['usermatricula'];
	$perfiltype = $_POST['perfiltype'];
	$perfilnivel = $_POST['perfilnivel'];
	$userrg = $_POST['userrg'];
	$usercpf = $_POST['usercpf'];
	$userendereco = $_POST['userendereco'];
	$userbairro = $_POST['userbairro'];
	$usercomplemento = $_POST['usercomplemento'];
	$usercidade = $_POST['usercidade'];
	$useruf = $_POST['useruf'];
	$usertelefone = $_POST['usertelefone'];
	$userwhats = $_POST['userwhats'];
	$useremail = $_POST['useremail'];
	$userobservacao = $_POST['userobservacao'];
	
	if (!$strcon) {
 		die('Log1001');
	}

	$sql = "INSERT INTO perfil (userid, username, userlastname, usermatricula, perfiltype, perfilnivel, userrg, usercpf, userendereco, userbairro, usercomplemento, usercidade, useruf, usertelefone, userwhats, useremail, userobservacao) VALUES ('$userid', '$username', '$userlastname', '$usermatricula', '$perfiltype', '$perfilnivel', '$userrg', '$usercpf', '$userendereco', '$userbairro', '$usercomplemento', '$usercidade', '$useruf', '$usertelefone', '$userwhats', '$useremail', '$userobservacao'); 

	mysqli_query($strcon,$sql) or die("Log1009");
	mysqli_close($strcon);
	echo ("Log1005");

}

?>