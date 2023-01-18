<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サンプルです</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header w_inner">
        <p></p>
        <ul>
          <li><a href='/mission/top'>トップ</a></li>
          <li><a href='/mission/mission_today'>今日のミッション</a></li>
          <li><a href='/health_article/article'>記事</a></li>
          <li><a href='/health_mypage/mypage'>マイページ</a></li>
        </ul>
    </div>
<div class ="mission_today">
    <h1>今日のミッション</h1>
    <p>今日も一日頑張りましょう！</p>
    
    <div class ="mission_create">
        <p>ジャンルごとのミッション個数を入力してください。</p>
        <div class ="exercise">
            <p>運動</p>
         <form>
            <input type="number" max="5" min="1">
         </form>
        </div>

        <div class ="food">
            <p>食事</p>
         <form>
            <input type="number" max="5" min="1">
         </form>
        </div>

        <div class ="sleep">
            <p>睡眠</p>
         <form>
            <input type="number" max="5" min="1">
         </form>
        </div>

        <div class ="mental">
            <p>メンタルヘルス</p>
         <form>
            <input type="number" max="5" min="1">
         </form>
        </div>
    </div>
</div>    
    









   

</body>
</html>