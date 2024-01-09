<!DOCTYPE html>
<html lang="ja">

<style>

/* 全体のフォントと背景を設定 */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

/* ヘッダー部分のスタイル */
.header {
    background-color: #333;
    color: white;
    padding: 10px 0;
    text-align: center;
}

.headerlogo {
    font-size: 24px;
    font-weight: bold;
}

/* ナビゲーションのスタイル */
nav {
    display: flex;
    justify-content: center;
    background-color: #444;
}

.nav-li {
    list-style: none;
    padding: 10px 20px;
}

.nav-li a {
    text-decoration: none;
    color: white;
    font-weight: bold;
}

.nav-li a:hover {
    color: #f4f4f4;
    background-color: #575757;
}

/* 中央コンテンツエリアのスタイル */
.center {
    width: 80%;
    margin: 20px auto;
    background-color: white;
    padding: 20px;
    box-shadow: 0px 0px 10px 0px #aaa;
}

h2 {
    color: #333;
    border-bottom: 2px solid #333;
    padding-bottom: 5px;
}

/* フォームのスタイル */
form {
    margin-top: 20px;
}

input[type="text"] {
    padding: 10px;
    border: 1px solid #ddd;
    margin-right: 10px;
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

/* リンクテーブルのスタイル */
.bl_linkTable {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.bl_linkTable th,
.bl_linkTable td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

.bl_linkTable th {
    background-color: #f7f7f7;
}

.bl_linkTable td a {
    color: #337ab7;
    text-decoration: none;
}

.bl_linkTable td a:hover {
    text-decoration: underline;
}




</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>webケアクリニック</title>
</head>

<header class="header">
        <p class="headerlogo">webケアクリニック</p> 

  
    <nav>
        <div class="nav-li">
            <a href="./mypage.html">マイページ</a>
        </div>
        <div class="nav-li" id="login">
            <a href="#login">ログイン</a>
        </div>
        <div class="nav-li">
            <a href="./logout.html">ログアウト</a>
        </div>
            
    </nav>
</header>

<body>
    <div class="center">
        <h2>受付予約のできる病院を探す</h2>

        <form>
            <div><input id="freetext1" name="keyword" placeholder="エリア・駅名・病院名" type="text">
                <input onclick="javascript:submitHeaderSerach();" type="submit" value="検索">
            </div>
        </form><br>

        <h2>居住エリアから病院を探す</h2>

        <table class="bl_linkTable bl_linkTable__areaClinicSearch hp_mb44">
            <tbody>
            <tr>
            <th>北海道・東北</th>
            <td><a href="1/">北海道</a>
            <a href="2/">青森県</a>
            <a href="3/">岩手県</a>
            <a href="4/">宮城県</a>
            <a href="5/">秋田県</a>
            <a href="6/">山形県</a>
            <a href="7/">福島県</a></td>
            </tr>
            <tr>
            <th>関東</th>
            <td><a href="13/">東京都</a>
            <a href="14/">神奈川県</a>
            <a href="11/">埼玉県</a>
            <a href="12/">千葉県</a>
            <a href="8/">茨城県</a>
            <a href="9/">栃木県</a>
            <a href="10/">群馬県</a></td>
            </tr>
            <tr>
            <th>甲信越・北陸</th>
            <td><a href="19/">山梨県</a>
            <a href="15/">新潟県</a>
            <a href="20/">長野県</a>
            <a href="16/">富山県</a>
            <a href="17/">石川県</a>
            <a href="18/">福井県</a></td>
            </tr>
            <tr>
            <th>東海</th>
            <td><a href="23/">愛知県</a>
            <a href="21/">岐阜県</a>
            <a href="22/">静岡県</a>
            <a href="24/">三重県</a></td>
            </tr>
            <tr>
            <th>近畿・関西</th>
            <td><a href="27/">大阪府</a>
            <a href="28/">兵庫県</a>
            <a href="26/">京都府</a>
            <a href="25/">滋賀県</a>
            <a href="29/">奈良県</a>
            <a href="30/">和歌山県</a></td>
            </tr>
            <tr>
            <th>中国</th>
            <td><a href="31/">鳥取県</a>
            <a href="32/">島根県</a>
            <a href="33/">岡山県</a>
            <a href="34/">広島県</a>
            <a href="35/">山口県</a></td>
            </tr>
            <tr>
            <th>四国</th>
            <td><a href="36/">徳島県</a>
            <a href="37/">香川県</a>
            <a href="38/">愛媛県</a>
            <a href="39/">高知県</a></td>
            </tr>
            <tr>
            <th>九州・沖縄</th>
            <td><a href="40/">福岡県</a>
            <a href="41/">佐賀県</a>
            <a href="42/">長崎県</a>
            <a href="select.php">熊本県</a>
            <a href="44/">大分県</a>
            <a href="45/">宮崎県</a>
            <a href="46/">鹿児島県</a>
            <a href="47/">沖縄県</a></td>
            </tr>
            </tbody>
            </table>

            <h2>ネット受付ができる医療機関を探す</h2>
            <p>今日空き</p>
            <p>明日空き</p>
            <p>ネット受付可能</p>


            </div>


    </div>



    <!-- <h2>居住エリアから病院を探す</h2>

<table class="bl_linkTable bl_linkTable__areaClinicSearch hp_mb44">
    <tbody>
    <tr>
    <th>北海道・東北</th>
    <td><a href="1/">北海道</a>
    <a href="2/">青森県</a>
    <a href="3/">岩手県</a>
    <a href="4/">宮城県</a>
    <a href="5/">秋田県</a>
    <a href="6/">山形県</a>
    <a href="7/">福島県</a></td>
    </tr>
    <tr>
    <th>関東</th>
    <td><a href="13/">東京都</a>
    <a href="14/">神奈川県</a>
    <a href="11/">埼玉県</a>
    <a href="12/">千葉県</a>
    <a href="8/">茨城県</a>
    <a href="9/">栃木県</a>
    <a href="10/">群馬県</a></td>
    </tr>
    <tr>
    <th>甲信越・北陸</th>
    <td><a href="19/">山梨県</a>
    <a href="15/">新潟県</a>
    <a href="20/">長野県</a>
    <a href="16/">富山県</a>
    <a href="17/">石川県</a>
    <a href="18/">福井県</a></td>
    </tr>
    <tr>
    <th>東海</th>
    <td><a href="23/">愛知県</a>
    <a href="21/">岐阜県</a>
    <a href="22/">静岡県</a>
    <a href="24/">三重県</a></td>
    </tr>
    <tr>
    <th>近畿・関西</th>
    <td><a href="27/">大阪府</a>
    <a href="28/">兵庫県</a>
    <a href="26/">京都府</a>
    <a href="25/">滋賀県</a>
    <a href="29/">奈良県</a>
    <a href="30/">和歌山県</a></td>
    </tr>
    <tr>
    <th>中国</th>
    <td><a href="31/">鳥取県</a>
    <a href="32/">島根県</a>
    <a href="33/">岡山県</a>
    <a href="34/">広島県</a>
    <a href="35/">山口県</a></td>
    </tr>
    <tr>
    <th>四国</th>
    <td><a href="36/">徳島県</a>
    <a href="37/">香川県</a>
    <a href="38/">愛媛県</a>
    <a href="39/">高知県</a></td>
    </tr>
    <tr>
    <th>九州・沖縄</th>
    <td><a href="40/">福岡県</a>
    <a href="41/">佐賀県</a>
    <a href="42/">長崎県</a>
    <a href="/team/select.php">熊本県</a>
    <a href="44/">大分県</a>
    <a href="45/">宮崎県</a
    ><a href="46/">鹿児島県</a>
    <a href="47/">沖縄県</a></td>
    </tr>
    </tbody>
    </table> -->



</body>

</html>
