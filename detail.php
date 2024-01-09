<?php
$id = $_GET["id"]; //?id~**を受け取る

//データベース接続
$db='mysql:dbname=webcare;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($db,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


//実行
$sql="SELECT * FROM hospital WHERE id = $id";
$rec = $dbh->prepare($sql);
$rec->execute();
$rec_list = $rec->fetchAll(PDO::FETCH_ASSOC);
    
//データベース切断
$dbh=null;

?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>病院詳細情報</title>
  <style>
    /* 全体のフォントと背景を設定 */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    /* カードスタイルの定義 */
    .card {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        margin: 10px;
        padding: 20px;
        flex-basis: calc(50% - 20px); /* グリッドレイアウトのための設定 */
    }

    /* カード内の見出しスタイル */
    .card-header {
        font-size: 18px;
        color: #333;
        margin-bottom: 10px;
        border-bottom: 1px solid #333;
        padding-bottom: 5px;
    }

    /* カード内のテキストスタイル */
    .card-text {
        font-size: 16px;
        line-height: 1.6;
        color: #666;
        margin-bottom: 10px;
    }

    /* リンクのスタイル */
    a {
        color: #337ab7;
        text-decoration: none;
        font-size: 16px;
    }

    a:hover {
        text-decoration: underline;
    }

    /* ボタンのスタイル */
    .btn {
        display: inline-block;
        padding: 8px 15px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        color: #fff;
        background-color: #5cb85c;
        cursor: pointer;
        text-decoration: none;
    }

    .btn:hover {
        background-color: #4cae4c;
    }
  </style>
</head>
<body>

<!-- 各情報をカード形式で表示 -->
<?php foreach ($rec_list as $rec) { ?>
  <div class="card">
    <div class="card-header">病院名</div>
    <p class="card-text"><?php echo htmlspecialchars($rec['name'], ENT_QUOTES, 'UTF-8');?></p>
  </div>

  <div class="card">
    <div class="card-header">住所</div>
    <p class="card-text"><?php echo htmlspecialchars($rec['address'], ENT_QUOTES, 'UTF-8');?>　<a href="https://www.google.co.jp/maps/place/<?php echo urlencode($rec['address']); ?>" class="btn">MAP</a></p>
  </div>

  <div class="card">
    <div class="card-header">電話番号</div>
    <p class="card-text"><?php echo htmlspecialchars($rec['tel'], ENT_QUOTES, 'UTF-8');?></p>
  </div>

  <div class="card">
    <div class="card-header">外来受付時間</div>
    <p class="card-text"><?php echo htmlspecialchars($rec['opentime'], ENT_QUOTES, 'UTF-8');?></p>
  </div>

  <div class="card">
    <div class="card-header">休診日</div>
    <p class="card-text"><?php echo htmlspecialchars($rec['closed'], ENT_QUOTES, 'UTF-8');?></p>
  </div>

  <div class="card">
    <div class="card-header">ホームページ</div>
    <p class="card-text"><a href="<?php echo htmlspecialchars($rec['homepage'], ENT_QUOTES, 'UTF-8');?>" class="btn">ホームページへ</a></p>
  </div>

  <div class="card">
    <div class="card-header">コメント</div>
    <p class="card-text"><?php echo htmlspecialchars($rec['comment'], ENT_QUOTES, 'UTF-8');?></p>
  </div>
<?php } ?>

</body>
</html>














<!-- <!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title></title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
  
</head>
<body>

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

<?php foreach ($rec_list as $rec) { ?>
<tr>

<td><?php echo $rec['name'];?></td>
<td><?php echo $rec['address'];?></td>
<td><?php echo $rec['tel'];?></td>
<td><?php echo $rec['opentime'];?></td>
<td><?php echo $rec['closed'];?></td>
<td><?php echo $rec['homepage'];?></td>
<td><?php echo $rec['comment'];?></td>
</tr>
<?php } ?>
</table>
Main[End] -->


<!-- </body>
</html>  -->
