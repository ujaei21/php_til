<?php
// 다중if 문: 조건식이 많은 경우 사용하는 조건문
/*if (조건식){
 *     처리코드1;
 * }else if(조건식){
 *     처리코드2;
 * }else{
 *     처리코드3;
 * }
 */

$score = 60;

if ($score>=90){
    print "A";
}else if ($score >= 80){
    print "B";
}else if ($score >= 70){
    print 'C';
}else{
    print "불합격";
}
print "<br/>"
?>
