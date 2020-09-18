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
	<form class="flex" action="highAndLow2.php" method="post">
	<?php
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
    // 左のカードの番号をランダムに取得
    $leftCardNum = mt_rand(0, 13);
    // カードの表示
    echo '<div class="flex-half">
            <img src="../cards/',$cards[$leftCardNum], '">
           </div>
           <div class="flex-half">
            <img src="../cards/bg.png">
           </div>';
    // 隠しパラメータ
    echo '<input type="hidden" name="leftCard" value="', $leftCardNum, '">';
    ?>
		<div class="flex-half">
			<input type="radio" name="select" value="High" required>High
		</div>
		<div class="flex-half">
			<input type="radio" name="select" value="Low">Low
		</div>
		<div class="flex-full">
			<input type="submit" value="決定">
		</div>
	</form>
	</main>
	</div>
</body>
</html>