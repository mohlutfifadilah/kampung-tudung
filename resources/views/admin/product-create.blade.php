@section('title', 'Produk')
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
                        <img id="thumbnail" src="" alt="" />
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
                                    <a href="/product" class="button is-outlined is-danger">
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
</script>
@include('admin.template.footer')
