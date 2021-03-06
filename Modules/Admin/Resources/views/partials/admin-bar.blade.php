<div class="bg-contrast-lower js-hide-nav js-hide-nav--sub hide-nav z-index-2">
    <div class="container max-width-lg">
      <div class="subnav  js-subnav">
        <button class="reset btn btn--subtle margin-y-sm subnav__control js-subnav__control">
          <span>Show Categories</span>
          <svg class="icon icon--xxs margin-left-xxs" aria-hidden="true" viewBox="0 0 12 12">
            <polyline points="0.5 3.5 6 9.5 11.5 3.5" fill="none" stroke-width="1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></polyline>
          </svg>
        </button>
  
        <div class="subnav__wrapper js-subnav__wrapper">
          <nav class="subnav__nav justify-left">
            <button class="reset subnav__close-btn js-subnav__close-btn js-tab-focus" aria-label="Close navigation">
              <svg class="icon" viewBox="0 0 16 16">
                <g stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                  <line x1="13.5" y1="2.5" x2="2.5" y2="13.5"></line>
                  <line x1="2.5" y1="2.5" x2="13.5" y2="13.5"></line>
                </g>
              </svg>
            </button>
  
            <ul class="subnav__list">
              <li class="subnav__item"><a href="{{ url('admin/') }}" class="subnav__link" aria-current="{{ Request::path() ==  'admin' ? 'page' : ''  }}">Dashboard</a></li>
              <li class="subnav__item"><a href="{{ url('admin/users') }}" class="subnav__link" aria-current="{{ Request::path() ==  'admin/users' ? 'page' : ''  }}">Users</a></li>
              <li class="subnav__item"><a href="{{ url('admin/tag') }}" class="subnav__link" aria-current="{{ Request::path() ==  'admin/tag' ? 'page' : ''  }}">Tags</a></li>
              <li class="subnav__item"><a href="{{ url('admin/posts') }}" class="subnav__link" aria-current="{{ Request::path() ==  'admin/posts' ? 'page' : ''  }}">Post</a></li>
              <li class="subnav__item"><a href="{{ url('admin/videos') }}" class="subnav__link" aria-current="{{ Request::path() ==  'admin/videos' ? 'page' : ''  }}">Videos</a></li>
              <li class="subnav__item"><a href="{{ url('admin/settings') }}" class="subnav__link" aria-current="{{ Request::path() ==  'admin/settings' ? 'page' : ''  }}">Settings</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>