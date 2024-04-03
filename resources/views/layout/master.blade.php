<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">

    <style>
        *{
            font-family: 'Montserrat';
        }
        .navbar-brand{
            font-weight: bolder;
        }
        .nav-item{
            font-weight: bold;
        }

    </style>
</head>
<body>

    @if (Auth::check())
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{url('bio_kel')}}">Geng Kepet</a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item {{ (Route::is('profile/daniel')) ? 'active':''}}"><a class="nav-link" href="{{url('profile/daniel')}}">Daniel</a></li>
                <li class="nav-item {{ (Route::is('profile/syam')) ? 'active':''}}"><a class="nav-link" href="{{url('profile/syam')}}">Syam</a></li>
                <li class="nav-item {{ (Route::is('profile/sekar')) ? 'active':''}}"><a class="nav-link" href="{{url('profile/sekar')}}">Sekar</a></li>
                <li class="nav-item {{ (Route::is('profile/levi')) ? 'active':''}}"><a class="nav-link" href="{{url('profile/levi')}}">Levi</a></li>
                <li class="nav-item {{ (Route::is('profile/regina')) ? 'active':''}}"><a class="nav-link" href="{{url('profile/regina')}}">Regina</a></li>
            </ul>
            <form class="form-inline my2 my-lg-0"> <!-- Menghapus class "item-right" -->
                <span>{{Auth::user()->email}}</span>
                <a href="{{ url('logout')}}" class="btn btn-outline-success my-2 my-sm-0">Log Out</a>
            </form>
          </div>
        </div>
      </nav>
      @endif
@yield('container')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
