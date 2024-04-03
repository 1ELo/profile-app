<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">Geng Kepet</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="{{ (request()->routeIs('daniel')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('daniel') }}">Daniel</a></li>
                    <li class="{{ (request()->routeIs('syam')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('syam') }}">Syam</a></li>
                    <li class="{{ (request()->routeIs('sekar')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('sekar') }}">Sekar</a></li>
                    <li class="{{ (request()->routeIs('levi')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('levi') }}">Levi</a></li>
                    <li class="{{ (request()->routeIs('regina')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('regina') }}">Regina</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
