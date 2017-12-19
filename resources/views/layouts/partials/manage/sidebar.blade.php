<div class="sidebar-wrapper is-hidden-mobile" id="navMenu">
  <aside class="menu">
    <p class="menu-label">
      General
    </p>
    <ul class="menu-list">
      <li><a class="{{Request::is('manage/dashboard') ? 'is-active' : ''}}" href="{{ route('dashboard.index') }}">
        Dashboard</a>
      </li>
    </ul>
    <p class="menu-label">
      Administration
    </p>
    <ul class="menu-list">
      <li><a class="{{Request::is('manage/users*') ? 'is-active' : ''}}" href="{{ route('users.index') }}">
        Users</a>
      </li>
    </ul>
     <p class="menu-label">
      Application
    </p>
    <ul class="menu-list">
      <li><a href="{{ route('logout') }}"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST"
            style="display: none;">
            {{ csrf_field() }}
          </form>
      </li>
    </ul>

  </aside>
</div>