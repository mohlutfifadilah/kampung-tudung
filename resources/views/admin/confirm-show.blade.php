@section('title', 'Konfirmasi')
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
                        <b>Info Konfirmasi Pesanan</b><br>
                        {{-- <small class="ml-2">
                            Total data : {{ $confirm->total() }}
                        </small> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card container">
        <div class="card-content">
            <div class="container content">
                <div class="columns">
                    <div class="column">
                        <dl>
                            <dt><strong>Nama / Organisasi / Instansi</strong></dt>
                            <dd class="mb-4 mt-2">{{ $confirm->nama }}</dd>
                            <dt><strong>Kontak</strong></dt>
                            <dd class="mb-4 mt-2">{{ $confirm->kontak }}</dd>
                            <dt><strong>Konfirmasi</strong></dt>
                            @if ($confirm->wa)
                                <dd class="mb-4 mt-2">Whatsapp : {{ $confirm->wa }}</dd>
                            @endif
                            @if ($confirm->email)
                                <dd class="mb-4 mt-2">Email : {{ $confirm->email }}</dd>
                            @endif
                            <dt><strong>Tanggal</strong></dt>
                            <dd class="mb-4 mt-2">{{ $confirm->tanggal }}</dd>
                            @php
                                $nama_paket = \App\Models\Paket::where('id', $confirm->paket)->value('nama');
                                $harga_paket = \App\Models\Paket::where('id', $confirm->paket)->value('harga');
                            @endphp
                            <dt><strong>Alamat</strong></dt>
                            <dd class="mb-4 mt-2">{{ $confirm->alamat }}</dd>
                        </dl>
                    </div>
                    <div class="column">
                        <dl>
                            <dt><strong>Paket</strong></dt>
                            <dd class="mb-4 mt-2">{{ $nama_paket }}</dd>
                            <dt><strong>Jumlah Orang</strong></dt>
                            <dd class="mb-4 mt-2">{{ $confirm->jumlah }} Orang ({{ $confirm->dewasa }} Dewasa,
                                {{ $confirm->anak }} Anak-anak)</dd>
                            <dt><strong>Harga</strong></dt>
                            <dd class="mb-4 mt-2">@currency($harga_paket)</dd>
                            <dt><strong>Total</strong></dt>
                            <dd class="mb-4 mt-2">@currency($confirm->total)</dd>
                            <dt><strong>Pesan</strong></dt>
                            @if ($confirm->catatan)
                                <dd class="mb-4 mt-2">{{ $confirm->catatan }}</dd>
                            @else
                                <dd class="mb-4 mt-2">-</dd>
                            @endif
                        </dl>
                    </div>
                </div>
                <hr>
                <div class="columns">
                    <div class="column">
                        <dl>
                            <dt><strong>Status</strong></dt>
                            <dd class="mb-4 mt-2">
                                @if ($confirm->status == 0)
                                    <span class="tag is-warning is-medium has-text-white has-text-weight-bold">Belum
                                        Dikonfirmasi</span>
                                @endif
                            </dd>
                        </dl>
                    </div>
                    <div class="column">
                        <dl>
                            <dt><strong>Aksi</strong></dt>
                            <dd class="mb-4 mt-2">
                                <button class="button is-success remove-user text-white" type="submit"
                                    data-id="{{ $confirm->id }}"
                                    data-action="{{ route('confirm.destroy', $confirm->id) }}">
                                    <span><strong><i class="fa-solid fa-check"></i> Konfirmasi Sekarang</strong></span>
                                </button>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $("body").on("click", ".remove-user", function() {
        var current_object = $(this);
        swal({
            title: "Apakah anda yakin ?",
            text: "Konfirmasi pesanan ini",
            type: "warning",
            showCancelButton: true,
            dangerMode: true,
            cancelButtonClass: '#DD6B55',
            confirmButtonColor: '#48C78E',
            confirmButtonText: 'Konfirmasi',
            cancelButtonText: 'Batal',
        }, function(result) {
            if (result) {
                var action = current_object.attr('data-action');
                var token = jQuery('meta[name="csrf-token"]').attr('content');
                var id = current_object.attr('data-id');
                $('body').html("<form class='form-inline remove-form' method='post' action='" + action +
                    "'></form>");
                $('body').find('.remove-form').append(
                    '<input name="_method" type="hidden" value="delete">');
                $('body').find('.remove-form').append('<input name="_token" type="hidden" value="' +
                    token + '">');
                $('body').find('.remove-form').append('<input name="id" type="hidden" value="' + id +
                    '">');
                $('body').find('.remove-form').submit();
            }
        });
    });
</script>
@include('admin.template.footer')
