<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kampung Tudung</title>
    <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/landing.css') }}"> --}}
    <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/css/bulma-carousel.min.css" />

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

        .hero {
            width: 100%;
            height: 665px;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            /* background-color: #00d1b2; */
            background-image: url('{{ asset('main-image/bg.jpg') }}');
            -webkit-box-shadow: inset 24px 4px 64px -24px rgba(71, 71, 71, 1);
            -moz-box-shadow: inset 24px 4px 64px -24px rgba(71, 71, 71, 1);
            box-shadow: inset 24px 4px 64px -24px rgba(71, 71, 71, 1);
            padding: 0px;
        }

        .brand {
            background: url('{{ asset('main-image/tudung.png') }}') no-repeat center center;
            background-size: cover;
            width: 84px
        }

        .navbar-end a.navbar-item {
            margin-right: 4px;
        }

        .navbar-end .navbar-item.mr-5 {
            color: white;
        }

        .navbar-menu .navbar-end .navbar-item.mr-5:hover {
            color: #00c4a7;
        }
    </style>
</head>

<body>
    <section class="hero is-fullheight mb-5" data-scroll href="#home">
        <div class="hero-head">
            <nav data-scroll-header class="navbar" role="navigation" aria-label="main navigation">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item brand" href="#home">
                            {{-- <img src="{{ asset('main-image/tudung.png') }}" width="112" height="500"> --}}
                        </a>

                        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                            data-target="navbarBasicExample">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>
                    <div id="navbarBasicExample" class="navbar-menu">
                        <div class="navbar-end">
                            <a class="navbar-item mr-5 has-text-weight-bold" data-scroll href="#home">
                                Beranda
                            </a>
                            <a class="navbar-item mr-5 has-text-weight-bold" data-scroll href="#about">
                                Tentang Kami
                            </a>
                            <a class="navbar-item mr-5 has-text-weight-bold" data-scroll href="#gallery">
                                Galeri
                            </a>
                            <a class="navbar-item mr-5 has-text-weight-bold" data-scroll href="#video">
                                Video
                            </a>
                            <a class="navbar-item mr-5 has-text-weight-bold" data-scroll href="#map">
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
                    <p class="title is-1 has-text-white">Selamat Datang</p>
                    <p class="subtitle is-6 has-text-white">Di website desa wisata Kampung Tudung, Ayo jelajahi lebih
                        jauh mengenai "Wiskadung"</p>
                    <a class="button is-primary" data-scroll href="#about">
                        <strong>Jelajahi </strong> <i class="fas fa-arrow-right"></i>
                    </a>
                    {{-- <div class="box">
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
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <section class="container about" id="about" style="margin-top: 30px;">
        <div class="columns">
            <div class="column has-text-centered">
                <img src="{{ asset('main-image/selfie.jpg') }}" class="img" alt="" width="300"
                    height="300">
            </div>
            <div class="column mt-5">
                <p class="title">
                    Tentang Kami
                </p>
                <p class="subtitle has-text-primary">
                    Kampung Tudung
                </p>
                <hr class="is-primary" width="10%">
                <p class="content has-text-justified">
                    Kampung Tudung merupakan desa wisata yang terletak di Desa Grujugan, Kecamatan Petanahan, Kabupaten
                    Kebumen. Wisata pendidikan atau wisata edukasi, bisa juga disebut
                    sebagai anjangkarya atau karyawisata adalah suatu kegiatan
                    atau perjalanan yang dilakukan untuk rekreasi atau liburan dan juga
                    terdapat aktivitas edukasi atau pendidikan di dalamnya. Ada banyak
                    kegiatan wisata edukasi yang bisa di lakukan khususnya bagi anak-
                    anak untuk di Desa Wisata Kampung Tudung, anak-anak biasa belajar
                    membuat Tudung/Caping, Besek, Ilir/kipas dan anyaman dari bambu.
                </p>
            </div>
        </div>
    </section>
    <section class="container gallery my-5" id="gallery">
        <div class="text-has-centered mb-3">
            <p class="title">
                Gallery
            </p>
            <p class="subtitle has-text-primary">
                Kampung Tudung
            </p>
            <hr class="is-primary" width="10%">
        </div>
        <div class="columns">
            <div class="column is-6 has-text-centered">
                <img class="modal-button pointer" data-target="modal-01" src="{{ asset('main-image/DSC_2416.jpg') }}"
                    alt="" width="450" height="450">
                <div id="modal-01" class="modal modal-fx-fadeInScale">
                    <div class="modal-background"></div>
                    <div class="modal-content">
                        <img src="{{ asset('main-image/DSC_2416.jpg') }}" width="450" height="450">
                    </div>
                    <button class="modal-close is-large" aria-label="close"></button>
                </div>
                <div id="modal-01" class="modal modal-fx-fadeInScale"></div>
            </div>
            <div class="column is-3">
                <img class="modal-button pointer atas" data-target="modal-02"
                    src="{{ asset('main-image/portfolio_big_2.jpg') }}" alt="">
                <div id="modal-02" class="modal modal-fx-fadeInScale">
                    <div class="modal-background"></div>
                    <div class="modal-content">
                        <img src="{{ asset('main-image/portfolio_big_2.jpg') }}">
                    </div>
                    <button class="modal-close is-large" aria-label="close"></button>
                </div>
                <div id="modal-02" class="modal modal-fx-fadeInScale"></div>
                <img class="modal-button pointer mt-3 kiri" data-target="modal-06"
                    src="{{ asset('main-image/portfolio_5.jpg') }}" alt="">
                <div id="modal-06" class="modal modal-fx-fadeInScale">
                    <div class="modal-background"></div>
                    <div class="modal-content">
                        <img src="{{ asset('main-image/portfolio_5.jpg') }}">
                    </div>
                    <button class="modal-close is-large" aria-label="close"></button>
                </div>
                <div id="modal-06" class="modal modal-fx-fadeInScale"></div>
                <img class="modal-button pointer mt-3" data-target="modal-05"
                    src="{{ asset('main-image/portfolio_4.jpg') }}" alt="">
                <div id="modal-05" class="modal modal-fx-fadeInScale">
                    <div class="modal-background"></div>
                    <div class="modal-content">
                        <img src="{{ asset('main-image/portfolio_4.jpg') }}">
                    </div>
                    <button class="modal-close is-large" aria-label="close"></button>
                </div>
                <div id="modal-05" class="modal modal-fx-fadeInScale"></div>
            </div>
            <div class="column is-3">
                <img class="modal-button pointer mb-3 kiri" data-target="modal-04"
                    src="{{ asset('main-image/slide_3.jpg') }}" alt="">
                <div id="modal-04" class="modal modal-fx-fadeInScale">
                    <div class="modal-background"></div>
                    <div class="modal-content">
                        <img src="{{ asset('main-image/slide_3.jpg') }}" height="450" width="450">
                    </div>
                    <button class="modal-close is-large" aria-label="close"></button>
                </div>
                <div id="modal-04" class="modal modal-fx-fadeInScale"></div>
                <img class="modal-button pointer kanan" data-target="modal-03"
                    src="{{ asset('main-image/portfolio_big_3.jpg') }}" alt="">
                <div id="modal-03" class="modal modal-fx-fadeInScale">
                    <div class="modal-background"></div>
                    <div class="modal-content">
                        <img src="{{ asset('main-image/portfolio_big_3.jpg') }}">
                    </div>
                    <button class="modal-close is-large" aria-label="close"></button>
                </div>
                <div id="modal-03" class="modal modal-fx-fadeInScale"></div>
            </div>
        </div>
    </section>
    <section class="section produk">
        <div class="container is-clipped">
            <div id="slider">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-16by9 is-covered">
                            <img src="https://images.unsplash.com/photo-1550921082-c282cdc432d6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
                                alt="" />
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="item__title">
                            Mon titre 1
                        </div>
                        <div class="item__description">
                            Ici une petite description pour tester le slider
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image">
                        <figure class="image is-16by9 is-covered">
                            <img src="https://images.unsplash.com/photo-1550945771-515f118cef86?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1000&q=80"
                                alt="" />
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="item__title">
                            Mon titre 2
                        </div>
                        <div class="item__description">
                            Ici une petite description pour tester le slider
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image">
                        <figure class="image is-16by9 is-covered">
                            <img src="https://images.unsplash.com/photo-1550971264-3f7e4a7bb349?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
                                alt="" />
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="item__title">
                            Mon titre 3
                        </div>
                        <div class="item__description">
                            Ici une petite description pour tester le slider
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image">
                        <figure class="image is-16by9 is-covered">
                            <img src="https://images.unsplash.com/photo-1550931937-2dfd45a40da0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
                                alt="" />
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="item__title">
                            Mon titre 4
                        </div>
                        <div class="item__description">
                            Ici une petite description pour tester le slider
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image">
                        <figure class="image is-16by9 is-covered">
                            <img src="https://images.unsplash.com/photo-1550930516-af8b8cc4f871?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1000&q=80"
                                alt="" />
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="item__title">
                            Mon titre 5
                        </div>
                        <div class="item__description">
                            Ici une petite description pour tester le slider
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image">
                        <figure class="image video-container is-16by9">
                            <iframe type="text/html" src="https://www.youtube.com/embed/H0v773vKS_U"
                                frameborder="0"></iframe>
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="item__title">
                            <strong>Kipas</strong>
                        </div>
                        <div class="item__description">
                            <p>Ici une petite description pour tester le slider</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container video my-5" id="video">
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
                            Kalian bisa lihat video profil Desa Wisata Kampung Tudung di channel YouTube kami
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
                                            <option>Tudung</option>
                                            <option>Ilir</option>
                                            <option>Ethnik</option>
                                            <option>Lukis Ilis</option>
                                            <option>Tudung Batik</option>
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
    <footer class="footer">
        <div class="content has-text-centered bg-primary mb-0">
            <div class="columns">
                <div class="column is-2 is-offset-5">
                    <nav class="level">
                        <div class="level-item has-text-centered">
                            <div>
                                <a href="http://wa.me/6282323723593">
                                    <span class="icon-text">
                                        <span class="icon has-text-success">
                                            <i class="fab fa-whatsapp fa-2x"></i>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="level-item has-text-centered">
                            <div>
                                <a href="https://www.instagram.com/desa_grujugan/">
                                    <span class="icon-text">
                                        <span class="icon has-text-info">
                                            <i class="fab fa-instagram fa-2x"></i>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="level-item has-text-centered">
                            <div>
                                <a href="https://www.youtube.com/channel/UC8h_RK3-LQZmjdRL-mrSAQg">
                                    <span class="icon-text">
                                        <span class="icon has-text-danger">
                                            <i class="fab fa-youtube fa-2x"></i>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <p>
                <strong>Powered</strong> by SID. Work.
            </p>
        </div>
    </footer>
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
    <script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/js/bulma-carousel.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]', {
            header: '[data-scroll-header]',
            speed: 500
        });

        var image = document.getElementsByClassName('img');
        new simpleParallax(image, {
            orientation: 'right',
            overflow: true,
            scale: 1.5
        });

        bulmaCarousel.attach('#slider', {
            slidesToScroll: 1,
            slidesToShow: 3,
            infinite: true,
        });
    </script>
</body>

</html>
