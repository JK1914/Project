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
        <h1>Загрузка файла</h1>

        <form action="http://localhost:8000/file/upload" method="post" enctype="multipart/form-data">
            

            <div class="form-group">
                <input type="file" name="image">
                <input type="text" placeholder="type" name="type">
                <input type="text" placeholder="obj_id" name="obj_id">  
                
                <button type="submit">Загрузить</button>
            </div>
        </form>    
        
        @isset ($path)
        
            <img src={{asset($path)}} alt="Не загружено">

        @endif
    
</body>
</html>