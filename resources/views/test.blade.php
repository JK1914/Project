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
        <h1>Проверка загрузки файлов из базы</h1>

        <form action="http://localhost:8000/file" method="get" enctype="multipart/form-data">
            

            <div class="form-group">                
                <input type="text" placeholder="obj_id" name="obj_id">  
                <input type="text" placeholder="type" name="type">
                
                <button type="submit">Загрузить</button>
            </div>
        </form>   
    
</body>
</html>