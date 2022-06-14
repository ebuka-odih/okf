
<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OKX Token Listing Form</title>
    <link rel="icon" href="{{ asset('assets/img/logo1.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
<header class="light-bb" style="background-color: black; align-items: center;">
    <nav class="navbar navbar-expand-lg" style="display: flex; align-items: center;">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/img/logo1.png') }}" alt="logo">
        </a>
        <!--button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerMenu"
          aria-controls="headerMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="icon ion-md-menu"></i>
        </button-->

        <div class="collapse navbar-collapse" id="headerMenu">

        </div>
    </nav>
</header>

@yield('content')

<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/amcharts-core.min.js') }}"></script>
<script src="{{ asset('assets/js/amcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>


</html>
