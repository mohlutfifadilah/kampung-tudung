@section('title', 'Paket')
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
                        <b>Paket</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <header class="card-header">
            <p class="card-header-title ml-2">
                <span class="icon mr-1"><i class="fa-solid fa-plus-circle"></i></span>
                Edit Data
            </p>
        </header>
        <div class="card-content">
            <form method="post" action="/paket/{{ $id->id }}">
                @csrf
                @method('put')
                <div class="field is-horizontal mb-5">
                    <div class="field-label is-normal">
                        <label class="label">Nama Paket</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control is-expanded">
                                <input class="input @error('nama') is-danger @enderror" type="text" placeholder=""
                                    name="nama" value="{{ $id->nama }}" id="nama">

                            </p>
                            @error('nama')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal mb-5">
                    <div class="field-label is-normal">
                        <label class="label">Include Paket</label>
                    </div>
                    <div class="field-body">
                        <div class="level mt-1">
                            <div class="level-left">
                                <div class="level-item">
                                    @foreach ($included as $i)
                                        <input type="checkbox" name="include[]" value="{{ $i->nama }}">
                                        &nbsp; {{ $i->nama }} | &nbsp;
                                    @endforeach
                                </div>
                                <p class="help is-info">* Include paket harus diinput ulang</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal mb-5">
                    <div class="field-label is-normal">
                        <label class="label">Harga</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control is-expanded">
                                <input class="input @error('harga') is-danger @enderror" type="text" placeholder=""
                                    name="harga" value="{{ $id->harga }}" id="number_only">

                            </p>
                            @error('harga')
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
                                    <button type="submit" class="button is-warning">
                                        <span>Edit</span>
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
