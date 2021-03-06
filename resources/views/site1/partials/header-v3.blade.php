<header class="mega-nav mega-nav--mobile mega-nav--desktop@md position-relative js-mega-nav hide-nav js-hide-nav js-hide-nav--main">
  <div class="mega-nav__container">
    <!-- 👇 logo -->
    <div class="flex">
        <a href="{{ url('/') }}" class="margin-top-xxs">
          <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
          width="25.000000pt" height="25.000000pt" viewBox="0 0 200.000000 200.000000"
          preserveAspectRatio="xMidYMid meet">
            <g transform="translate(0.000000,200.000000) scale(0.100000,-0.100000)"
            fill="#339df8" stroke="no">
            <path d="M855 1989 c-234 -33 -481 -175 -630 -362 -457 -571 -175 -1417 532
            -1598 42 -10 88 -19 103 -19 l27 0 12 118 c21 200 17 188 76 228 80 52 126
            120 146 213 8 40 7 62 -6 113 -9 34 -20 67 -24 71 -5 5 -10 -25 -13 -67 -9
            -131 -78 -235 -194 -292 -54 -27 -68 -29 -169 -29 -98 0 -116 3 -167 27 -76
            35 -130 79 -158 130 -22 40 -23 41 -4 55 24 18 115 65 118 61 90 -149 183
            -183 315 -117 99 49 128 126 78 200 -38 56 -81 79 -222 118 -62 16 -132 68
            -162 118 -21 36 -27 63 -31 122 -4 68 -1 84 22 134 37 76 101 132 184 157 52
            16 92 20 216 20 l152 0 12 116 c27 256 60 333 181 426 l35 26 -41 11 c-106 29
            -269 37 -388 20z"/>
            <path d="M1410 1819 c-50 -15 -85 -44 -105 -86 -15 -32 -24 -85 -49 -305 l-4
            -38 124 0 124 0 0 -75 0 -75 -135 0 c-74 0 -135 -2 -135 -5 0 -4 -83 -718
            -132 -1128 -6 -53 -9 -99 -6 -102 8 -8 160 23 234 49 269 91 503 315 604 579
            52 132 63 199 64 357 1 221 -45 381 -161 559 -60 93 -198 236 -247 256 -45 19
            -135 26 -176 14z"/>
            <path d="M695 1226 c-42 -18 -68 -61 -69 -113 -2 -75 72 -132 244 -188 47 -15
            91 -32 98 -38 7 -5 14 -8 16 -6 2 2 11 67 20 144 9 77 19 157 22 178 l6 37
            -154 0 c-104 -1 -163 -5 -183 -14z"/>
            </g>
        </svg>
    </a>

 <!-- 👇 Logo Text -->
    <a href="{{ url('/') }}" class="mega-nav__logo padding-xxs">
      <h2 class="logo">SaigonFinest</h2>
    </a>
