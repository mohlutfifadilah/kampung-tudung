@section('title', 'Artikel')
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
                        <b>Info Artikel</b><br>
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
                        <h1>
                            {{ $article->judul }}
                        </h1>
                        <p>
                            Penulis : {{ $article->penulis }}
                        </p>
                        <hr>
                        {!! $article->isi !!}
                    </div>
                </div>
                <hr>
                <div class="columns">
                    <div class="column" style="text-align:right;">
                        <a href="/article" class="button is-outlined is-danger">
                            Kembali
                        </a>
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
