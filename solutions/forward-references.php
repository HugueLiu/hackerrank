<?php

// $Regex_Pattern = '/^tac(tac(tic)?)*$/'; //Do not delete '/'. Replace __________ with your regex.
// 超前引用：引用出现在匹配之前
// 下述表达式说明:
// \1: (\2tic|(tac))，匹配\2tic或tac
// \2: (tac)
// 第一次匹配时，\2尚未匹配，因此只能匹配tac
// 后面再匹配时，则匹配(tactic|(tac))
$Regex_Pattern = '/^(\2tic|(tac))+$/'; //Do not delete '/'. Replace __________ with your regex.

$handle = fopen ("php://stdin","r");