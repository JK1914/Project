<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Загрузка</title>
</head>
<body>
<div class="container">
        <h1>Проверка загрузки видео из базы</h1>

        
        @isset ($path)
        
            <video src="{{$path}}" controls autoplay>

        @endif
    
</body>
</html>