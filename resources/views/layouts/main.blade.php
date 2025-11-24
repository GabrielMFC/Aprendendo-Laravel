<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Roboto" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/css/global.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="navbar-container" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/" alt="logo">
                </a>
                <ul class="navbar-elements">
                    <li class="nav-item">
                        <a href="/myEvents"  class="nav-link">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/create" class="nav-link">Criar Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/signIn" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/signUp" class="nav-link">Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer>
        <p class="footerText">HDC Events &copy; {{date("Y")}}</p>
    </footer>
</body>
</html>