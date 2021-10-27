<?php

/* 
 *배열: 여러 개의 그릇을 가진 변수. 
 * 여러 개의 그릇을 식별할 수 있는 순번(인덱스)이 있다.
 * 순번은 0부터 시작
 * 할당 연산자 이용
 * $arr[] = "사과";
 *  
 */
$arr[]="사과";
$arr[]="오렌지";
$arr[]="바나나";

$arr[0]="배";

print $arr[0];
print "<br/>";
print $arr[2];
print "<br/>";
print $arr[1];
print "<br/>";

// 배열작성함수 array()

$a = array(10,20,33,12,34,22);

$b = array("사과","오렌지","바나나","배","포도");

print "<br/>";
print $a[4];
print "<br/>";
print $b[2];
print "<br/>";

$d =[]; //php 5.4 이상에서 가능

$d = [1,2,3,4,5];

print $d[3];

//explode(구분자, 문자열): 문자열("서울/광주/부산") => 구분자 "/"
print"<br>";
$data = explode("/", "서울/부산/대구/광주");
print $data[0];
print "<br/>";
print $data[1];
print "<br/>";
print $data[2];
print "<br/>";
?>
