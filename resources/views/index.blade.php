<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kampung Tudung</title>
    <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/landing.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
    <style>
        .pointer {
            cursor: pointer;
            border: none;
        }

        .modal-button:hover {
            filter: blur(1px) brightness(90%);
            transition: filter 300ms;
        }

        .modal-content {
            max-height: none !important;
            overflow: hidden;
        }
    </style>
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
                            <a class="navbar-item data-scroll" href="#map">
                                Lokasi
                            </a>
                            <div class="navbar-item">
                                <div class="buttons">
                                    <a class="button is-primary" data-scroll href="#booking">
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
                <figure class="image is-16by9">
                    <iframe class="img has-ratio" width="640" height="360"
                        src="{{ asset('main-image/portfolio_1.jpg') }}" frameborder="0" allowfullscreen></iframe>
                </figure>

            </div>
            <div class="container">
                <p class="title is-2">Title 2</p>
                <p class="subtitle is-4">Subtitle 4</p>
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
    <section class="container gallery" id="gallery">
        <div class="columns">
            <div class="column">
                <!-- 01 -->
                <img class="modal-button pointer" data-target="modal-01"
                    src="https://www.freagraphy.de/wp-content/uploads/2017/10/MG_8072_end-120x130.jpg">
                <div id="modal-01" class="modal modal-fx-fadeInScale">
                    <div class="modal-background"></div>
                    <div class="modal-content">
                        <img src="https://www.freagraphy.de/wp-content/uploads/2017/10/MG_8072_end.jpg">
                    </div>
                    <button class="modal-close is-large" aria-label="close"></button>
                </div>
                <div id="modal-01" class="modal modal-fx-fadeInScale"></div>
            </div>
        </div>
    </section>
    <section class="container video" id="video">
        <div class="card">
            <div class="card-content">
                <div class="columns">
                    <div class="column">
                        <p class="title">
                            Video Profil
                        </p>
                        <p class="subtitle has-text-primary">
                            Kampung Tudung
                        </p>
                        <p class="content">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>
                    </div>
                    <div class="column">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/WhD9tbrUbnE">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="map mb-5" id="map">
        <div class="card mb-3">
            <div class="card-content">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63273.376639123!2d109.6116066530762!3d-7.619940037274779!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7acbc66a26ec7b%3A0x75bcd6f02e708e77!2sKampung%20Tudung!5e0!3m2!1sen!2sid!4v1657588390613!5m2!1sen!2sid"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <section class="container booking mt-2" id="booking">
        <p class="title is-3 mt-3">Pesan</p>
        <p class="subtitle has-text-primary is-3">Sekarang</p>
        <div class="card">
            <div class="card-content">
                <form action="/send" method="post">
                    @csrf
                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <div class="control">
                                    <input class="input" type="text" placeholder="Nama / Instansi"
                                        name="nama">
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <div class="control">
                                    <input class="input" type="text" placeholder="Alamat" name="alamat">
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <div class="control">
                                    <input class="input" type="text" placeholder="No. Telepon" name="no">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <div class="control">
                                    <input class="input" type="date" placeholder="Tanggal" name="tanggal">
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <div class="control">
                                    <div class="select">
                                        <select class="input" style="width: 100%;" name="paket">
                                            <option>Pilih Paket</option>
                                            <option>Paket Eduwisata</option>
                                            <option>Paket Spot Selfie</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <div class="control">
                                    <input class="input" type="text" placeholder="Jumlah Orang" name="jumlah">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <div class="control">
                                    <textarea class="textarea" placeholder="Pesan" name="pesan"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="button is-primary is-fullwidth" type="submit">Kirim</button>
                </form>
            </div>
        </div>
    </section>
    <script async type="text/javascript" src="{{ asset('js/bulma.js') }}"></script>
    <!-- Always get the latest version -->
    <!-- Not recommended for production sites! -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Get minor updates and patch fixes within a major version -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Get patch fixes within a minor version -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Get a specific version -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]', {
            header: '[data-scroll-header]',
            speed: 500
        });

        var image = document.getElementsByClassName('img');
        new simpleParallax(image, {
            orientation: 'right'
        });
    </script>
</body>

</html>
