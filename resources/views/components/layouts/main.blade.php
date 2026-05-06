<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
    @livewireScripts
    <title>Rede Leoas - Site Oficial</title>

    <meta name="description"
        content="Uma rede dedicada à proteção, desenvolvimento e enfrentamento à violência contra a mulher.">
</head>

<body class="bg-bege text-preto font-sans">
    <x-ui.navbar />
    {{  $slot }}
    <x-ui.footer />
</body>

</html>
