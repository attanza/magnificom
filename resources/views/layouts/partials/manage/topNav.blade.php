<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
	<div class="navbar-brand">
		<a class="navbar-item" href="{{ url('/') }}">
			MAGNIFICOM
		</a>
		<button class="button navbar-burger">
		<span></span>
		<span></span>
		<span></span>
		</button>
	</div>
	<div class="navbar-menu">
		<div class="navbar-start">
			<!-- navbar items -->
		</div>
		<div class="navbar-end m-r-10">
			<div class="navbar-item has-dropdown is-hoverable">
				<a class="navbar-link">
					{{Auth::user()->name}}
				</a>
				<div class="navbar-dropdown is-right">
					<hr class="navbar-divider">
					<a class="navbar-item" href="{{ route('logout') }}"
						onclick="event.preventDefault();document.getElementById('logout-form').submit();">
						Logout
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST"
						style="display: none;">
						{{ csrf_field() }}
					</form>
				</div>
			</div>
		</div>
	</div>
</nav>