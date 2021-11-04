<?php
/*보조제어문 continue break
continue 건너띄기
 */

$a = ["name"=>"홍길동","id"=>'hong',"pw"=>1234,"address"=>"서울"];

foreach($a as $key => $value){
    if ($key == 'name'){
        $title = "이름";
    }else if($key=="id"){
        $title = '아이디';
    }else if ($key == 'address'){
        $title = "주소";
    }else{
        continue;
    }
    print "$title:$value"."<br/>";
}

foreach($a as $key => $value){
    if ($key == 'name'){
        $title = "이름";
    }else if($key=="id"){
        $title = '아이디';
    }else if ($key == 'pw'){
        break;
    }else{
        continue;
    }
    print "$title:$value"."<br/>";
}


?>