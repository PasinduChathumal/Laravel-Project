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
<h1> View Your Downloads Below :- </h1>
    <table border="2">
        <tr>
        <th>Index</th>
        <th>Title</th>
        <th>Description</th>
        <th>View</th>
        </tr>
        @foreach($files as $data)
        <tr>
            <td>{{$data->Id}}</td>
            <td>{{$data->title}}</td>
            <td>{{$data->description}}</td>
            <td> <a href="/files/{{$data->id}}">View</a> </td>
        </tr>
        @endforeach    
    </table>    
</body>
</html>