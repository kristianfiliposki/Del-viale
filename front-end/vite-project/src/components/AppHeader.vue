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
        
            <a href="/" class="nav-link">
              <img :src="logo" alt="foto" class="foto-logo">
            </a>

        </div>
      </div>
      <!-- Macro Aree -->
      <div class="links-container d-flex flex-justify-center col-4  ">
        <a href="/torte" class="nav-link c-black m-8">TORTE</a>
        <a href="/gelati" class="nav-link c-black m-8">GELATI</a>
        <a href="/coffe" class="nav-link c-black m-8">TAVOLA CALDA</a>
        <a href="/account-plus" class="nav-link c-black m-8">ACCOUNT PLUS</a>

      </div>
      <!-- Pulsanti -->
      <div class=" col-4">
        <!-- container -->
        <div class="btn d-flex justify-end">
          
          <!-- account plus -->
          <button type="button" class="btn bg-grey m-8">
            <!-- link  ACCOUNT PLUS -->
            <a href="http://127.0.0.1:8000/register" class="nav-link c-white">Entra nell'Account plus</a>
          <!-- link  ACCOUNT PLUS -->
          </button>
          <!-- fine account plus -->

          <!-- btn contattaci -->
          <button type="button" class="btn bg-grey m-8">
            <!-- link  ContactUs -->
              <a href="http://127.0.0.1:8000/admin/sms/create" class="nav-link c-white">
                <strong>
                  Contattaci
                </strong>            
              </a>
            <!-- link  ContactUs -->
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
  background-color: rgba(30, 30, 30, 0.90);
  z-index: 999;
  position: fixed;
  margin: 0;
}

.btn{
  width: 70%;
  display: flex;
  justify-content: center;
  align-items: center;
}
.btn button{
  min-height:4em;
}

a{
  text-decoration: none;
  color: white;
  font-size: 0.9rem;
}


.container-logo{
  margin-left: 10%;
  border-radius: 40%;
}
.foto-logo{
  width: 100%;
  height: 100%;
  border-radius: 55%;

}



@media screen and (max-width: 800px) {
  .links-container{
    flex-wrap: wrap;
  }
   a{
    font-size: 0.5rem;
  }
  .btn button{
  min-height:2em;
  padding: 0.2em;
};
}

</style>
