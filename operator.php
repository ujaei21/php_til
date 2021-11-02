<?php

// 연산자 산술,대입,비트,삼향연산자
 // 오류제어연산자, 실행연산자, 증감연산자,논리연산자
 
/*
 * 
 */

$result = 5+ 10;
print $result;
print "<br/>";

$result = 5-10;
print $result;
print "<br/>";

$result = 10/5;
print $result;
print "<br/>";

$result = 10%3;
print $result;
print "<br/>";

// 할당연산자  =, +=, .=
// $a += 10; a에 10을 더해서 할당.

$a =10;
$a+=10;
print $a; //20
print "<br/>";

// .= 문자열을 이용해서 계산
$str = '안녕';
print $str;
print "<br/>";

$str .= '홍길동'; //str = $str + '홍길동' (파이썬), $str=$str.'홍길동';
print $str;
print "<br/>";

//비트연산자: 비트단위로 데이터를 조작하기 위한 연산자. 연산결과는 정수
//웹 어플에서는 거의 사용되지 않음
//&(and), |(or),^:XOR,~부정 , << 왼쪽으로 이동,>> 오른쪽으로 이동

$a = 0 & 0;
print $a;
print "<br/>";

$a = 1 & 0;
print $a."<br/>";

$a = 1 & 1;
print $a."<br/>";

$a = 1 | 0;
print $a."<br/>";

$a = 1 ^ 1;
print $a."<br/>";

// 비교연산자 == 같다, === 같고 자료형도 같다. !=,<> 다르다
// !== 서로 같지 않거나 같은 자료형이 아니다.  부등호

print (3==3);



?>
