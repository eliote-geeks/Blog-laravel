<nav class="navbar navbar-expand-lg navbar-default">
	<div class="container-fluid px-0">
		<a class="navbar-brand" href="{{url('/')}}"
			><img src="{{asset('images/brand/logo/logo.svg')}}" alt=""
		/></a>
		<!-- Mobile view nav wrap -->
		<ul
			class="navbar-nav navbar-right-wrap ms-auto d-lg-none d-flex nav-top-wrap"
		>
			<li class="dropdown ms-2">
				<a
					class="rounded-circle"
					
					role="button"
					data-bs-toggle="dropdown"
				>@auth
					<div class="avatar avatar-md avatar-indicators avatar-online">
						<img
						
							src="{{asset('images/avatar/avatar-1.jpg')}}" alt="{{ auth()->user()->name }}"
							class="rounded-circle"
						/>
					</div>
					@endauth
				</a>
				<div class="dropdown-menu dropdown-menu-end shadow">
					<div class="dropdown-item">
						<div class="d-flex">
							<div class="ms-3 lh-1">
							@auth
								<h5 class="mb-1">{{auth()->user()->name}}</h5>
								<p class="mb-0 text-muted">{{auth()->user()->email}}</p>
								@endauth
							</div>
						</div>
					</div>
					<div class="dropdown-divider"></div>
					<ul class="list-unstyled">
                        @if (Route::has('login'))
                        @auth
						<li>
							<a class="dropdown-item" href="{{ url('/dashboard') }}">
								<i class="fe fe-user me-2"></i>Dashboard
							</a>
						</li>
						<li>
							<a class="dropdown-item" href="{{ route('profile.show')}}">
								<i class="fe fe-user me-2"></i>Profile
							</a>
						</li>
                        @endauth
                        @endif
                        @guest
						<li>
							<a
								class="dropdown-item"
								href="{{route('register')}}"
							>
								<i class="fe fe-star me-2"></i>Register
							</a>
						</li>
						<li>
							<a class="dropdown-item" href="{{route('login')}}">
								<i class="fe fe-user me-2"></i>Login
							</a>
						</li>
                        @endguest
					</ul>
					<div class="dropdown-divider"></div>

				</div>
			</li>
		</ul>
		<!-- Button -->
		<button
			class="navbar-toggler collapsed"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#navbar-default"
			aria-controls="navbar-default"
			aria-expanded="false"
			aria-label="Toggle navigation"
		>
			<span class="icon-bar top-bar mt-0"></span>
			<span class="icon-bar middle-bar"></span>
			<span class="icon-bar bottom-bar"></span>
		</button>
		<!-- Collapse -->
		<div class="collapse navbar-collapse" id="navbar-default">
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a
						class="nav-link  "					
						href="{{url('/')}}"
					>
						Home
					</a>
				</li>

				<li class="nav-item dropdown">
					<a
						class="nav-link  "					
						href="{{route('index-blog.index')}}"
					>
						Blog
					</a>
				</li>

				<li class="nav-item dropdown">
					<a
						class="nav-link "
						href="{{url('/about')}}"
						id="navbarLanding"
						data-bs-toggle="dropdown"
						aria-haspopup="true"
						aria-expanded="false"
					>
						About
					</a>
				</li>

				<li class="nav-item dropdown">
					<a
						class="nav-link "
						href="{{url('/contact')}}"
						id="navbarPages"
						data-bs-toggle="dropdown"
						aria-haspopup="true"
						aria-expanded="false"
					>
						Contact
					</a>

						</div>
					</div>
				</li>
				</ul>
				</li>

	
			</ul>
			<ul class="navbar-nav navbar-right-wrap ms-auto d-none d-lg-block">
				

				<li class="dropdown ms-2 d-inline-block">
					<a
						class="rounded-circle"
						href="#"
						data-bs-toggle="dropdown"
						data-bs-display="static"
						aria-expanded="false"
					>
					@auth
						<div class="avatar avatar-md avatar-indicators avatar-online">
								<img
							src="{{asset('images/avatar/avatar-1.jpg')}}" alt="{{ auth()->user()->name }}"
							class="rounded-circle"
						/>
						</div>
						@endauth
					</a>
					<div class="dropdown-menu dropdown-menu-end">
						<div class="dropdown-item">
							<div class="d-flex">
                                @auth
								<div class="ms-3 lh-1">
									<h5 class="mb-1">{{auth()->user()->name}}</h5>
									<p class="mb-0 text-muted">{{auth()->user()->email}}</p>
								</div>
                                
							</div>
						</div>
						<div class="dropdown-divider"></div>
						<ul class="list-unstyled">
							<li>
								<a
									class="dropdown-item"
									href="{{url('/dashboard')}}"
								>
									<i class="fe fe-user me-2"></i>Dashboard
								</a>
							</li>
													<li>
							<a class="dropdown-item" href="{{ route('profile.show')}}">
								<i class="fe fe-user me-2"></i>Profile
							</a>
						</li>
                            @endauth
							@guest
							<li>
								<a
									class="dropdown-item"
									href="{{route('register')}}"
								>
									<i class="fe fe-star me-2"></i>register
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="{{route('login')}}">
									<i class="fe fe-settings me-2"></i>login
								</a>
							</li>
							@endguest
						</ul>
						<div class="dropdown-divider"></div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>