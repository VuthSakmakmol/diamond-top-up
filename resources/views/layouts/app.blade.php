<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Header -->
    <div class="position-fixed top-0 start-0 w-100">
        <div class="p-3 mb-2 text-bg-dark d-flex align-items-center justify-content-between">
            <div class="d-flex"> 
                <img src="https://i.pinimg.com/564x/54/68/a3/5468a33bc43e258995f15ad01e5ad7cc.jpg" alt="gaming controller" style="width: 60px; height: auto;">
                <h4 class="ms-3">Sbay Tinh</h4>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mt-5 pt-5">
        @yield('content')
    </div>

    <!-- Custom JS -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
