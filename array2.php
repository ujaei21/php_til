<?php
/* 연관배열
 * 그릇에 키를 붙여서 메모리에 할당한다. 파이썬 dictionary
 */
$member["name"] = "홍길동";
$member["age"] = 28;

print $member["name"];

echo "<br/>";
print$member["age"];

// arrayg 함수 사용하기 array("키" => "값") PHP 5.4 이상
$data = array("name"=>"김말똥","age"=>20,"address"=> "서울");

print "<br/>";
print $data["name"];
print "<br/>";
print $data["age"];
print "<br/>";
print $data["address"];
        

?>
