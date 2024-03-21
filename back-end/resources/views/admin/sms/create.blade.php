@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <h1 class="display-5 fw-bold">
           crea recensione
        </h1>
        <div>
            <form action="{{ route('admin.sms.store') }}" method="post">
                @csrf
                <div class="form-group ">
                  <label for="autore"><h5>autore del messaggio</h5></label>
                  <textarea class="form-control" id="autore" name="autore" required></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="testo"><h5>Il tuo pensiero è fondamentale</h5></label>
                    <textarea class="form-control" id="testo" name="testo" rows="3" required></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Facci conoscere i tuoi pensieri!</button>
            </form>
        </div>
        

        <form action={{ route('admin.dashboard') }}></form>
    </div>
</div>

@endsection