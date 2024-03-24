<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\User;
use App\models\Client;



class ClientController extends Controller
{
    /**
     * Elenco dei clienti
     */
    public function index()
    {
        $clients = Client::all();
        return view('admin.dashboard', compact('clients'));
    }

    /**
     * Creazione di un nuovo cliente
     */
    public function create()
    {
    }

    /**
     * Salvataggio di un nuovo cliente
     */
    public function store(StoreclientRequest $request)
    {
    }

    /**
     * Visualizzazione di un cliente
     */
       public function show(User $user)
       {
           // Recupera l'utente connesso
           $user = auth()->user();
           $user_id=$user->id;
           $cliente=Client::find($user_id) ;
   
   
           // Visualizza i dettagli del cliente
           return view('admin.clients.show', compact('cliente','user'));
       }


    /**
     * Modifica di un cliente
     */
    public function edit(Client $client)
    {
/*         return view('admin.client.edit', compact('client'));
 */    }

    /**
     * Aggiornamento di un cliente
     */
    public function update(UpdateclientRequest $request, Client $client)
    {
  /*       $client->update($request->validated());
        return redirect()->route('admin.clients.index'); */
    }

    /**
     * Eliminazione di un cliente
     */
    public function destroy(Client $client)
    {
/*         $client->delete();
        return redirect()->route('admin.clients.index'); */
    }
}
