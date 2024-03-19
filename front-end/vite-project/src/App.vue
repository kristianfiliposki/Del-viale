<script >
import AppHeader from './components/AppHeader.vue'
import AppMain from './components/AppMain.vue'
import AppFooter from './components/AppFooter.vue'
import AppSections from './components/AppSections.vue'
import { store } from './store.js'
import axios from 'axios';

export default{
  components:{
    AppHeader,
    AppMain,
    AppSections,
    AppFooter,

  },
  data(){
    return{
      store,

    }
  },
  methods:{
       call(){
        axios.get("http://127.0.0.1:8000/api/dati").then(risultato=>{
          store.dati=risultato.data;
          console.log(store.dati);})
      },
  },
  mounted(){
    this.call();
  },
}  
</script>

<template>
  <body>
    <AppHeader/>
    <router-view></router-view>
    <AppFooter/>
  </body>

  
</template>

<style >
*{
  font-family: sans-serif;
}



</style>
