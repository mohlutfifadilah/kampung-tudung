@section('title', 'Produk')
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
<style>
    input.hidden {
        display: none;
    }
</style>
<section class="section is-main-section">
    <div class="notification is-white">
        <div class="level">
            <div class="level-left">
                <div class="level-item">
                    <div>
                        <span class="icon"><i class="mdi mdi-buffer default"></i></span>
                        <b>Produk</b>
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
            <form method="post" action="/product" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <div class="field is-horizontal mb-5">
                    <div class="field-label is-normal">
                        <label class="label">Gambar</label>
                    </div>
                    <div class="field-body">
                        <div class="file is-normal">
                            <label class="file-label">
                                <input class="file-input @error('gambar') is-danger @enderror" accept="image/*"
                                    onchange="showMyImage(this)" type="file" name="gambar">
                                <span class="file-cta">
                                    <span class="file-icon">
                                        <i class="fas fa-upload"></i>
                                    </span>
                                    <span class="file-label">
                                        Upload File
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="mt-2 ml-2">
                            @error('gambar')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal mb-5">
                    <div class="field-label is-normal">
                    </div>
                    <div class="field-body">
                        <img id="thumbnail" src="" alt="" style="max-height: 200px;">
                    </div>
                </div>
                <div class="field is-horizontal mb-5">
                    <div class="field-label is-normal">
                        <label class="label">Judul</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control is-expanded">
                                <input class="input @error('judul') is-danger @enderror" type="text" placeholder=""
                                    name="judul" id="judul" value="{{ old('judul') }}">
                                {{-- <span class="icon is-small is-left"><i class="fa-solid fa-user"></i></span> --}}
                            </p>
                            @error('judul')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
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
                                    name="harga" id="number_only" value="{{ old('harga') }}">
                                {{-- <span class="icon is-small is-left"><i class="fa-solid fa-user"></i></span> --}}
                            </p>
                            @error('harga')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal mb-5">
                    <div class="field-label is-normal">
                        <label class="label">Keterangan</label>
                    </div>
                    <div class="field-body">
                        <div class="level mt-1">
                            <div class="level-left">
                                <div class="level-item">
                                    <input type="checkbox" class="check-kondisi">&nbsp; Kondisi |
                                </div>
                                <div class="level-item">
                                    <input type="checkbox" class="check-ukuran">&nbsp; Ukuran |
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal mb-5">
                    <div class="field-label is-normal">
                        <label class="label"></label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control is-expanded">
                                <input class="input @error('kondisi') is-danger @enderror hidden" type="text"
                                    placeholder="* Masukkan kondisi barang. Contoh : Baik, Baru, Bekas" name="kondisi"
                                    id="kondisi" value="{{ old('kondisi') }}">
                                {{-- <span class="icon is-small is-left"><i class="fa-solid fa-user"></i></span> --}}
                            </p>
                            @error('kondisi')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal mb-5">
                    <div class="field-label is-normal">
                        <label class="label"></label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control is-expanded">
                                <input class="input @error('ukuran') is-danger @enderror hidden" type="text"
                                    placeholder="* Masukkan ukuran dimensi barang (panjang, lebar, tinggi). Contoh : 20 x 40 x 10"
                                    name="ukuran" id="ukuran" value="{{ old('ukuran') }}">
                                {{-- <span class="icon is-small is-left"><i class="fa-solid fa-user"></i></span> --}}
                            </p>
                            @error('ukuran')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal mb-5">
                    <div class="field-label is-normal">
                        <label class="label">Deskripsi</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control is-expanded">
                                <textarea class="textarea @error('deskripsi') is-danger @enderror" name="deskripsi" id="deskripsi"
                                    value="{{ old('deskripsi') }}"></textarea>
                                {{-- <span class="icon is-small is-left"><i class="fa-solid fa-user"></i></span> --}}
                            </p>
                            @error('deskripsi')
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
                                    <a href="/product/{{ auth()->user()->id }}" class="button is-outlined is-danger">
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
<script>
    function showMyImage(fileInput) {
        var files = fileInput.files;
        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var imageType = /image.*/;
            if (!file.type.match(imageType)) {
                continue;
            }
            var img = document.getElementById("thumbnail");
            img.file = file;
            var reader = new FileReader();
            reader.onload = (function(aImg) {
                return function(e) {
                    aImg.src = e.target.result;
                };
            })(img);
            reader.readAsDataURL(file);
        }
    }
    $(function() {
        $('input[id="kondisi"]').hide();
        $('input[id="ukuran"]').hide();

        //show it when the checkbox is clicked
        $('input[class="check-kondisi"]').on('click', function() {
            if ($(this).prop('checked')) {
                $('input[id="kondisi"]').fadeIn();
            } else {
                $('input[id="kondisi"]').hide();
            }
        });
        $('input[class="check-ukuran"]').on('click', function() {
            if ($(this).prop('checked')) {
                $('input[id="ukuran"]').fadeIn();
            } else {
                $('input[id="ukuran"]').hide();
            }
        });
    });
</script>
@include('merchant.template.footer')
