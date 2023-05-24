<?php
function h($val){
    return htmlspecialchars($val,ENT_QUOTES);
}
//file読み込み
//1行のみ表示
// $fp = fopen("./data/data.txt", "r");
// $txt = fgets($fp);
// echo $txt;
// fclose($fp);

//全文取得
//file開いて読み込み
$fp = fopen("./data/data.txt", "r");
//テーブルタグ作成
echo '<table border="1">
        <tr>
            <th>名前</th>
            <th>mail</th>
            <th>hobby</th>
        </tr>';
//繰り返し
while(!feof($fp)){
    $txt = fgets($fp);
    $t = explode(",",$txt);

//配列の値格納
echo '<tr>';
echo '<td>'.h($t[0]).'</td>';
echo '<td>'.h($t[1]).'</td>';
echo '<td>'.h($t[2]).'</td>';
echo '</tr>';

    // $t = explode(",",$txt);
    // for($i=0;$i<count($t);$i++){
    //     echo "<td>".h($t[$i])."</td>";
    // }

    // echo h($txt)."<br>";
}
echo '</table>';
//file閉じる
fclose($fp);

//テーブル作成
// $fp = fopen("./data/data.txt", "r");
// echo "<table>
//         <tr>
//             <th>名前</th>
//             <th>mail</th>
//             <th>趣味</th>
//         </th>";
// while(!feof($fp)){
//     $txt = fgets($fp);
//     echo "<tr>";
//     for($i=0;$i<count($txt);$i++){

//     }
//     echo h($txt)."<br>";
// }
// fclose($fp);
?>

<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    <ul>
        <li><a href="index.php">戻る</a></li>
    </ul>
</body>
</html>