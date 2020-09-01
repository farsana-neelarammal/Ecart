<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($data as $num)
    {{$num}}
@endforeach

@if(1>2)
    <p>This is IF</p>
@elseif(2>1)
    <p>Elseif</p>
@endif
</body>
</html>