<?php
// branch reset groups: 共用集合
// 格式　(? | regex)
// eg. (?|(x)|(y)|(z))
// 说明：该表达式与((x)|(y)|(z))的区别在于，后者\1为(x)，\2为(y), \3为(x)
// 而前者中：\1为该表示式整体，即((x)|(y)|(z)), 即共用一个序号
$Regex_Pattern = '/^\d{2}(?|(-)|(:)|(---)|(\.))\d{2}\1\d{2}\1\d{2}$/'; //Do not delete '/'. Replace __________ with your regex.

$handle = fopen ("php://stdin","r");
$Test_String = fgets($handle);
if(preg_match($Regex_Pattern, $Test_String, $output_array)){
    print ("true");
} else {
    print ("false");
}

fclose($handle);
?>
