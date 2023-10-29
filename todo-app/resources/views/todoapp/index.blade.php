<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-DO List</title>
</head>
<body>
    <h1>
        To-Do List
    </h1>
    <form action="">
        <div>
        <input type="text" placeholder="Enter a to-do list" required>
        <input type="submit" value="Add">
        </div>
        <a href="{{ route("home.index") }}">Home</a>
        <a href="/Contact">Contact</a>
    </form>
</body>
</html>