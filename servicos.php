<?php
header('Access-Control-Allow-Origin: *');

include_once("conexao.php");

if($_POST["acao"] == "carregaServico"){
	$lojaid = $_POST['lojaid'];
				
	if (!$strcon) {
 		die('Log7001');
	}

	$sql = "SELECT * FROM servicos WHERE lojaid = '$lojaid'";

	$result = mysqli_query($strcon, $sql);
 
    $row = mysqli_num_rows($result);
 
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
                echo $row["serviconame"] . " - " . $row["servicodesc"] . " - R$: " . $row["servicovalor"] . "#";
        }
    }

    else {
        echo "Log7003";
    }
}

if($_POST["acao"] == "cadastroServico"){
	$lojaid = $_POST['lojaid'];
	$userid = $_POST['userid'];
	$serviconame = $_POST['serviconame'];
	$servicodesc = $_POST['servicodesc'];
	$servicovalor = $_POST['servicovalor'];
		
	if (!$strcon) {
 		die('Log1001');
	}

	$sql = "INSERT INTO servicos (lojaid, userid, serviconame, servicodesc, servicovalor) VALUES ('$lojaid', '$userid', '$serviconame', '$servicodesc', '$servicovalor')"; 

	mysqli_query($strcon,$sql) or die("Log7002");
	mysqli_close($strcon);
	echo ("Log7004");

}

if($_POST["acao"] == "deletaServico"){
	$lojaid = $_POST['lojaid'];
	$serviconame = $_POST['serviconame'];
		
	if (!$strcon) {
 		die('Log1001');
	}

	$sql = "DELETE FROM servicos WHERE lojaid = '$lojaid' AND serviconame = '$serviconame'";

	mysqli_query($strcon,$sql) or die("Log7012");
	mysqli_close($strcon);
	echo ("Log7013");

}

?>