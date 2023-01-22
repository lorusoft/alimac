<?php
header('Access-Control-Allow-Origin: *');

include_once("conexao.php");

if($_POST["acao"] == "carregaCategoria"){
	$lojaid = $_POST['lojaid'];
				
	if (!$strcon) {
 		die('Log7001');
	}

	$sql = "SELECT * FROM categorias WHERE lojaid = '$lojaid' ORDER BY categorianame ASC";

	$result = mysqli_query($strcon, $sql);
 
    $row = mysqli_num_rows($result);
 
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
                echo $row["categorianame"] . "#";
        }
    }

    else {
        echo "Log7003";
    }
}

if($_POST["acao"] == "cadastroCategoria"){
	$userid = $_POST['userid'];
	$lojaid = $_POST['lojaid'];
	$categorianame = $_POST['categorianame'];
		
	if (!$strcon) {
 		die('Log1001');
	}

	$sql = "INSERT INTO categorias (userid, lojaid, categorianame) VALUES ('$userid', '$lojaid', '$categorianame')"; 

	mysqli_query($strcon,$sql) or die("Log7002");
	mysqli_close($strcon);
	echo ("Log7004");

}

if($_POST["acao"] == "deletaCategoria"){
	$lojaid = $_POST['lojaid'];
	$categorianame = $_POST['categorianame'];
		
	if (!$strcon) {
 		die('Log1001');
	}

	$sql = "DELETE FROM categorias WHERE lojaid = '$lojaid' AND categorianame = '$categorianame'";

	mysqli_query($strcon,$sql) or die("Log7012");
	mysqli_close($strcon);
	echo ("Log7013");

}

?>