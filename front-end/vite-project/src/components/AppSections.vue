<script>
  export default {
    data() {
      return {
        slide: 0,
        sliding: null
      }
    },
    methods: {
      onSlideStart(slide) {
        this.sliding = true
      },
      onSlideEnd(slide) {
        this.sliding = false
      }
    }
  }
</script>

<template>
    <div class="row partner container-fluid w-100 d-flex justify-content-center align-content-around">
        
        <div class="box h-30 col-7 bg-white f-24">
            <h2 class="c-black d-flex justify-content-center align-content-around m-32 ">
                <strong>
                    DIVENTA PARTE DELLA NOSTRA FAMIGLIA
                </strong>
            </h2>
            <div class="col-12">
                <button type="button" class="btn bg-white w-100"><strong class="d-flex justify-content-center align-content-around"><a href="" class="d-flex justify-content-center align-content-around f-24 w-50">ACCOUNT PLUS</a></strong></button>
            </div>
        </div>

        <div class="box h-30 col-7 bg-white ">
            <h2 class="c-black d-flex justify-content-center align-content-around m-32">
                <strong>
                    ORDINA DIRETTAMENTE A CASA TUA
                </strong>
            </h2>

            <div class="row food-platform">
                <div class="col-4">
                    <button type="button" class="btn bg-white w-100">
                        <strong>
                          <a href="https://www.justeat.it/restaurants-la-gelateria-del-viale-fiano-romano/menu" class="d-flex justify-content-center align-content-around f-24">
                            <div class="food-logo">
                                <img src="/public/img/just-eat.png" alt="foto">
                            </div>
                            <div>
                                JUST-EAT
                            </div>
                          </a>
                        </strong>
                    </button>
                </div>
    
                <div class="col-4">
                    <button type="button" class="btn bg-white w-100">
                        <strong>
                            <a href="https://deliveroo.it/it/menu/Capena/capena/la-gelateria-del-viale/?geohash=sr2zykq6nfcp" class="d-flex justify-content-center align-content-around f-24">
                                <div class="food-logo">
                                    <img src="/public/img/deliveroo.jpeg" alt="foto">
                                </div>
                                <div>
                                    DELIVEROO
                                </div>
                            </a>
                        </strong>
                    </button>
                </div>

                <div class="col-4">
                    <button type="button" class="btn bg-white w-100">
                        <strong>
                         <a href="https://glovoapp.com/it/it/fiano-romano/la-gelateria-del-viale-frc/" class="d-flex justify-content-center align-content-around f-24">
                            <div class="food-logo">
                                <img src="/public/img/glovo.png" alt="foto">
                            </div>
                            <div>
                                GLOVO
                            </div>
                         </a>
                        </strong>
                    </button>
                </div>
                
            </div>


        </div>

        <div class="box h-30 col-7 bg-white f-24">
            <h2 class="c-black d-flex justify-content-center align-content-around m-32 ">
                <strong class="f-32">
                    Numero Unico per ordini telefonici
                </strong>
            </h2>
            <div class="col-12">
                <div class="btn w-100 d-flex justify-content-center"><div class="d-flex justify-content-center align-content-around f-64 w-70 number">0765689337</div></div>
            </div>
        </div>

    </div>





    <!-- carosello -->


    <!-- carosello -->

</template>

<style scoped>
.number{
    border: 3px solid black;
}

a{
    flex-direction: column;
    align-items: center;}
.food-logo{
    margin-bottom: 10%;
    width: 70px;
    height: 70px;
    border: 2px solid grey;
    border-radius: 60%;
}
.food-logo img{
    object-fit: cover;
    width: 100%;
    height: 100%;
    border-radius: 60%;

}

.partner{
    flex-wrap: nowrap;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.partner .box {
    margin: 5%;
    border: 1px solid rgba(90, 90, 90,0.6);

    padding: 5%;
}
a{
    border: 1px solid rgba(90, 90, 90,0.6);
    padding: 5%;
    text-decoration: none;
    }

.food-platform{
    padding: 3%;
}
</style>