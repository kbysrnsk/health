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
   <form action="/mission/today_created" method="POST">
       @csrf
    <div class ="mission_create">
        <p>ジャンルごとのミッション個数を入力してください。</p>
        <div class ="exercise">
            <p>運動</p>
        <select name="exercise_int">
           
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        </div>

        <div class ="meal">
            <p>食事</p>
         <select name="meal_int">
             
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        </div>

        <div class ="sleep">
            <p>睡眠</p>
         <select name="sleep_int">
            
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        </div>

        <div class ="mental">
            <p>メンタルヘルス</p>
         <select name="mental_int">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        </div>
    </div>
    <input type="submit" value="make">
   </form> 
</div>    
    









   

</body>
</html>