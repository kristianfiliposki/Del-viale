
import {createRouter,createWebHistory} from "vue-router";

/* importa un elemento */
import AppMain from './components/AppMain.vue';

const router=createRouter({
    history:createWebHistory(),
    routes:[
        {
            path:"/",
            name:"Main",
            component: AppMain,
        },
    ],
})
export {router};
