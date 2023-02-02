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
    
        <h1 class="title">
            {{ $mission->mission_title }}
        </h1>
        
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $mission->mission_body }}</p>    
            </div>
        </div>
        
        <div class="footer">
            <a href="/master/mission_master">戻る</a>
        </div>
    
</body>
</html>
