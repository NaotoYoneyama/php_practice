<?php
$name="Yoneyama";
if ($name=="naoto"){
    echo "私はYoneyamaです";
}else {
    echo "私はあなたの名前ではありません";
}

<?php
$total = 1;
echo $total;

for ($i = 1; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;
?>

<?php
$fruits=array("orange","apple","pineapple","kiwi","strawberry");
foreach($fruits as $fruits){
    echo "要素は" . $fruits;
    echo "/n";
}
?>

<?php
$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
    if ($i % 5 == 0){
        echo $i;
 }
}
?>
