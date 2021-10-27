<?php
/* 다차원배열: 배열과 연관배열을 조합하는 배열
 */
$member[]=array("name"=>"홍길동","age"=>30,"tel"=>"010-1231123");
$member[]=array("name"=>"강말똥","age"=>40,"tel"=>"010-12121212");

print $member[0]["age"];
print "<br/>";
print $member[1]["age"];

$member1[]=["name"=>"홍길복","age"=>20,"tel"=>"010-12122424"];

print "<br/>";
print $member1[0]["name"];
?>

