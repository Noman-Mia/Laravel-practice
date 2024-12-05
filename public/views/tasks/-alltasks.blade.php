<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Blade File</title>
</head>
<body>
    <h1>This is a Blade File</h1>
    <h2>All Tasks</h2>
    @foreach($tasks as $task)
        <p>{{ $task['name'] }}</p>
    @endforeach

    <script>
        const tasks = @json($tasks);
        console.log(tasks);
        console.log(tasks.length)
    </script>
</body>
</html>