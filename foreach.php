<?php
// foreach 문을 이용하면 배열과 연관배열에서 값만 꺼내올 수 있다.

/*foreach ($배열 as $키){
 *     처리코드 1;
 *     처리코드 2;
 * }
 */
$a = ['김말똥','강말똥','홍길동'];

foreach ($a as $name){
    print $name."<br/>";
}
?>
