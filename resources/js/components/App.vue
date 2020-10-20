<template>
<div class="main-wrapper">
	<template v-if="this.$route.name !== 'login'">
		<template v-if="this.$route.name === '404'">
			<NotFound />
		</template>
		<template v-else>
		<Sidebar />
		<div class="page-wrapper">
					
			<Topbar />

			<div class="page-content">
				<router-view></router-view>
			</div>

			<!-- partial:partials/_footer.html -->
			<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
				<p class="text-muted text-center text-md-left">Copyright © 2020 XitsMedia LTD tomonidan tayyorlandi.</p>
				<p class="text-muted text-center text-md-left mb-0 d-none d-md-block"><i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
			</footer>
			<!-- partial -->
		
		</div>
		</template>
	</template>
	<template v-if="this.$route.name === 'login'">
		<Login />
	</template>
</div>
</template>
<script>
import Login from './auth/Login'
import NotFound from './error/NotFound'
import Sidebar from './sections/Sidebar'
import Topbar from './sections/Topbar'

export default {
  components: { Sidebar, Topbar, Login, NotFound }
};
</script>
