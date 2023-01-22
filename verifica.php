<?php
header('Access-Control-Allow-Origin: *');

include_once("conexao.php");

if($_POST["acao"] == "verificaCategoria"){
    $lojaid = $_POST['lojaid'];
    $categorianame = $_POST['categorianame'];
            
    if (!$strcon) {
        die('Log1001');
    }

    $sql = "SELECT * FROM categorias WHERE lojaid = '$lojaid' AND categorianame = '$categorianame'";


    $result = mysqli_query($strcon, $sql);
 
    $row = mysqli_num_rows($result);
 
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
                echo "Log7011";
        }
    }

    else {
        echo "Log7007";
    }
}

if($_POST["acao"] == "verificaServico"){
    $lojaid = $_POST['lojaid'];
    $serviconame = $_POST['serviconame'];
            
    if (!$strcon) {
        die('Log1001');
    }

    $sql = "SELECT * FROM servicos WHERE lojaid = '$lojaid' AND serviconame = '$serviconame'";


    $result = mysqli_query($strcon, $sql);
 
    $row = mysqli_num_rows($result);
 
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
                echo "Log7011";
        }
    }

    else {
        echo "Log7007";
    }
}

if($_POST["acao"] == "verificaProduto"){
    $lojaid = $_POST['lojaid'];
    $produtoname = $_POST['produtoname'];
            
    if (!$strcon) {
        die('Log1001');
    }

    $sql = "SELECT * FROM produtos WHERE lojaid = '$lojaid' AND produtoname = '$produtoname'";


    $result = mysqli_query($strcon, $sql);
 
    $row = mysqli_num_rows($result);
 
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
                echo "Log7011";
        }
    }

    else {
        echo "Log7007";
    }
}

if($_POST["acao"] == "verificaEmail"){
	$useremail = $_POST['useremail'];
				
	if (!$strcon) {
 		die('Log1001');
	}

	$sql = "SELECT useremail FROM usuarios";

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

if($_POST["acao"] == "verificaCliente"){
    $lojaid = $_POST['lojaid'];
    $usercpf = $_POST['usercpf'];
                
    if (!$strcon) {
        die('Log1001');
    }

    $sql = "SELECT * FROM usuarios WHERE lojaid = '$lojaid' AND usercpf = '$usercpf'";


    $result = mysqli_query($strcon, $sql);
 
    $row = mysqli_num_rows($result);
 
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
                echo "Log7011";
        }
    }

    else {
        echo "Log7007";
    }
}

?>