<template>
   		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          Unicorns.<span>uz</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Menu</li>
          <li class="nav-item" :class="{ active: $route.name === 'home' }">
            <router-link to="/dashboard" class="nav-link">
              <i class="link-icon mdi mdi-home"></i>
              <span class="link-title">Bosh sahifa</span>
            </router-link>
          </li>
          <li class="nav-item" :class="{ active: $route.name === 'menu' }">
            <router-link to="/dashboard/menu" class="nav-link">
              <i class="link-icon mdi mdi-menu"></i>
              <span class="link-title">Menu</span>
            </router-link>
          </li>
          <li class="nav-item" :class="{ active: $route.name === 'titles' }">
            <router-link to="/dashboard/titles" class="nav-link">
              <i class="link-icon mdi mdi-note-text"></i>
              <span class="link-title">Sarlavhalar</span>
            </router-link>
          </li>
          <li class="nav-item" :class="{ active: $route.name === 'format' }">
            <router-link to="/dashboard/formats" class="nav-link">
              <i class="link-icon mdi mdi-clipboard-check"></i>
              <span class="link-title">Formatlash</span>
            </router-link>
          </li>
          <li class="nav-item" :class="{ active: $route.name === 'opinion' }">
            <router-link to="/dashboard/opinions" class="nav-link">
              <i class="link-icon mdi mdi-comment"></i>
              <span class="link-title">Fikrlar</span>
            </router-link>
          </li>
          <li class="nav-item" :class="{ active: $route.name === 'syn' }">
            <router-link to="/dashboard/syndicate" class="nav-link">
              <i class="link-icon mdi mdi mdi-clipboard-text"></i>
              <span class="link-title">Dastur maqsadi</span>
            </router-link>
          </li>
          <li class="nav-item" :class="{ active: $route.name === 'service' }">
            <router-link to="/dashboard/service" class="nav-link">
              <i class="link-icon mdi mdi-marker-check"></i>
              <span class="link-title">Dastur afzalliklari</span>
            </router-link>
          </li>
          <li class="nav-item" :class="{ active: $route.name === 'blog' }">
            <router-link to="/dashboard/blog" class="nav-link">
              <i class="link-icon mdi mdi-newspaper"></i>
              <span class="link-title">Yangiliklar</span>
            </router-link>
          </li>
          <li class="nav-item" :class="{ active: $route.name === 'follower' }">
            <router-link to="/dashboard/partner" class="nav-link">
              <i class="link-icon mdi mdi-tooltip-image"></i>
              <span class="link-title">Hamkorlar</span>
            </router-link>
          </li>
          <li class="nav-item" :class="{ active: $route.name === 'settings' }">
            <router-link to="/dashboard/settings" class="nav-link">
              <i class="link-icon mdi mdi-wrench"></i>
              <span class="link-title">Sozlamalar</span>
            </router-link>
          </li>
        </ul>
      </div>
    </nav>
</template>
<script>
export default {
}
</script>