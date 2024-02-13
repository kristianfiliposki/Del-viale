<script >
export default {
  data(){
    return {
      logo:"/public/img/logo.jpeg",
    }
  },
  methods:{},
  components:{},
  mounted(){},
};


</script>

<template>
  <!-- header -->
  <div class="header-container row  vh-20 d-flex flex-align-center  ">
    <!-- container logo-->
      <div class="col-4 ">
        <div class="container-logo col-2 h-50 d-flex flex-justify-center " >
          <img :src="logo" alt="foto" class="foto-logo">
        </div>
      </div>
      <!-- Macro Aree -->
      <div class=" d-flex flex-justify-center col-4  ">
        <a href="" class="c-white mr-8">TORTE</a>
        <a href="" class="c-white mr-8">GELATERIA</a>
        <a href="" class="c-white mr-8">COFFEEHOUSE</a>
      </div>
      <!-- Pulsanti -->
      <div class=" col-4">
        <!-- container -->
        <div class="btn d-flex justify-end">

          <!-- account plus -->
          <button type="button" class="btn bg-white m-8">
            <strong>
              Account Plus
            </strong>
          </button>
          <!-- fine account plus -->

          <!-- btn contattaci -->
          <button type="button" class="btn bg-white m-8">
            <strong>
              Contattaci
            </strong>
          </button>
          <!-- fine btn contattaci -->
        </div>
        <!-- fine container -->
      </div>
      <!-- fine Pulsanti -->
  </div>
  <!-- fine header -->
</template>

<style scoped>
.header-container{
  width: 100%;
  background-color: rgba(10, 10, 10, 0.9);
  z-index: 999;
  position: fixed;
  margin: 0;
}

a{text-decoration: none;}
.container-logo{
  margin-left: 10%;
}
.foto-logo{
  width: 100%;
  height: 100%;
}
</style>
