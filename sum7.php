<?php
echo '現在のUnixタイムスタンプ：'.time();
 
echo '<br>';
 
//3日後のタイムスタンプを取得
$nweek = time() + (3 * 24 * 60 * 60);
echo '3日後のUnixタイムスタンプ：'.$nweek;
?>

<?php
$timestamp = mktime(0,0,0,12,24,2019);
echo $timestamp;
?>

<?php
echo date('Y/m/d');
echo '<br>';

echo date('Ym-d H:i:s');
echo date('Y年m月d日 H時i分s秒');
echo '<br>';
?>