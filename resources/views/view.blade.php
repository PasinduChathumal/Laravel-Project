<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LMS | View </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="/css/system.css"rel="stylesheet">

</head>
<body>        
        <h1> View Your Vidoes Below :- </h1>
        <table border="2">
            <tr>
            <th>Index</th>
            <th>Title</th>
            <th>Description</th>
            <th>View</th>
            </tr>
            @foreach($file as $key=>$data)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->description}}</td>
                <td> <a href="/files/{{$data->id}}">View</a> </td>
            </tr>
            @endforeach    
        </table><br><br>
</body>
</html>           