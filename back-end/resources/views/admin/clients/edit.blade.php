@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <form action="{{ route('admin.update.secret', $client->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           
            <div class="mb-3 row">
                <div class="col">
                    <label for="role_id" class="form-label">inserisci il ruolo</label>
                    <input type="text" class="form-control @error('role_id') is-invalid @enderror" id="role_id" name="role_id"
                        value="{{ old('role_id', $client->role_id) }}">
                    @error('role_id')
                    <div class="invalid-feedback">errore</div>
                    
                    @enderror
                </div>
            </div>
       
            <button type="submit" class="btn btn-primary">Salva Modifiche</button>
        </form>
    </div>
</div>


<style>

</style>
@endsection

