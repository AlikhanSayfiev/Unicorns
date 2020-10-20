import VueRouter from 'vue-router'

import Login from './components/auth/Login'
import Home from './components/Home'
import Menu from './components/menu/Menu'
import Title from './components/title/Title'
import Format from './components/format/Format'
import Opinion from './components/opinion/Opinion'
import Settings from './components/settings/Settings'
import Syndicate from './components/syndicat/Syndicate'
import Service from './components/service/Service'
import Blog from './components/blog/Blog'
import Follower from './components/follower/Follower'
import NotFound from './components/error/NotFound'

const router = new VueRouter({
    mode: 'history',
    routes: [
        { 
            path: '/404', 
            name: '404', 
            component: NotFound, 
            meta: {
                auth: undefined
            }
        }, { 
            path: '*', 
            redirect: {name: '404'}
        },
        {
            path: '/login',
            redirect: {name: 'login'}
        },
        {
            path: '/auth/login',
            name: 'login',
            component: Login,
            meta: {
                auth: false
            }
        },
        {
            path: '/dashboard',
            name: 'home',
            component: Home,
            meta: {
                auth: true
            }
        },
        {
            path: '/dashboard/menu',
            name: 'menu',
            component: Menu,
            meta: {
                auth: true
            }
        },
        {
            path: '/dashboard/titles',
            name: 'titles',
            component: Title,
            meta: {
                auth: true
            }
        },
        {
            path: '/dashboard/languages',
            name: 'languages',
            component: Title,
            meta: {
                auth: true
            }
        },
        {
            path: '/dashboard/formats',
            name: 'format',
            component: Format,
            meta: {
                auth: true
            }
        },
        {
            path: '/dashboard/opinions',
            name: 'opinion',
            component: Opinion,
            meta: {
                auth: true
            }
        },
        {
            path: '/dashboard/settings',
            name: 'settings',
            component: Settings,
            meta: {
                auth: true
            }
        },
        {
            path: '/dashboard/syndicate',
            name: 'syn',
            component: Syndicate,
            meta: {
                auth: true
            }
        },
        {
            path: '/dashboard/service',
            name: 'service',
            component: Service,
            meta: {
                auth: true
            }
        },
        {
            path: '/dashboard/blog',
            name: 'blog',
            component: Blog,
            meta: {
                auth: true
            }
        },
        {
            path: '/dashboard/partner',
            name: 'follower',
            component: Follower,
            meta: {
                auth: true
            }
        }
    ],
 });

export default router; 