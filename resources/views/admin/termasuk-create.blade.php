@section('title', 'Include Paket')
@include('admin.template.header')
@include('admin.template.sidebar')
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
    <div class="notification is-white">
        <div class="level">
            <div class="level-left">
                <div class="level-item">
                    <div>
                        <span class="icon"><i class="mdi mdi-buffer default"></i></span>
                        <b>Include Paket</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <header class="card-header">
            <p class="card-header-title ml-2">
                <span class="icon mr-1"><i class="fa-solid fa-plus-circle"></i></span>
                Tambah Data
            </p>
        </header>
        <div class="card-content">
            <form method="post" action="/termasuk">
                @csrf
                <div class="field is-horizontal mb-5">
                    <div class="field-label is-normal">
                        <label class="label">Nama Include</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control is-expanded">
                                <input class="input @error('nama') is-danger @enderror" type="text" placeholder="" name="nama" id="nama" value="{{ old('nama') }}">

                            </p>
                            @error('nama')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <hr>
                <div class="field is-horizontal">
                    <div class="field-label">
                        <!-- Left empty for spacing -->
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="field is-grouped">
                                <div class="control">
                                    <button type="submit" class="button is-info">
                                        <span>Tambah</span>
                                    </button>
                                </div>
                                <div class="control">
                                    <a href="/paket" class="button is-outlined is-danger">
                                        Kembali
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@include('admin.template.footer')