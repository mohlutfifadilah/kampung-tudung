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
                        <b>Paket</b><br>
                        <small class="ml-2">
                            Total data : {{ $paket->total() }} <br>
                        </small>
                        <small class="has-text-danger mt-3 ml-2">
                            Catatan : Paket tidak bisa diedit, silahkan hapus dan buat yang baru bila terjadi
                            kesalahan
                            saat menambahkan paket
                        </small>
                    </div>
                </div>
            </div>
            <div class="level-right">
                <a href="/paket/create" class="button is-small is-info">
                    <span class="icon"><i class="fa-solid fa-circle-plus"></i></span><b>Tambah</b>
                </a>
            </div>
        </div>
    </div>

    <div class="card has-table has-table-container-upper-radius">
        <div class="card-content">
            <div class="b-table has-pagination">
                <div class="table-wrapper has-mobile-cards">
                    @if ($paket->count())
                        <table class="table is-fullwidth is-striped is-hoverable is-fullwidth">
                            <thead>
                                <tr>
                                    {{-- <th class="is-checkbox-cell">
                                    <label class="b-checkbox checkbox">
                                        <input type="checkbox" value="false">
                                        <span class="check"></span>
                                    </label>
                                </th> --}}
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($paket as $p)
                                    <tr>
                                        <td data-label="No">{{ $loop->iteration }}</td>
                                        <td data-label="Nama">{{ $p->nama }}</td>
                                        <td data-label="Harga">@currency($p->harga)</td>
                                        @php
                                            $za = \App\Models\Termasuk::where('id_paket', $p->id_paket)->get();
                                        @endphp
                                        <td data-label="Keterangan">
                                            @foreach ($za as $i)
                                                <label class="checkbox" disabled>
                                                    <input type="checkbox" disabled checked>
                                                    {{ $i->nama }}
                                                </label>
                                                <br>
                                            @endforeach
                                        </td>
                                        <td class="is-actions-cell">
                                            <div class="buttons is-center">
                                                {{-- <a href="/paket/{{ $p->id }}/edit"
                                                    class="button is-small is-warning"><span class="icon"><i
                                                            class="fa-solid fa-pen-to-square"></i></span></a> --}}
                                                <button class="button is-small is-danger remove-user" type="submit"
                                                    data-id="{{ $p->id }}"
                                                    data-action="{{ route('paket.destroy', $p->id) }}">
                                                    <span class="icon"><i class="fa-solid fa-trash-can"></i></span>
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
                @if ($paket->count())
                    <hr>
                    <div class="columns px-5 pb-5">
                        <div class="column">

                            <ul class="pagination-list">
                                {{ $paket->links() }}
                            </ul>
                        </div>
                        <div class="column">

                        </div>
                        <div class="column">

                        </div>
                        <div class="column has-text-right">
                            <small>
                                Halaman ke {{ $paket->currentPage() }} dari
                                {{ $paket->count() }}
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
            text: "Hapus paket ini",
            type: "warning",
            showCancelButton: true,
            dangerMode: true,
            cancelButtonClass: '#DD6B55',
            confirmButtonColor: '#dc3545',
            confirmButtonText: 'Hapus',
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
