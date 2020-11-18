<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LMS | Paper Class</title>
    <link href="/css/main.css"rel="stylesheet"> 
</head>
<body>
<div id="wrapper">
			<div id="header">
				<div id="head-topic"> Paper Class </div>
				<div id="head-menu">
					<ul>
					  <li><a href="home.php">Home</a></li>
					</ul>
				</div>
			</div>
			<br>
			<h1>{{$data->title}}</h1><br><br>
        	<h1>{{$data->description}}</h1><br><br>
        	<p>
            <iframe src="{{url('storage/'.$data->file)}}" style="width: 600px; 
            height: 500px "></iframe>
        	</p> 
            <br>	
			</div>
			<div id="footer">Copyright © Niru Developer </footer>
		</div>
</body>
</html>