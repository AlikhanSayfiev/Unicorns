<template>
    			<!-- partial:partials/_navbar.html -->
			<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i class="mdi mdi-menu"></i>
				</a>
				<div class="navbar-content">
					<ul class="navbar-nav">
						<div class="search-form">
							<marquee>
								<h5><b>Tizim test rejimda ishlamoqda ! Tizimda texnik ishlar davom etmoqda...</b></h5>
							</marquee>
						</div>
						<li class="nav-item dropdown nav-profile">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="https://via.placeholder.com/30x30" alt="profile">
							</a>
							<div class="dropdown-menu" aria-labelledby="profileDropdown">
								<div class="dropdown-header d-flex flex-column align-items-center">
									<div class="figure mb-3">
										<img src="https://via.placeholder.com/80x80" alt="">
									</div>
									<div class="info text-center">
										<p class="name font-weight-bold mb-0">{{ $store.getters.user.user.name }}</p>
										<p class="email text-muted mb-3">{{ $store.getters.user.user.email }}</p>
									</div>
								</div>
								<div class="dropdown-body">
									<ul class="profile-nav p-0 pt-3">
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i data-feather="user"></i>
												<span>Kabinet</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link" @click.prevent="$auth.logout()">
												<i data-feather="log-out"></i>
												<span>Chiqish</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<!-- partial -->
</template>
<script>
export default {
	//
}
</script>