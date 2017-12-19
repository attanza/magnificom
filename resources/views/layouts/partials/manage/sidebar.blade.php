<div class="sidebar-wrapper is-hidden-mobile">
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

  </aside>
</div>