</div>

    <!-- 👇 icon buttons --mobile -->
    <div class="mega-nav__icon-btns mega-nav__icon-btns--mobile gap-xxxxs">
      @guest
      <a href="#0" class="mega-nav__icon-btn js-signin-modal-trigger inline-block" data-signin="login">
        <svg class="icon" viewBox="0 0 24 24" class="js-signin-modal-trigger" data-signin="login">
          <title>Login</title>
          <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
            <circle cx="12" cy="6" r="4" />
            <path d="M12 13a8 8 0 00-8 8h16a8 8 0 00-8-8z" />
          </g>
        </svg>
      </a>
      @endguest
      @auth
      <div class="dropdown js-dropdown">
        <div class="mega-nav__icon-btn dropdown__wrapper inline-block">
            @if(Auth::user()->getMedia('avatars')->last())
            <div class="author author--minimal-mobile dropdown__trigger">
              <a href="#0" class="author__img-wrapper">
                <img src="{{ Auth::user()->getMedia('avatars')->last()->getFullUrl('thumb') }}" alt="Author picture">
            </div>
            @else
              <svg class="icon" viewBox="0 0 24 24">
                <title>Go to account settings</title>
                <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
                  <circle cx="12" cy="6" r="4" />
                  <path d="M12 13a8 8 0 00-8 8h16a8 8 0 00-8-8z" />
                </g>
              </svg>
            @endif
          </a>

          <ul class="dropdown__menu" aria-label="submenu">
            <li><a href="{{ url('profile') }}" class="dropdown__item">Profile</a></li>
            <li class="dropdown__separator" role="separator"></li>
            <li><a href="{{ url('users/settings') }}" class="dropdown__item">Account Settings</a></li>
            <li><a href="{{ url('/logout') }}" class="dropdown__item">Log out</a></li>
          </ul>
        </div><!-- /.mega-nav__icon-btn dropdown__wrapper inline-block -->
      </div><!-- /.dropdown js-dropdown -->
      @endauth

      <button class="reset mega-nav__icon-btn mega-nav__icon-btn--search js-tab-focus" aria-label="Toggle search" aria-controls="mega-nav-search">
        <svg class="icon" viewBox="0 0 24 24">
          <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
            <path d="M4.222 4.222l15.556 15.556" />
            <path d="M19.778 4.222L4.222 19.778" />
            <circle cx="9.5" cy="9.5" r="6.5" />
          </g>
        </svg>
      </button>

      <button class="reset mega-nav__icon-btn mega-nav__icon-btn--menu js-tab-focus" aria-label="Toggle menu" aria-controls="mega-nav-navigation">
        <svg class="icon" viewBox="0 0 24 24">
          <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
            <path d="M1 6h22" />
            <path d="M1 12h22" />
            <path d="M1 18h22" />
          </g>
        </svg>
      </button>
    </div>

    
    <div class="mega-nav__nav js-mega-nav__nav" id="mega-nav-navigation" role="navigation" aria-label="Main">
      <div class="mega-nav__nav-inner">
        <ul class="mega-nav__items">

          <!-- 👇 layout 2 -> multiple lists -->
          <li class="mega-nav__item js-mega-nav__item">
            <button class="reset mega-nav__control js-mega-nav__control js-tab-focus">
              Browse
              <i class="mega-nav__arrow-icon" aria-hidden="true">
                <svg class="icon" viewBox="0 0 16 16">
                  <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
                    <path d="M2 2l12 12" />
                    <path d="M14 2L2 14" />
                  </g>
                </svg>
              </i>
            </button>

            <div class="mega-nav__sub-nav-wrapper">
              <div class="mega-nav__sub-nav mega-nav__sub-nav--layout-2">
                <ul class="mega-nav__sub-items">
                  <li class="mega-nav__label">Magazine Sites</li>
                  <li class="mega-nav__sub-item"><a href="http://127.0.0.1:8000/site1" class="mega-nav__sub-link">Site 1</a></li>
                </ul>

                <ul class="mega-nav__sub-items">
                  <li class="mega-nav__label">Blog Sites</li>
                  <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">All Shoes</a></li>
                </ul>

                <ul class="mega-nav__sub-items">
                  <li class="mega-nav__label">Social Networks Sites</li>
                  <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">All Shoes</a></li>
                </ul>

                <div class="mega-nav__card width-100% max-width-xs margin-x-auto">
                  <a href="#0" class="block radius-lg overflow-hidden">
                    <figure class="media-wrapper media-wrapper--4:3">
                      <img class="block width-100%" src="{{ asset('assets/img/mega-site-nav-img-1.jpg') }}" alt="Image description">
                    </figure>
                  </a>

                  <div class="margin-top-sm">
                    <h3 class="text-base"><a href="#0" class="mega-nav__card-title">Browse all →</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <!-- 👇 link -->
          <li class="mega-nav__item">
            <a href="#" class="mega-nav__control">About us</a>
          </li>
          <li class="mega-nav__item">
            <a href="{{ url('admin') }}" class="mega-nav__control">Admin</a>
          </li>
        </ul>
        
        <ul class="mega-nav__items js-main-nav custom-mega-nav__items-mobile">
          <!-- 👇 icon buttons --desktop -->

          <li class="mega-nav__icon-btns mega-nav__icon-btns--desktop">
            @guest
            <div class="mega-nav__icon-btn dropdown__wrapper inline-block js-signin-modal-trigger">
              <a href="#0" class="color-inherit flex height-100% width-100% flex-center" data-signin="login">
                <svg class="icon" viewBox="0 0 24 24" data-signin="login">
                  <title>Login</title>
                  <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
                    <circle cx="12" cy="6" r="4" />
                    <path d="M12 13a8 8 0 00-8 8h16a8 8 0 00-8-8z" />
                  </g>
                </svg>
              </a>
            </div>
            @endguest

            @auth
            <div class="dropdown js-dropdown">
              <div class="mega-nav__icon-btn dropdown__wrapper inline-block">
                  @if(Auth::user()->getMedia('avatars')->last())
                  <div class="author author--minimal dropdown__trigger">
                    <a href="#0" class="author__img-wrapper">
                      <img src="{{ Auth::user()->getMedia('avatars')->last()->getFullUrl('thumb') }}" alt="Author picture">
                  </div>
                  @else
                    <svg class="icon" viewBox="0 0 24 24">
                      <title>Go to account settings</title>
                      <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
                        <circle cx="12" cy="6" r="4" />
                        <path d="M12 13a8 8 0 00-8 8h16a8 8 0 00-8-8z" />
                      </g>
                    </svg>
                  @endif
                </a>
                <ul class="dropdown__menu" aria-label="submenu">
                  <li><a href="{{ url('site1/profile') }}" class="dropdown__item">Profile</a></li>
                  <li class="dropdown__separator" role="separator"></li>
                  <li><a href="{{ url('users/settings') }}" class="dropdown__item">Account Settings</a></li>
                  <li><a href="{{ url('/logout') }}" class="dropdown__item">Log out</a></li>
                </ul>
              </div><!-- /.mega-nav__icon-btn dropdown__wrapper inline-block -->
            </div><!-- /.dropdown js-dropdown -->
            @endauth

            <button class="reset mega-nav__icon-btn mega-nav__icon-btn--search js-tab-focus" aria-label="Toggle search" aria-controls="mega-nav-search">
              <svg class="icon" viewBox="0 0 24 24">
                <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
                  <path d="M4.222 4.222l15.556 15.556" />
                  <path d="M19.778 4.222L4.222 19.778" />
                  <circle cx="9.5" cy="9.5" r="6.5" />
                </g>
              </svg>
            </button>
          </li>
          
          @guest
          <!-- 👇 button -->
          <li class="mega-nav__item js-signin-modal-trigger custom-mega-nav__item-column">
            <a href="#0" class="btn btn--primary mega-nav__btn" data-signin="signup">Register</a>
          </li>
          <li class="mega-nav__item js-signin-modal-trigger custom-mega-nav__item-column">
            <a href="#0" class="btn btn--subtle mega-nav__btn" data-signin="login">Login</a>
          </li>
          @endguest

          @auth
          <li class="mega-nav__item">
            <div class="mega-nav__icon-btns mega-nav__icon-btns--desktop"></div>
            <a href="{{ url('/logout') }}" class="btn btn--subtle mega-nav__btn">Log out</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>

    <!-- 👇 search -->
    <div class="mega-nav__search js-mega-nav__search" id="mega-nav-search">
      <div class="mega-nav__search-inner">
        <form action="{{ url('admin/users') }}" method="GET">
          <input type="hidden" name="limit" value="{{$limit ?? ''}}">
          <input type="hidden" name="sort" value="{{$sort ?? ''}}">
          <input type="hidden" name="order" value="{{$order ?? ''}}">
        
          <input class="form-control width-100%" type="reset search" name="q" value="{{ $q ?? '' }}" id="megasite-search" placeholder="Search..." aria-label="Search">
        </form>
        <div class="margin-top-lg">
          <p class="mega-nav__label">Quick Links</p>
          <ul>
            <li><a href="#0" class="mega-nav__quick-link">Find a Store</a></li>
            <li><a href="#0" class="mega-nav__quick-link">Your Orders</a></li>
            <li><a href="#0" class="mega-nav__quick-link">Documentation</a></li>
            <li><a href="#0" class="mega-nav__quick-link">Questions &amp; Answers</a></li>
            <li><a href="#0" class="mega-nav__quick-link">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>