<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サンプルです</title>
    
    <link rel="stylesheet" href='/css/reset.css'>
    <link rel="stylesheet" href='/css/display.css'>
</head>
<body>
    <div class="header">
        <p></p>
        <ul>
          <li><a href='/mission/top'>トップ</a></li>
          <li><a href='/mission/mission_today'>今日のミッション</a></li>
          <li><a href='/health_article/article'>記事</a></li>
          <li><a href='/health_mypage/mypage'>マイページ</a></li>
        </ul>
    </div>
    <div class="name">
        <p>{{$mypage->name}}さんのページ</p>
    </div>
<div class ="mission_today">
    <h1>今日のミッション</h1>
    <p>今日も一日頑張りましょう！</p>
    
     @foreach($mission_todays as $mission_today)
    <div class="mission_container">
        <h2 class="title">{{$mission_today->mission->mission_title}}</h2>
        <p class="body">{{$mission_today->mission->mission_body}}</p>
    </div>
    @endforeach
    
</div>    
   









   

</body>
</html>