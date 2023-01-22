<?php
header('Access-Control-Allow-Origin: *');

include_once("conexao.php");

if($_POST["acao"] == "carregaProdutos"){
	$lojaid = $_POST['lojaid'];
				
	if (!$strcon) {
 		die('Log7001');
	}

	$sql = "SELECT * FROM produtos WHERE lojaid = '$lojaid' ORDER BY produtoname ASC";

	$result = mysqli_query($strcon, $sql);
 
    $row = mysqli_num_rows($result);
 
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
                echo $row["produtoid "] . "|" . ["userid"] . "|" . ["produtoname"] . "|" . ["produtodesc"] . "|" . ["produtocateg"] . "|" . ["produtoqnt"] . "|" . ["produtocusto"] . "|" . ["produtovenda"] . "|" . ["produtoobs"] . "#";
        }
    }

    else {
        echo "Log7003";
    }
}

if($_POST["acao"] == "cadastroProdutos"){
	$lojaid = $_POST['lojaid'];
	$userid = $_POST['userid'];
	$produtoname = $_POST['produtoname'];
	$produtodesc = $_POST['produtodesc'];
	$produtocateg = $_POST['produtocateg'];
	$produtoqnt = $_POST['produtoqnt'];
	$produtocusto = $_POST['produtocusto'];
	$produtovenda = $_POST['produtovenda'];
	$produtoobs = $_POST['produtoobs'];
		
	if (!$strcon) {
 		die('Log1001');
	}

	$sql = "INSERT INTO produtos (lojaid, userid, produtoname, produtodesc, produtocateg, produtoqnt, produtocusto, produtovenda, produtoobs) VALUES ('$lojaid', '$userid', '$produtoname', '$produtodesc', '$produtocateg', '$produtoqnt', '$produtocusto', '$produtovenda', '$produtoobs')"; 

	mysqli_query($strcon,$sql) or die("Log7002");
	mysqli_close($strcon);
	echo ("Log7004");

}

if($_POST["acao"] == "deletaProduto"){
	$lojaid = $_POST['lojaid'];
	$produtoname = $_POST['produtoname'];
		
	if (!$strcon) {
 		die('Log1001');
	}

	$sql = "DELETE FROM produtos WHERE lojaid = '$lojaid' AND produtoname = '$produtoname'";

	mysqli_query($strcon,$sql) or die("Log7012");
	mysqli_close($strcon);
	echo ("Log7013");

}

?>