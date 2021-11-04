<?php
/* 반복문(loop): 빠르고 신속 정확 while do~while,for,foreach */

/*while: 조건이 거짓이 될 때까지 처리를 반복한다.
 * do~while: 처리 먼저하고 조건을 판단.
 *  while (condition) 처리코드1;
 * while (condition){
 *     처리코드1;
 *     처리코드2;
 *     ....
 * }
 *  while (condition):
 *     처리코드1;
 *     처리코드2;
 *     ....
 *     endwhile;
 * 
 * do{
 *     처리코드1;
 * }while(조건);
 */

$i = 0;
// 조건이 먼저
//while ($i<=10){
//    print $i++."<br/>";    
//}

// 실행이 먼저, 실행결과에 따라 반복을 할지 말지가 정해지는 경우 사용.
 do{
     print $i++."<br/>";     
 }while($i<=10);

?>