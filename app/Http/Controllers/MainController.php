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
        /* première méthode, ajouter le fillable dans le model */
        /*         // permet de vérifier la donnée
        $request->validate([
            'mail' => 'required|email|max:255|unique:subscribers',
        ]);

        // si c'est validé on récupère la valeur 
        $mail = $request->input('mail');

        // Enregistrement en base de données
        Subscriber::create(['mail' => $mail]);  */

        /* deuxième méthode sans besoin d'utiliser le fillable */
        $validated = $request->validate([
            'mail' => 'required|email|max:255|unique:subscribers',
        ]);
        $subscriber = new Subscriber();
        $subscriber->mail = $validated['mail'];
        $subscriber->save();


        // Redirigez l'utilisateur vers la page d'accueil et affiche un message d'erreur
        return redirect()->route('index')->with('success', 'Inscription à la newsletter réussie !');
    }
}
