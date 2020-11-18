<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LMS | Admin Pannel </title>
    <link href="/css/main.css"rel="stylesheet"> 
</head>
<body>
<h1>Upload The Video Below :-</h1>
    <form action="/files" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type = "text" name = "title" placeholder="Title">
        <input type = "text" name = "description" placeholder="Description">
        <input type = "file" name = "file">
        <input type = "submit" value = "Submit">
    </form><br><br>
</body>
</html>