<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>
<body>
    <form action="{{ route('send-data') }} " method="POST">
        @csrf
        <label for="name">Anime name</label>
        <input type="text" name="name">
        <button type="submit">enviar</button>
    </form>
</body>
</html>