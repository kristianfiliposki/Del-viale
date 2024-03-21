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
body{
background: rgb(178,254,222);
background: linear-gradient(58deg, rgba(178,254,222,1) 0%, rgba(220,234,255,0.9878545168067226) 38%, rgba(240,247,255,1) 53%, rgba(255,247,234,1) 67%, rgba(255,238,209,1) 78%);
}
*{
  font-family: sans-serif;
}



</style>
