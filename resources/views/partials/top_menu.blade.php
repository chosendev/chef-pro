<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Chef</span>-Pro</a>

					<ul class="nav navbar-nav navbar-right">
		            	<li>
	                        <a class="profile-usertitle-status" href="#">{{ Auth::user()->name }}</a>
	                    </li>
                        <li>
                            <a href="{{ route('logout') }}"
	                                   onclick="event.preventDefault();
		                                     document.getElementById('logout-form').submit();">
		                        {{ __('Logout') }}
		                    </a>

		                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		                        @csrf
		                    </form>
                        </li>
		            </ul>

			</div>
		</div><!-- /.container-fluid -->
	</nav>
