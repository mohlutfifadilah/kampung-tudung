<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
        <div class="aside-tools-label">
            <span class="has-text-centered ml-2"><b>Toko - Kampung Tudung</b></span>
        </div>
    </div>
    <div class="menu is-menu-main">
        <p class="menu-label">General</p>
        <ul class="menu-list">
            <li>
                <a href="/profile" class="has-icon {{ $title === 'profile' ? 'is-active router-link-active' : '' }}">
                    <span class="icon"><i class="mdi mdi-account-star"></i></span>
                    <span class="menu-item-label">Profil</span>
                </a>
            </li>
        </ul>
        <ul class="menu-list">
            <li>
                <a href="/password/{{ auth()->user()->id }}/edit"
                    class="has-icon {{ $title === 'password' ? 'is-active router-link-active' : '' }}">
                    <span class="icon"><i class="mdi mdi-lock"></i></span>
                    <span class="menu-item-label">Edit Password</span>
                </a>
            </li>
        </ul>
        <p class="menu-label">Data</p>
        <ul class="menu-list">
            <li>
                <a href="/product/{{ auth()->user()->id }}"
                    class="has-icon {{ $title === 'produk' ? 'is-active router-link-active' : '' }}">
                    <!-- <span class="icon has-update-mark"><i class="mdi mdi-table"></i></span> -->
                    <span class="icon"><i class="mdi mdi-shopping"></i></span>
                    <span class="menu-item-label">Produk</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
