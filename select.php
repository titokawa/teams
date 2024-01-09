<?php
//データベース接続
$db='mysql:dbname=webcare;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($db,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//「検索」ボタン押下時
if (isset($_POST["search"])) {

//「住所」に入力されている場合
if (isset($_POST["search_address"])){
$search_address = $_POST["search_address"];
}

//実行
$sql="SELECT * FROM hospital WHERE address like '%{$search_address}%' ";
$rec = $dbh->prepare($sql);
$rec->execute();
$rec_list = $rec->fetchAll(PDO::FETCH_ASSOC);

}else{

//「検索」ボタン押下してないとき
$sql='SELECT * FROM hospital WHERE 1';
$rec = $dbh->prepare($sql);
$rec->execute();
$rec_list = $rec->fetchAll(PDO::FETCH_ASSOC);
}

//データベース切断
$dbh=null;
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<style>

/* 全体のフォントと背景を設定 */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

/* テーブルのスタイル */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

th {
    background-color: #f7f7f7;
}

/* フォームのスタイル */
form {
    margin-bottom: 20px;
}

input[type="text"] {
    padding: 8px;
    border: 1px solid #ddd;
    margin-right: 5px;
    width: 80%;
}

input[type="submit"] {
    padding: 10px 20px;
    border: none;
    background-color: #5cb85c;
    color: white;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #4cae4c;
}

/* 検索解除リンクのスタイル */
a {
    color: #337ab7;
    text-decoration: none;
    font-size: 14px;
}

a:hover {
    text-decoration: underline;
}

/* 結果テーブルのリンク */
td a {
    color: #337ab7;
    text-decoration: none;
}

td a:hover {
    text-decoration: underline;
}


</style>

</head>
<body>

<!--検索-->
<form action="select.php" method="POST">
<table border="1" style="border-collapse: collapse">
<tr>
<th>住所</th>
<td><input type="text" name="search_address" value="<?php if( !empty($_POST['search_address']) ){ echo $_POST['search_address']; } ?>"></td></td>
<td><input type="submit" name="search" value="検索"></td>
</tr>
</table>
</form>
<br />

<!--検索解除-->
<?php if (isset($_POST["search"])) {?>
<a href="http://localhost/teams-main/select.php">検索を解除</a><br />
<?php } ?>

<table border="1" style="border-collapse: collapse">
<tr>
<th>病院名</th>
<th>住所</th>
<th>電話番号</th>
<th>外来受付時間</th>
<th>休診日</th>
<th>ホームページ</th>
<th>コメント</th>
</tr>

<!--MySQLデータを表示-->
<?php foreach ($rec_list as $rec) { ?>
<tr>
<td><a href="detail.php?id=<?=$rec["id"]?>"><?php echo $rec['name'];?></td>
<td><?php echo $rec['address'];?></td>
<td><?php echo $rec['tel'];?></td>
<td><?php echo $rec['opentime'];?></td>
<td><?php echo $rec['closed'];?></td>
<td><?php echo $rec['homepage'];?></td>
<td><?php echo $rec['comment'];?></td>
</tr>
<?php } ?>
</table>

</body>
</html>
