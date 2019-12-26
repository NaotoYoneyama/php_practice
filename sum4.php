<?php
$str = "<p><?php var_dump('string'); ?>テスト<br>テキスト</p>";
echo strip_tags( $str, '<h1><br>');