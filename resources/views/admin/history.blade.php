@section('title', 'Riwayat')
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
                        <b>Riwayat</b><br>
                        <small class="ml-2">
                            Total data : {{ $history->total() }}
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card has-table has-table-container-upper-radius">
        <div class="card-content">
            <div class="b-table has-pagination">
                <div class="table-wrapper has-mobile-cards">
                    @if ($history->count())
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
                                @foreach ($history as $c)
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
                                        <td data-label="Jumlahorang">{{ $c->jumlahorang }}</td>
                                        <td data-label="Total">@currency($c->total)</td>
                                        <td data-label="Status">
                                            <span
                                                class="tag is-success is-medium has-text-white has-text-weight-bold">Dikonfirmasi</span>
                                        </td>
                                        <td class="is-actions-cell">
                                            <div class="buttons is-center">
                                                <a href="/history/{{ $c->id }}"
                                                    class="button is-small is-info text-white"><span><i
                                                            class="fa-solid fa-info"></i></span></a>
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
                @if ($history->count())
                    <hr>
                    <div class="columns px-5 pb-5">
                        <div class="column">

                            <ul class="pagination-list">
                                {{ $history->links() }}
                            </ul>
                        </div>
                        <div class="column">

                        </div>
                        <div class="column">

                        </div>
                        <div class="column has-text-right">
                            <small>
                                Halaman ke {{ $history->currentPage() }} dari
                                {{ $history->count() }}
                            </small>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@include('admin.template.footer')
