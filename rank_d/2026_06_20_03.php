<?php

# 問題文URL
# https://paiza.jp/works/mondai/stdout_primer/stdout_primer__specific_split_step4

/* 定数定義 */
define('PARTITION',',');
define('END',false);
define('COUNT',10);

/* 変数定義 */
$input_line = trim(fgets(STDIN));
$nowCount = 0;
$result = '';

/* 処理 */
$lists = explode(' ',$input_line);
$lists = array_map('intval',$lists);
// print_r($lists);

do {
    $result .= $lists[$nowCount];
    $result .= PARTITION;
    $nowCount++;
}while($nowCount < COUNT);

$result = substr($result,0,-1);
// $str = rtrim($str, ','); # 末尾のカンマだけ削除
print $result;