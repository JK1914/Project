<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Upload</title>
</head>
<body>
<div class="container">
        <h1>Загрузка изображения</h1>

        <form action="http://localhost:8000/file/upload" method="post" enctype="multipart/form-data">
            

            <div class="form-group">
                <input type="file" name="image">
                <input type="text" name="type">
                <input type="text" name="obj_id">                
            </div>

            <button type="submit">Загрузить</button>

        </form>        
    
</body>
</html>