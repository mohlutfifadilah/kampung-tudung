<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing - Free Bulma template</title>
    <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/landing.css">
</head>

<body>
    <section class="hero is-info is-fullheight">
        <div class="hero-head">
            <nav data-scroll-header class="navbar">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="../">
                            {{-- <img src="http://bulma.io/images/bulma-type-white.png" alt="Logo"> --}}
                            Kampung Tudung
                        </a>
                        <span class="navbar-burger burger" data-target="navbarMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                    <div id="navbarBasicExample" class="navbar-menu">
                        <div class="navbar-end">
                            <a class="navbar-item">
                                Beranda <a data-scroll href="#bazinga">Anchor Link</a>
                            </a>
                            <a class="navbar-item">
                                Galeri
                            </a>
                            <a class="navbar-item">
                                Tentang Kami
                            </a>
                            <a class="navbar-item">
                                Lokasi
                            </a>
                            <div class="navbar-item">
                                <div class="buttons">
                                    <a class="button is-primary">
                                        <strong>Pesan Sekarang</strong>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-6 is-offset-3">
                    <h1 class="title">
                        Coming Soon
                    </h1>
                    <h2 class="subtitle">
                        $this is the best software platform for running an internet business. We handle billions of
                        dollars every year for forward-thinking businesses around the world.
                    </h2>
                    <div class="box">
                        <div class="field is-grouped">
                            <p class="control is-expanded">
                                <input class="input" type="text" placeholder="Enter your email">
                            </p>
                            <p class="control">
                                <a class="button is-info">
                                    Notify Me
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ...<p>
            .<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>
            .<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>
            .<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.
            .<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>
            .<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>
            .<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.
        </p>
        <p>
            .<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>
            .<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>
            .<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.
            .<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>
            .<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>
            .<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.
        </p>
        <div id="bazinga">Bazinga!</div>
    </section>
    <script async type="text/javascript" src="../js/bulma.js"></script>
    <!-- Always get the latest version -->
    <!-- Not recommended for production sites! -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Get minor updates and patch fixes within a major version -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Get patch fixes within a minor version -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Get a specific version -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]', {
            header: '[data-scroll-header]',
            speed: 500
        });
    </script>
</body>

</html>
