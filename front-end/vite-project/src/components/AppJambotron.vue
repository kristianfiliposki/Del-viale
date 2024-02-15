<script setup>

</script>
<template>
    <!-- main -->
    <div class="main">
        <div class="col-12 jambootron vh-100 d-flex justify-content-center align-items-center c-white protest-riot-regular">
            DEL VIALE
        </div>
    </div>
    <!--fine main -->

    <!-- carosello -->
            
    <!-- carosello -->
</template>
<style scoped>
    @import url('https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap');

    .jambootron{
        background-image: url("/public/img/bancone.jpeg");
        background-position: center;
        font-size: 8rem;
        font-weight: 900;
        font-family: "Protest Riot", sans-serif;
        font-style: normal;
    };

        .wrapper {
    height: 200px;
    width: 632px;
    position: relative;
    overflow: hidden;
    margin: 0 auto;
    }

    .button-wrapper {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: absolute;
    }

    .carousel {
    margin: 0;
    padding: 0;
    list-style: none;
    width: 100%;
    display: flex;
    position: absolute;
    left: 0;
    transition: all 1s ease;
    }

    .card {
    background: black;
    min-width: 200px;
    height: 200px;
    margin-right: 1rem;
    display: inline-block;
    }
</style>