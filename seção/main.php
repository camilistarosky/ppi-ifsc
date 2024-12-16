<?php
    session_start();

    if( !isset($_POST["login"])) {
        header("Location: login.php?erro=1");
        exit();
    }

    if(isset($_GET["txt"])) {
        $_SESSION["login"]=$_GET["txt"];
        exit();
    }

    echo $_SESSION["login"];
    echo $_SESSION["txt"];

?>


<h2>Menu</h2>
<a href="sair.php"> </a><p>Sair</p>