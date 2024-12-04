<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//matcha.mizu.sh/matcha.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>All Tasks</h1>
    @foreach($tasks as $task)
        <div>
            <h2>{{$task['id']}} - {{ $task['name'] }}</h2>
            <p>{{ $task['description'] }}</p>
        </div>
    @endforeach
</body>
</html>