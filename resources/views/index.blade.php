<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kampung Tudung</title>
    <link rel="shortcut icon" href="{{ asset('default/tudung.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://jqueryui.com/resources/demos/datepicker/i18n/datepicker-id.js"></script>
    <script type="text/javascript" src="{{ asset('js/datepicker-id.js') }}"></script>
    <script>
        $(function() {

            $("#datepicker").datepicker({
                altField: "#alternate",
                altFormat: "DD, d MM yy"
            });
        });
    </script>
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
        }

        .brand {
            background: url('{{ asset('default/tudung.png') }}') no-repeat center center;
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

        #alternate {
            padding: 0 0;
        }

        .navbar-burger,
        .navbar-burger:hover,
        .navbar-burger:focus,
        .navbar-burger:active {
            background: white;
            border-radius: 50%;
            border: none;
            color: #00c4a7;
        }

        .splide__slide {
            padding: 1rem;
            display: flex;
            justify-content: center;

        }

        .splide__slide__container {
            width: 300px;
            height: 300px;
            text-align: center;
        }

        .video-container {
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        .video-container::after {
            padding-top: 56.25%;
            display: block;
            content: '';
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .map-responsive {
            overflow: hidden;
            position: relative;
            height: 350px;
        }

        .map-responsive iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }

        .link {
            margin: 0 15px;
        }

        @media only screen and (max-width: 768px) {

            /* For mobile phones: */
            .navbar-end .navbar-item.mr-5 {
                color: black;
            }
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
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item brand" href="#home">

                        </a>

                        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
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
                            <a class="navbar-item mr-5 has-text-weight-bold" href="/toko">
                                Toko Online
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
                        <strong>Jelajahi &nbsp; </strong> <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="about">
        <div class="container">
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
        </div>
    </section>
    <section class="section splide" id="gallery" aria-labelledby="carousel-heading">
        <div class="container is-fluid">
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
        </div>
    </section>
    <section class="section splide" id="paket">
        <div class="container">
            <div class="text-has-centered mb-3">
                <p class="title">
                    Paket Wisata
                </p>
                <p class="subtitle has-text-primary">
                    Kampung Tudung
                </p>
                <hr class="is-primary" width="10%">
            </div>
        </div>
        <div class="splide__track">
            <ul class="splide__list">
                @foreach ($paket as $g)
                    <li class="splide__slide">
                        <div class="splide__slide__container">
                            <div class="slide__content">
                                <div class="card has-text-centered">
                                    <div class="card-content">
                                        <div class="content">
                                            @php
                                                $includee = \App\Models\Termasuk::where('id_paket', $g->id_paket)->get();
                                            @endphp
                                            <h3>
                                                {{ $g->nama }}
                                            </h3>
                                            <p>Sudah Termasuk : </p>
                                            <ul>
                                                @foreach ($includee as $item)
                                                    <li>
                                                        {{ $item->nama }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                            <span class="tag is-info is-medium">@currency($g->harga)/orang</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
    <section class="section has-background-primary has-text-centered" id="mitra">
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
    <section class="section" id="video">
        <div class="container">
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
                            <div class="video-container">
                                <iframe src="https://youtube.com/embed/WhD9tbrUbnE" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="map">
        <div class="map-responsive">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63273.376639123!2d109.6116066530762!3d-7.619940037274779!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7acbc66a26ec7b%3A0x75bcd6f02e708e77!2sKampung%20Tudung!5e0!3m2!1sen!2sid!4v1657588390613!5m2!1sen!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <section class="section" id="booking">
        <div class="container">
            <p class="title is-3 mt-3">Pesan</p>
            <p class="subtitle has-text-primary is-3">Sekarang</p>
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title is-centered is-size-4">
                        Pemesanan Tiket Wisata
                    </p>
                </header>
                <div class="card-content">
                    <form action="/send" method="post">
                        @csrf
                        {{ csrf_field() }}
                        <div class="columns">
                            <div class="column">
                                <div class="field">
                                    <label for="" class="label">Nama / Organisasi / Instansi</label>
                                    <div class="control">
                                        <input class="input @error('nama') is-danger @enderror" type="text"
                                            name="nama" value="{{ old('nama') }}">
                                        @error('nama')
                                            <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="field">
                                    <label for="" class="label">Tanggal Pemesanan</label>
                                    <div class="control">
                                        <input class="input @error('tanggal') is-danger @enderror" type="text"
                                            placeholder="Tanggal" name="tanggal" value="{{ old('tanggal') }}"
                                            id="datepicker">
                                        @error('tanggal')
                                            <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                <div class="field">
                                    <label for="" class="label">Kontak Pemesanan (No. Handphone /
                                        Whatsapp)</label>
                                    <div class="control">
                                        <input class="input @error('kontak') is-danger @enderror keep-number"
                                            type="text" name="kontak" value="{{ old('kontak') }}"
                                            id="number">
                                        @error('kontak')
                                            <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="field">
                                    <label for="" class="label">Pilih Paket Wisata</label>
                                    <div class="control">
                                        <div class="select">
                                            <select class="input @error('paket') is-danger @enderror"
                                                style="width: 100%;" name="paket" id="language"
                                                onChange="update()">
                                                <option selected disabled>Pilih Paket</option>
                                                @foreach ($paket as $p)
                                                    <option value="{{ $p->id }}"
                                                        data-id="{{ $p->harga }}">
                                                        {{ $p->nama }}(@currency($p->harga)/Orang)
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
                        </div>
                        <div class="columns">
                            <div class="column">
                                <div class="field">
                                    <label for="" class="label">Konfirmasi Pesanan (Pilih salah satu)</label>
                                    <div class="control">
                                        <label class="radio">
                                            <input type="radio" name="answer" id="yesCheck"
                                                onclick="javascript:yesnoCheck();">
                                            Whatsapp
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="answer" id="noCheck"
                                                onclick="javascript:yesnoCheck();">
                                            Email
                                        </label>
                                        <div id="ifYes" class="mt-2" style="display: none;">
                                            <input class="input auto @error('wa') is-danger @enderror keep-number"
                                                type="text" name="wa" value="{{ old('wa') }}">
                                            <p class="help is-info">* Whatsapp atau email ini akan digunakan untuk
                                                konfirmasi</p>
                                            @error('wa')
                                                <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div id="ifNo" class="mt-2" style="display: none;">
                                            <input class="input auto @error('email') is-danger @enderror"
                                                type="text" id="copy" name="email"
                                                value="{{ old('email') }}">
                                            <p class="help is-info">* Whatsapp atau email ini akan digunakan untuk
                                                konfirmasi</p>
                                            @error('email')
                                                <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="field">
                                    <label for="" class="label">Jumlah Orang</label>
                                    <div class="control">
                                        <div class="columns is-mobile">
                                            <div class="column">
                                                <div class="field">
                                                    <label for="" class="label">Dewasa</label>
                                                    <input
                                                        class="input @error('dewasa') is-danger @enderror keep-number InvQty"
                                                        type="text" name="dewasa" value="{{ old('dewasa') }}"
                                                        id="InvQty1">
                                                    <p class="help is-info">
                                                        * Jika tidak ada, isi dengan 0
                                                    </p>
                                                    @error('dewasa')
                                                        <p class="help is-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="column">
                                                <div class="field">
                                                    <label for="" class="label">Anak-anak</label>
                                                    <input
                                                        class="input @error('anak') is-danger @enderror keep-number InvQty"
                                                        type="text" name="anak" value="{{ old('anak') }}"
                                                        id="InvQty2">
                                                    @error('anak')
                                                        <p class="help is-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="columns">
                            <div class="column">
                                <div class="field">
                                    <label for="" class="label">Alamat</label>
                                    <div class="control">
                                        <textarea class="textarea @error('alamat') is-danger @enderror" name="alamat">{{ old('alamat') }}</textarea>
                                        @error('alamat')
                                            <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="field">
                                    <label for="" class="label">Pesan / Keterangan (Opsional)</label>
                                    <div class="control">
                                        <textarea class="textarea" name="pesan">{{ old('pesan') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column"></div>
                            <div class="column">
                                <div class="field">
                                    <div class="control">
                                        <div class="columns is-mobile">
                                            <div class="column">
                                                <div class="field">
                                                    <dl>
                                                        <dt>
                                                            <input type="text"
                                                                style="border: none transparent;"class="has-text-weight-bold input is-static m-0 p-0"
                                                                readonly value="Konfirmasi pesanan ke">
                                                        </dt>
                                                        <dt>
                                                            <input type="text"
                                                                style="border: none transparent;"class="has-text-weight-bold input is-static m-0 p-0"
                                                                readonly value="Tanggal Pemesanan">
                                                        </dt>
                                                        <dt>
                                                            <input type="text"
                                                                style="border: none transparent;"class="has-text-weight-bold input is-static m-0 p-0"
                                                                readonly value="Paket">
                                                        </dt>
                                                        <dt>
                                                            <input type="text"
                                                                style="border: none transparent;"class="has-text-weight-bold input is-static m-0 p-0"
                                                                readonly value="Jumlah Orang">
                                                        </dt>
                                                        <dt>
                                                            <input type="text"
                                                                style="border: none transparent;"class="has-text-weight-bold input is-static m-0 p-0"
                                                                readonly value="Jumlah yang harus dibayar">
                                                        </dt>

                                                    </dl>
                                                </div>
                                            </div>
                                            <div class="column">
                                                <div class="field">
                                                    <dl>
                                                        <dt>
                                                            <input type="text" style="border: none transparent;"
                                                                class="input is-static m-0 p-0 auto-display">
                                                        </dt>
                                                        <dt>
                                                            <input id="alternate" name="alternate" type="text"
                                                                style="border: none transparent;"
                                                                class="input is-static m-0 p-0 " readonly>
                                                        </dt>
                                                        <dt>
                                                            <input id="display-package" type="text"
                                                                style="border: none transparent;"
                                                                class="input is-static m-0 p-0" readonly>
                                                        </dt>
                                                        <dt>
                                                            <input type="text" style="border: none transparent;"
                                                                class="input is-static m-0 p-0 Total" id="Total"
                                                                readonly>
                                                        </dt>
                                                        <dt>
                                                            <input type="text" style="border: none transparent;"
                                                                class="input is-static m-0 p-0" id="fee"
                                                                readonly>
                                                        </dt>

                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column"></div>
                            <div class="column">
                                <button class="button is-primary is-fullwidth" type="submit">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="section has-text-centered" id="mitra">
        <nav class="level">
            <div class="level-item has-text-centered">
                <a href="http://wa.me/6282323723593" class="link">
                    <span class="icon-text">
                        <span class="icon has-text-success">
                            <i class="fab fa-whatsapp fa-2x"></i>
                        </span>
                    </span>
                </a>
                <a href="https://www.instagram.com/desa_grujugan/" class="link">
                    <span class="icon-text">
                        <span class="icon has-text-info">
                            <i class="fab fa-instagram fa-2x"></i>
                        </span>
                    </span>
                </a>
                <a href="https://www.youtube.com/channel/UC8h_RK3-LQZmjdRL-mrSAQg" class="link">
                    <span class="icon-text">
                        <span class="icon has-text-danger">
                            <i class="fab fa-youtube fa-2x"></i>
                        </span>
                    </span>
                </a>
            </div>
        </nav>
        <p>
            <strong>Powered</strong> by SID. Work.
        </p>
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
    <script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script type="text/javascript" src="{{ asset('js/datepicker-id.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // Get all "navbar-burger" elements
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            // Check if there are any navbar burgers
            if ($navbarBurgers.length > 0) {

                // Add a click event on each of them
                $navbarBurgers.forEach(el => {
                    el.addEventListener('click', () => {

                        // Get the target from the "data-target" attribute
                        const target = el.dataset.target;
                        const $target = document.getElementById(target);

                        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                        el.classList.toggle('is-active');
                        $target.classList.toggle('is-active');

                    });
                });
            }
            $('.auto').keyup(function() {
                $('.auto-display').val($(this).val());
            });
            $('.InvQty').keyup(function() {
                var val2 = 0;
                var select = document.getElementById('InvQty1').value;
                var select2 = document.getElementById('InvQty2').value;
                $("input[id^='InvQty']").each(function() {
                    if ($(this).val().length != 0) {
                        val2 = val2 + parseInt($(this).val())
                    }
                });
                if (select > 0) {
                    if (select2 < 1) {
                        $('#Total').val(select + " Dewasa");
                    }
                    $('#Total').val(val2 + " Orang (" + select + " Dewasa, " + select2 + " Anak-anak)");
                } else if (select2 > 0) {
                    if (select < 1) {
                        $('#Total').val(select + " Anak-anak");
                    }
                    $('#Total').val(val2 + " Orang (" + select + " Dewasa, " + select2 + " Anak-anak)");
                }

                var option = $('#language').find(':selected').attr('data-id');

                var zui = option;
                var mgh = val2 * zui;

                $('#fee').val(convertToRupiah(mgh));
            });
            var rupiah = document.getElementById('fee');
            rupiah.addEventListener('keyup', function(e) {
                // tambahkan 'Rp.' pada saat form di ketik
                // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
                rupiah.value = formatRupiah(this.value, 'Rp. ');
            });
            var scroll = new SmoothScroll('a[href*="#"]', {
                header: '[data-scroll-header]',
                speed: 500
            });
            $('.keep-number').bind('keyup paste', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
            new Splide('#gallery', {
                type: 'loop',
                padding: '0',
                perPage: 3,
                perMove: 1,
                focus: 'center',
                autoWidth: true,
                autoHeight: true
            }).mount();

            new Splide('#paket', {
                perPage: 1,
                perMove: 1,
                focus: 'center',
                autoWidth: true,
                autoHeight: true
            }).mount();
        });
        window.onload = function() {
            document.getElementById('wa').style.display = 'none';
            document.getElementById('email').style.display = 'none';
        }

        function yesnoCheck() {
            if (document.getElementById('yesCheck').checked) {
                document.getElementById('ifYes').style.display = 'block';
                document.getElementById('ifNo').style.display = 'none';
                document.getElementById('redhat1').style.display = 'none';
                document.getElementById('aix1').style.display = 'none';
            } else if (document.getElementById('noCheck').checked) {
                document.getElementById('ifNo').style.display = 'block';
                document.getElementById('ifYes').style.display = 'none';
                document.getElementById('redhat1').style.display = 'none';
                document.getElementById('aix1').style.display = 'none';
            }
        }

        function convertToRupiah(angka) {
            var rupiah = '';
            var angkarev = angka.toString().split('').reverse().join('');
            for (var i = 0; i < angkarev.length; i++)
                if (i % 3 == 0) rupiah += angkarev.substr(i, 3) + '.';
            return 'Rp. ' + rupiah.split('', rupiah.length - 1).reverse().join('');
        }

        function update() {
            var select = document.getElementById('language');
            var option = select.options[select.selectedIndex];

            document.getElementById('display-package').value = option.text;
        }

        update();
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/js/splide.min.js"></script>

</html>
