<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Título Padrão')</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <main class="container mt-4">
        @yield('content')
    </main>

    <footer class="py-4 text-center bg-light">
        <p>&copy; {{ date('Y') }} Meu App. Todos os direitos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    @yield('scripts')
</body>
</html>