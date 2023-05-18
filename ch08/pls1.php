<form name = "form1" method = "post" action = "pls1.php">
            <input type = "submit" name = "pls1" value = "+1button"/>
            <input type = "submit" name = "reset" value = "rest"/><br>
</form>
<?php
    session_start();
    if(isset($_POST["pls1"])){
        $_SESSION['count'] += 1;
    }
    else{
        $_SESSION['count'] = 0;
    }
    echo "<br>".$_SESSION['count'];
?>