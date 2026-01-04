<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="/dashboard/home" class="app-brand-link">
        <span class="app-brand-logo demo">
          <img src="{{ asset('assets/img/navbar.webp') }}" class="img-fluid" style="max-width:40%;" alt="">
        </span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item {{ ($title == 'Home' ? 'active' : '') }}">
        <a style="text-decoration:none;" href="/dashboard/home" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>

      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Setting Website</span>
      </li>
      <li class="menu-item {{ ($title == 'Spanduk' ? 'active' : '') }}">
        <a style="text-decoration:none;" href="/dashboard/spanduk" class="menu-link">
          <i class="menu-icon fa fa-house-flag"></i>
          <div>Spanduk</div>
        </a>
      </li>
      <li class="menu-item {{ ($title == 'Gallery' ? 'active' : '') }}">
        <a style="text-decoration:none;" href="/dashboard/gallery" class="menu-link">
          <i class="menu-icon fa fa-image"></i>
          <div>Galeri</div>
        </a>
      </li>
      <li class="menu-item {{ ($title == 'Articles' || $title == 'Category' ? 'active' : '') }}">
        <a style="text-decoration:none;" href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon fa fa-feather"></i>
          <div data-i18n="Misc">Artikel</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item {{ $title == 'Articles' ? 'active' : '' }}">
            <a href="/dashboard/article" style="text-decoration:none;" class="menu-link">
              <div data-i18n="Artikel">Artikel</div>
            </a>
          </li>
          <li class="menu-item {{ $title == 'Category' ? 'active' : '' }}">
            <a href="/dashboard/category" style="text-decoration:none;" class="menu-link">
              <div data-i18n="Kategori">Kategori</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-item {{ ($title == 'User' ? 'active' : '') }}">
        <a style="text-decoration:none;" href="/dashboard/user" class="menu-link">
          <i class="menu-icon fa fa-user-gear"></i>
          <div>User</div>
        </a>
      </li>
    </ul>
  </aside>