<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
        <div class="aside-tools-label">
            <span class="has-text-centered ml-5"><b>Kampung Tudung</b></span>
        </div>
    </div>
    <div class="menu is-menu-main">
        <p class="menu-label">General</p>
        <ul class="menu-list">
            <li>
                <a href="/dashboard" class="has-icon {{ $title === 'dashboard' ? 'is-active router-link-active' : '' }}">
                    <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
                    <span class="menu-item-label">Dashboard</span>
                </a>
            </li>
        </ul>
        <p class="menu-label">Halaman Utama</p>
        <ul class="menu-list">
            <li>
                <a href="/about" class="has-icon {{ $title === 'about' ? 'is-active router-link-active' : '' }}">
                    <!-- <span class="icon has-update-mark"><i class="mdi mdi-table"></i></span> -->
                    <span class="icon"><i class="mdi mdi-view-array"></i></span>
                    <span class="menu-item-label">Tentang Kami</span>
                </a>
            </li>
            <li>
                <a href="/gallery" class="has-icon {{ $title === 'gallery' ? 'is-active router-link-active' : '' }}">
                    <!-- <span class="icon has-update-mark"><i class="mdi mdi-square-edit-outline"></i></span> -->
                    <span class="icon"><i class="mdi mdi-collage"></i></span>
                    <span class="menu-item-label">Galeri</span>
                </a>
            </li>
            <li>
                <a href="/video" class="has-icon {{ $title === 'video' ? 'is-active router-link-active' : '' }}">
                    <!-- <span class="icon has-update-mark"><i class="mdi mdi-square-edit-outline"></i></span> -->
                    <span class="icon"><i class="mdi mdi-video"></i></span>
                    <span class="menu-item-label">Video Profil</span>
                </a>
            </li>
            <li>
                <a href="/article" class="has-icon {{ $title === 'article' ? 'is-active router-link-active' : '' }}">
                    <!-- <span class="icon has-update-mark"><i class="mdi mdi-square-edit-outline"></i></span> -->
                    <span class="icon"><i class="mdi mdi-newspaper"></i></span>
                    <span class="menu-item-label">Artikel</span>
                </a>
            </li>
        </ul>
        <p class="menu-label">Data</p>
        <ul class="menu-list">
            <li>
                <a href="/admin" class="has-icon {{ $title === 'admin' ? 'is-active router-link-active' : '' }}">
                    <!-- <span class="icon has-update-mark"><i class="mdi mdi-table"></i></span> -->
                    <span class="icon"><i class="mdi mdi-account"></i></span>
                    <span class="menu-item-label">Admin</span>
                </a>
            </li>
            <li>
                <a href="/merchant" class="has-icon {{ $title === 'merchant' ? 'is-active router-link-active' : '' }}">
                    <!-- <span class="icon has-update-mark"><i class="mdi mdi-table"></i></span> -->
                    <span class="icon"><i class="mdi mdi-shopping"></i></span>
                    <span class="menu-item-label">Toko</span>
                </a>
            </li>
            {{-- <li>
                <a href="/product" class="has-icon {{ $title === 'produk' ? 'is-active router-link-active' : '' }}">
                    <!-- <span class="icon has-update-mark"><i class="mdi mdi-table"></i></span> -->
                    <span class="icon"><i class="mdi mdi-shopping"></i></span>
                    <span class="menu-item-label">Produk</span>
                </a>
            </li> --}}
            <li>
                <a href="/paket" class="has-icon {{ $title === 'paket' ? 'is-active router-link-active' : '' }}">
                    <!-- <span class="icon has-update-mark"><i class="mdi mdi-table"></i></span> -->
                    <span class="icon"><i class="mdi mdi-package"></i></span>
                    <span class="menu-item-label">Paket</span>
                </a>
            </li>
            <li>
                <a href="/termasuk" class="has-icon {{ $title === 'termasuk' ? 'is-active router-link-active' : '' }}">
                    <!-- <span class="icon has-update-mark"><i class="mdi mdi-table"></i></span> -->
                    <span class="icon"><i class="mdi mdi-sort-ascending"></i></span>
                    <span class="menu-item-label">Include Paket</span>
                </a>
            </li>
            {{-- <li>
                <a href="forms.html" class="has-icon">
                    <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
                    <span class="menu-item-label">Galeri</span>
                </a>
            </li> --}}
        </ul>
        <p class="menu-label">Pesanan</p>
        <ul class="menu-list">
            <li>
                <a href="/confirm" class="has-icon {{ $title === 'confirm' ? 'is-active router-link-active' : '' }}">
                    <span class="icon"><i class="mdi mdi-ticket-confirmation"></i></span>
                    <span class="menu-item-label">Konfirmasi Pesanan</span>
                </a>
            </li>
        </ul>
        <ul class="menu-list">
            <li>
                <a href="/history" class="has-icon {{ $title === 'history' ? 'is-active router-link-active' : '' }}">
                    <span class="icon"><i class="mdi mdi-history"></i></span>
                    <span class="menu-item-label">Riwayat</span>
                </a>
            </li>
        </ul>
        @if (auth()->user()->kode)
            <p class="menu-label">General</p>
            <ul class="menu-list">
                <li>
                    <a href="/dashboard"
                        class="has-icon {{ $title === 'dashboard' ? 'is-active router-link-active' : '' }}">
                        <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
                        <span class="menu-item-label">Dashboard</span>
                    </a>
                </li>
            </ul>
            <p class="menu-label">Data</p>
            <ul class="menu-list">
                <li>
                    <a href="/admin" class="has-icon {{ $title === 'admin' ? 'is-active router-link-active' : '' }}">
                        <!-- <span class="icon has-update-mark"><i class="mdi mdi-table"></i></span> -->
                        <span class="icon"><i class="mdi mdi-account"></i></span>
                        <span class="menu-item-label">Admin</span>
                    </a>
                </li>
                <li>
                    <a href="/merchant"
                        class="has-icon {{ $title === 'merchant' ? 'is-active router-link-active' : '' }}">
                        <!-- <span class="icon has-update-mark"><i class="mdi mdi-table"></i></span> -->
                        <span class="icon"><i class="mdi mdi-shopping"></i></span>
                        <span class="menu-item-label">Mitra</span>
                    </a>
                </li>
                <li>
                    <a href="/product"
                        class="has-icon {{ $title === 'produk' ? 'is-active router-link-active' : '' }}">
                        <!-- <span class="icon has-update-mark"><i class="mdi mdi-table"></i></span> -->
                        <span class="icon"><i class="mdi mdi-shopping"></i></span>
                        <span class="menu-item-label">Produk</span>
                    </a>
                </li>
                <li>
                    <a href="/paket"
                        class="has-icon {{ $title === 'paket' ? 'is-active router-link-active' : '' }}">
                        <!-- <span class="icon has-update-mark"><i class="mdi mdi-table"></i></span> -->
                        <span class="icon"><i class="mdi mdi-playlist-plus"></i></span>
                        <span class="menu-item-label">Paket</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="forms.html" class="has-icon">
                        <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
                        <span class="menu-item-label">Galeri</span>
                    </a>
                </li> --}}
            </ul>
            <p class="menu-label">Pesanan</p>
            <ul class="menu-list">
                <li>
                    <a href="/confirm"
                        class="has-icon {{ $title === 'confirm' ? 'is-active router-link-active' : '' }}">
                        <span class="icon"><i class="mdi mdi-ticket-confirmation"></i></span>
                        <span class="menu-item-label">Konfirmasi Pesanan</span>
                    </a>
                </li>
            </ul>
            <ul class="menu-list">
                <li>
                    <a href="/history"
                        class="has-icon {{ $title === 'history' ? 'is-active router-link-active' : '' }}">
                        <span class="icon"><i class="mdi mdi-history"></i></span>
                        <span class="menu-item-label">Riwayat</span>
                    </a>
                </li>
            </ul>
        @endif
    </div>
</aside>
