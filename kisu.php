<?php
/**
 * PHPの標準ライブラリを使って、入力されたカンマ区切りの数字の列の奇数位の数字を取り除いて、ただし、前の数字と同じ場合残って、結果を表示する。
 */

function solveIt($a){
    //
    $arr = explode(',', $a);
    $ret = '';
    $pre = null;
    for ($i = 0; $i < count($arr); $i++) {
        if ($i % 2 != 0) {
            $ret .= $arr[$i].',';
        } elseif ($arr[$i] == $pre) {
            $ret .= $arr[$i].',';
        }
        $pre = $arr[$i];
    }
    if (strlen($ret) > 0) {
        $ret = substr($ret, 0, strlen($ret) - 1);
    }
    return $ret;
}
$handle = fopen ("php://stdin","r");
$_a = fgets($handle);

$ret = solveIt($_a);
print ($ret);
fclose($handle);

?>

