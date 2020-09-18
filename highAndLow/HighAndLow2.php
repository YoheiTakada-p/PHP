<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>ゲーム</title>
<style>
.container {
	width: 500px;
	margin: 0 auto;
}

header {
	font-size: 2em;
	text-align: center;
	border-bottom: solid 2px #d3d3d3;
}

.flex {
	display: flex;
	flex-wrap: wrap;
}

.flex-half {
	text-align: center;
	width: 50%;
	margin-top: 15px;
}

.flex-full {
	text-align: center;
	width: 100%;
	margin-top: 15px;
}
</style>
</head>
<body>
	<div class="container">
	<header>High&Lowゲーム</header>
	<main>
	<div class="flex">
    <?php
    // 前ページの左のカードの番号を取得
    $leftCardNum = $_POST['leftCard'];
    // 前ページのラジオボタンを取得
    $select = $_POST['select'];
    // ランダムにカードのイメージを取得
    $cards = array(
        "Jk.png",
        "01.png",
        "02.png",
        "03.png",
        "04.png",
        "05.png",
        "06.png",
        "07.png",
        "08.png",
        "09.png",
        "10.png",
        "11.png",
        "12.png",
        "13.png"
    );
    // 右のカードの番号をランダムに取得
    $rightCardNum = mt_rand(0, 13);
    // カードの表示
    echo '<div class="flex-half">
            <img src="../cards/', $cards[$leftCardNum], '">
           </div>
           <div class="flex-half">
            <img src="../cards/', $cards[$rightCardNum], '">
           </div>';
    // 選択したHighLowの表示
    echo '<div class="flex-full">あなたは', $select, 'を選びました！</div>';
    // 結果の初期化
    $result = 'no';
    // 勝ち負け判定
    function judge($result) {
        global $select;
        if ($result == $select) {
            echo '<div class="flex-full">You Win！</div>';
        } else {
            echo '<div class="flex-full">You Lose...</div>';
        }
    }
    // 数字の比較
    if ($leftCardNum < $rightCardNum) {
        $result = 'High';
        judge($result);
    } elseif ($leftCardNum > $rightCardNum) {
        $result = 'Low';
        judge($result);
    } elseif ($leftCardNum == $rightCardNum) {
        echo '<div class="flex-full">同じ数字はあなたの勝ちです！<br>You Win!</div>';
    }
    ?>
    	<div class="flex-full">
    		<a href="highAndLow1.php">もう一度プレイする</a>
    	</div>
    </div>
	</main>
	</div>
</body>
</html>