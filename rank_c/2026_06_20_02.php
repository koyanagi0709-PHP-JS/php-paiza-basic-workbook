<?php
# 問題文URL
#https://paiza.jp/works/mondai/stdout_primer/stdout_primer__specific_split_boss

/**
 * ルール
 * 位の小さい方から３桁区切りにする（末尾から）
 * intvalは64bitなので入力値で64bit以上の値が入力される可能性があるので不使用
 * number_formtも上記同様
 * 入力値は３の倍数とは限らない
*/

/* 定数定義 */
define('PARTITION',',');
define('PARTITION_NUM',3);

/* 変数定義 */
$input_line = trim(fgets(STDIN));
$input_length = strlen($input_line);
$lists = array();
$result = '';

/* 処理 */
$rev_input_line = strrev($input_line); # 文字列反転
$lists = str_split($rev_input_line,PARTITION_NUM);
// print_r($lists);

$result = strrev(implode(PARTITION,$lists));
echo $result;