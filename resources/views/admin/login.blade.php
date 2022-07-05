<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Kampung Tudung</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        .interactive-bg {
            height: 100vh;
            background-color: #00d1b2;
            background-image: url({{ asset('main-image/tudung.png') }});
            -webkit-box-shadow: inset 24px 4px 64px -24px rgba(71, 71, 71, 1);
            -moz-box-shadow: inset 24px 4px 64px -24px rgba(71, 71, 71, 1);
            box-shadow: inset 24px 4px 64px -24px rgba(71, 71, 71, 1);
            padding: 0px;
        }

        @media (max-width: 769px) {
            .interactive-bg {
                display: none
            }
        }

        .input {
            border-radius: 50px;
        }

        .button {
            margin-top: 20px;
            margin-bottom: 20px;
            min-width: 150px;
        }

        .login-logo {
            margin: 0 auto;
            margin-top: -20px;
            max-height: 200px;

        }

        .columns {
            margin: 0px;
        }
    </style>
</head>

<body>
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
    <div class="columns is-vcentered">
        <div class="login column is-4 ">
            <section class="section">
                <div class="has-text-centered">
                    <img class="login-logo" src="{{ asset('main-image/tudung.png') }}">
                </div>

                <form action="/login" method="POST">
                    @csrf
                    <div class="field">
                        <label class="label">Username</label>
                        <div class="control has-icons-right">
                            <input class="input @error('username') is-danger @enderror" type="text" name="username"
                                autofocus required value="">
                            <span class="icon is-small is-right">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Password</label>
                        <div class="control has-icons-right">
                            <input class="input @error('password') is-danger @enderror" type="password" name="password"
                                required>
                            <span class="icon is-small is-right">
                                <i class="fa fa-key"></i>
                            </span>
                        </div>
                    </div>
                    <div class="has-text-centered">
                        <button class="button is-vcentered is-primary is-outlined" type="submit">Login</button>
                    </div>
                </form>
            </section>
        </div>
        <div id="particles-js" class="interactive-bg column is-8">
        </div>
    </div>

</body>



</html>
