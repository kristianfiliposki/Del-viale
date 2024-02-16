
import {createRouter,createWebHistory} from "vue-router";

/* importa un elemento */
import AppMain from './components/AppMain.vue';
import AppForm from './components/AppForm.vue';
import AppContact from './components/AppContact.vue';


const router=createRouter({
    history:createWebHistory(),
    routes:[
        {
            path:"/",
            name:"Main",
            component: AppMain,
        },
        {
            path:"/account-plus",
            name:"Form",
            component: AppForm,
        },        
        {
            path:"/contact",
            name:"contacts",
            component: AppContact,
        },        

    ],
})
export {router};
