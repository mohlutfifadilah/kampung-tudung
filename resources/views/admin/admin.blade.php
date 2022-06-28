@section('title', 'Admin')
@include('admin.template.header')
@include('admin.template.sidebar')
<section class="section is-main-section">
    <div class="notification is-white">
        <div class="level">
            <div class="level-left">
                <div class="level-item">
                    <div>
                        <span class="icon"><i class="mdi mdi-buffer default"></i></span>
                        <b>Admin</b>
                    </div>
                </div>
            </div>
            <div class="level-right">
                <a href="/admin/create" class="button is-small is-info">
                    <span class="icon"><i class="fa-solid fa-circle-plus"></i></span><b>Tambah</b>
                </a>
            </div>
        </div>
    </div>

    <div class="card has-table has-table-container-upper-radius">
        <div class="card-content">
            <div class="b-table has-pagination">
                <div class="table-wrapper has-mobile-cards">
                    {{-- <div class="card has-table">
                        <div class="card-content">
                            <section class="section">
                                <div class="content has-text-grey has-text-centered">
                                    <p>
                                        <span class="icon is-large"><i class="mdi mdi-emoticon-sad mdi-48px"></i></span>
                                    </p>
                                    <p>Data kosong</p>
                                </div>
                            </section>
                        </div>
                    </div> --}}
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
                                <th>Username</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admin as $a)
                                <tr>
                                    <td data-label="No">{{ $loop->iteration }}</td>
                                    <td data-label="Username">{{ $a->username }}</td>
                                    <td class="is-actions-cell">
                                        <div class="buttons is-center">
                                            <a href="/admin/{{ $a->id }}/edit"
                                                class="button is-small is-warning"><span class="icon"><i
                                                        class="fa-solid fa-pen-to-square"></i></span></a>
                                            <form action="{{ route('admin.destroy', $a->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="button is-small is-danger" type="submit">
                                                    <span class="icon"><i class="fa-solid fa-trash-can"></i></span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="notification">
                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">
                                <div class="buttons has-addons">
                                    <button type="button" class="button is-active">1</button>
                                    <button type="button" class="button">2</button>
                                    <button type="button" class="button">3</button>
                                </div>
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <small>Page 1 of 3</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('admin.template.footer')
