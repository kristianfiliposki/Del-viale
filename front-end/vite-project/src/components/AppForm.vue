<script></script>
<template>
    <div class=" bg-grey vh-100 w-100 form-wrapper row d-flex flex-justify-center flex-align-center c-white">
       
        
        
        <div class="col-6">
            <form action="">
                <div class="mb-3">
                  <label class="form-label">name</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Inserisci il tuo nome utente" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Inserisci la tua e-mail" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">password</label>
                  <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="########" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Confirm your password</label>
                  <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="########" required>
                </div>
    
                <button type="submit" class="p-8 border-radius"><input type="submit"></button>
            </form>
        </div>
        

     </div>
</template>
<style scoped>
  .container{
      margin:210px 0;
    };
    .form-wrapper{
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>