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
    <div class="header w_inner">
        <p></p>
        <ul>
          <li><a href='/mission/top'>トップ</a></li>
          <li><a href='/mission/mission_today'>今日のミッション</a></li>
          <li><a href='/health_article/article'>記事</a></li>
          <li><a href='/health_mypage/mypage'>マイページ</a></li>
          <!--
          <li><a href='/master/mission_master'>ミッション管理</a></li>
          -->
        </ul>
    </div>
    <div class="name">
        <p>{{$mypage->name}}さんの記録</p>
    </div>
<div class ="mission_record">
    <h1>過去の記録を確認できます。</h1>
    
    <div class="record_day">
        <ul>
          <li><a href='/health_mypage/mypage'>今日</a></li>
          <li><a href='/health_mypage/mypage-1'>昨日</a></li>
          <li><a href='/health_mypage/mypage-2'>2日前</a></li>
          <li><a href='/health_mypage/mypage-3'>3日前</a></li>
          <li><a href='/health_mypage/mypage-4'>4日前</a></li>
          <li><a href='/health_mypage/mypage-5'>5日前</a></li>
          <li><a href='/health_mypage/mypage-6'>6日前</a></li>
          <li><a href='/health_mypage/mypage-7'>7日前</a></li>
        </ul>
    </div>
     @foreach($mission_todays as $mission_today)
    <div class="mission_container">
        <h2 class="title">{{$mission_today->mission->mission_title}}</h2>
        <p class="body">{{$mission_today->mission->mission_body}}</p>
        <p class="achievement"></p>
    </div>
    @endforeach
    
</div>    
   









   

</body>
</html>