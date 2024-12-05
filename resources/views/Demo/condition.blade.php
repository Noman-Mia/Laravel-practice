<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Condition</title>
</head>
<body>
    <h3>
        Number : {{$number}}
    </h3>
    <h2>
        @if ($even)
            <h1>{{$number}} is an even number</h1>
        @else
        <h1>{{$number}} is an odd number</h1>
        @endif

 @if($m>$f)
    <h1>More Males than Females</h1>
 @elseif($m<$f)
    <h1>More Females than Males</h1>
@else
    <h1>Equal Number of Males and Females</h1>
 @endif
     </h2>
</body>
</html>