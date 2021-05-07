<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>

    @yield('title')

</head>

<div class="header ">
    <header class="pt-3 pb-3 pl-0 " style="background-color: #4a5568">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center ">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-black-50 text-decoration-none">
                    <img class="bi me-2" width="150" height="32" src="/images/logo.webp">
                </a>


            </div>
        </div>
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center ">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/blog" class="nav-link px-2" style="color:  #a1ad57;font-size: 1.2vw; font-weight: bold ;">Blog</a></li>
                    <li><a href="/imprint" class="nav-link px-2" style="color: #a1ad57;font-size: 1.2vw;font-weight: bold ;">Imprint</a></li>
                    <li><a href="/presskit" class="nav-link px-2" style="color: #a1ad57;font-size: 1.2vw;font-weight: bold ;">Presskit</a></li>
                    <li><a href="/vacancies" class="nav-link px-2" style="color: #a1ad57;font-size: 1.2vw;font-weight: bold ;">Vacancies</a></li>
                </ul>
            </div>
        </div>
    </header>
</div>
<body class="text-white">

<main class="content">
    <div class="container">
        @yield('main-content')
    </div>
</main>

<footer class="footer mt-0 text-center bg-dark">
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">


            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase"> Our main communication point is our official forum. That is the place
                    to:</h5>

                <ul class="list-unstyled mb-0 text-left">
                    <li>
                        <p class="text-success">- Report bugs and issues.</p>
                    </li>
                    <li>
                        <p class="text-success">- Ask for help related to the game.</p>
                    </li>
                    <li>
                        <p class="text-success">- Show your game creations.</p>
                    </li>
                    <li>
                        <p class="text-success">- Post ideas and suggestions.</p>
                    </li>

                    <li>
                        <p class="text-success">- Discuss modding and help with mods.</p>
                    </li>
                    <li>
                        <p class="text-success">- Offer help for translations.</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-0">Contacts</h5>

                <ul class="list-unstyled">
                    <li>
                        Account & Technical support contact: <a href="#" >  support@factorio.com</a>
                    </li>
                    <li>
                        General contact:<a href="#" > factorio@factorio.com</a>
                    </li>
                    <li>
                        Merchandise E-shop contact: <a href="#" >  eshop@factorio.com</a>
                    </li>

                </ul>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright
    </div>

</footer>
</body>
</html>
