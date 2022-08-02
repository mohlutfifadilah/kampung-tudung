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
    <section class="container is-fluid mitra my-5" id="mitra">
        <div class="columns">
            <div class="column">
                <a href="/" class="button has-text-primary">
                    Kembali
                </a>
            </div>
        </div>
        <div class="columns">
            <div class="column is-4">
                <figure class="image is-1by1">
                    <img class="is-rounded" src="{{ asset('storage/' . $merchant->foto) }}">
                </figure>
            </div>
            <div class="column">
                <div class="card">
                    <div class="card-content mt-5">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4">{{ $merchant->nama }}</p>
                                <p class="subtitle is-6">No Whatsapp : {{ $merchant->wa }}</p>
                            </div>
                        </div>

                        <div class="content">
                            {{ $merchant->deskripsi }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-has-centered mb-3">
            <p class="title">
                Produk
            </p>
            {{-- <p class="subtitle has-text-primary">
                Kampung Tudung
            </p> --}}
            <hr class="is-primary" width="10%">
        </div>
        <div class="columns is-multiline">
            @foreach ($product as $m)
                <div class="column is-3 has-text-centered">
                    <div class="card">
                        <div class="card-image has-text-centered mb-3">
                            <figure class="image is-128x128 is-inline-block mt-5 mb-5">
                                <img class="is-rounded" src="{{ asset('storage/' . $m->gambar) }}"
                                    alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content mt-5">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">{{ $m->judul }}</p>
                                    <p class="subtitle is-6">{{ $m->harga }}</p>
                                </div>
                            </div>

                            <div class="content">
                                {{ $m->deskripsi }}
                            </div>
                        </div>
                        <footer class="card-footer">
                            <a href="http://wa.me/{{ Str::replaceFirst('0', '62', $merchant->wa) }}"
                                class="card-footer-item button is-primary" target="_blank" rel="noopener noreferrer">
                                Beli Sekarang
                            </a>
                        </footer>
                    </div>
                </div>
            @endforeach
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
