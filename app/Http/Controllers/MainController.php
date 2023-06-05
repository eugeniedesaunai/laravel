<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $arguments = [
            [
                'title' => 'Lorem Ipsum',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptatem magnam tempora vel.'
            ],
            [
                'title' => 'Lorem Ipsum',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptatem magnam tempora vel.'
            ],
            [
                'title' => 'Lorem Ipsum',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptatem magnam tempora vel.'
            ],
            [
                'title' => 'Lorem Ipsum',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptatem magnam tempora vel.'
            ],
            [
                'title' => 'Lorem Ipsum',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptatem magnam tempora vel.'
            ],
            [
                'title' => 'Lorem Ipsum',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptatem magnam tempora vel.'
            ],
            [
                'title' => 'Lorem Ipsum',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptatem magnam tempora vel.'
            ],
            [
                'title' => 'Lorem Ipsum',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptatem magnam tempora vel.'
            ],
        ];
        return view('index', ['arguments' => $arguments]);
    }


    public function newsletter(Request $request)
    {
        // Votre logique de traitement du formulaire ici
        // Par exemple, vous pouvez récupérer les données du formulaire
        $mail = $request->input('mail');

        dd($mail);
        // Effectuez les opérations nécessaires, comme l'envoi d'un email ou l'enregistrement en base de données

        // Redirigez l'utilisateur vers une autre page après le traitement du formulaire
        return redirect()->back()->with('success', 'Inscription à la newsletter réussie !');
    }
}
