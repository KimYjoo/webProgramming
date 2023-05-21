
<?= "숫자를 입력하시오. (양수)" ?>
<form name = "form1" method = "post">
    <input type = "text" name = "user_input"/>
    <input type = "submit" value = "확인" name = "check"/>
</form>
<?php
    session_start();
    if(isset($_POST["check"])){
        if(ctype_alpha($_POST['user_input'])){ 
            echo "숫자가 아닙니다. 숫자를 입력해주세요.<br>";
            
        }
        else if($_SESSION['count'] >= 5){
            echo "시도 횟수 : ".$_SESSION['count']."<br>";
            echo "최대 시도 회수가 초과했습니다!";
        }
        else {
            $_SESSION['user_input'] = $_POST['user_input'];
            $_SESSION['count']+=1;
            echo "시도 횟수 : ".$_SESSION['count']."<br>";
            if($_SESSION['randNum']>$_SESSION['user_input']) echo "당신이 입력한 숫자 ".$_SESSION['user_input']."보다 Up!<br>";
            else if($_SESSION['randNum']<$_SESSION['user_input']) echo "당신이 입력한 숫자 ".$_SESSION['user_input']."보다 Down!<br>";
            else echo "당신이 입력한 숫자 ".$_SESSION['user_input']."은 정답입니다!<br>";
            
        }
    }
    else{
        $_SESSION['randNum'] = rand(1, 100);
        $_SESSION['count'] = 0;
        echo "시도 횟수 : ".$_SESSION['count']."<br>";

    }
    
?>