<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Laravel First</title>
</head>
<body>
    <h1> Ciao, {{$name}}!</h1>
    <h2>Ricordati che oggi devi: </h2>
    <ul> 
        @foreach ($tasks as $task)           
        <li><h2>{{$task}}</h2></li>
        @endforeach
    </ul>
</body>
</html>