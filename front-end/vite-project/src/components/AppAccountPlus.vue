<script></script>
<template>

<div class="box">

    <div class=" bg-darkgrey vh-100 w-100 form-wrapper row d-flex flex-justify-center flex-align-center c-white">
        <div class="col-6">
            <h1 class="pt-8 pl-32 pr-32">Non è mai stato cosi facile avere sconti,sorprese,regali e infiniti giochi....</h1>
            <h2 class="pt-8 pl-32 pr-32">Del Viale,è molto altro che il classico bar...</h2>
        </div>
        <div class="col-6 d-flex flex-justify-center flex-align-center mt-64">
            <div class="img-box border-radius ">
                <img src="/public/img/storia.jpeg" alt="foto" class="w-80 h-70 img" >
            </div>     
        </div>
     </div>

     <div class=" bg-white vh-100 w-100  row  c-black">
        <div class="col-6 d-flex flex-justify-center flex-align-center">
            <h1 class="w-90 p-16 descrption">Con l'account plus di Del viale, puoi avere una carta che raccoglie i punti in maniera intelligente.</h1>       
        </div>
        <div class="col-5  d-flex flex-justify-center flex-align-center">
            <div class="img-box bg-red border-radius ">
                <img src="/public/img/carta-punti.png" alt="" class="w-100 h-100 img" >
            </div>     
        </div>
        <div class="col-12">
            <div class="d-flex flex-justify-center flex-align-start pacifico-regular h-80">
                Ora anche virtuale!
            </div>
        </div>
     </div>

     <div class=" bg-grey vh-100 w-100 form-wrapper row ">
        <div class="col-6 d-flex flex-justify-center flex-align-around c-black mt-64">
            <h1 class="pacifico-regular d-flex flex-justify-center flex-align-center c-black">"Cosa ci faccio con i punti??"</h1>      
            <div class="box d-flex justify-end flex-align-around ">
                    <ul>
                        <li>
                            Ottieni dei punti da spendere in premi:
                        </li>
                        <li>
                            Ottieni punti ogni volta che accedi sul sito:
                        </li>
                        
                        <li>
                            "Ogni click conta: guadagna punti con ogni accesso al nostro sito!"
                        </li>
                        <li>
                            Invita i tuoi amici e risparmia con punti extra o sconti esclusivi!"
                        </li>
                        <li>
                            "Il compleanno è speciale, e così sono i nostri regali! Sconti imperdibili o punti bonus!"
                        </li>
                        <li>
                            "L'ora d'oro per risparmiare! Sconti extra dalle ore x alle ore x."
                        </li>
                        <li>
                            "Controllo totale in tempo reale: gestisci i pagamenti e monitora i tuoi punti live!"
                        </li>
                                                
                    </ul>

            </div>
        </div>
     </div>
</div>



</template>
<style scoped>
    .form-wrapper{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    img{
        border-radius: 25%;
    }
    .pacifico-regular {
        font-family: "Pacifico", cursive;
        font-weight: 400;
        font-style: normal;
        font-size: 4rem;
    }
    .descrption{
        font-family: sans-serif;
        font-weight: 800;
    }

    .box{
        font-weight: 500;
        font-size: 1.7rem;
    }
    li{
        margin: 0.5em 0.2rem;
    }
</style>