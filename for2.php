<?php
$fruit = array('사과','오렌지','바나나','포도','딸기','복숭아','수박');
//print count($fruit)."<br/>";

for ($i=0;$i<count($fruit);$i++){
    print $fruit[$i]."<br/>";
}
$html = "<select name = 'fruit'>\n";
    for ($i=0;$i<count($fruit);$i++){
        $html.="<option value='$i'>$fruit[$i]</option>\n";
    }
    $html.="</select>";

print $html;
?>

<!--<select name =" country">
    <option value="kor">korea</option>
    <option value="eng">English</option>
    <option value="usa">USA</option>
</select>-->