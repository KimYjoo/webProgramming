
<html>
    <head>
        <meta charset = "utf-8">
    </head>
    <body>
        <?php
            $content1 = $_GET["content1"];
            $content2 = $_GET["content2"];
            $result = $content1*$content2;
            echo "단가는 $content1 이고, 개수는 $content2 일 때, 총 금액은 $result 입니다.";
        ?> 
    </body>
</html>     
