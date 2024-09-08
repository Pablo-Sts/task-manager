<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-dark">
    <header class="container-fluid  text-center pt-4 pb-2 border-bottom">
        <h1 class="text-light ">Gerenciador de Tarefas</h1>
    </header>
    @yield("content")
    <footer class="container-fluid fs-5 p-4 border-top text-light text-center">
        Porjeto desenvolvido como requisito de uma etapa de uma vaga para desenvolvedor
    </footer>
</body>
</html>