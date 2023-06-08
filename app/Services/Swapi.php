<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class Swapi
{
    /*  url de l'api que l'on souhaite utiliser */
    protected string $url = 'https://swapi.dev/api/';

    /**
     * films
     *
     * @param  mixed $id
     * @return void
     */
    public function films(?int $id = null)
    {
        $this->url .= 'films/' . $id;
        return $this;
    }

    /**
     * get
     *Permet d'exécuter la requête
     * @return void
     */
    public function get()
    {
        $response = Http::get($this->url);
        return $response->json();
    }
}
