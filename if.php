<?php
// 조건문: if~else, if~esle if~ else;
/*
 * if (조건식) {
 *     처리며령코드1;
 *     처리며령코드2;
 * }
 * 단순 if 문
 * if (조건식) 처리며령코드1;
  */

/* if else문
 * if (조건문){
 *      처리명령
 * }else{
 *     처리명령
 * }*/


$user1 = "김말똥"; //사용자등록
$pw = "1234"; // 사용자 입력 비밀번호

$member_name = "김말똥"; // 멤버로 등록된 이름
$member_pw = "1234"; // '' 비밀번호

if ($user1 == $member_name && $pw == $member_pw){
    print "길말똥은 회원이십니다.";
}else{
    print "당신은 회원이 아닙니다.";
}  
print "<br/>";
//삼향연산자
$isMember = ($user1 == $member_name && $pw == $member_pw)?"회원입니다.":"회원이 아닙니다.";
print $isMember;
print "<br/>";



?>
