<?php
/**
 * PHPの標準ライブラリを使って、入力された英語文章の中の大文字もしくは数字から始まる単語の数を重複しないように数えて、結果を表示する。
 */

function solveIt($a,$b){

    $ar = explode(' ', $a);
    $br = explode(' ', $b);
    $arr = array_merge($ar,$br);
    $arr2 = array_unique($arr);
    $cnt = 0;
    foreach ($arr2 as $key => $item) {
        $c = substr($item, 0, 1);
        if (ctype_upper($c) || ctype_digit($c)) {
            $cnt++;
        }
    }
    return $cnt;
}
$handle = fopen ("php://stdin","r");
$_a = fgets($handle);
$_b = fgets($handle);
$ret = solveIt($_a,$_b);
print ($ret);
fclose($handle);

?>
