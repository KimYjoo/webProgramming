<html>
    <head>
        <meta charset = "utf-8">
    </head>
    <body>
        <h1>설문조사 결과<br></h1>
        <?php
            $gender = $_POST["gender"];
            $age = $_POST["age"];
            $num = count($_POST["favfood"]);
            for($i = 0; $i < $num; $i++){
                $favfood[$i] = $_POST["favfood"][$i];
            }
            $range_location = $_POST["range_location"];
            $range_service = $_POST["range_service"];
            $range_price = $_POST["range_price"];

            $content = $_POST["content"];
        ?>
        성별 : <?= $gender ?><br><br>
        나이 : <?= $age ?><br><br>
        좋아하는 음식 : <?php
        for($i = 0; $i < count($favfood); $i++){
            echo $favfood[$i];
            if($i < count($favfood)-1) echo ", ";
        }
        ?>
        <br><br>
        만족도 조사
        <br>
        <ul>
            <li>본 식당의 위치는 만족스러운가? <?= $range_location?><br></li>
            <li>본 식당의 서비스는 만족스러운가? <?= $range_service?><br></li>
            <li>본 식당의 가격은 적당한가? <?= $range_price?></li>
        </ul>
        <br>
        기타 의견사항 : <?= $content?><br>
    </body>
</html>