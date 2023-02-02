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
<div class ="mission_register">
    <h1>ミッション登録</h1>
    <div class="article_category">
        <a href="">食事</a>
        <a href="">運動</a>
        <a href="">睡眠</a>
        <a href="">メンタルヘルス</a>
    </div>
    
    <div class ="mission">
        <a href='/master/create_master'>create</a>
    @foreach($mission as $mission)
    <div class = "mission_container">
       <h2 class='title'>
           <a href="/master/mission_master/{{$mission->id}}">{{ $mission->mission_title }}</h2></a>
                    <p class='body'>{{ $mission->mission_body }}</p>
    <form action="/master/mission_master/{{ $mission->id }}" id="form_{{ $mission->id }}" method="post">
    @csrf
    @method('DELETE')
    <button type="button" onclick="deletemission({{ $mission->id }})">delete</button> 
    </form>
    </div>
   @endforeach
    </div>
</div>    
    








<script>
    function deletemission(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
    }
</script>
   

</body>
</html>