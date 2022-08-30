<!DOCTYPE html>
<html lang="en" class="has-aside-left has-aside-mobile-transition has-navbar-fixed-top has-aside-expanded">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Bulma is included -->
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <div id="app">
        <nav id="navbar-main" class="navbar is-fixed-top">
            <div class="navbar-brand">
                <a class="navbar-item is-hidden-desktop jb-aside-mobile-toggle">
                    <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
                </a>
            </div>
            <div class="navbar-brand is-right">
                <a class="navbar-item is-hidden-desktop jb-navbar-menu-toggle" data-target="navbar-menu">
                    <span class="icon"><i class="mdi mdi-dots-vertical"></i></span>
                </a>
            </div>
            <div class="navbar-menu fadeIn animated faster" id="navbar-menu">
                <div class="navbar-end">
                    <div
                        class="navbar-item has-dropdown has-dropdown-with-icons has-divider has-user-avatar is-hoverable">
                        <a class="navbar-link is-arrowless">
                            <div class="is-user-name"><span>{{ auth()->user()->username }}</span></div>
                            <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
                        </a>
                        <div class="navbar-dropdown">
                            {{-- <a href="profile.html" class="navbar-item">
                                <span class="icon"><i class="mdi mdi-account"></i></span>
                                <span>Edit Password</span>
                            </a> --}}
                            {{-- <hr class="navbar-divider"> --}}
                            <form action="/logout" method="post" id="my_form">
                                @csrf
                                <a href="javascript:{}" onclick="document.getElementById('my_form').submit();"
                                    class="navbar-item">
                                    <span class="icon"><i class="mdi mdi-logout"></i></span>
                                    <span>Keluar</span>
                                </a>
                                {{-- <button type="submit" class="navbar-item">
                                    <span class="icon"><i class="mdi mdi-logout"></i></span>
                                    <span>Keluar</span>
                                </button> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
