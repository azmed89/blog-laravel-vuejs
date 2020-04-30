import Home from './components/HomeComponent.vue'
import Blog from './components/BlogComponent.vue'
import Career from './components/CareerComponent.vue'
import ShowPost from "./components/ShowPostComponent";
import ShowOffer from "./components/ShowOfferComponent";

export const routes = [
    {path:'/accueil', component: Home},
    {path:'/blog', component: Blog},
    {path:'/posts/:id', component: ShowPost},
    {path:'/career', component: Career},
    {path:'/career/:id', component: ShowOffer},
];
