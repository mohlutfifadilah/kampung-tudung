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
            <div class="card-content">
                <div class="columns">
                    <div class="column is-4">
                        <div class="content">
                            <figure class="image">
                                <img class="is-rounded" src="{{ asset('storage/' . $merchant->foto) }}"
                                    style="width: 240px; height: 240px;">
                            </figure>
                        </div>
                    </div>
                    <div class="column">
                        <p class="title is-4 mb-5">{{ $merchant->nama }}</p>
                        <p class="subtitle is-6">No Whatsapp : {{ $merchant->wa }}</p>
                        <div class="content">
                            @if ($merchant->deskripsi)
                                <p>
                                    {{ $merchant->deskripsi }}
                                </p>
                            @else
                                Belum ada deskripsi
                            @endif
                        </div>
                    </div>
                </div>
                <div class="buttons is-right">
                    <a href="/profile/{{ $merchant->id }}/edit" class="button is-warning">
                        Edit Profil
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@include('merchant.template.footer')
