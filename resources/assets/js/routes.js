import Home from './components/HomeComponent.vue'
import Blog from './components/BlogComponent.vue'
import Career from './components/CareerComponent.vue'

export const routes = [
    {
        path:'/accueil',
        component: Home
    },
    {
        path:'/blog',
        component: Blog
    },
    {
        path:'/career',
        component: Career
    },


];
