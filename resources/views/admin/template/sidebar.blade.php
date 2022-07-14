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
                <a href="/product" class="has-icon {{ $title === 'produk' ? 'is-active router-link-active' : '' }}">
                    <!-- <span class="icon has-update-mark"><i class="mdi mdi-table"></i></span> -->
                    <span class="icon"><i class="mdi mdi-shopping"></i></span>
                    <span class="menu-item-label">Produk</span>
                </a>
            </li>
            <li>
                <a href="/paket" class="has-icon {{ $title === 'paket' ? 'is-active router-link-active' : '' }}">
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
    </div>
</aside>
