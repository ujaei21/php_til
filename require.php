<?php
// require문,include문: 자주 사용하는 php코드를 달느 파일에 모아두고 
// 필요할 때 파일을 읽어들여 사용할 수 있도록 하는 명령어
// 차이점
// require 오류발생시 메세지 출력없음. Fatal Error가 되어 처리정지.
// include문 오류 발생시 warning을 출력하고 처리코드를 수행한다. 

// require_once() : 지정한 파일을 한 번 읽으면 같은 처리 중에 다시 읽어 들일 수 없다.
// // include_once():  읽었던 파일은 다시 읽지 않음

//requrie("파일명");  변수에 파일명을 지정하면 변수입력가능
//include("파일명");  경로
//파일이 존재하지 않으면 
//php.ini에 설정된 include_path에서 파일을 찾는다.
// include_path에도 파일이 없다면 현재 디렉토리에서 찾는다. 
// 또 없으면? 정지!
?>