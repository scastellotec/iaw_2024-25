<?php
    if(isset($_SESSION["msg"])){
        echo "<p>".$_SESSION["msg"]."</p>";
        unset($_SESSION["msg"]);
    }
?>