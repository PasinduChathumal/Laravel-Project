<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LMS | View </title>
</head>
<body>
        <h1>{{$data->title}}</h1><br><br>
        <h1>{{$data->description}}</h1><br><br>
        <p>
            <iframe src="{{url('storage/'.$data->file)}}" style="width: 600px; 
            height: 500px "></iframe>
        </p>
    
</body>
</html>