<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        // RETRIEVONS LA LISTE DES CLIENTS PAR ORDRE DECROISSANT
        $clients = Client::latest()->get();
        return view('index', compact('clients'));
    }
    // CREATION D'UN NOUVEAU CLIENT
    public function create()
    {
        return view('create');
    }

    // INSERTION D'UN NOUVEAU CLIENT
    public function store(Request $request)
    {
        // VALIDONS LES CHAMPS
        $input = $request->all();
        $client = Client::create($input);
        //INSERONS LE FICHIER A L'AIDE DE LA LIBRAIRIE MEDIA SPATIE
        if($request->hasFile('avatar') && $request->file('avatar')->isValid()){
            $client->addMediaFromRequest('avatar')->toMediaCollection('avatar');
        }
        return redirect()->route('client');
    }
}
