<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$goods = htmlspecialchars($_POST['goods'], ENT_QUOTES);
$piece = htmlspecialchars($_POST['piece'], ENT_QUOTES);

echo '私の名前は、' . $name . '<br />';
echo 'ご希望の商品は、' . $goods . '<br />';
echo '注文数は、' . $piece;
