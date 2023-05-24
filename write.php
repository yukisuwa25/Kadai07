<?php
function h($val){
    return htmlspecialchars($val,ENT_QUOTES);
}
$name = $_POST["name"];
$mail = $_POST["mail"];
$hobby = $_POST["hobby"];
$co = ",";
//文字作成
$str .= $name.$co.$mail.$co.$hobby;
//file読み込み
$file = fopen("./data/data.txt","a");
fwrite($file, $str."\n");
fclose($file);
?>

<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    <div>
        <?= h($str) ?>
    </div>
    <ul>
        <li><a href="index.php">戻る</a></li>
    </ul>
</body>
</html>