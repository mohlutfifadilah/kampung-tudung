@section('title', 'Admin')
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
                                            <button class="button is-small is-danger remove-user" type="submit"
                                                data-id="{{ $a->id }}"
                                                data-action="{{ route('admin.destroy', $a->id) }}">
                                                <span class="icon"><i class="fa-solid fa-trash-can"></i></span>
                                            </button>
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
<script type="text/javascript">
    $("body").on("click", ".remove-user", function() {
        var current_object = $(this);
        swal({
            title: "Apakah anda yakin ?",
            text: "Hapus admin ini",
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
