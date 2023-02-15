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
        </ul>
    </div>
<div class ="article">
    <h1>記事</h1>
    <p>健康に関する記事を閲覧できます。</p>
  
  
</div>    
    <div class="container ">
        @foreach($news as $data)
        <div class="card-body pt-0 pb-2">
            <h3 class="title">
                <a href="{{$data['url']}}">{{$data['name']}}</a>
            </h3>
            <div class="card-text">
                <img src="{{$data['thumbnail']}}">
            </div>
        </div>
        @endforeach
    </div>









   

</body>
</html>