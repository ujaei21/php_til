<?php
/* 사용자 정의 함수
 * function 함수명(인수){
 *     코드1:
 *     코드2:
 * }
 * 
 * 호출
 * 함수명(인수)
 */

function hello(){
    print "<h1>";
    print "Hello PHP";
    print "</h1>";
}

hello();
hello();

$myage = 18;

function check($age){
    $check_age = 20;
    $adult_check = ($age<=$check_age)?"성인":"미성년자";
    
    print("당신은 $adult_check 입니다.");
}

check($myage);
?>
