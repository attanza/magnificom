<div class="sidebar-wrapper">
  <aside class="menu">
    <p class="menu-label">
      General
    </p>
    <ul class="menu-list">
      <li><a class="{{Request::is('manage/dashboard') ? 'is-active' : ''}}">
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