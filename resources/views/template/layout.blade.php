<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Libreria Laravel</title>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    @vite(['resources\css\app.css', 'resources\js\app.js'])
</head>

<body>
    {{-- @if (session('success'))
        <div class="alert alert-success mb-0" style="border: 2px solid green" role="alert">
            Caricamento completato
        </div>
    @endif --}}
    {{ $slot }}
</body>

</html>
