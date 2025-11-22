<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(["resources/js/home.js"])
</head>
<body>
    <h1>Home</h1>
    <a id="btn" href="/options">Options</a>

    <p>
        @if(isset($nome[$index]))
            {{$nome[$index]}}
        @else
            {{"O valor passado não existe na lista!"}}
        @endif
    </p>
</body>
</html>