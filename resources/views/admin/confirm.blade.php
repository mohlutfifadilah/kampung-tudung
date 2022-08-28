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
                        <b>Konfirmasi Pesanan</b><br>
                        <small class="ml-2">
                            Total data : {{ $confirm->total() }}
                        </small>
                    </div>
                </div>
            </div>
            {{-- <div class="level-right">
                <a href="/confirm/create" class="button is-small is-info">
                    <span class="icon"><i class="fa-solid fa-circle-plus"></i></span><b>Tambah</b>
                </a>
            </div> --}}
        </div>
    </div>

    <div class="card has-table has-table-container-upper-radius">
        <div class="card-content">
            <div class="b-table has-pagination">
                <div class="table-wrapper has-mobile-cards">
                    @if ($confirm->count())
                        <table class="table is-fullwidth is-striped is-hoverable is-fullwidth">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Paket</th>
                                    <th>Harga</th>
                                    <th>Jumlah Orang</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($confirm as $c)
                                    <tr>
                                        <td data-label="No">{{ $loop->iteration }}</td>
                                        <td data-label="Nama">{{ $c->nama }}</td>
                                        <td data-label="Tanggal">{{ $c->tanggal }}</td>
                                        @php
                                            $nama_paket = \App\Models\Paket::where('id', $c->paket)->value('nama');
                                            $harga_paket = \App\Models\Paket::where('id', $c->paket)->value('harga');
                                        @endphp
                                        <td data-label="Paket">{{ $nama_paket }}</td>
                                        <td data-label="Harga">@currency($harga_paket)</td>
                                        <td data-label="Jumlahorang">{{ $c->jumlah }}</td>
                                        <td data-label="Total">@currency($c->total)</td>
                                        <td data-label="Status">
                                            <span
                                                class="tag is-warning is-medium has-text-white has-text-weight-bold">Belum
                                                Dikonfirmasi</span>
                                        </td>
                                        <td class="is-actions-cell">
                                            <div class="buttons is-center">
                                                <a href="/confirm/{{ $c->id }}"
                                                    class="button is-small is-info text-white"><span class="icon"><i
                                                            class="fa-solid fa-info"></i></span></a>
                                                <button class="button is-small is-success remove-user text-white"
                                                    type="submit" data-id="{{ $c->id }}"
                                                    data-action="{{ route('confirm.destroy', $c->id) }}">
                                                    <span class="icon"><i class="fa-solid fa-check"></i></span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="card has-table">
                            <div class="card-content">
                                <section class="section">
                                    <div class="content has-text-grey has-text-centered">
                                        <p>
                                            <span class="icon is-large"><i
                                                    class="mdi mdi-emoticon-sad mdi-48px"></i></span>
                                        </p>
                                        <p>Data kosong</p>
                                    </div>
                                </section>
                            </div>
                        </div>
                    @endif
                </div>
                @if ($confirm->count())
                    <hr>
                    <div class="columns px-5 pb-5">
                        <div class="column">

                            <ul class="pagination-list">
                                {{ $confirm->links() }}
                            </ul>
                        </div>
                        <div class="column">

                        </div>
                        <div class="column">

                        </div>
                        <div class="column has-text-right">
                            <small>
                                Halaman ke {{ $confirm->currentPage() }} dari
                                {{ $confirm->count() }}
                            </small>
                        </div>
                    </div>
                @endif
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
