<?php

# 問題文URL
# https://paiza.jp/works/mondai/stdout_primer/stdout_primer__specific_split_step2

/* 定数定義 */
define('COUNT',3);
define('PARTITION','|');

/* 変数 */
$list = array(); # 文字列格納用
$result = '';

for($i=0; $i<COUNT; $i++) {
    $str = trim(fgets(STDIN));
    array_push($list,$str);
    
    if($i+1 === COUNT) {
        $result = implode(PARTITION,$list);
    }
}

// print_r($list);
echo $result;