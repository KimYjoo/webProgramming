<?php
    function mergesort(&$x, $left, $right){ //병합정렬 점화 함수
        if($left < $right){                 //배열을 나눌때 크기가 1미만이 아닐 때까지 나눈다
            $mid = floor(($left+$right)/2); //현재 나누어진 배열의 중간값을 구한다. 이때 나누고 소수점은 버린다.
            mergesort($x, $left, $mid);     //현재 나누어진 배열의 중간값을 기준으로 왼쪽 배열,
            mergesort($x, $mid+1, $right);  //현재 나누어진 배열의 중간값을 기준으로 오른쪽 배열을 병합정렬한다.
            merge($x, $left, $right, $mid); //나눈 두 부분배열을 정렬 및 병합한다.
            
        }
    }

    function merge(&$x, $left, $right, $mid){ //병합 함수 중간 인덱스를 기준으로 두 부분배열을 정렬 및 병합한다.
        $lo = $left;    //왼쪽 부분배열의 첫번째 인덱스
        $hi = $mid+1;   //오른쪽 부분배열의 첫번째 인덱스
        $i = $left;     //합쳐질 배열의 기준 인덱스
        $sorted = array();  //잠시동안 합쳐지는 두 배열의 요소를 담아둘 배열
        
        while($lo <= $mid && $hi <= $right){    //두 부분배열의 각각의 기준 인덱스의 요소를 비교하여 더 작은 값을 임시 배열에 넣고 각각의 기준 인덱스를 증가시킨다.
            if($x[$lo] < $x[$hi]){  //왼쪽 부분배열의 요소가 더 작을 때
                $sorted[$i++] = $x[$lo++];
            }
            else{   //오른쪽 부분배열의 요소가 더 작을 때
                $sorted[$i++] = $x[$hi++];
            }
        }
        if($hi > $right){   //오른쪽 부분배열의 요소가 다 들어가고 왼쪽 부분 배열의 요소가 남았을 떄
            while($lo <= $mid){ //왼쪽 부분배열의 남은 요소를 임시배열에 모두 넣어준다.
                $sorted[$i++] = $x[$lo++];
            }
        }   
        if($lo > $mid){     //왼쪽 부분배열의 요소가 다 들어가고 오른쪽 부분 배열의 요소가 남았을 떄
            while($hi <= $right){   //오른쪽 부분배열의 남은 요소를 임시배열에 모두 넣어준다.
                $sorted[$i++] = $x[$hi++];
            }
        }

        for($j = $left; $j <= $right; $j++){ //병합이 끝난 임시배열을 원래 배열에 적용시킨다.
            $x[$j] = $sorted[$j];
        }
        for($j = $left; $j <= $right; $j++){ // 현재 상황 출력
            echo $x[$j]." ";
        }
        echo "<br>";
    }


    function quicksort(&$x, $left, $right){ //퀵정렬 점화 함수
        if($left < $right){ //부분적으로 나누어진 배열의 크기가 1미만이 아닐때
            $pivot = partition($x, $left, $right); //피벗을 기준으로 현재 피벗의 위치를 반환한다.
            for($i = 0; $i < $pivot; $i++){ //현재 상황 출력 (피벗 기준 왼쪽)
                echo $x[$i]." ";
            }
            echo "_{ $x[$pivot] }_ ";//현재 상황 출력 (피벗)
            for($i = $pivot +1; $i < count($x); $i++){//현재 상황 출력 (피벗 기준 오른쪽)
                echo $x[$i]." ";
            }
            echo "<br>";
            quicksort($x, $left, $pivot-1); //피벗 기준 왼쪽을 다시 퀵정렬
            quicksort($x, $pivot+1, $right); //피벗 기준 오른쪽을 다시 퀵정렬
        }
    }
    function swap(&$x, $left, $right){ //두 요소 교환 함수
        $tmp = $x[$left];
        $x[$left] = $x[$right];
        $x[$right] = $tmp;
    }
    function partition(&$x, $left, $right){ //피벗을 기준으로 오른쪽 왼쪽을 나누는 함수
        $pivot = $x[$left]; //가장 왼쪽의 요소를 피벗으로 정한다.
        $lo = $left+1; //가장 왼쪽의 다음 요소부터 피벗보다 작은지 비교
        $hi = $right; //가장 오른쪽의 요소부터 피벗보다 큰지 비교
        while($lo <= $hi){ //각 기준 인덱스가 교차하지 않았을 때 반복
            while($lo <= $hi && $x[$lo] <= $pivot) $lo++; //피벗을 기준으로 왼쪽에서 출발한 요소가 더 작다면 지나치고 더 큰값이 나왔을 때 정지
            while($lo <= $hi && $x[$hi] > $pivot) $hi--;//피벗을 기준으로 오른쪽에서 출발한 요소가 더 크다면 지나치고 더 작은값이 나왔을 때 정지
            if($lo <= $hi){
                swap($x, $lo, $hi); //멈춰있는 두 인덱스의 요소를 교환
            }

        }
        swap($x, $left, $hi); //피벗이 들어갈 위치가 정해졌으면 피벗을 해당 위치의 값과 교환
        return $hi; //피벗 위치 반환
    }
    $s = array(11, 23, 5, 71, 90, 151, 133, 15, 19, 9, 25, 26, 24, 14, 52, 30, 82, 65, 21);
    
    $x = $s;
    echo "병합정렬<br>before : ";

    for($j = 0; $j < count($x); $j++){ // 현재 상황 출력
        echo $x[$j]." ";
    }
    echo "<br>";
    mergesort($x,0,count($x)-1);
    echo "after : ";

    for($j = 0; $j < count($x); $j++){ // 현재 상황 출력
        echo $x[$j]." ";
    }
    echo "<br>";
    echo "<br>";

    $x = $s;
    echo "퀵정렬<br>before : ";

    for($j = 0; $j < count($x); $j++){ // 현재 상황 출력
        echo $x[$j]." ";
    }
    echo "<br>";
    quicksort($x,0,count($x)-1);
    echo "after : ";

    for($j = 0; $j < count($x); $j++){ // 현재 상황 출력
        echo $x[$j]." ";
    }
    echo "<br>";
?>