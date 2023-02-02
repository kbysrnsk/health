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
   
</div>    
    
<h1>ミッション名</h1>
       <form action="/master/mission_master/{{$mission->id}}" method="POST">
            @csrf
            @method('PUT')
             <div class="category">
                <h2>Category</h2>
                <select name="mission[category_id]">
                    @foreach($category as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="mission[mission_title]" placeholder="タイトル"/>
                
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="mission[mission_body]" placeholder="ミッション詳細"></textarea>
            </div>
            <input type="submit" value='保存'/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>








   

</body>
</html>