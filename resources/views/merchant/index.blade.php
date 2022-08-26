@section('title', 'Toko')
@include('merchant.template.header')
@include('merchant.template.sidebar')
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
<section class="section is-main-section">
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-account-star"></i></span>
                Profil Toko
            </p>
        </header>
        <div class="card-content">
            <div class="media">
                <div class="media-left">
                    @if ($merchant->foto)
                        <img src="{{ asset('storage/' . $merchant->foto) }}" alt=""
                            style="max-height: 200px; max-width: 400px;">
                    @else
                        <i class="fa-solid fa-circle-user fa-10x"></i>
                    @endif
                </div>
                <div class="media-content">
                    <p class="title is-4">{{ $merchant->nama }}</p>
                    <p class="subtitle is-6">{{ $merchant->wa }}</p>
                </div>
            </div>

            <div class="content">
                @if ($merchant->deskripsi)
                    <p>
                        {{ $merchant->deskripsi }}
                    </p>
                @else
                    Belum ada deskripsi
                @endif
            </div>
            <div class="buttons is-right">
                <a href="/profile/{{ $merchant->id }}/edit" class="button is-warning">
                    Edit Profil
                </a>
            </div>
        </div>
    </div>
</section>
@include('merchant.template.footer')
