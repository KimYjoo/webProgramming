<?php
    function buble(&$x){ //버블정렬
        for($i = count($x)-1; $i >= 0 ; $i--){    // 맨 뒤의 요소부터 시작 
            for($j = 1; $j <= $i; $j++){ // 두 번째 요소부터 시작
                if($x[$j] < $x[$j-1]){  //현재 요소와 그 앞에 있는 요소를 비교하여 더 현재 요소가 앞의 요소보다 작으면 교체
                    $tmp = $x[$j];
                    $x[$j] = $x[$j-1];
                    $x[$j-1] = $tmp;
                }
                for($u = 0; $u < count($x); $u++){ //현재 상황 출력
                    echo $x[$u]." ";
                }
                echo "<br>";
            }
        }
    }
    function select(&$x){    //선택정렬
        for($i = 0; $i < count($x); $i++){ //맨처음 요소부터 시작
            $min = $i; // 현재 시도에서 최솟값을 현재 시도의 시작 요소의 인덱스로 초기화
            for($j = $i; $j < count($x); $j++){ // 현재 시도에서 시작요소부터 시작
                if($x[$min] > $x[$j]){ //현재 시도에서 가장 작은 값을 찾는다.
                    $min = $j;
                }
            }
            if($min != $i){ // 현재 시도에서 가장 작은 값이 시작 요소가 아닐 때 가장 작은 요소의 인덱스와 시작 요소의 인덱스로 서로 교환
                $tmp = $x[$i];
                $x[$i] = $x[$min];
                $x[$min] = $tmp;
            }
            for($j = 0; $j <= $i; $j++){ //현재까지의 정렬상황 출력
                echo $x[$j]." ";
            }
            echo "<br>";
        }
    }
    function insert(&$x){ //삽입 정렬
        for($i=0; $i < count($x); $i++){ //0부터 배열의 끝까지 반복
            $key = $x[$i];  // 현재 요소를 키값으로 둠
            $j = $i - 1;    // 현재 요소 앞의 요소붙터 검사
            for(; $j >= 0; $j--){   // 현재 요소 앞부터 처음 요소 까지 검사
                if($key < $x[$j]){ // 키 값보다 크면 뒤로 한칸 민다
                    $x[$j+1] = $x[$j]; 
                }
                else{ // 키값보다 작은값을 발견하면 반복 중단
                    break;
                }
            }
            $x[$j+1] = $key; // 알맞은 위치에 키값 삽입
            for($j = 0; $j <= $i; $j++){ // 현재 상황 출력
                echo $x[$j]." ";
            }
            echo "<br>";
        }
    }
    $s = array(11, 23, 5, 71, 90, 151, 133, 15, 19, 9, 25, 26, 24, 14, 52, 30, 82, 65, 47, 21);
    $x = $s;
    echo "버블정렬<br>before : ";
    for($j = 0; $j < count($x); $j++){
        echo $x[$j]." ";
    }
    buble($x);
    echo "after : ";
    for($j = 0; $j < count($x); $j++){
        echo $x[$j]." ";
    }
    echo "<br>";
    echo "<br>";

    echo "선택정렬<br>before : ";

    for($j = 0; $j < count($x); $j++){
        echo $x[$j]." ";
    }
    $x = $s;
    select($x);
    echo "after : ";
    for($j = 0; $j < count($x); $j++){
        echo $x[$j]." ";
    }
    echo "<br>";
    echo "<br>";

    echo "삽입정렬<br>before : ";

    for($j = 0; $j < count($x); $j++){
        echo $x[$j]." ";
    }
    $x = $s;
    insert($x);
    echo "after : ";

    for($j = 0; $j < count($x); $j++){
        echo $x[$j]." ";
    }
