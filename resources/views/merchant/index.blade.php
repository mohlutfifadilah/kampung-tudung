@section('title', 'Mitra')
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
                Profil Mitra
            </p>
        </header>
        <div class="card-content">
            <div class="media">
                <div class="media-left">
                    <figure class="image is-128x128 pr-4 pb-4 mb-5">
                        <img class="is-rounded" src="{{ asset('storage/' . $merchant->foto) }}" alt="Placeholder image">
                    </figure>
                </div>
                <div class="media-content">
                    <p class="title is-4">{{ $merchant->nama }}</p>
                    <p class="subtitle is-6">{{ $merchant->wa }}</p>
                </div>
            </div>

            <div class="content mt-5">
                @if ($merchant->deskripsi)
                    {{ $merchant->deskripsi }}
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
