<?php
    $fp = fopen("lesson6_txt.txt", "r"); //파일 열기
    $count = 0; // 공백 포함 글자수
    $n_count = 0; // 공백 제거 글자수
    while(!feof($fp)){ // 파일의 다음 문자열이 없을 때까지 반복
        if ($count>0) $count++; // 파일에 있는 문자열 한 줄의 글자수를 검사할 때 뒤의 공백을 삭제했는데, 줄바꿈 문자까지 삭제해버렸다. 따라서 이 문장은 줄바꿈 문장을 세는 문장이다.
        $text = rtrim(fgets($fp)); // 공백 포함하면서 뒤의 잉여 공백 문자를 trim()함수를 이용하여 삭제
        $n_text = preg_replace("/\s+/", "", $text); // 문자열에 있는 모든 공백을 삭제하여 문자열을 다시 만듬
        $count += mb_strlen($text, "utf-8"); //공백 포함 문자열 개수 세기
        $n_count += mb_strlen($n_text, "utf-8"); //공백 제거 문자열 개수 세기
    }
    echo "text 글자수 (공백 포함) : $count 자<br>";
    echo "text 글자수 (공백 제외) : $n_count 자";

    fclose($fp);// 파일 닫기
?>