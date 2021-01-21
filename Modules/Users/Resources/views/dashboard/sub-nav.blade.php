<div class="bg-contrast-lower">
  <div class="container max-width-lg flex items-center justify-between">
    <div class="flex flex-wrap fl-align-center">
      <button class="btn btn--primary btn-new-post margin-right-md">Add</button>
            
      <form class="expandable-search js-expandable-search" action="{{ url('dashboard') }}" method="GET">
        <label class="sr-only" for="expandable-search">Search</label>
        <input class="reset expandable-search__input js-expandable-search__input" type="search" name="postsearch" id="expandable-search" placeholder="Search..." required>
        <button type="submit" class="reset expandable-search__btn">
          <svg class="icon" viewBox="0 0 24 24">
            <title>Search</title>
            <g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" stroke="currentColor" fill="none" stroke-miterlimit="10">
              <line x1="21" y1="21" x2="15.656" y2="15.656" />
              <circle cx="10" cy="10" r="8" />
            </g>
          </svg>
        </button>
      </form>

      <div class="int-table-actions" data-table-controls="table-1">
        <menu class="menu-bar js-int-table-actions__no-items-selected js-menu-bar" id="btnRefreshTable">
          <li class="menu-bar__item menu-bar__item--trigger js-menu-bar__trigger" role="menuitem" aria-label="More options">
            <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 16 16">
              <circle cx="8" cy="7.5" r="1.5" />
              <circle cx="1.5" cy="7.5" r="1.5" />
              <circle cx="14.5" cy="7.5" r="1.5" /></svg>
          </li>
          <li class="menu-bar__item " role="menuitem">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><title>ic_refresh_48px</title><rect data-element="frame" x="2.3999999999999986" y="2.3999999999999986" width="43.2" height="43.2" rx="22" ry="22" stroke="none" fill="#f1f1f1"></rect>
                <g transform="translate(12 12) scale(0.5)" fill="#666666">
                    <path d="M35.3 12.7C32.41 9.8 28.42 8 24 8 15.16 8 8.02 15.16 8.02 24S15.16 40 24 40c7.45 0 13.69-5.1 15.46-12H35.3c-1.65 4.66-6.07 8-11.3 8-6.63 0-12-5.37-12-12s5.37-12 12-12c3.31 0 6.28 1.38 8.45 3.55L26 22h14V8l-4.7 4.7z"></path>
                </g>
            </svg>
            <span class="menu-bar__label">Refresh</span>
          </li>
        </menu>
        @if(!request()->has('is_trashed'))
          <menu class="menu-bar is-hidden js-int-table-actions__items-selected js-menu-bar" id="btnDeleteMultiple">
            <li class="menu-bar__item menu-bar__item--trigger js-menu-bar__trigger" role="menuitem" aria-label="More options">
              <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 16 16">
                <circle cx="8" cy="7.5" r="1.5" />
                <circle cx="1.5" cy="7.5" r="1.5" />
                <circle cx="14.5" cy="7.5" r="1.5" /></svg>
            </li>
            <li class="menu-bar__item" role="menuitem">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><title>trash-simple</title><rect data-element="frame" x="2.3999999999999986" y="2.3999999999999986" width="43.2" height="43.2" rx="22" ry="22" stroke="none" fill="#f1f1f1"></rect><g transform="translate(12 12) scale(0.5)" fill="#666666"><path fill="#666666" d="M7,13v32c0,1.105,0.895,2,2,2h30c1.105,0,2-0.895,2-2V13H7z M17,38c0,0.552-0.447,1-1,1s-1-0.448-1-1V22 c0-0.552,0.447-1,1-1s1,0.448,1,1V38z M25,38c0,0.552-0.447,1-1,1s-1-0.448-1-1V22c0-0.552,0.447-1,1-1s1,0.448,1,1V38z M33,38 c0,0.552-0.447,1-1,1s-1-0.448-1-1V22c0-0.552,0.447-1,1-1s1,0.448,1,1V38z"></path> <path d="M46,9H33V2c0-0.552-0.447-1-1-1H16c-0.553,0-1,0.448-1,1v7H2c-0.553,0-1,0.448-1,1 s0.447,1,1,1h44c0.553,0,1-0.448,1-1S46.553,9,46,9z M31,9H17V3h14V9z"></path></g></svg>
              <span class="menu-bar__label">Delete</span>
              <span class="counter counter--critical counter--docked"><span id="deleteBadge">1</span> <i class="sr-only">Notifications</i></span>
            </li>
          </menu>
        @endif
      </div>      
    </div>
    <div class="subnav subnav--expanded@sm js-subnav">
      <button class="reset btn btn--subtle margin-y-sm subnav__control js-subnav__control">
        <span>Panel</span>
        <svg class="icon icon--xxs margin-left-xxs" aria-hidden="true" viewBox="0 0 12 12">
          <polyline points="0.5 3.5 6 9.5 11.5 3.5" fill="none" stroke-width="1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></polyline>
        </svg>
      </button>

      <div class="subnav__wrapper js-subnav__wrapper">
        <nav class="subnav__nav ">
          <button class="reset subnav__close-btn js-subnav__close-btn js-tab-focus" aria-label="Close navigation">
            <svg class="icon" viewBox="0 0 16 16">
              <g stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                <line x1="13.5" y1="2.5" x2="2.5" y2="13.5"></line>
                <line x1="2.5" y1="2.5" x2="13.5" y2="13.5"></line>
              </g>
            </svg>
          </button>

          <ul class="subnav__list">
            <li class="subnav__item"><a href="{{ url('/dashboard') }}" class="subnav__link ajax-link" {{ (url('/dashboard') == url()->full()) ? 'aria-current=page' : '' }}>Published<span class="padding-left-sm sidenav__counter">{{ $posts_published_count }} <i class="sr-only">notifications</i></span></a></li>
            <li class="subnav__item"><a href="{{ url('/dashboard?is_draft=1') }}" class="subnav__link ajax-link">Draft<span class="padding-left-sm sidenav__counter">{{ $posts_draft_count }} <i class="sr-only">notifications</i></span></a></li>
            @if (!auth()->user()->isEditor())
            <li class="subnav__item"><a href="{{ url('/dashboard?is_pending=1') }}" class="subnav__link ajax-link">Pending<span class="padding-left-sm sidenav__counter">{{ $posts_pending_count }} <i class="sr-only">notifications</i></span></a></li>
            @endif
            <li class="subnav__item"><a href="{{ url('/dashboard?is_trashed=1') }}" class="subnav__link ajax-link">Trash<span class="padding-left-sm sidenav__counter">{{ $posts_deleted_count }} <i class="sr-only">notifications</i></span></a></li>
          </ul>
        </nav>
      </div>
    </div> <!-- end of .subnav -->
  </div> <!-- end of .container -->
</div> <!-- end of .bg-contrast-lower -->
