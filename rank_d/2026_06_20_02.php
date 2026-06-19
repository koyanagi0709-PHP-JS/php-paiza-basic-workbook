<?php
# 問題文URL
# https://paiza.jp/works/mondai/stdout_primer/stdout_primer__specific_split_step3

/* 定数定義 */
define('PARTITION',' ');
define('RESULT_PARTITION',',');

/* 10個の数値半角区切りを取得します */
$input_line = trim(fgets(STDIN));
$list = explode(PARTITION,$input_line);
$list = array_map('intval',$list);
// print_r($list);

echo implode(RESULT_PARTITION,$list).RESULT_PARTITION;