<?php

$person = ["name"=> "김말똥","gender"=>"남","tel"=>'010-1212'];

foreach ($person as $key => $value ){
        print "$key:$value"."<br/>";
}

foreach ($person as $key => $value ){
    if ($key == 'name'){
        $a = '이름';
    }else if($key == 'gender'){
        $a="성별";
    }else{
        $a = '전화번호';
    }
    print "$a:$value"."<br/>";
}
?>
