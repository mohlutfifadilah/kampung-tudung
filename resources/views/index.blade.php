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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/css/bulma-carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
            background-image: url('{{ asset('default/bg.jpg') }}');
            -webkit-box-shadow: inset 24px 4px 64px -24px rgba(71, 71, 71, 1);
            -moz-box-shadow: inset 24px 4px 64px -24px rgba(71, 71, 71, 1);
            box-shadow: inset 24px 4px 64px -24px rgba(71, 71, 71, 1);
            padding: 0px;
        }

        .brand {
            background: url('{{ asset('default/tudung.png') }}') no-repeat center center;
            background-size: cover;
            width: 84px
        }

        .navbar-end a.navbar-item {
            margin-right: 4px;
        }

        .navbar-end .navbar-item.mr-3 {
            color: white;
        }

        .navbar-menu .navbar-end .navbar-item.mr-3:hover {
            color: #00c4a7;
        }
    </style>
</head>

<body>
    @if (session('status'))
        <script>
            swal({
                text: "{!! session('status') !!}",
                title: "{!! session('title') !!}",
                type: "{!! session('type') !!}",
                icon: "{!! session('type') !!}",
                // more options
            });
        </script>
    @endif
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
                            <a class="navbar-item mr-3 has-text-weight-bold" data-scroll href="#home">
                                Beranda
                            </a>
                            <a class="navbar-item mr-3 has-text-weight-bold" data-scroll href="#about">
                                Tentang Kami
                            </a>
                            <a class="navbar-item mr-3 has-text-weight-bold" data-scroll href="#gallery">
                                Galeri
                            </a>
                            <a class="navbar-item mr-3 has-text-weight-bold" href="/toko">
                                Toko Online
                            </a>
                            <a class="navbar-item mr-3 has-text-weight-bold" data-scroll href="#video">
                                Video
                            </a>
                            <a class="navbar-item mr-3 has-text-weight-bold" data-scroll href="#map">
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
                        <strong>Jelajahi &nbsp; </strong> <i class="fas fa-arrow-right"></i>
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
                <img src="{{ asset('storage/' . $about->foto) }}" class="img" alt="" width="300"
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
                    {{ $about->deskripsi }}
                </p>
            </div>
        </div>
    </section>
    <section class="container gallery splide my-5" id="gallery" aria-labelledby="carousel-heading">
        <div class="text-has-centered mb-3">
            <p class="title">
                Galeri
            </p>
            <p class="subtitle has-text-primary">
                Kampung Tudung
            </p>
            <hr class="is-primary" width="10%">
        </div>
        <div class="splide__track">
            <ul class="splide__list">
                @foreach ($gallery as $g)
                    <li class="splide__slide">
                        <img src="{{ asset('storage/' . $g->foto) }}" alt="">
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
    {{-- <section class="container paket splidee my-5" id="paket" aria-labelledby="carousel-heading">
        <div class="text-has-centered mb-3">
            <p class="title">
                Paket Wisata
            </p>
            <p class="subtitle has-text-primary">
                Kampung Tudung
            </p>
            <hr class="is-primary" width="10%">
        </div>
        <div class="splide__track">
            <ul class="splide__list">
                @foreach ($paket as $g)
                    <li class="splide__slide">
                        <div class="card has-text-centered">
                            <header class="card-header">
                                <p class="card-header-title is-centered">
                                    {{ $g->nama }}
                                </p>
                            </header>
                            <div class="card-content">
                                <div class="content">
                                    <span class="tag is-medium is-info is-rounded">
                                        @currency($g->harga)/orang
                                    </span>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section> --}}
    <section class="container paket my-5" id="paket">
        <div class="text-has-centered mb-3">
            <p class="title">
                Paket Wisata
            </p>
            <p class="subtitle has-text-primary">
                Kampung Tudung
            </p>
            <hr class="is-primary" width="10%">
        </div>
        <!-- Start Carousel -->
        <div id="carousel-demo2" class="carousel">
            @foreach ($paket as $g)
                <div class="card has-text-centered">
                    <header class="card-header">
                        <p class="card-header-title is-centered">
                            {{ $g->nama }}
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <span class="tag is-medium is-info is-rounded">
                                @currency($g->harga)/orang
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- End Carousel -->
    </section>
    <section class="has-text-centered is-fluid mitra my-5 py-5 has-background-primary" id="mitra">
        <div class="container">
            <div class="columns is-centered mt-3">
                <div class="column has-text-centered">
                    <div class="text-has-centered mb-3">
                        <p class="title">
                            Toko Online
                        </p>
                        <p class="subtitle has-text-white">
                            Kampung Tudung
                        </p>
                        <hr class="is-white is-centered" width="10%" style="margin:auto;">
                    </div>
                </div>
            </div>
            <div class="columns is-centered has-background-primary mb-3">
                <div class="column has-text-centered">
                    <p class="content has-text-white">
                        Ingin lihat produk-produk asli kerajinan tangan Kampung Tudung ? ayo langsung cek !
                    </p>
                    <a class="button is-white has-text-primary is-centered" href="/toko">
                        <strong>Cek Toko <i class="fas fa-arrow-right"></i></strong>
                    </a>
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
                    {{ csrf_field() }}
                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <div class="control">
                                    <input class="input @error('nama') is-danger @enderror" type="text"
                                        placeholder="Nama / Instansi" name="nama" value="{{ old('nama') }}">
                                    @error('nama')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <div class="control">
                                    <input class="input @error('alamat') is-danger @enderror" type="text"
                                        placeholder="Alamat" name="alamat" value="{{ old('alamat') }}">
                                    @error('alamat')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <div class="control">
                                    <input class="input @error('no') is-danger @enderror" type="text"
                                        placeholder="No. Telepon" name="no" value="{{ old('no') }}"
                                        id="number_only">
                                    @error('no')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <div class="control">
                                    <input class="input @error('tanggal') is-danger @enderror" type="date"
                                        placeholder="Tanggal" name="tanggal" value="{{ old('tanggal') }}">
                                    @error('tanggal')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <div class="control">
                                    <input class="input @error('email') is-danger @enderror" type="email"
                                        placeholder="E-mail" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <div class="control">
                                    <input class="input @error('jumlah') is-danger @enderror" type="text"
                                        placeholder="Jumlah Orang" name="jumlah" value="{{ old('jumlah') }}">
                                    @error('jumlah')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column is-4">
                            <div class="field">
                                <div class="control">
                                    <div class="select">
                                        <select class="input @error('paket') is-danger @enderror" style="width: 100%;"
                                            name="paket">
                                            <option selected disabled>Pilih Paket</option>
                                            @foreach ($paket as $p)
                                                <option value="{{ $p->id }}">{{ $p->nama }}
                                                    (@currency($p->harga)/Orang)
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('paket')
                                            <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <div class="control">
                                    <textarea class="textarea" placeholder="Pesan (Opsional)" name="pesan">{{ old('pesan') }}</textarea>
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
    <script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/js/bulma-carousel.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js"></script>
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

        bulmaCarousel.attach('#carousel-demo', {
            slidesToScroll: 1,
            slidesToShow: 3,
            infinite: true,
        });
        bulmaCarousel.attach('#carousel-demo2', {
            slidesToScroll: 1,
            slidesToShow: 4,
            infinite: true,
        });

        $('#number_only').bind('keyup paste', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });

        new Splide('#gallery', {
            type: 'loop',
            padding: '5rem',
            perPage: 3,
            perMove: 1,
            focus: 'center',
            autoWidth: true,
            autoHeight: true
        }).mount();
    </script>
</body>

</html>
