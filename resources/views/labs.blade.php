<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Labs</title>
</head>
<body>
   @foreach ($labs as $lab)
       {{$lab->name}}
   @endforeach  
</body>
</html>