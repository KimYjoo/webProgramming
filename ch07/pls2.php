<html>
    <head>
        <meta charset = "utf-8">
    </head>
    <body>
        <form name = "form1" action = "pls2view.php" method = "post">
            <h1>설문조사<br></h1>
            <fieldset>
                <legend>성별과 나이를 입력하세요.</legend>
                성별 : <input type = "radio" name = "gender" value = "남자" checked> 남자
                <input type = "radio" name = "gender" value = "여자"> 여자<br>
                나이 : <input type = "text" name = "age"><br>
            </fieldset>
            <br>
            <fieldset>
                <legend>평소 좋아하는 음식을 선택하세요.(1개 이상)</legend>
                <input type = "checkbox" name = "favfood[]" value = "한식"> 한식
                <input type = "checkbox" name = "favfood[]" value = "중식"> 중식
                <input type = "checkbox" name = "favfood[]" value = "일식"> 일식
                <input type = "checkbox" name = "favfood[]" value = "양식"> 양식<br>
            </fieldset>
            <br>
            <fieldset>
                <legend>다음 문항에 대해 5점 척도로 답하세요.</legend>
                본 식당의 위치는 만족스러운가? 1<input type = "range" name = "range_location" min = "1" max = "5" value = "위치">5<br> 
                본 식당의 서비스는 만족스러운가? 1<input type = "range" name = "range_service" min = "1" max = "5" value = "서비스">5<br> 
                본 식당의 가격은 적당한가? 1<input type = "range" name = "range_price" min = "1" max = "5" value = "가격">5<br> 
            </fieldset>
            <br>
            기타 의견 사항<br>
            <textarea rows = "5" cols = "60" name = "content" placeholder = "의견을 적어주세요!"></textarea>
            <br>
            <input type = "submit" value = "확인">
            <input type = "reset" value = "취소">
    </body>
</html>

