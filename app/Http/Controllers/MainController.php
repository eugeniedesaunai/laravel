<?php

namespace App\Http\Controllers;

use App\Models\Argument;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    public function index()
    {
        /* permet de récupérer tout les éléments de la table Argument en BDD */
        $arguments = Argument::all();
        return view('index', ['arguments' => $arguments]);
    }


    public function newsletter(Request $request)
    {
        // permet de vérifier la donnée
        $request->validate([
            'mail' => ['required', 'email', 'regex:/^[\w\.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,6})$/'],
        ]);

        // si c'est validé on récupère la valeur 
        $mail = $request->input('mail');

        // Enregistrement en base de données
        Subscriber::create(['mail' => $mail]);

        // Redirigez l'utilisateur vers la page d'accueil et affiche un message d'erreur
        return redirect()->route('index')->with('success', 'Inscription à la newsletter réussie !');
    }
}
